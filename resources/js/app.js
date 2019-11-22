new Vue({
    el: '#tasks',
    created: function(){
        this.getTasks();
    },
    data:{
        tasks: []
    },
    methods:{
        getTasks: function(){
            var urlTasks = 'task';
            axios.get(urlTasks).then(response =>{
                this.tasks = response.data
            })
        }

    }
})