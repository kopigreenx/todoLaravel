<template>
    <div class="col-xs-6">
    <div class="widget-box widget-color-dark light-border ui-sortable-handle" id="widget-box-6">
        <div class="widget-header">
            <h5 class="widget-title smaller">Todo List</h5>
            <div class="widget-toolbar">
                <span class="badge badge-primary">
                    <a href="#modal-form" role="button" class="blue" data-toggle="modal"><i class="ace-icon glyphicon-plus white">Add Todo</i></a>
                    </span>
            </div>
        </div>
        <div class="widget-body">
        <table id="simple-table" class="table  table-bordered table-hover">
            <thead>
            <tr>
                <th class="center" width=5%>
                    <label class="pos-rel">
                        <input type="checkbox" class="ace">
                        <span class="lbl"></span>
                    </label>
                </th>
                <th width=75%>Description</th>
                <th width=20%>Action</th>
            </tr>
            </thead>
            <tbody >
                <tr v-for="todo in todos" :key="todo._id">
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace"  v-bind:_id="todo._id" :checked="todo.confirmed" :value="todo._id" @change="update(todo._id,$event.target.checked)">
                        <span class="lbl"></span>
                    </label>
                </td>
                <td>
                    <p>{{todo.description}}</p>
                </td>
                <td>
                    <div class="hidden-sm hidden-xs btn-group" v-if="!todo.confirmed">
                        <button class="btn btn-xs btn-danger" @click="hapus(todo._id)">
						    <i class="ace-icon fa fa-trash-o bigger-120"></i>
						</button>
                        <button class="btn btn-xs btn-info" @click="editTodo(todo)">
							<i class="ace-icon fa fa-pencil bigger-120"></i>
						</button>
                    </div>
                </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                todos:[],
                todosEdit:[]
            }
        },
        props(){
            todosEdit:Object
        },
        methods: {
            initData:function() {
                axios.get('/todo/list').then(response => this.todos = response.data );
            },
            update:function(id,status) {
                axios.post('/todo',null,{params:{id,status}})
                    .then(function (response) {
                        if(response.status==200){
                        }
                    });
                this.initData();
            },
            hapus:function (id) {
                axios.post('/todo/delete',null,{params:{id}})
                    .then(function (response) {
                        if(response.status==200){
                        }
                    });

                this.initData();
            },

            editTodo:function (todo) {
                const data = {
                    id_ : todo._id,
                    desc: todo.description
                };
                this.todosEdit = data;
            }
        },
        mounted() {
            axios.get('/todo/list').then(response => this.todos = response.data );
        }

    }
</script>
