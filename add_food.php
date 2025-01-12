<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
</head>

<body>
    <div class="container-fluid bg-secondary m-0 p-0">
            <!-- <div class="row">
            <div class=""> -->
           
            <div class="row edit_back">
                <div class="col-md-8 main_edit">
                <div class="text-center">
                <h2 class="text-light">Add new food</h2>
            </div>
                    <form action="add_food_action.php" class="needs-validation edit" novalidate="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php echo $data['id']; ?>" />
                        <div class="row g-2">
                            <div class="col-12">
                                <label for="name" class="form-label text-light">Categori </label>
                                <input type="text" class="form-control bg-secondary" name="name" id="name" placeholder="full-name" value="<?php echo $data['name'] ?>">
                                <div class="invalid-feedback">
                                    Please enter categori name.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="name" class="form-label text-light">Food Name </label>
                                <input type="text" class="form-control bg-secondary" name="name" id="name" placeholder="full-name" value="<?php echo $data['name'] ?>">
                                <div class="invalid-feedback">
                                    Please enter food name.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="address" class="form-label text-light">Address:</label>
                                <input type="text" class="form-control bg-secondary" name="address" id="address" placeholder="1234 Main St" required="" fdprocessedid="56cse">
                                <div class="invalid-feedback">
                                    Please enter your shipping address.
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="country" class="form-label text-light">Country</label>
                                <select class="form-select bg-secondary" name="country" id="country" required="" fdprocessedid="5atnc">
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="state" class="form-label text-light">State</label>
                                <select class="form-select bg-secondary" name="state" id="state" required="" fdprocessedid="7f5ih">
                                    <option value="">Choose...</option>
                                    <option>West Bengal</option>
                                    <option>Goa</option>
                                    <option>Kerala</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="zip" class="form-label text-light">Zip</label>
                                <input type="text" class="form-control bg-secondary" name="zip" id="zip" placeholder="" required="" fdprocessedid="c9ye68">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="my-4">
                        <h4 class="mb-3 text-light">Gender</h4>
                        <div class="my-3">
                            <div class="form-check">
                                <input id="male" value="male" name="gender" type="radio" class="form-check-input" checked="" required="" <?php echo $data['gender'] == 'Male' ? 'checked' : ''; ?>>
                                <label class="form-check-label text-light" for="male">Male</label>
                            </div>
                            <div class="form-check">
                                <input id="female" value="female" name="gender" type="radio" class="form-check-input" required="" <?php echo $data['gender'] == 'Female' ? 'checked' : ''; ?>>
                                <label class="form-check-label text-light" for="female">Female</label>
                            </div>
                            <div class="form-check">
                                <input id="other" value="other" name="gender" type="radio" class="form-check-input" required="" <?php echo $data['gender'] == 'Others' ? 'checked' : ''; ?>>
                                <label class="form-check-label text-light" for="other">Other</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <label for="dob" class="form-label text-light">Profile Picture </label>
                                <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                                <input type="file" class="form-control" id="pic" name="pic" accept="image/*"
                                    onchange="viewImage(this)">
                            </div>
                            <!-- <div class="mb-2 mt-2 row"> -->
                            <div class="col-md-5">
                            <img src="assets/user_img/<?php echo $data['image'] !='' ? $data['image'] : 'no-img.jpg'; ?>" alt=" " style="height:100px;width:100px" id="view_profile_pic">
                                <!-- </div> -->
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-warning btn-lg" type="submit" fdprocessedid="g2865" name="userEditBtn">Submit</button><br>
                    </form>
                </div>
            </div>
            </div>
            </div>
    </div>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
       
    </script>
</body>

</html>