<!-- jQuery -->
<script src="/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/template/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="/template/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/template/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/template/plugins/raphael/raphael.min.js"></script>
<script src="/template/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/template/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/template/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="/template/dist/js/pages/dashboard2.js"></script>
<!-- DataTables -->
<script src="/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- Select2 -->
<script src="/template/plugins/select2/js/select2.full.min.js"></script>

<script>
    $(document).ready(function() {
        $('ul li a').click(function() {
            $('li a').removeClass('active');
            $(this).addClass('active');
        });

        $('#table').DataTable();
        $('.select2').select2({
            theme: 'bootstrap4'
        });
    })
</script>