<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
</head>

<body style="background-color: black;">
  <section>
    <div class="container1">
      <div class="row" style="margin-left: 30%; margin-top:8%; border:2px solid #fac564; margin-right:30%;">
        <div class="col-md-12">
          <div class="">
            <div class="">
              <div class="p-3 mb-2 text-white " >
                <h3 class="text-center">ADMIN LOGIN</h3>
                <form action="admin_login_action.php" method="post" >
                  <div class="form-group">
                    <label for="email">What's your Email address?</label>
                    <input type="email" class="form-control bg-transparent " id="email"
                      aria-describedby="emailHelp" placeholder="E-mail" name="email">

                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control bg-transparent" id="password" name="password"
                      placeholder="Password">
                  </div>

                  <!-- <div class="form-group">
                    <div class="form-group form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    </div> -->
                    <button type="submit"  style="background-color: #fac564;" class=" form-control" name="adminloginbtn" value="adminloginbtn">submit</button>
                  
                  <div>
                    <!-- <a href="sign.php" class="text-white" >Create Account</a> -->
                    <!-- <a href="Home.html" class="log text-white">Go to home</a> -->
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>