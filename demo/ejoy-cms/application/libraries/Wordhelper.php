<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: jumee
 * Date: 2016/10/27
 * Time: 14:50
 */
class Wordhelper
{
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->helper('file');
        $this->CI->load->helper('download');
        $this->CI->load->helper('date');
    }

    /**
     * 根据HTML代码获取word文档内容
     * 创建一个本质为mht的文档，该函数会分析文件内容并从远程下载页面中的图片资源
     * 该函数依赖于类WordMake
     * 该函数会分析img标签，提取src的属性值。但是，src的属性值必须被引号包围，否则不能提取
     *
     * @param string $content HTML内容
     * @param string $absolutePath 网页的绝对路径。如果HTML内容里的图片路径为相对路径，那么就需要填写这个参数，来让该函数自动填补成绝对路径。这个参数最后需要以/结束
     * @param bool $isEraseLink 是否去掉HTML内容中的链接
     */
    function WordMake($content, $absolutePath = "", $isEraseLink = true)
    {
        $this->CI->load->library('wordmaker');
        if ($isEraseLink) {
            $content = preg_replace('/<a\s*.*?\s*>(\s*.*?\s*)<\/a>/i', '$1', $content);   //去掉链接
        }
        $images = array();
        $files = array();
        $matches = array();
        //这个算法要求src后的属性值必须使用引号括起来
        if (preg_match_all('/<img[.\n]*?src\s*?=\s*?[\"\'](.*?)[\"\'](.*?)\/>/i', $content, $matches)) {
            $arrPath = $matches[1];
            for ($i = 0; $i < count($arrPath); $i++) {
                $path = $arrPath[$i];
                $imgPath = trim($path);
                if ($imgPath != "") {
                    $files[] = $imgPath;
                    if (substr($imgPath, 0, 7) == 'http://') {//绝对链接，不加前缀
                    } else {
                        $imgPath = $absolutePath . $imgPath;
                    }
                    $images[] = $imgPath;
                }
            }
        }
        $this->CI->wordmaker->AddContents("tmp.html", $this->CI->wordmaker->GetMimeType("tmp.html"), $content);
        for ($i = 0; $i < count($images); $i++) {
            $image = $images[$i];
            if (@fopen($image, 'r')) {
                $imgcontent = @file_get_contents($image);
                if ($content)
                    $this->CI->wordmaker->AddContents($files[$i], $this->CI->wordmaker->GetMimeType($image), $imgcontent);
            } else {
                echo "file:" . $image . " not exist!<br />";
            }
        }
        return $this->CI->wordmaker->GetFile();
    }

    function getWord($cname, $data, $title, $date, $pre = '')
    {
        $res = '文件下载成功';
        $header = file_get_contents('files/templete/header.txt');
        $footer = file_get_contents('files/templete/footer.txt');
        $thead = file_get_contents('files/templete/' . $pre . '_thead.txt');
        $tableContent = $this->setTable($data, $pre);
        $header = iconv("UCS-2LE", "utf-8", $header);
        $thead = iconv("UCS-2LE", "utf-8", $thead);
        $footer = iconv("UCS-2LE", "utf-8", $footer);
        $header = str_replace('{name}', $cname, $header);
        $thead = str_replace('{title}', $title, $thead);
        $thead = str_replace('{name}', $cname, $thead);
        $footer = str_replace('{date}', $date, $footer);
        $header = iconv("utf-8", "UCS-2LE", $header);
        $thead = iconv("utf-8", "UCS-2LE", $thead);
        $footer = iconv("utf-8", "UCS-2LE", $footer);
        $content = $header . $thead . $tableContent . $footer;
//        $fileContent = $this->WordMake($content);
        $name = iconv("utf-8", "GBK", $cname);//转换好生成的word文件名编码

        force_download($name . ".doc", $content, true);
        return $res;
    }

    function setTable($data, $pre)
    {
        $trow = file_get_contents('files/templete/' . $pre . '_row.txt');
        $table = '';
        $i = 1;
        if ($data) {
            foreach ($data as $row) {
                $cell = iconv("UCS-2LE", "utf-8", $trow);
                $cell = str_replace('{rownum}', $i, $cell);
                if ($row['name'] != '总金额') {
                    $cell = str_replace('{datetime}', $row['dttime'] ? nice_date($row['dttime'], 'n月j日') : $row['name'], $cell);
                    $cell = str_replace('{bedsheet}', $row['bedsheet'], $cell);
                    $cell = str_replace('{bedsack}', $row['bedsack'], $cell);
                    $cell = str_replace('{pillowcase}', $row['pillowcase'], $cell);
                    $cell = str_replace('{towels}', $row['towels'], $cell);
                    $cell = str_replace('{bathtowel}', $row['bathtowel'], $cell);
                    $cell = str_replace('{floortowel}', $row['floortowel'], $cell);
                    $cell = str_replace('{cmoney}', $row['memo'], $cell);
                } else {
                    $cell = str_replace('{datetime}', $row['name'], $cell);
                    $cell = str_replace('{bedsheet}', $row['memo'], $cell);
                    $cell = str_replace('{bedsack}', '', $cell);
                    $cell = str_replace('{pillowcase}', '', $cell);
                    $cell = str_replace('{towels}', '', $cell);
                    $cell = str_replace('{bathtowel}', '', $cell);
                    $cell = str_replace('{floortowel}', '', $cell);
                    $cell = str_replace('{cmoney}', '', $cell);
                }
                $cell = iconv("utf-8", "UCS-2LE", $cell);
                $table .= $cell;

                $i++;
            }
        }

        return $table;
    }

}