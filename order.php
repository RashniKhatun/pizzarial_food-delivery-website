<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo '<script type="text/javascript">alert("Please Login First...");window.location.href="login.php";</script>';
}
include('function.php');
$fid=$_GET['uid'];
$data=getFoodDetail($fid);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/Menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
</head>

<body>
  <!-- form -->
  <section>
    <div class="sign">
      <div class="back">
        <div class="row my-2">
          <div class=" col-md-6">
            <h1 class="text-center text-light">Order</h1>
            <form action="order_action.php" method="post" enctype="multipart/form-data">
              <div class="form-group from">
                
                <input type="text" class="form-control btn btn-outline-light" style="text-align: left;" id="cus_name" placeholder="Enter your fullname" name="cus_name">
              </div>
              <div class="form-group from">
             
                <input type="tel" class="form-control btn btn-outline-light" style="text-align: left;" id="phone_no" 
                  placeholder="Enter your phone number" name="phone_no">
              </div>
              <div class="form-group from">
                
                <input type="int" class="form-control btn btn-outline-light" style="text-align: left;" id="pincode" placeholder="Enter your pincode"
                  name="pincode">
              </div>
              <div class="form-group from">
                
                <input type="text" class="form-control btn btn-outline-light" style="text-align: left;" id="city" placeholder="Enter your city name" name="city">
              </div>
              <div class="form-group from">
              <select id="state" name="state" class="form-control btn btn-outline-light" style="text-align: left;">
                            <option selected>West Bangal</option>
                            <option>Odisha</option>
                            <option>Andhra Pradesh</option>
                            <option>Bihar</option>
                            <option>Tripura</option>
                            <option>Panjab</option>
                            <option>Rajasthan</option>
                        </select>
              </div>
                 <div class="form-group from">
                
                <input type="text" class="form-control btn btn-outline-light" style="text-align: left; color:black;" id="food" placeholder="Enter your food name" name="food" value="<?php echo $data['food_name'] ?>" readonly>
              </div>
              <div class="form-group from">
                
                <input type="float" class="form-control btn btn-outline-light" style="text-align: left; color:black;" id="price" placeholder="Enter your price" name="price" value="<?php echo $data['price'] ?>" readonly>
              </div>
              <div class="form-group from">
                
                <input type="text" class="form-control btn btn-outline-light" style="text-align: left;" id="house" placeholder="Enter your house name" name="house">
              </div>  
              <div class="form-group from">
                <label for="payment_status" class="text-light" style="font-weight: bold;">Payment:</label>
                <div class="form-check-inline">
                  <label class="form-check-label from">
                    <input type="radio" id="Online" value="Online" class="form-check-input " name="payment_status"><span class="text-white">Online</span>
                  </label>
                <!-- </div>
                <div class="form-check-inline"> -->
                  <label class="form-check-label from">
                    <input type="radio" id="Offline" value="Offline" class="form-check-input" name="payment_status"><span class="text-white">Case on delivery</span>
                  </label>

                </div>
              </div>        
              <div class="form-group from">
                <button type="submit" class="btn btn-warning form-control" name="orderbtn" onclick="return formValidate();">Order</button>
              </div>
              
            </form>
          </div>
          <div class="col-md-6">
            <h2 class="colum text-center text-light">Information</h2>
            <p class="text-center text-light">We are providing online and offline service.</br>Register Now for getting quick service.<br>Order Now!</p>
            <img src="assets/img/sign2.jpg" style="height: 60%; width:78%;">
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
  <script>
    function formValidate() {
      let cus_name = document.getElementById("cus_name").value;
      let phone_no = document.getElementById("phone_no").value;
      let pincode = document.getElementById("pincode").value;
      let ut = document.getElementById("city").value;
      
      if (cus_name == "" || cus_name == " ") {
        alert("Please Enter cus_name.....");
        document.getElementById("cus_name").focus();
        return false;
      } else if (phone_no == "" || phone_no == " ") {
        alert("Please Enter phone number.....");
        document.getElementById("phone_no").focus();
        return false;
      } else if (pincode == "" || pincode == " ") {
        alert("Please enter your password...");
        document.getElementById("pincode").focus();
        return false;
      } else if (city == "" || city == " ") {
        alert("Please enter your city...");
        document.getElementById("city").focus();
        return false;
      } else if (state == "" || state == " ") {
        alert("Please enter your state...");
        document.getElementById("state").focus();
        return false;
      } else if (house == "" || house == " ") {
        alert("Please enter your house...");
        document.getElementById("house").focus();
        return false;
      } else {
        return true;
      }
    }
  </script>
</body>
</html>