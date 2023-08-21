<footer class="main-footer">
    <!--<strong>Copyright &copy; 2023 <a href="https://www.linkedin.com/in/sulistiya-nugroho-9180101b2/">Sulistiya Nugroho</a>.</strong>-->
    <!--All rights reserved.-->
    <!--<div class="float-right d-none d-sm-inline-block">-->
    <!--    <b>Version</b> 1.0.0-->
    <!--</div>-->
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


</body>
<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/plugins/moment/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="../../assets/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE App -->
<script src="../../assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/dist/js/pages/dashboard.js"></script>
<!-- bs-custom-file-input -->
<script src="../../assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../assets/plugins/jszip/jszip.min.js"></script>
<script src="../../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<!--<script src="https://code.jquery.com/jquery-3.3.1.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->
<!--    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
<!--    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>-->
<!--    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>-->
<!--    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>   -->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>-->
<!--    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>-->
<!--    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>-->
<script type="text/javascript">
    // Fetch Data
    $(document).ready(function() {
        $('#example1').DataTable({
            'processing': true,
            'serverSide': true,
            'serverMethod': 'post',
            'responsive': true,
            'lengthChange': false,
            'autoWidth': false,
            'buttons': ["copy", "csv", "excel", "pdf", "print", "colvis"],
            'ajax': {
                'url': '../includes/ajaxRequest.php'
            },
            'columns': [{
                    data: 'id_participant'
                },
                {
                    data: 'no_ktp'
                },
                {
                    data: 'nama_lengkap'
                },
                {
                    data: 'no_telp'
                },
                {
                    data: 'jenkel'
                },
                {
                    data: 'usia'
                },
                {
                    data: 'rt'
                },
                {
                    data: 'rw'
                },
                {
                    data: 'nama_desa'
                },
                {
                    data: 'kecamatan'
                },
                {
                    data: 'notes'
                },
                {
                    data: "action"
                },
                //  { data: 'id_participant' },
            ]
        });
    });
    // Edit record
    $("#example1").on("click", ".updateUser", function() {
        var id = $(this).data("id");

        $("#txt_userid").val(id);

        // AJAX request
        $.ajax({
            url: "ajaxfile.php",
            type: "post",
            data: {
                request: 2,
                id: id
            },
            dataType: "json",
            success: function(response) {
                if (response.status == 1) {
                    $("#name").val(response.data.name);
                    $("#email").val(response.data.email);
                    $("#gender").val(response.data.gender);
                    $("#city").val(response.data.city);
                } else {
                    alert("Invalid ID.");
                }
            },
        });
    });

    // Update user
    $("#btn_save").click(function() {
        var id = $("#txt_userid").val();

        var name = $("#name").val().trim();
        var email = $("#email").val().trim();
        var gender = $("#gender").val().trim();
        var city = $("#city").val().trim();

        if (name != "" && email != "" && city != "") {
            // AJAX request
            $.ajax({
                url: "ajaxfile.php",
                type: "post",
                data: {
                    request: 3,
                    id: id,
                    name: name,
                    email: email,
                    gender: gender,
                    city: city,
                },
                dataType: "json",
                success: function(response) {
                    if (response.status == 1) {
                        alert(response.message);

                        // Empty the fields
                        $("#name", "#email", "#city").val("");
                        $("#gender").val("male");
                        $("#txt_userid").val(0);

                        // Reload DataTable
                        userDataTable.ajax.reload();

                        // Close modal
                        $("#updateModal").modal("toggle");
                    } else {
                        alert(response.message);
                    }
                },
            });
        } else {
            alert("Please fill all fields.");
        }
    });

    // Delete record
    $("#example1").on("click", ".deleteUser", function() {
        var id = $(this).data("id");

        var deleteConfirm = confirm("Are you sure?");
        if (deleteConfirm == true) {
            // AJAX request
            $.ajax({
                url: "ajaxfile.php",
                type: "post",
                data: {
                    request: 4,
                    id: id
                },
                success: function(response) {
                    if (response == 1) {
                        alert("Record deleted.");

                        // Reload DataTable
                        userDataTable.ajax.reload();
                    } else {
                        alert("Invalid ID.");
                    }
                },
            });
        }
    });
</script>
<script>
    $(function() {
        bsCustomFileInput.init();
    });
</script>

</html>