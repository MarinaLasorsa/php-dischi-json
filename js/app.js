const { createApp } = Vue

createApp({
    data() {
        return {
            dischi: [],
        }
    },
    methods: {
        fetchData() {
            axios.get('./server.php').then((res) => {
                console.log(res);
                this.dischi = res.data.results;
                console.log(this.dischi);
            })
        },
    },
    created() {
        this.fetchData()
    },

}).mount('#app')