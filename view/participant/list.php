<!-- 

 PHP 8.0 

 * Developer    : Sulistiya Nugroho
 * Website      : https://rumusq.id/
 * E-mail       : sulisgor.a@gmail.com
 * Phone        : +62-821-1087-3602

-->
<?php
include "../includes/header.php";
include "../includes/sidebar.php";
require "../../config/koneksi.php";
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../participant/index.php">Home</a></li>
                        <li class="breadcrumb-item active">Data</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Users Data</h3>
                        </div>
                        <div class="card-header">
                            <a href="create.php" class="btn btn-primary"> <i class="fas fa-plus"> Add More Data</i> </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No KTP</th>
                                        <th>Nama</th>
                                        <th>No. Telp</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Usia</th>
                                        <th>RT</th>
                                        <th>RW</th>
                                        <th>Desa / Kelurahan</th>
                                        <th>Kec.</th>
                                        <th>Ket.</th>
                                        <th><i class="fas fa-cog"></i></th>
                                    </tr>
                                </thead>
                                <!--<tfoot>-->
                                <!--    <tr>-->
                                <!--        <th>No.</th>-->
                                <!--        <th>Nama</th>-->
                                <!--        <th>Jenis Kelamin</th>-->
                                <!--        <th>Usia</th>-->
                                <!--        <th>Desa / Kelurahan</th>-->
                                <!--        <th>RT</th>-->
                                <!--        <th>RW</th>-->
                                <!--        <th>Ket.</th>-->
                                <!--        <th><i class="fas fa-cog"></i></th> -->
                                <!--    </tr>-->
                                <!--</tfoot>-->
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-7 connectedSortable">

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">


                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include "../includes/footer.php"; ?>