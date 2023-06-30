<?php
include "config.php";
session_start();
if (isset($_GET['msg'])) {
    $msg = $_GET['msg'];
    echo "<script type='text/javascript'> alert ('" . $msg . "') </script>";
}
?>

<html>

<head>
    <title> Student's Information </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <style>
        body {
            background-image: url('Carmona-Campus-scaled.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
            background-position: center;
        }
        img {
        margin-left: 30px;
        }
        h2{
          margin-left: -20px;
        }
        table, tr:hover {
          background: blanchedalmond;
        }
        @media screen and (min-width:992px) {

        .navbar .navbar-nav .nav-link {
        padding: 1em;
        }
        }

        .navbar .navbar-nav .nav-item {
        position: relative;
        }
        .navbar .navbar-nav .nav-link {
        padding: 0em;
        }
        .navbar .navbar-nav .nav-item::after {
        position: absolute;
        content: '';
        bottom: -24;
        right: 0;
        left: 0;
        margin: 0 auto;
        background-color: white;
        width: 0%;
        height: 4px;
        transition: all .3s;
        }
        .navbar .navbar-nav .nav-item:hover::after {
        width: 100%;
        }
    </style>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-fluid">
        <img src="CVSULOGO.png" alt="" width="80">
            <h2 class="text-light ps-5 pt-2 pb-2 me-5 display-6" class="navbar-brand" class="fw-bold" href="#">Cavite State University</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active text-light me-4 ms-4" aria-current="page"
                            href="dashboard.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-light me-4 ms-4" aria-current="page"
                            href="studtbl.php">Registration</a>
                    </li>

                    <li class="nav-item">
          <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="list.php">List</a>
        </li>

                    <li class="nav-item">
                        <a class="nav-link active text-light me-4 ms-4" aria-current="page"
                            href="contacts.php">Contacts</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="programs.php">Programs</a>
                    </li>

                </ul>
                <form class="d-flex mt-3" role="search" method="post" action="studtbl.php">
                    <input class="form-control me-2" name="kword" type="search" placeholder="Search Name"
                        aria-label="Search">
                    <button class="btn bi bi-search btn-outline-light" type="submit"></button>
                </form>
                <div class="ms-4 me-3">
                    <button type="button" onclick="window.location.href = 'index.php';" class="btn px-4 btn-danger">
                        Logout
                    </button>

                </div>
            </div>
        </div>
    </nav>

</head>

<body>

    <form id="addnewForm" action="insert.php" method="post">
        <div class="modal fade" id="studModal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Student Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="divheader" class="container-xl">
                            <!-- Hidden Field -->
                            <input type="hidden" id="sid" name="sid">

                            <div class="row mb-2">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">Course:</label>
                                </div>
                                <div class="col align-self-center">
                                    <select name="Course" class="form-select" id="Course">
                                        <?php
                                        $query = $conn->query("SELECT * FROM course_tbl");
                                        while ($row = $query->fetch_assoc()) {

                                            ?>
                                            <option value="<?= $row['course_id'] ?>"><?= $row['course'] ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">SHS Strand:</label>
                                </div>
                                <div class="col align-self-center">
                                    <select name="Strand" class="form-select" id="Strand">
                                        <?php
                                        $query = $conn->query("SELECT * FROM strand_tbl");
                                        while ($row = $query->fetch_assoc()) {

                                            ?>
                                            <option value="<?= $row['strand_id'] ?>"><?= $row['strand'] ?></option>

                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">Last Name:</label>
                                </div>
                                <div class="col">
                                    <input class="form-control form-control-sm" id="lname" type="text" name="LName"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">First Name:</label>
                                </div>
                                <div class="col align-self-center">
                                    <input class="form-control form-control-sm" id="fname" type="text" name="FName"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">Middle Name:</label>
                                </div>
                                <div class="col align-self-center">
                                    <input class="form-control form-control-sm" id="mname" type="text" name="MName"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">Phone Number:</label>
                                </div>
                                <div class="col align-self-center">
                                    <input class="form-control form-control-sm" id="pn" type="number" name="PNumber"
                                        required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">Student Status:</label>
                                </div>
                                <div class="col align-self-center">
                                    <span class="me-2"><input type="radio" id="o1" name="Status" value="Old/New"
                                            required checked />
                                        Old/New</span>
                                    <span><input type="radio" id="o2" name="Status" value="Transferee" required />
                                        Transferee</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-end">
                                    <label class="fw-bold lead mt-2 me-2">Gender:</label>
                                </div>
                                <div class="col align-self-center">
                                    <span class="me-2"><input type="radio" id="gm" name="Sex" value="M" required
                                            checked />
                                        Male</span>
                                    <span><input type="radio" id="gf" name="Sex" value="F" required />
                                        Female</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-outline-success" id="studBtnSubmit" type="submit" name="Submit">Add
                            Student</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- delete modal -->

    <div class="modal fade" id="deletemodal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="align-middle">Are you sure you want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">No</button>
                    <a class="btn btn-outline-danger" id="deleteyes">Yes</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xl my-5">
        <div class="d-flex mb-2">
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn px-4 btn-primary" onclick="openAddEdit(false, null);">
                    Add Students
                </button>
            </div>
        </div>
        <table class="table table-bordered border-dark">
            <tr class="text-center bg-success text-white">
                <th> Course </th>
                <th> SHS Strand </th>
                <th> Last Name </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> Phone Number </th>
                <th> Gender </th>
                <th> Student Status </th>
                <th> Actions </th>
            </tr>
            <?php
            $sql = "SELECT t1.ID, t2.strand, t3.course, d1.first_name, d1.last_name, d1.middle_name, d1.gender, t1.phone_number, t1.stud_status FROM studinfo_tbl t1
            INNER JOIN studdetails_tbl d1
            ON d1.stud_id = t1.ID
            INNER JOIN strand_tbl t2
            ON t1.strand_id = t2.strand_id
            INNER JOIN course_tbl t3
            ON t1.course_id = t3.course_id";

            //check if we searched
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['kword']) && strlen($_POST['kword']) > 0) {
                $searchQuery = $_POST['kword'];
                $sql .= " WHERE d1.first_name LIKE '" . $searchQuery . "%'";
            }

            $query = $conn->query($sql);
            while ($row = $query->fetch_assoc()) {

                ?>
                <tr>
                    <td class="align-middle text-center fw-bold">
                        <?= $row['course']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['strand']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['last_name']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['first_name']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['middle_name']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['phone_number']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['gender']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?= $row['stud_status']; ?>
                    </td>
                    <td class="align-middle text-center">
                        <?php
                        echo "<button onclick='openAddEdit(true, " . '"' . $row['ID'] . '"' . ")' class='btn bi bi-pencil-square btn-outline-success me-1'>";
                        echo "<button onclick='opendeletedialog(" . '"' . $row['ID'] . '"' . ")' class='btn bi bi-trash3 btn-outline-danger'>";
                        ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script>

        window.onload = function () {
            // onload event handler
            <?php
            if (isset($_SESSION['success'])) {
                echo 'alert("' . $_SESSION['success'] . '");';
                unset($_SESSION['success']);
            }
            if (isset($_SESSION['error'])) {
                echo 'alert("' . $_SESSION['error'] . '");';
                unset($_SESSION['error']);
            }
            ?>
        }

        function httpGet(theUrl, callback) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open("GET", theUrl, true);
            xmlHttp.onreadystatechange = function () {
                if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                    callback(xmlHttp.responseText);
                }
            };
            xmlHttp.send();
        }

        // Common function to set selected options
        function setOptionData(elementId, selIndex) {
            let optionEl = document.getElementById(elementId);
            let optionEllist = optionEl.getElementsByTagName('option');

            for (let i = 0; i < optionEllist.length; i++) {
                const option = optionEllist[i];
                if (option.getAttribute("value") == selIndex.toString()) {
                    option.setAttribute("selected", "");
                } else {
                    option.removeAttribute("selected");
                }
            }
        }

        const myModal = new bootstrap.Modal(document.getElementById('deletemodal'));
        const myModal2 = new bootstrap.Modal(document.getElementById('studModal'));
        const formElement = document.getElementById('addnewForm');
        const studBtnSubmit = document.getElementById('studBtnSubmit');
        const last_name = document.getElementById('lname');
        const first_name = document.getElementById('fname');
        const middle_name = document.getElementById('mname');
        const phone_number = document.getElementById('pn');
        const user_id = document.getElementById('sid');
        const oldnew_student = document.getElementById('o1');
        const transferee = document.getElementById('o2');
        const maleOption = document.getElementById('gm');
        const femaleOption = document.getElementById('gf');

        function openAddEdit(isEdit, ID) {
            if (isEdit) {
                httpGet("fetchuser.php?ID=" + ID, function (resp) {
                    if (resp.length === 0) {
                        return;
                    }

                    const jsonResp = JSON.parse(resp);

                    // Set selected course and strand
                    setOptionData("Course", jsonResp["course_id"]);
                    setOptionData("Strand", jsonResp["strand_id"]);

                    // Set input fields
                    user_id.value = ID;
                    last_name.value = jsonResp["last_name"];
                    first_name.value = jsonResp["first_name"];
                    middle_name.value = jsonResp["middle_name"];
                    phone_number.value = jsonResp["phone_number"];

                    // Set radio buttons
                    if (jsonResp["stud_status"] === "Transferee") {
                        transferee.checked = true;
                    } else {
                        oldnew_student.checked = true;
                    }
                    if (jsonResp["gender"] === "M") {
                        maleOption.checked = true;
                    } else {
                        femaleOption.checked = true;
                    }

                    studBtnSubmit.textContent = "Edit Student";
                    formElement.setAttribute('action', 'edit.php');
                });
            } else {
                // Set selected course and strand
                setOptionData("Course", "");
                setOptionData("Strand", "");

                // Reset input fields
                user_id.value = "";
                last_name.value = "";
                first_name.value = "";
                middle_name.value = "";
                phone_number.value = "";

                // Reset radio buttons
                oldnew_student.checked = true;
                maleOption.checked = true;

                studBtnSubmit.textContent = "Add Student";
                formElement.setAttribute('action', 'insert.php');
            }

            myModal2.show();
        }

        function opendeletedialog(ID) {
            const delbtn = document.getElementById('deleteyes');
            delbtn.setAttribute('href', 'delete.php?ID=' + ID);
            myModal.show();
        }

        function resetmodalvalue() {
            const delbtn = document.getElementById('deleteyes');
            delbtn.setAttribute('href', '#');
        }

        myModal.addEventListener('hide.bs.modal', resetmodalvalue);

        resetmodalvalue();
    </script>


</body>
</html>