<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin Login</title>
</head>
<body>
    <div class="admin-div container-fluid bg-dark">
    <div class="card">
            <div class="card-header text-center fs-5 py-4">
                <h3 class="fw-bold">bedtrack</h3>
                Admin Login
            </div>
            <div class="card-body">
                <form action="/php/admin-login.php" method="POST">
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