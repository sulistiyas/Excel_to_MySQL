<?php

// $host = "localhost"; /* Host name */
// $user = "excel_upload"; /* User */
// $password = "-weatherstrom"; /* Password */
// $dbname = "excel_upload"; /* Database name */
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "excel_upload"; /* Database name */

$conn = mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
