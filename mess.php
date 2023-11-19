<?php
include 'Database.php';
include 'config.php';

$db = new Database();

if (isset($_POST['submit'])) {

    $date = date('Y-m-d', strtotime('+5 hours 30 minutes'));
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $snacks = $_POST['snacks'];
    $dinner = $_POST['dinner'];
    $query = "INSERT INTO `menu` (`date`, `breakfast`, `lunch`, `snacks`, `dinner`) VALUES ('$date', '$breakfast', '$lunch', '$snacks', '$dinner')";

    $duplicate = "SELECT * FROM menu WHERE menu.date = '$date'";
    $check = $db->select($duplicate);
    if($check){
        $error = "The menu for today has already been entered!";
        echo "<script>alert('$error')</script>";
    }
    else{
        $result = $db->insert($query);
    }

    if(isset($result)){
        echo "<script>alert('Menu entered successfully!')</script>";
    }
    else{
        echo "<script>alert('Something went wrong!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page | Mess Rating</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="card col-md-6 m-auto">
        <div class="card-header">

            <h1 class="m-auto text-center fs-lg">Mess Meals Entry</h1>
        </div>

        <div class="card-body ">
            <form action="" method="post">

                <div class="input-group ">
                    <span class="input-group-text col-md-2">Breakfast</span>
                    <textarea class="form-control" name="breakfast" style="height: 150px" aria-label="Breakfast" required></textarea>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text col-md-2">Lunch</span>
                    <textarea class="form-control" name="lunch" style="height: 150px" aria-label="With textarea" required></textarea>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text col-md-2">Snacks</span>
                    <textarea class="form-control" name="snacks" style="height: 150px" aria-label="With textarea" required></textarea>
                </div><br>
                <div class="input-group">
                    <span class="input-group-text col-md-2">Dinner</span>
                    <textarea class="form-control" name="dinner" style="height: 150px" aria-label="With textarea" re></textarea>
                </div><br>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                  </div>
            </form>
        </div>
    </div>
      
</body>
</html>