<!-- 

 PHP 8.0 

 * Developer    : Sulistiya Nugroho
 * Website      : https://rumusq.id/
 * E-mail       : sulisgor.a@gmail.com
 * Phone        : +62-821-1087-3602

-->
<?php
if (isset($_GET['id_participant'])) {
    include "../includes/header.php";
    include "../includes/sidebar.php";
    require "../../config/koneksi.php";

    $id_participant = $_GET['id_participant'];
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
                                <h3 class="card-title">Users Data Edit</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <?php
                                $db = new koneksi();
                                $conn = $db->connect();
                                $get_data = mysqli_query($conn, "SELECT * FROM participant WHERE id_participant=$id_participant");
                                while ($result = mysqli_fetch_array($get_data)) {
                                    $ktp                = $result['no_ktp'];
                                    $nama               = $result['nama_lengkap'];
                                    $telp               = $result['no_telp'];
                                    $jenkel             = $result['jenkel'];
                                    $usia               = $result['usia'];
                                    $nama_desa          = $result['nama_desa'];
                                    $kecamatan          = $result['kecamatan'];
                                    $rt                 = $result['rt'];
                                    $rw                 = $result['rw'];
                                }
                                ?>
                                <form action="../../config/proses.php?act=update" method="post">
                                    <input type="hidden" name="id_participant" value="<?php echo $id_participant ?>">
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?php echo $nama ?>" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="no_ktp">No. KTP</label>
                                                <input type="number" name="no_ktp" id="no_ktp" class="form-control" value="<?php echo $ktp ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="no_telp">No. Telp</label>
                                                <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?php echo $telp ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="usia">Usia</label>
                                                <input type="text" name="usia" id="usia" class="form-control" value="<?php echo $usia ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="jenkel">Jenis Kelamin</label>
                                                <select name="jenkel" id="jenkel" class="form-control">
                                                    <?php
                                                    if ($jenkel == "L") { ?>
                                                        <option value="L" selected> Laki - Laki </option>
                                                        <option value="P"> Perempuan </option>
                                                    <?php } elseif ($jenkel == "P") { ?>
                                                        <option value="L"> Laki - Laki </option>
                                                        <option value="P" selected> Perempuan </option>
                                                    <?php }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="no_rt">RT</label>
                                                <input type="text" name="no_rt" id="no_rt" class="form-control" value="<?php echo $rt ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="no_rw">RW</label>
                                                <input type="text" name="no_rw" id="no_rw" class="form-control" value="<?php echo $rw ?>" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="nama_desa">Desa / Kelurahan</label>
                                                <input type="text" name="nama_desa" id="nama_desa" class="form-control" value="<?php echo $nama_desa ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="kecamatan">Kecamatan</label>
                                                <input type="text" name="nama_kec" id="nama_kec" class="form-control" value="<?php echo $kecamatan ?>" required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-2">
                                            <div class="form-group">
                                                <input type="submit" value="Update" name="update_data" class="btn btn-lg btn-success">
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
} else {
    echo "booooo";
}

?>