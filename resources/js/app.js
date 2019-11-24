new Vue({
    el: '#tasks',
    created: function(){
        this.getTasks();
    },
    data:{
        tasks: [],
        taskName: '',
        taskDescription: '',
        taskDate: '',
        errors: []
    },
    methods:{
        getTasks: function(){
            var urlTasks = 'task';
            axios.get(urlTasks).then(response =>{
                this.tasks = response.data
            })
        },
        createTask: function(){
            var url = 'task';
            axios.post(url, {
                name: this.taskName,
                description: this.taskDescription,
                due_date: this.taskDate
            }).then(response =>{
                this.getTasks();
                this.errors = [];
            }).catch(error =>{
                this.errors = error.response.data
            });
        }

    }
})