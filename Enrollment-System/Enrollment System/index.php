<?php
    include "loginconn.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <div class="container">
        <img src="logoCvsu.png" class="logo">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="login-form">
                    <h2 class="fw-bold">Login</h2>
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="user" class="form-label fw-bold">Username</label>
                            <input type="text" class="form-control" name="USER" placeholder="Username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input type="password" class="form-control" name="PASS" placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-success btn-block w-100">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST['submit'])){
        $query = "SELECT * FROM admin_tbl";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        $username = $row['username'];
        $password = $row['password'];

        $post_username = $_POST['USER'];
        $post_password = $_POST['PASS'];

        if($post_username == $username and password_verify($post_password, $password)){
            echo "<script> alert ('You are Logged In'); </script>";
            header("Location:dashboard.php");
        }
        else {
            echo "<script> alert ('Wrong Password/Username'); </script>";
            return;
        }
    }
?>