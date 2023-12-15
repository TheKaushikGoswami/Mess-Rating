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
                <span>Items</span>
                <?php
                    $query = "SELECT * FROM `menu` WHERE meal_id = 2 AND date = '$date'";
                    $result = $db->query($query);

                    if ($result) {
                        while ($row = $result->fetch_assoc()) {
                            $i = 1;
                            $item_id = $row['item_id'];
                            $q2 = "SELECT * FROM `items` WHERE item_id = $item_id";
                            $r2 = $db->query($q2);

                            if ($r2) {
                                foreach ($r2 as $row2) {
                                    $item_name = $row2['item_name'];
                                }
                                echo $item_name;
                                echo "<div class='rating '>
                                    <input type='radio' id='star5' name='rating".$i."' value='5' /><label for='star5'></label>
                                    <input type='radio' id='star4' name='rating".$i."' value='4' /><label for='star4'></label>
                                    <input type='radio' id='star3' name='rating".$i."' value='3' /><label for='star3'></label>
                                    <input type='radio' id='star2' name='rating".$i."' value='2' /><label for='star2'></label>
                                    <input type='radio' id='star1' name='rating".$i."' value='1' /><label for='star1'></label>
                                </div>";
                            } else {
                                echo "Error executing query: " . $db->error;
                            }
                        }
                    } else {
                        echo "Error executing query: " . $db->error;
                    }

                    
                ?>
                <div class="rating ">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
                </div>
                <div class="d-grid">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
</div>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
include "includes/footer.php";
?>