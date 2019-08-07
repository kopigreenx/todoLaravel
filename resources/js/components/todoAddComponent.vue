<template>

    <div id="modal-form" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal"></button>
				    <h4 class="blue bigger">Add New Todo</h4>
				</div>

                <div class="modal-body">
                    <form class="form-horizontal" ref="form">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Full Length </label>
                            <div class="col-sm-9">
                                <textarea class="form-control" id="form-field-8" placeholder="Default Text" v-model="description"></textarea>
                            </div>
                        </div>
                        <div class="clearfix form-actions">
                            <div class="col-md-offset-3 col-md-9">
                                <button class="btn btn-info" type="button" v-on:click="submit">
                                    <i class="ace-icon fa fa-check bigger-110"></i>
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
    </div>
</template>

<script>
    export default {
        mounted() {

        },
        data:function() {
            return{
                description:'',
                modal:'hide'
            }
        },
        methods:{
            submit:function () {
                var description = this.description;
                axios.put('/todo',null,{
                    params:{
                        description
                    }
                }).then(function (response) {

                });
                window.location.reload();
            }

        }
    }
</script>
