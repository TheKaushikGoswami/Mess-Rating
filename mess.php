<?php
ob_start();
session_start(); // Start the session

// Check if the user is logged in

include 'Database.php';
include 'config.php';

$db = new Database();

if (!isset($_SESSION['email'])) {
    header('Location: login.php'); // Redirect to the login page

}


if(isset($_POST['submit'])){
    // Rest of your code...
    date_default_timezone_set('Asia/Kolkata');

    $date = $_POST['date'];
    $meal = $_POST['meal'];
    $item1 = $_POST['item1'];
    $item2 = $_POST['item2'];
    $item3 = $_POST['item3'];
    $item4 = $_POST['item4'];
    $item5 = $_POST['item5'];
    $item6 = $_POST['item6'];

    $query = "INSERT INTO `menu`(`date`, `meal`, `item1`, `item2`, `item3`, `item4`, `item5`, `item6`) VALUES ('$date','$meal','$item1','$item2','$item3','$item4','$item5','$item6')";
    $create = $db->insert($query);
    if(isset($create)){
        echo "<script>alert('Data Inserted Successfully.');</script>";
    }else{
        echo "<script>alert('Data Insertion Failed.');</script>";
    }
}

if(isset($_POST['logout'])){
    session_destroy();
    header('Location: login.php'); // Redirect to the login page
    exit;
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
            <form action="" method="post" class="fs-5">
                <label for="date">Date</label>
                <input class="form-control mb-3" name="date" type="date">
                <label for="meal">Meal</label>
                <select class="form-select mb-3" name="meal" id="meal">
                    <option value="breakfast">Breakfast</option>
                    <option value="lunch">Lunch</option>
                    <option value="snacks">Snacks</option>
                    <option value="dinner">Dinner</option>
                </select>
                <label for="item1">Item 1</label>
                <select class="form-select mb-3" name="item1" id="item1">
                    <?php
                        $query = "SELECT * FROM `items`";
                        $read = $db->select($query);
                        if($read){
                            while($row = $read->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                <label for="item2">Item 2</label>
                <select class="form-select mb-3" name="item2" id="item2">
                    <?php
                        $query = "SELECT * FROM `items`";
                        $read = $db->select($query);
                        if($read){
                            while($row = $read->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                <label for="item3">Item 3</label>
                <select class="form-select mb-3" name="item3" id="item3">
                    <?php
                        $query = "SELECT * FROM `items`";
                        $read = $db->select($query);
                        if($read){
                            while($row = $read->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                <label for="item4">Item 4</label>
                <select class="form-select mb-3" name="item4" id="item4">
                    <?php
                        $query = "SELECT * FROM `items`";
                        $read = $db->select($query);
                        if($read){
                            while($row = $read->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                <label for="item5">Item 5</label>
                <select class="form-select mb-3" name="item5" id="item5">
                    <?php
                        $query = "SELECT * FROM `items`";
                        $read = $db->select($query);
                        if($read){
                            while($row = $read->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                <label for="item6">Item 6</label>
                <select class="form-select mb-3 mb-3" name="item6" id="item6">
                    <?php
                        $query = "SELECT * FROM `items`";
                        $read = $db->select($query);
                        if($read){
                            while($row = $read->fetch_assoc()){
                    ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php
                            }
                        }
                    ?>
                </select>
                <div class="d-grid mt-5">
                        <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                    </div>
            </form>
        </div>
    </div>
      
</body> 
</html>