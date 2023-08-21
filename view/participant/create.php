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
                    <h1 class="m-0">Create New Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../participant/index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="list.php">List Data</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                            <h2 style="color: red;font-weight: 900;">
                                <?php if (isset($_GET['msg'])) {
                                    echo $_GET['msg'];
                                } ?>
                            </h2>
                        </div>
                        <div class="card-header">

                            <h3 class="card-title">Users Data</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="../../config/proses.php?act=insert" method="post">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="no_ktp">No. KTP</label>
                                            <input type="number" name="no_ktp" id="no_ktp" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="no_telp">No. Telp</label>
                                            <input type="number" name="no_telp" id="no_telp" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="usia">Usia</label>
                                            <input type="text" name="usia" id="usia" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="jenkel">Jenis Kelamin</label>
                                            <select name="jenkel" id="jenkel" class="form-control">
                                                <option value="0" disabled> - Pilih Jenis Kelamin - </option>
                                                <option value="L"> Laki - Laki</option>
                                                <option value="P"> Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="no_rt">RT</label>
                                            <input type="text" name="no_rt" id="no_rt" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="no_rw">RW</label>
                                            <input type="text" name="no_rw" id="no_rw" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama_desa">Desa / Kelurahan</label>
                                            <input type="text" name="nama_desa" id="nama_desa" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="nama_kec">Kecamatan</label>
                                            <input type="text" name="nama_kec" id="nama_kec" class="form-control" required>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-2">
                                        <div class="form-group">
                                            <input type="submit" value="insert" name="insert_data" class="btn btn-lg btn-success">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="form-group">
                                            <a href="list.php" class="btn btn-lg btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
<?php
include "../includes/footer.php";
?>