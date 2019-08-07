<template>
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
                <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace">
                        <span class="lbl"></span>
                    </label>
                </th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody >
                <tr v-for="(todo,key) in todos">
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" v-bind:id="key" :checked="todo.confirmed" @change="update(todo._id,$event.target.checked)">
                        <span class="lbl"></span>
                    </label>
                </td>
                <td>
                    <a href="#">{{todo.description}}</a>
                </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>

</template>

<script>
    export default {
        data(){
            return{
                todos:[]
            }
        },
        methods: {
            update:function(id,status) {
                axios.post('/todo',null,{params:{id,status}}).then(response => console.log(response) );
            },
            modal_add:function (param) {

            }
        },
        mounted() {
            axios.get('/todo/list').then(response => this.todos = response.data );
        }

    }
</script>
