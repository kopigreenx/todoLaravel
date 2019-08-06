<template>
    <div class="widget-box widget-color-dark light-border ui-sortable-handle" id="widget-box-6">
        <div class="widget-header">
            <h5 class="widget-title smaller">With Badge</h5>
            <div class="widget-toolbar">
                <span class="badge badge-danger">Alert</span>
            </div>
        </div>
        <div class="widget-body">
            <div class="widget-main padding-6">
                <div class="alert alert-info"> Hello World! </div>
            </div>
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
