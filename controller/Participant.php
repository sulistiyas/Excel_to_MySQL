<!-- 

 PHP 8.0 

 * Developer    : Sulistiya Nugroho
 * Website      : https://rumusq.id/
 * E-mail       : sulisgor.a@gmail.com
 * Phone        : +62-821-1087-3602

-->
<?php


use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Participant
{
    function view()
    {
        require_once "../../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();
        $sql = mysqli_query($conn, "SELECT * FROM participant ORDER BY nama_lengkap ASC LIMIT 10000");

        while ($result = mysqli_fetch_array($sql)) {
            $fetch[] = $result;
        }
        $js_array = json_encode($fetch);

        $sql->close();

        return $js_array;
    }

    function upload($upload_excel)
    {
        require '../vendor/autoload.php';
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();
        $fileName = $_FILES['upload_excel']['name'];
        $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowed_ext = ['xls', 'csv', 'xlsx'];
        if (in_array($file_ext, $allowed_ext)) {
            $inputFileNamePath = $_FILES['upload_excel']['tmp_name'];
            $spreadsheet = IOFactory::load($inputFileNamePath);
            $jumlah_baris = $spreadsheet->getActiveSheet()->getHighestRow();
            $row_start  =  7;
            $berhasil = 0;
            for ($i = 2; $i <= $jumlah_baris; $i++) {

                $nama_lengkap       = $spreadsheet->getActiveSheet()->getCell('B' . +$row_start)->getValue();
                $jenkel             = $spreadsheet->getActiveSheet()->getCell('D' . +$row_start)->getValue();
                $usia               = $spreadsheet->getActiveSheet()->getCell('E' . +$row_start)->getValue();
                $desa               = $spreadsheet->getActiveSheet()->getCell('F' . +$row_start)->getValue();
                $rt                 = $spreadsheet->getActiveSheet()->getCell('H' . +$row_start)->getValue();
                $rw                 = $spreadsheet->getActiveSheet()->getCell('I' . +$row_start)->getValue();
                $ket                = $spreadsheet->getActiveSheet()->getCell('K' . +$row_start)->getValue();
                $kec                = $spreadsheet->getActiveSheet()->getCell('K3')->getValue();

                if ($nama_lengkap != "" && $jenkel != "" && $usia != "") {
                    mysqli_query($conn, "INSERT into participant values('','','$nama_lengkap','','$jenkel','$usia','$desa','$kec','$rt','$rw','$ket','')");
                    $berhasil++;
                    $row_start++;
                    $msg = true;
                }
            }


            if (isset($msg)) {
                echo "Success";

                header('Location: ../view/participant/list.php');
                exit(0);
            } else {
                echo "Failed";
                header('Location: ../view/participant/list.php');

                exit(0);
            }
        } else {
            echo "Wrong Format";
            header('Location: ../view/participant/list.php');

            exit(0);
        }
    }
    function upload_nik($upload_excel_nik)
    {
        require '../vendor/autoload.php';
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();
        $fileName = $_FILES['upload_excel_nik']['name'];
        $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowed_ext = ['xls', 'csv', 'xlsx'];
        if (in_array($file_ext, $allowed_ext)) {
            $inputFileNamePath = $_FILES['upload_excel_nik']['tmp_name'];
            $spreadsheet = IOFactory::load($inputFileNamePath);
            $jumlah_baris = $spreadsheet->getActiveSheet()->getHighestRow();
            $row_start  =  7;
            $berhasil = 0;
            for ($i = 2; $i <= $jumlah_baris; $i++) {

                $no_ktp             = $spreadsheet->getActiveSheet()->getCell('B' . +$row_start)->getValue();
                $nama_lengkap       = $spreadsheet->getActiveSheet()->getCell('C' . +$row_start)->getValue();
                $no_telp            = $spreadsheet->getActiveSheet()->getCell('E' . +$row_start)->getValue();
                $jenkel             = $spreadsheet->getActiveSheet()->getCell('F' . +$row_start)->getValue();
                $usia               = $spreadsheet->getActiveSheet()->getCell('G' . +$row_start)->getValue();
                $desa               = $spreadsheet->getActiveSheet()->getCell('H' . +$row_start)->getValue();
                $rt                 = $spreadsheet->getActiveSheet()->getCell('J' . +$row_start)->getValue();
                $rw                 = $spreadsheet->getActiveSheet()->getCell('K' . +$row_start)->getValue();
                $ket                = $spreadsheet->getActiveSheet()->getCell('M' . +$row_start)->getValue();
                $kec                = $spreadsheet->getActiveSheet()->getCell('M3')->getValue();

                if ($nama_lengkap != "" && $jenkel != "" && $usia != "") {
                    mysqli_query($conn, "INSERT into participant values('','$no_ktp','$nama_lengkap','$no_telp','$jenkel','$usia','$desa','$kec','$rt','$rw','$ket','')");
                    $berhasil++;
                    $row_start++;
                    $msg = true;
                }
            }


            if (isset($msg)) {
                echo "Success";

                header('Location: ../view/participant/list.php');
                exit(0);
            } else {
                echo "Failed";
                header('Location: ../view/participant/list.php');

                exit(0);
            }
        } else {
            echo "Wrong Format";
            header('Location: ../view/participant/list.php');

            exit(0);
        }
    }

    function edit($id_participant)
    {
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();

        $get_data = mysqli_query($conn, "SELECT * FROM participant WHERE id_participant = $id_participant");

        while ($result = mysqli_fetch_array($get_data)) {
            $fetch_edit[] = $result;
        }
        $json = json_encode($fetch_edit);
        $get_data->close();

        return $fetch_edit;
        header("Location: ../view/participant/edit.php?" . $json);
    }

    function update($id_participant, $no_ktp, $nama_lengkap, $no_telp, $jenkel, $usia,  $nama_desa, $kecamatan, $no_rt, $no_rw)
    {
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();

        $update_data = mysqli_query($conn, "UPDATE participant SET no_ktp = '$no_ktp', nama_lengkap = '$nama_lengkap', no_telp = '$no_telp', jenkel = '$jenkel', usia = '$usia', nama_desa = '$nama_desa', kecamatan = '$kecamatan', rt = '$no_rt', rw = '$no_rw' WHERE id_participant = '$id_participant'");
        if ($update_data) {
            header('Location: ../view/participant/list.php');
        } else {
            echo "Fail";
        }
    }

    function insert($no_ktp, $nama_lengkap, $no_telp, $jenkel, $usia,  $nama_desa, $nama_kec, $no_rt, $no_rw)
    {
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();
        $check_duplicate = mysqli_query($conn, "SELECT * FROM participant WHERE no_ktp = '$no_ktp'");
        $flag = mysqli_num_rows($check_duplicate);

        if ($flag >= 1) {
            $msg = "Data sudah ada!!!";
            header('Location: ../view/participant/create.php?msg=Data Sudah Ada!!!');
        } else {
            $insert_data = mysqli_query($conn, "INSERT into participant values('','$no_ktp','$nama_lengkap','$no_telp','$jenkel','$usia','$nama_desa','$nama_kec','$no_rt','$no_rw','','')");
            if ($insert_data) {
                header('Location: ../view/participant/list.php');
            } else {
                echo "Fail";
            }
        }
    }

    function delete($id_participant)
    {
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();

        $delete_data = mysqli_query($conn, "DELETE FROM participant WHERE id_participant = '$id_participant'");
        if ($delete_data) {
            header('Location: ../view/participant/list.php');
        } else {
            echo "Fail";
        }
    }
}
?>