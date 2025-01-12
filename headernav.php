<?php
include("function.php");
?>
 <section>
  <div class="container">
    <div class="row ">
      <nav class="navbar navbar-expand-lg navbar-light shadow py-1 fixed-top">
        <a class="navbar-brand " href="#">
          <h5 class="logo"><img src="assets/img/pizzariall.png" alt="" style="height: 50px; width:60px;">
            PIZZA<span style="color: #fac564;">RIAL</span></h5>
        </a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto d-lg-flex justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 navbar_size">
            <li class="nav-item">
              <a class="nav-link text-light" href="Home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="Menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="contact.php">Contact</a>
            </li>
            <li class="nav-item nav-link body">
              <a href="cart.php">
                <i class="fa-solid fa-cart-shopping text-light"></i></a>
              <span class="quantity" style="color: #fff;"><?php echo getAllCartno();?></span>
            </li>
          </ul>
          <ul>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white drop" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user text-light"></i></a>
              <?php if(isset($_SESSION['username']) ){
                echo  $_SESSION['name'] ;
              }
              elseif(isset($_SESSION['uname'])) {
                echo $_SESSION['uname'] ;
              }
              else{
                  echo "";
              } ?>
              <div class="dropdown-menu">
                <?php
                if (isset($_SESSION['username'])) {
                ?>


                  <a class="dropdown-item" href="profile.php">Profile</a>
                  
                  <a class="dropdown-item" href="logout.php">Logout</a>

                  <!-- <?php
                   //} else if ($_SESSION['username']) {
                  ?>
                   <a class="dropdown-item" href="profile.php">Profile</a>
                  
                   <a class="dropdown-item" href="logout.php">Logout</a> -->
                <?php
                } else {
                ?>
                  <a class="dropdown-item" href="login.php">Login</a>
                  <a class="dropdown-item" href="sign.php">Signup</a>
                <?php
                }
                ?>
              </div>
              
            </li>
          </ul>

        </div>
      </nav>


   
    </div>

  </div>

</section> 
<!-- ================cart================= -->
<!-- <div class="container">
  <div class="products"></div>
</div> -->
