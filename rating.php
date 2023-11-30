<?php
include 'callback/rating.php';
include 'includes/header.php';
?>




    <div class="col-md-4">
        <form action="" method="post">
            <button type='submit' name='logout' class='btn btn-danger'>Logout</button>
        </form>
    </div>
    <div class="d-flex align-items-center" style="height:100vh;">
        <div class="card col-md-6 m-auto">
            <div class="card-header">
                <h1 class="m-auto text-center mx-5 h1">Rate the Dishes</h1>
            </div>
            <div class="card-body ">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Items: </span>
                        <select class="form-select" name="items" id="floatingInputGrid">
                            <?php
                            
                            if ($currentTime >= '8:00' && $currentTime <= '12:00') {
                                $query = "SELECT * FROM `menu` WHERE `meal_id` = '1' and DATE(`datetime`) = '$date'";
                                $read = $db->select($query);
                                if ($read) {
                                    while ($row = $read->fetch_assoc()) {
                                        $itemId = $row['item_id'];
                                        $query = "SELECT * FROM `items` WHERE `id` = '$itemId' ";
                                        $read2 = $db->select($query);
                                        if ($read2) {
                                            while ($row2 = $read2->fetch_assoc()) {
                                                $itemName = $row2['name'];
                                                $checkQuery = "SELECT * FROM `ratings` WHERE `user_id`='$userid' AND `date`='$date' AND `meal_id`='$meal' AND `item_id`='$itemId'";
                                                $checkResult = $db->select($checkQuery);
                                                if($checkResult){
                                                    echo "<option class='$danger' value='$itemId'>$itemName <p style='color:red;'>[You have already rated this item]</p> </option>";
                                                }else{
                                                    echo "<option value='$itemId'>$itemName</option>";
                                            }
                                        }
                                    }
                                }
                                }
                            } elseif ($currentTime >= '12:00' && $currentTime <= '16:00') {
                                $query = "SELECT * FROM `menu` WHERE `meal_id` = '2' and DATE(`datetime`) = '$date'";
                                $read = $db->select($query);
                                if ($read) {
                                    while ($row = $read->fetch_assoc()) {
                                        $itemId = $row['item_id'];
                                        $query = "SELECT * FROM `items` WHERE `id` = '$itemId' ";
                                        $read2 = $db->select($query);
                                        if ($read2) {
                                            while ($row2 = $read2->fetch_assoc()) {
                                                $itemName = $row2['name'];
                                                $checkQuery = "SELECT * FROM `ratings` WHERE `user_id`='$userid' AND `date`='$date' AND `meal_id`='$meal' AND `item_id`='$itemId'";
                                                $checkResult = $db->select($checkQuery);
                                                if($checkResult){
                                                    echo "<option class='$danger' value='$itemId'>$itemName <span style='color:red;'>[You have already rated this item]</span> </option>";
                                                }else{
                                                    echo "<option value='$itemId'>$itemName</option>";
                                                }
                                            }
                                        }
                                    }
                                }
                            } elseif ($currentTime >= '16:00' && $currentTime <= '20:00') {
                                $query = "SELECT * FROM `menu` WHERE `meal_id` = '3' and DATE(`datetime`) = '$date'";
                                $read = $db->select($query);
                                if ($read) {
                                    while ($row = $read->fetch_assoc()) {
                                        $itemId = $row['item_id'];
                                        $query = "SELECT * FROM `items` WHERE `id` = '$itemId' ";
                                        $read2 = $db->select($query);
                                        if ($read2) {
                                            while ($row2 = $read2->fetch_assoc()) {
                                                $itemName = $row2['name'];
                                                $checkQuery = "SELECT * FROM `ratings` WHERE `user_id`='$userid' AND `date`='$date' AND `meal_id`='$meal' AND `item_id`='$itemId'";
                                                $checkResult = $db->select($checkQuery);
                                                if($checkResult){
                                                    echo "<option class='$danger' value='$itemId'>$itemName <span style='color:red;'>[You have already rated this item]</span> </option>";
                                                }else{
                                                    echo "<option value='$itemId'>$itemName</option>";
                                            }
                                        }
                                    }
                                }
                            }
                            } elseif ($currentTime >= '20:00' && $currentTime <= '23:59') {
                                $query = "SELECT * FROM `menu` WHERE `meal_id` = '4' and DATE(`datetime`) = '$date'";
                                $read = $db->select($query);
                                if ($read) {
                                    while ($row = $read->fetch_assoc()) {
                                        $itemId = $row['item_id'];
                                        $query = "SELECT * FROM `items` WHERE `id` = '$itemId' ";
                                        $read2 = $db->select($query);
                                        if ($read2) {
                                            while ($row2 = $read2->fetch_assoc()) {
                                                $itemName = $row2['name'];
                                                $checkQuery = "SELECT * FROM `ratings` WHERE `user_id`='$userid' AND `date`='$date' AND `meal_id`='$meal' AND `item_id`='$itemId'";
                                                $checkResult = $db->select($checkQuery);
                                                if($checkResult){
                                                    echo "<option class='$danger' value='$itemId'>$itemName <span style='color:red;'>[You have already rated this item]</span> </option>";
                                                }else{
                                                    echo "<option value='$itemId'>$itemName</option>";
                                            }
                                        }
                                    }
                                }
                            }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-4 ">
                        <span class="input-group-text">Rating: </span>
                        <div class="rating form-control border-start-0 m-auto">
                            <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script>
         if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>
<?php
include "includes/footer.php";
?>