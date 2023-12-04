const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            tasks: [],
            taskText: '',
        }
    },
    methods: {
        read() {
            axios.get(this.apiUrl).then((res)=>{
                this.tasks = res.data();
            })
        }
    },
    mounted(){
        this.read();
    }
}).mount("#app");