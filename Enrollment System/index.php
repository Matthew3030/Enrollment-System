<?php 
 include "config.php";
?>

<html>
<head>
    <title> Student's Information </title>
</head>
    <body>
        <div id="divheader">
            <body>
                <form action="insert.php" method="post">
                <table align="center">
                    <tr>
                        <td> Course </td>
                        <td><input type="text" name="Course" required></td>
                    </tr> 
                    
                    <tr>
                        <td> Last Name </td>
                        <td><input type="text" name="LName" required></td>
                    </tr> 
                    
                    <tr>
                        <td> First Name </td>
                        <td><input type="text" name="FName" required></td>
                    </tr>    
                        
                    <tr>    
                        <td> Phone Number </td>
                        <td><input type="number" name="PNumber" required></td>
                    </tr> 
                        
                    <tr>   
                        <td> Address </td>
                        <td><input type="text" name="Address" required></td>
                    </tr>    
                        
                    <tr>    
                        <td> Sex </td>
                        <td><input type="radio" name="Sex" value="Male" required> Male </td>
                        <td><input type="radio" name="Sex" value="Female" required> Female </td>
                    </tr>
                    
                    <tr>
                        <td> Stud Status </td>
                        <td><input type="radio" name="Status" value="Old/New" required> Old/New </td>
                        <td><input type="radio" name="Status"  value="Transferee" required> Transferee </td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" name="Submit"> </td>
                    </tr>
                </table>
            </form>
            </body>


                <?php 
                    if(isset($_SESSION['success'])){
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    }
                    if(isset($_SESSION['error'])){
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>
            
            <table border="1" width="100%">
                <tr>
                    <th align="left"> Course </th>
                    <th align="left"> Last Name </th>
                    <th align="left"> First Name </th>
                    <th align="left"> Phone Number </th>
                    <th align="left"> Address </th>
                    <th align="left"> Sex </th>
                    <th align="left"> Stud Status </th>
                    <th align="right"> Actions </th>
                </tr>
                <?php
                    $sql = "SELECT * FROM students_infotbl ORDER BY Last_Name ASC";
                    $query = $conn->query($sql);
                    while($row=$query->fetch_assoc()){
                    
                ?>
                <tr>
                    <td><?=$row['Course']; ?></td>
                    <td><?=$row['Last_Name']; ?></td>
                    <td><?=$row['First_Name']; ?></td>
                    <td><?=$row['Phone_Number']; ?></td>
                    <td><?=$row['Address']; ?></td>
                    <td><?=$row['Sex']; ?></td>
                    <td><?=$row['Stud_Status']; ?></td>
                    <td align="right">
                        <a href=""> EDIT </a>
                        <a href=""> DELETE </a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </body>
</html>