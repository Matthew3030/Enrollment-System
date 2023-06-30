<?php
session_start();
include "config.php";

if (isset($_POST['Submit'])) {
    $ID = $_POST['sid'];
    $COURSE = $_POST['Course'];
    $STRAND = $_POST['Strand'];
    $LNAME = $_POST['LName'];
    $FNAME = $_POST['FName'];
    $MNAME = $_POST['MName'];
    $PNUM = $_POST['PNumber'];
    $GENDER = $_POST['Sex'];
    $STATUS = $_POST['Status'];

    $sql = "UPDATE studinfo_tbl SET course_id='{$COURSE}', strand_id='{$STRAND}', phone_number='{$PNUM}', stud_status='{$STATUS}' WHERE ID = $ID;
    UPDATE studdetails_tbl SET last_name='{$LNAME}', first_name='{$FNAME}', middle_name='{$MNAME}', gender='{$GENDER}' WHERE stud_id = $ID;";
    echo $sql;
    if ($conn->multi_query($sql) == TRUE) {
        $_SESSION['success'] = "Record Successfully Edited";
    } else {
        $_SESSION['error'] = "No record edited";
    }
}
header("location:studtbl.php");

?>