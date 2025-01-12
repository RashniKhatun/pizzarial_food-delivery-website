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
            <h1 class="text-center text-light">SIGN UP</h1>
            <form action="action_page.php" method="post" enctype="multipart/form-data">
              <div class="form-group from">
                <label for="uname" class="text-light">What's your name?</label>
                <input type="text" class="form-control btn btn-outline-light" style="text-align: left;" id="uname" placeholder="fullname" name="uname">
              </div>
              <div class="form-group from">
                <label for="uemail" class="text-light">What's your Email address?</label>
                <input type="email" class="form-control btn btn-outline-light" style="text-align: left;" id="uemail" aria-describedby="emailHelp"
                  placeholder="E-mail" name="uemail">
              </div>
              <div class="form-group from">
                <label for="upassword" class="text-light">Password</label>
                <input type="password" class="form-control btn btn-outline-light" style="text-align: left;" id="upassword" placeholder="Password"
                  name="upassword">
              </div>
              <div class="form-group from">
                <label for="ut" class="text-light">Phone Number</label>
                <input type="tel" class="form-control btn btn-outline-light" style="text-align: left;" id="ut" placeholder="123-4567-8901" name="ut">
              </div>
              <div class="row">
                <div class="col-md-5 from">
                  <label for="dob" class="form-label text-light">Profile Picture </label>
                </div>
                <div class="col-md-5 for_pic">
                  <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                  <input type="file" class="form-control" id="pic" name="pic" accept="image/*"
                    onchange="viewImage(this)">
                </div>
                <!-- <div class="mb-2 mt-2 row"> -->
                <!-- <div class="col-md-5">
                            <img src="assets/user_img/<?php //echo $data['image'] !='' ? $data['image'] : 'no-img.jpg'; 
                                                      ?>" alt=" " style="height:100px;width:100px" id="view_profile_pic">
                              
                            </div> -->
              </div><br>
              <div class="form-group from">
                <button type="submit" class="btn btn-warning form-control" onclick="return formValidate();">Signup</button>
              </div>
              <div>
                <a href=" " class="text-light from">Already have an Account?</a>
                <a href="login.php" class="text-warning">Login</a>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <h2 class="colum text-center text-light">Information</h2>
            <p class="text-center text-light">We are providing online and offline service.</br>Register Now for getting quick service.</p>
            <img src="assets/img/sign2.jpg" style="height: 62%; width:78%;">
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
      let uname = document.getElementById("uname").value;
      let uemail = document.getElementById("uemail").value;
      let upassword = document.getElementById("upassword").value;
      let ut = document.getElementById("ut").value;
      let email_pattern = /^[A-Za-z0-9.-_+/]+@[A-za-z]+\.[A-Za-z]{2,}/;
      let tel_pattern = /^\d{10}$/;
      if (uname == "" || uname == " ") {
        alert("Please Enter name.....");
        document.getElementById("uname").focus();
        return false;
      } else if (uemail == "" || uemail == " ") {
        alert("Please Enter email.....");
        document.getElementById("uemail").focus();
        return false;
      } else if (!uemail.match(email_pattern)) {
        alert("Please Enter name.....");
        document.getElementById("uname").focus();
        return false;
      } else if (upassword == "" || upassword == " ") {
        alert("Please enter your password...");
        document.getElementById("upassword").focus();
        return false;
      } else if (ut == "" || ut == " ") {
        alert("Please enter your phone number...");
        document.getElementById("ut").focus();
        return false;
      } else if (!ut.match(tel_pattern)) {
        alert("Please enter your valid phone number...");
        document.getElementById("ut").focus();
        return false;
      } else {
        return true;
      }
    }

    function viewImage(input) {
      if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = function(e) {
          $("#view_profile_pic")
            .attr("src", e.target.result)
            .height(100)
            .width(100);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
</body>

</html>