<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Bedtrack</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <h1 class="navbar-brand fs-2 ms-5 mb-0 fw-bold">bedtrack</h1>
    </div>
    </nav>

    <div class="bg-dark main container-fluid">
        
        <div class="float-start text-light mt-5">
            <h1>Track Covid ICUs and Beds<br>at <b>bedtrack</b></h1>
            <p class="fs-5">Login to track beds.</p>
            <a href="signup.php" class="btn btn-light px-4 py-2">Sign Up</a>   
        </div>
        <div class="covidimage">
            <img src="images/image2vector.svg" alt="">
        </div>
        <div class="covidimage2">
            <img src="images/covid.svg" alt="">
        </div>
        
        <div class="card float-end">
            <div class="card-header text-center fs-5 py-4">
                <h3 class="fw-bold">bedtrack</h3>
                Login
            </div>
            <div class="card-body">
                <form action="/php/login.php" method="POST">
                <div class="form-floating mb-4">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Your Email">
                    <label for="fl-text">Email</label>
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control" type="password" name="pass" id="pass" placeholder="Your Password">
                    <label for="fl-text">Password</label>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary my-2 py-2" type="submit">Login</button>
            </div>
            </form>
        </div>
    </div>
</body>

</html>