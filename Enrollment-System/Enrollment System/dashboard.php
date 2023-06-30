<html>
    <body>
    <head>
    <title> Dashboard </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <body>
        <style>
        body{
        background-image:url('cvsuschool.jpeg');
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
    </body>
    
    <nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <img src="CVSULOGO.png" alt="" width="80">
    <h2 class="text-light ps-5 pt-2 pb-2 me-5 display-6" class="navbar-brand" class="fw-bold" href="#">Cavite State University</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="dashboard.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="studtbl.php">Registration</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="list.php">List</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="contacts.php">Contacts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active text-light me-4 ms-4" aria-current="page" href="programs.php">Programs</a>
        </li>

      </ul>
      <div class="ms-4 me-3">
                <button type="button" onclick="window.location.href = 'index.php';" class="btn px-4 btn-danger">
                    Logout
                </button>

            </div>
    </div>
  </div>
</nav>

<style>

  @keyframes slideInLeft {
    from {
      transform: translateX(-300px);
    }
    to {
      transform: translateX(0);
    }
  }

.header {
  animation-name: slideInLeft;
  animation-duration: 1s;
  animation-timing-function: ease-in;
  animation-iteration-count: 1;
  animation-direction: normal;
  animation-fill-mode: none;
  margin-top: 450px;
  margin-left: 60px;
  text-shadow: -1px 2px gray;
}
p {
    font-size: 23px;
    text-shadow: -1px 2px gray;
}

  </style>
</head>
      <body>
        <div class="header">
          <h1 class="text-light display-4 fw-bold"> TRUTH • EXCELLENCE • SERVICE </h1>

          <p class="text-light">The Cavite State University (CvSU) has it humble begginings in 1906 as the Indang Intermediate School <br> with the American Thomasites as the first teachers.</p>
        <button class="btn btn-success" onclick="window.location.href = 'learnmore.php';"> Learn more </button>
        </div>
      </body>
</head>
    </body>
</html>