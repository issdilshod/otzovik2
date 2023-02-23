<script>
    $(document).on('click', '.btn-danger', function(e){
        if (!window.confirm("{{__('global_delete_alert')}}")){
            e.preventDefault();
            return false;
        }
    });
</script>

<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>{{__('footer_right_reserved')}} &copy; <?=date('Y')?>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->