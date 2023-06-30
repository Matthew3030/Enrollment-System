<?php
include "config.php";
if (isset($_GET['ID'])) {
    $ID = $_GET['ID'];
} else {
    echo "<script type='text/javascript'> window.location.href='studtbl.php?msg=Invalid ID'; </script>";
    return;
}
$query = "DELETE FROM studdetails_tbl WHERE stud_id = $ID; DELETE FROM studinfo_tbl WHERE ID=$ID;";
$count = "SELECT COUNT(*) AS count FROM studinfo_tbl WHERE ID=" . $ID;
$getcountquery = $conn->query($count);
$row = $getcountquery->fetch_assoc();
if ($row['count'] == 0) {
    echo "<script type='text/javascript'> window.location.href='studtbl.php?msg=Invalid ID'; </script>";
    return;
}
$delete = mysqli_multi_query($conn, $query);
header("location:studtbl.php");
?>