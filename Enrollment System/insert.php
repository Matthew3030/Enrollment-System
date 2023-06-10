<?php
    include "config.php";

    if(isset($_POST['Submit'])){
        $COURSE = $_POST['Course'];
    	$LNAME = $_POST['LName'];
        $FNAME = $_POST['FName'];
        $PNUM = $_POST['PNumber'];
        $ADDRESS = $_POST['Address'];
        $SEX = $_POST['Sex'];
        $STATUS = $_POST['Status'];
        

        $sql = "INSERT INTO students_infotbl (Course, Last_Name, First_Name, Phone_Number, Address, Sex, Stud_Status) VALUES ('$COURSE', '$LNAME', '$FNAME', '$PNUM', '$ADDRESS', '$SEX', '$STATUS')";
        if($conn->query($sql) == TRUE ){
            $_SESSION['success']="Record Successfully Inserted";
        } else {
            $_SESSION['error']="No record created";
        }
    }
    header("location:index.php");
?>
