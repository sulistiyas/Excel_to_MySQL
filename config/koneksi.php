<!-- 

 PHP 8.0 

 * Developer    : Sulistiya Nugroho
 * Website      : https://rumusq.id/
 * E-mail       : sulisgor.a@gmail.com
 * Phone        : +62-821-1087-3602

-->
<?php

class koneksi
{
    // deklarasi parameter koneksi database
    private $dbHost     = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "";
    private $dbName     = "excel_upload";
    // private $dbHost     = "localhost";
    // private $dbUser     = "excel_upload";
    // private $dbPassword = "-weatherstrom";
    // private $dbName     = "excel_upload";

    public function connect()
    {
        // koneksi ke server MySQL
        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);

        // cek koneksi tersambung atau tidak
        if ($mysqli->connect_error) {
            echo "Gagal terkoneksi ke database : (" . $mysqli->connect_error . ")";
        }

        // nilai kembalian bila koneksi berhasil
        return $mysqli;
    }
}
