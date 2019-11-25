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
        fillTask:{ 'id': '', 'name': '', 'description': '', 'due_date': '' },
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
                this.taskName = '';
                this.taskDescription = '';
                this.taskDate = '';
                $('#createModal').modal('hide');
                this.getTasks();
                this.errors = [];
            }).catch(error =>{
                this.errors = error.response.data
            });
        },
        deleteTask: function(task){
            var url = 'task/'+ task.id;
            axios.delete(url).then(response =>{
                this.getTasks();
                toastr.success('Eliminado correctamente');
            })
        },
        editTask: function(task){
            this.fillTask.id = task.id;
            this.fillTask.name = task.name;
            this.fillTask.description = task.description;
            this.fillTask.due_date = task.due_date;
            $('#editModal').modal('show');
        },
        updateTask: function(id){
            var url = 'task/'+ id;
            axios.put(url, this.fillTask).then(response =>{
                this.getTasks();
                this.fillTask = { 'id': '', 'name': '', 'description': '', 'due_date': '' };
                $('#editModal').modal('hide');
                toastr.success('Actualizado correctamente');
            }).catch(error => {
                this.error = error.message;
            })
        },
        updateStatus: function(id){
            var url = 'task/status/'+ id;
            axios.put(url).then(response =>{
                this.getTasks();
                toastr.success('Tarea Finalizada');
            }).catch(error => {
                this.error = error.message;
            })

           
        }


    }
})