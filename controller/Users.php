<!-- 

 PHP 8.0 

 * Developer    : Sulistiya Nugroho
 * Website      : https://rumusq.id/
 * E-mail       : sulisgor.a@gmail.com
 * Phone        : +62-821-1087-3602

-->

<?php
class Users
{
    function login($username, $password)
    {
        require_once "../config/koneksi.php";
        $db = new koneksi();
        $conn = $db->connect();

        $pass_md    = md5($password);
        $login_act  = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username' AND password='$pass_md'");
        $cek_rows   = mysqli_num_rows($login_act);
        while ($result = mysqli_fetch_array($login_act)) {
            $fullname = $result['fullname'];
        }

        if ($cek_rows > 0) {
            session_start();
            $_SESSION['username']   = $fullname;
            $_SESSION['status']     = "True";
            $status                 = $_SESSION['status'];
            header("Location: ../view/participant/index.php");
            return $_SESSION['status'];
            exit();
        }else{
            header("Location: ../index.php");
        }
    }
}
?>