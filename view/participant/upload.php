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
                            <h3 class="card-title">Upload Excel File</h3>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title"><a href="../../assets/Excel_Upload_Format.xlsx" download="Excel_Upload_Format">➡ Download Excel Format ⬅</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="../../config/proses.php?act=upload" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <!-- <label for="customFile">Custom File</label> -->

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="upload_excel" name="upload_excel">
                                        <label class="custom-file-label" for="upload_excel">Choose file</label>
                                    </div>
                                    <br><br>
                                    <input type="submit" value="Submit" name="upload" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Upload Excel File ( NIK + Telp )</h3>
                        </div>
                        <div class="card-header">
                            <h3 class="card-title"><a href="../../assets/Excel_Upload_Format_NIK_TELP.xlsx" download="Excel_Upload_Format_NIK_TELP">➡ Download Excel Format ( NIK + Telp ) ⬅</a></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form action="../../config/proses.php?act=upload_nik" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <!-- <label for="customFile">Custom File</label> -->

                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="upload_excel_nik" name="upload_excel_nik">
                                        <label class="custom-file-label" for="upload_excel_nik">Choose file</label>
                                    </div>
                                    <br><br>
                                    <input type="submit" value="Submit" name="upload" class="btn btn-primary">
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