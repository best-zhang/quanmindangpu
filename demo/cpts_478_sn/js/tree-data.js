var config = {
        container: "#custom-colored",

        nodeAlign: "BOTTOM",
        
        connectors: {
            type: 'step'
        },
        node: {
            HTMLclass: 'nodeExample1'
        }
    },
    ceo = {
        text: {
            name: "Mark Hill",
            title: "officer",
            contact: "Tel:134",
        }
    },

    cto = {
        parent: ceo,
        text:{
            name: "Joe Linux",
            title: "Chief Technology",
        }
    },
    cbo = {
        parent: ceo,
        HTMLclass: 'blue',
        text:{
            name: "Linda May",
            title: "Chief ",
        }
    },
    cdo = {
        parent: ceo,
        HTMLclass: 'gray',
        text:{
            name: "John Green",
            title: "Chief accounting",
            contact: "Tel: 01 213",
        }
    },
    cio = {
        parent: cto,
        HTMLclass: 'light-gray',
        text:{
            name: "Ron Blomquist",
            title: "Chief"
        }
    },
    ciso = {
        parent: cto,
        text:{
            name: "Michael Rubin",
            title: "Innovation",
        }
    },
    cio2 = {
        parent: cdo,
        text:{
            name: "Erica Reel",
            title: "Chief Customer"
        }
    },
    ciso2 = {
        parent: cbo,
        text:{
            name: "Alice Lopez",
            title: "Communications"
        }
    },
    ciso3 = {
        parent: cbo,
        text:{
            name: "Mary Johnson",
            title: "Brand"
        }
    },
    ciso4 = {
        parent: cbo,
        text:{
            name: "Kirk Douglas",
            title: "Development"
        }
    },	
	my1 = {
        parent: ciso2,
        text:{
            name: "1111",
            title: "1"
        }
    },	
	my2 = {
        parent: ciso2,
        text:{
            name: "2",
            title: "222"
        }
    },
	my3 = {
        parent: ciso3,
        text:{
            name: "3",
            title: "333"
        }
    },

    chart_config = [
        config,
        ceo,cto,cbo,
        cdo,cio,ciso,
        cio2,ciso2,ciso3,ciso4,my1,my2,my3
    ];

    // Antoher approach, same result
    // JSON approach
