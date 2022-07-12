new Vue({
    el: "#app",
    data:{
        test: "hello vue",
        albumList: [],
    },

    mounted() {
        axios
            .get("/db/db.php")
            .then(resp => {
                this.albumList = resp.data.response;
            })
    }
})