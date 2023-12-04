const {createApp} = Vue;

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            tasks: [],
            taskText: '',
        }
    }
})