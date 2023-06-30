<?php
session_start();
include "config.php";
if (isset($_POST['Submit'])) {
    $COURSE = $_POST['Course'];
    $STRAND = $_POST['Strand'];
    $LNAME = $_POST['LName'];
    $FNAME = $_POST['FName'];
    $MNAME = $_POST['MName'];
    $PNUM = $_POST['PNumber'];
    $GENDER = $_POST['Sex'];
    $STATUS = $_POST['Status'];


    $sql = "INSERT INTO studinfo_tbl VALUES(0, $COURSE, $STRAND, '$PNUM', '$STATUS');
    INSERT INTO studdetails_tbl VALUES(LAST_INSERT_ID(), '$FNAME', '$LNAME', '$MNAME', '$GENDER');";
    if ($conn->multi_query($sql) == TRUE) {
        $_SESSION['success'] = "Record Successfully Inserted";
    } else {
        $_SESSION['error'] = "No record created";
    }
}
header("location:studtbl.php");
?>