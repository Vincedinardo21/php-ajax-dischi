new Vue({
    el : "#app",
    data : {
        arrayDischi : [],
    },
    created(){
        axios.get("http://localhost:8888/php-ajax-dischi/api.php")
        .then((result) => {
            this.arrayDischi = result.data;
        });
    },
});