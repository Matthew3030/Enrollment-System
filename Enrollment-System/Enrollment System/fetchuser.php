<?php

include "config.php";

if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
}
$query = "SELECT * FROM studinfo_tbl t1
INNER JOIN studdetails_tbl d1
ON d1.stud_id = t1.ID
WHERE id=$ID";
$update = mysqli_query($conn, $query);
$rows = array();
while ($r = mysqli_fetch_assoc($update)) {
    $rows[] = $r;
}
ob_end_clean();
if (count($rows) === 1)
    echo json_encode($rows[0]);
?>