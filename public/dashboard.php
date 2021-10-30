<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
        <h1 class="navbar-brand fs-2 ms-5 mb-0 fw-bold">bedtrack</h1>
        
        <div class="navbar-link ms-auto">
        <ul class="navbar-nav text-center float-end text-light me-5">
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Barisal">Barisal</a></li>
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Chittagong">Chittagong</a></li>
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Dhaka">Dhaka</a></li>
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Khulna">Khulna</a></li>
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Mymensingh">Mymensingh</a></li>
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Rajshahi">Rajshahi</a></li>
        <li class="nav-item me-1"><a class="nav-link" href="dashboard.php?division=Rangpur">Rangpur</a></li>
        <li class="nav-item me-3"><a class="nav-link" href="dashboard.php?division=Sylhet">Sylhet</a></li>
        
            <li class="nav-item"><a href="php/logout.php" class="btn btn-light">Logout</a></li>
        </ul>
        </div>

    </div>
    </nav>


    <div class="container-fluid main-content text-center pt-3">
     <h2 class="my-3">Hospitals in <?php echo $_GET['division']; ?></h2>   
    
      <?php
        include_once('php/db.php');
        $division = $_GET['division'];
        $sql = "SELECT * FROM venue WHERE division='$division'";
        $result = mysqli_query($conn, $sql);
        $total = mysqli_num_rows($result);
        echo '
        <div class="row justify-content-center my-3">
        <table class="table-summary table table-bordered">
        <tr>
            <th>Division</th>
            <th>Total Hospitals</th>
            <th>Last Updated</th>
        </tr>
        <tr>
            <td>'.$_GET['division'].'</td>
            <td>'.$total.'</td>
            <td>31st December 2021</td>
        </tr>
        </table>
        </div>
    ';
        
        echo '
        <table class="table table-striped">
            <thead>
                <tr class="table-dark">
                <th>Name</th>
                <th>Total Beds</th>
                <th>Free Beds</th>
                <th>Total ICU</th>
                <th>Free ICUs</th>
                <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>';
        while($row = mysqli_fetch_assoc($result)){
            $name = $row['name'];
            $bed = $row['seat'];
            $free = $row['seat'] - $row['booked'];
            $icu = $row['icu'];
            $icu_free = $row['icu'] - $row['icu_booked'];
            echo '
            <tr>
            <td>'.$name.'</td>
            <td>'.$bed.'</td>
            <td>'.$free.'</td>
            <td>'.$icu.'</td>
            <td>'.$icu_free.'</td>
            <td>017XXXXXXXX</td>
            </tr>
            ';
        };
        
        ?>
        
            
            </tbody>
        </table>
      
    </div>
    <script src="js/venue.js"></script>
</body>
</html>