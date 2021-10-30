<?php
session_start();
if(!isset($_SESSION['admin-email'])){
    header("Location: admin-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
    <link rel="stylesheet" href="css/admin.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid mx-5">
    <a class="navbar-brand fs-2 fw-bold" href="#">bedtrack</a>
    <div class="justify-content-end" id="navbarNavAltMarkup">
    <ul class="nav bg-dark" role="tablist">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-bs-toggle="tab" role="tab">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button">Hospitals</a>
            <div class="dropdown-menu">
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Barisal</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Chittagong</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Dhaka</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Khulna</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Mymensingh</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Rajshahi</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Rangpur</a>
            <a href="#home" class="dropdown-item" data-bs-toggle="tab" role="tab">Sylhet</a>
            
            </div>
        </li>
        <li class="nav-item">
            <a href="#addhospital" class="nav-link" data-bs-toggle="tab" role="tab">Add New Hospital</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-bs-toggle="tab" role="tab">Profile</a>
        </li>
        <li class="nav-item">
            <a href="#settings1" class="nav-link" data-bs-toggle="tab" role="tab">Settings</a>
        </li>
        <li class="nav-item">
            <a href="php/logout.php" class="nav-link btn btn-light text-dark ms-3">Log out</a>
        </li>
    </ul>
    </div>
  </div>
</nav>

<div class="container">

<div class="tab-content">
  <div class="tab-pane fade show active" id="home" role="tabpanel">
    <h2 class="text-center">All Hospitals</h2>
    <?php
        include_once('php/db.php');
        $sql = "SELECT * FROM venue";
        $result = mysqli_query($conn, $sql);
        $total = mysqli_num_rows($result);
        echo '
        <div class="row justify-content-center my-2">
        <table class="table-summary table table-bordered" id="summarytable">
        <tr>
            <th>Total Hospitals</th>
            <th>Last Updated</th>
        </tr>
        <tr>
            <td>'.$total.'</td>
            <td>31st December 2021</td>
        </tr>
        </table>
        </div>
    ';
        
        echo '
        
        <table class="table table-striped" id="hospitaltable">
            <thead>
                <tr class="table-dark">
                <th>ID</th>
                <th>Name</th>
                <th>Total Beds</th>
                <th>Booked Beds</th>
                <th>Total ICU</th>
                <th>Booked ICUs</th>
                <th>Contact Number</th>
                <th>Update</th>
                </tr>
            </thead>
            <tbody>';
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
            $name = $row['name'];
            $bed = $row['seat'];
            $booked =  $row['booked'];
            $icu = $row['icu'];
            $icu_booked = $row['icu_booked'];
            echo '
            <tr>
            <form method="POST" action="php/update.php" class="updateform">
            <td><input type="number" class="input1" name="id" value="'.$id.'"></td>
            <td>'.$name.'</td>
            <td>'.$bed.'</td>
            <td><input type="number" class="input2" name="booked" value="'.$booked.'"></td>
            <td>'.$icu.'</td>
            <td><input type="number" class="input2" name="icu_booked" value="'.$icu_booked.'"></td>
            <td>017XXXXXXXX</td>
            <td><button class="btn btn-dark" type="submit">Update</button<td>
            </form>
            </tr>
            
            ';
        };
        
        ?>
        
            
            </tbody>
        </table>
  </div>
  <div class="tab-pane fade" id="addhospital" role="tabpanel">
    <form action="php/addnewhospital.php" method="post">
        <h2 class="mt-1 mb-5">Add New Hospital</h2>
        <div class="form-floating mb-4">
            <input class="form-control" name="name" type="text" id="fl-text" placeholder="Your name">
            <label for="fl-text">Hospital name</label>
        </div>
        <div class="form-floating mb-4">
        <select class="form-select" name="division" id="fl-select">
            <option selected>Select..</option>
            <option>Barisal</option>
            <option>Chittagong</option>
            <option>Dhaka</option>
            <option>Khulna</option>
            <option>Mymensingh</option>
            <option>Rajshahi</option>
            <option>Rangpur</option>
            <option>Sylhet</option>
        </select>
            <label for="fl-text">Division</label>
        </div>
        <div class="form-floating mb-4">
            <input class="form-control" name="seat" type="text" id="fl-text" placeholder="Your name">
            <label for="fl-text">Total Seat</label>
        </div>
        <div class="form-floating mb-4">
            <input class="form-control" name="booked" type="text" id="fl-text" placeholder="Your name">
            <label for="fl-text">Seat Booked</label>
        </div>
        <div class="form-floating mb-4">
            <input class="form-control" name="icu" type="text" id="fl-text" placeholder="Your name">
            <label for="fl-text">Total ICU</label>
        </div>
        <div class="form-floating mb-4">
            <input class="form-control" name="icu_booked" type="text" id="fl-text" placeholder="Your name">
            <label for="fl-text">ICU Booked</label>
        </div>
        <button type="submit" class="btn btn-primary py-2">Add Hospital</button>
    </form>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel">
    <h2>Profile</h2>
    <p>This page is being created. Check back later.</p>
  </div>
  <div class="tab-pane fade" id="settings1" role="tabpanel">
    <h2>Settings</h2>
    <p>This page is being created. Check back later.</p>
  </div>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

<script>
    $(document).ready( function () {
        $('#hospitaltable').DataTable();
    } );
</script>
</body>
</html>