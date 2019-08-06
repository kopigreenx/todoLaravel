<template>
    <div class="widget-box widget-color-dark light-border ui-sortable-handle" id="widget-box-6">
        <div class="widget-header">
            <h5 class="widget-title smaller">Todo List</h5>
            <div class="widget-toolbar">
                <span class="badge badge-danger">Alert</span>
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
													<th>Domain</th>
													<th>Price</th>
													<th class="hidden-480">Clicks</th>

													<th>
														<i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
														Update
													</th>
													<th class="hidden-480">Status</th>

													<th></th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td class="center">
														<label class="pos-rel">
															<input type="checkbox" class="ace">
															<span class="lbl"></span>
														</label>
													</td>


													<td>
														<a href="#">ace.com</a>
													</td>
													<td>$45</td>
													<td class="hidden-480">3,330</td>
													<td>Feb 12</td>

													<td class="hidden-480">
														<span class="label label-sm label-warning">Expiring</span>
													</td>

												</tr>
											</tbody>
										</table>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
