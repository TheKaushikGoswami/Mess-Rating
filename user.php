<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mess project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <script src="assets/js/stars.js"></script> -->
</head>
<body>
    <div class="card col-md-6 m-auto">
        <div class="card-header">

            <h1 class="m-auto text-center fs-lg">Meals Rating</h1>
        </div>
        <form action="">
        <div class="card-body ">
            <div class="card mb-4">
                <div class="card-header fs-5">Detail</div>
                <div class="mb-3 col-md-10 m-auto">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" class="form-control " required >
                </div>
                
                <div class="mb-3 col-md-10 m-auto">
                    <label for="exampleInputPassword1" class="form-label">Roll No.</label>
                    <input type="number" class="form-control " required >
                </div>
                <div class="mb-3 col-md-10 m-auto">
                    <label for="exampleInputPassword1" class="form-label">Course</label>
                    <input type="text" class="form-control " required >
                </div>
                <div class="mb-3 col-md-10 m-auto">
                    <label for="exampleInputPassword1" class="form-label">Semester</label>
                    <input type="text" class="form-control " required >
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header fs-5">Ratings</div>
                <div class="col-md-8 m-auto">
                    
                    <div class="input-group mb-3 ">
                        <span class="input-group-text col-md-3">Breakfast</span>
                        <div class="rating-breakfast col-md-6">
                            <input type="radio" id="breakfast-star5" name="rating-breakfast" value="5" /><label for="breakfast-star5"></label>
                            <input type="radio" id="breakfast-star4" name="rating-breakfast" value="4" /><label for="breakfast-star4"></label>
                            <input type="radio" id="breakfast-star3" name="rating-breakfast" value="3" /><label for="breakfast-star3"></label>
                            <input type="radio" id="breakfast-star2" name="rating-breakfast" value="2" /><label for="breakfast-star2"></label>
                            <input type="radio" id="breakfast-star1" name="rating-breakfast" value="1" /><label for="breakfast-star1"></label>
                        </div>
                    </div>
                    <div class="input-group mb-3  ">
                        <span class="input-group-text col-md-3 ">Lunch</span>
                        <div class="rating-lunch col-md-6">
                            <input type="radio" id="lunch-star5" name="rating-lunch" value="5" /><label for="lunch-star5"></label>
                            <input type="radio" id="lunch-star4" name="rating-lunch" value="4" /><label for="lunch-star4"></label>
                            <input type="radio" id="lunch-star3" name="rating-lunch" value="3" /><label for="lunch-star3"></label>
                            <input type="radio" id="lunch-star2" name="rating-lunch" value="2" /><label for="lunch-star2"></label>
                            <input type="radio" id="lunch-star1" name="rating-lunch" value="1" /><label for="lunch-star1"></label>
                        </div>
                    </div>
                    <div class="input-group mb-3 ">
                        <span class="input-group-text col-md-3">Snacks</span>
                        <div class="rating-snacks col-md-6">
                            <input type="radio" id="snacks-star5" name="rating-snacks" value="5" /><label for="snacks-star5"></label>
                            <input type="radio" id="snacks-star4" name="rating-snacks" value="4" /><label for="snacks-star4"></label>
                            <input type="radio" id="snacks-star3" name="rating-snacks" value="3" /><label for="snacks-star3"></label>
                            <input type="radio" id="snacks-star2" name="rating-snacks" value="2" /><label for="snacks-star2"></label>
                            <input type="radio" id="snacks-star1" name="rating-snacks" value="1" /><label for="snacks-star1"></label>
                        </div>
                    </div>
                    <div class="input-group mb-3 ">
                        <span class="input-group-text col-md-3">Dinner</span>
                        <div class="rating-dinner col-md-6">
                            <input type="radio" id="dinner-star5" name="rating-dinner" value="5" /><label for="dinner-star5"></label>
                            <input type="radio" id="dinner-star4" name="rating-dinner" value="4" /><label for="dinner-star4"></label>
                            <input type="radio" id="dinner-star3" name="rating-dinner" value="3" /><label for="dinner-star3"></label>
                            <input type="radio" id="dinner-star2" name="rating-dinner" value="2" /><label for="dinner-star2"></label>
                            <input type="radio" id="dinner-star1" name="rating-dinner" value="1" /><label for="dinner-star1"></label>
                        </div>
                    </div>
                    <div class="input-group mb-3  ">
                        <span class="input-group-text col-md-3">Mess</span>
                        <div class="rating-mess col-md-6">
                            <input type="radio" id="mess-star5" name="rating-mess" value="5" /><label for="mess-star5"></label>
                            <input type="radio" id="mess-star4" name="rating-mess" value="4" /><label for="mess-star4"></label>
                            <input type="radio" id="mess-star3" name="rating-mess" value="3" /><label for="mess-star3"></label>
                            <input type="radio" id="mess-star2" name="rating-mess" value="2" /><label for="mess-star2"></label>
                            <input type="radio" id="mess-star1" name="rating-mess" value="1" /><label for="mess-star1"></label>
                        </div>
                    </div>
                    </div>
                
                
                
            </div>
            <div class="card">
                <div class="card-header fs-5">Suggestions & Complaints (if any) </div>

                <div class=" m-3">
                    
                    <textarea class="form-control" placeholder="Leave your feedback here" style="height: 250px"  id="floatingTextarea"></textarea>
                  </div>
                  <div class="d-grid gap-2 m-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                  </div>
            </div>
        </div>
        </form>
</body>
</html>