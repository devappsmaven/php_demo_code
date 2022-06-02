//objeto vuejs 
//var urlUsers = 'https://randomuser.me/api/?results=10';
var urlProducts = 'http://vividcustoms.test/api/productenable';
new Vue({
    el:'#page',
    created: function(){
        this.getProducts();
    },
    data:{
        products:[]
    },
    methods: {
        getProducts: function()
        {
            axios.get(urlProducts).then(response => {
                console.log(response.data.data);
                this.products = response.data.data;
            });
            
        }
    }
});