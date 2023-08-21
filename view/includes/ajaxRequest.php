<?php
include 'config.php';
// $db = new koneksi();
// $conn = $db->connect();
## Read value
$draw = $_POST['draw'];
$row = $_POST['start'];
$rowperpage = $_POST['length']; // Rows display per page
$columnIndex = $_POST['order'][0]['column']; // Column index
$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
$searchValue = mysqli_real_escape_string($conn, $_POST['search']['value']); // Search value

## Search 
$searchQuery = " ";
if ($searchValue != '') {
    $searchQuery = " and (nama_lengkap like '%" . $searchValue . "%' or 
        no_ktp like '%" . $searchValue . "%') ";
}

## Total number of records without filtering
$sel = mysqli_query($conn, "select count(*) as allcount from participant");
$records = mysqli_fetch_assoc($sel);
$totalRecords = $records['allcount'];

## Total number of records with filtering
$sel = mysqli_query($conn, "select count(*) as allcount from participant WHERE 1 " . $searchQuery);
$records = mysqli_fetch_assoc($sel);
$totalRecordwithFilter = $records['allcount'];

## Fetch records
$empQuery = "select * from participant WHERE 1 " . $searchQuery . " order by " . $columnName . " " . $columnSortOrder . " limit " . $row . "," . $rowperpage;
$empRecords = mysqli_query($conn, $empQuery);
$data = array();

$no = 1;
while ($row = mysqli_fetch_assoc($empRecords)) {
    // Update Button
    $editButton = "<div class='btn-group'>
                        <button type='button' class='btn btn-default dropdown-toggle dropdown-icon' data-toggle='dropdown'>
                            <i class='fas fa-bars'></i>
                        </button>
                        <div class='dropdown-menu'>
                            <a href='edit.php?id_participant=" . $row['id_participant'] . "' class='dropdown-item'><i class='fas fa-pen'> Edit</i></a>
                            <form action='../../config/proses.php?act=delete' method='post'>
                                <input type='hidden' name='id_participants' value='" . $row['id_participant'] . "'>
                                <button type='submit' class='dropdown-item'><i class='fas fa-trash'> Delete</i></button>
                            </form>
                        </div>
                    </div>";
    $updateButton = "<button class='btn btn-sm btn-warning updateUser' data-id='" . $row['id_participant'] . "' data-toggle='modal' data-target='#updateModal' ><i class='fas fa-pen'></i> Edit</button>";

    // Delete Button
    $deleteButton = "<button class='btn btn-sm btn-danger deleteUser' data-id='" . $row['id_participant'] . "'>Delete</button>";

    $action = $editButton;
    $number = $no++;
    $data[] = array(
        "id_participant" =>  $number,
        "no_ktp" => $row['no_ktp'],
        "nama_lengkap" => $row['nama_lengkap'],
        "no_telp" => $row['no_telp'],
        "jenkel" => $row['jenkel'],
        "usia" => $row['usia'],
        "rt" => $row['rt'],
        "rw" => $row['rw'],
        "nama_desa" => $row['nama_desa'],
        "kecamatan" => $row['kecamatan'],
        "notes" => $row['notes'],
        "action" => $action
    );
}

## Response
$response = array(
    "draw" => intval($draw),
    "iTotalRecords" => $totalRecords,
    "iTotalDisplayRecords" => $totalRecordwithFilter,
    "aaData" => $data
);

echo json_encode($response);
