<!-- 

 PHP 8.0 

 * Developer    : Sulistiya Nugroho
 * Website      : https://rumusq.id/
 * E-mail       : sulisgor.a@gmail.com
 * Phone        : +62-821-1087-3602

-->
<?php
include 'koneksi.php';
include 'excel_reader2.php';
include '../controller/Participant.php';
include '../controller/Users.php';
$db = new koneksi();
$participant = new Participant();
$users = new Users();

$action = $_GET['act'];
if ($action == "upload") {
    $participant->upload(
        $_POST['upload']
    );
} elseif ($action == "upload_nik") {
    $participant->upload_nik(
        $_POST['upload_nik']
    );
} elseif ($action == "insert") {
    $participant->insert(
        $_POST['no_ktp'],
        $_POST['nama_lengkap'],
        $_POST['no_telp'],
        $_POST['jenkel'],
        $_POST['usia'],
        $_POST['nama_desa'],
        $_POST['nama_kec'],
        $_POST['no_rt'],
        $_POST['no_rw'],
    );
} elseif ($action == "update") {
    $participant->update(
        $_POST['id_participant'],
        $_POST['no_ktp'],
        $_POST['nama_lengkap'],
        $_POST['no_telp'],
        $_POST['jenkel'],
        $_POST['usia'],
        $_POST['nama_desa'],
        $_POST['nama_kec'],
        $_POST['no_rt'],
        $_POST['no_rw'],

    );
} elseif ($action == "edit") {
    $participant->edit(
        $_POST['id_participant']
    );
} elseif ($action == "delete") {
    $participant->delete(
        $_POST['id_participants']
    );
} elseif ($action == "login") {
    $users->login(
        $_POST['username'],
        $_POST['password']
    );
} elseif ($action == "logout") {
    session_start();
    session_destroy();
    header("Location: ../index.php");
}
?>