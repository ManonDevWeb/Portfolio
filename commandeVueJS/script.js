//Cette variable simule une API, un json ou un appel a une base de données
var products = [
    {
        "photo": "img/fdt.jpg",
        "name": "Fond de teint",
        "price": 15.99,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/ac.jpg",
        "name": "Anti-cerne",
        "price": 10.59,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/ral.jpg",
        "name": "Rouge à lèvre",
        "price": 9.95,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/mas.jpg",
        "name": "Mascara à sourcil",
        "price": 10.95,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/p.jpg",
        "name": "Poudre matifiante",
        "price": 8.95,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/primer.jpg",
        "name": "Base de teint",
        "price": 16.95,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/cal.jpg",
        "name": "Crayon à lèvres",
        "price": 4.95,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/cay.jpg",
        "name": "Crayon à yeux",
        "price": 6.59,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/palette.jpg",
        "name": "Palettes pour les yeux",
        "price": 39.99,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/blush.jpg",
        "name": "blush",
        "price": 7.99,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/highlighter.jpg",
        "name": "Highlighter",
        "price": 15.99,
        "active": false,
        "quantity": 1
    },
    {
        "photo": "img/palette2.jpg",
        "name": "Palette yeux",
        "price": 39.99,
        "active": false,
        "quantity": 1
    }
    
];

//RENDU DECLARATIF
    const SelfServiceMachine = {
        data() {
            return {
                products: window.products 
            }
        },
        methods: {
            total: function() {
                var total = 0;
                
                this.products.forEach(function(item){
                    if (item.active){
                        total += item.price * item.quantity;
                    }
                }); 

                return total.toFixed(2);
            }
        }
    };

    Vue.createApp(SelfServiceMachine).mount('#app');
