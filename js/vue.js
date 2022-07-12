new Vue({
    el: "#app",
    data:{
        test: "hello vue",
        albumList: [],
    },

    mounted() {
        axios
            .get("api/api.php")
            .then(resp => {
                this.albumList = resp.data.response;
            })
    }
})