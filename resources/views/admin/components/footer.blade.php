<script>
    $(document).on('click', '.btn-danger', function(e){
        if (!window.confirm("{{__('global_delete_alert')}}")){
            e.preventDefault();
            return false;
        }
    });
</script>

<!-- SweetAlert2 -->
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
<!-- SweetAlert2 -->
<script src="{{ asset('assets/admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script>
    var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
</script>

@if (session('status'))
    <script>
        $(document).ready(function (){
            var status = "{{session('status')}}";

            Toast.fire({
                icon: (parseInt(status)==200?'success':'error'),
                title: (parseInt(status)==200?"{{__('global_success')}}":"{{__('global_error')}}")
            })
        });
    </script>
@endif

<!-- /.content-wrapper -->
<footer class="main-footer">
<strong>{{__('footer_right_reserved')}} &copy; <?=date('Y')?>.</strong>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
<!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->