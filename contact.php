<?php
include("headerlink.php");
include("headernav.php");
?>
<section>
  <div class="row">
    <div class="bg-banner">
      <img src="assets/img/banner.png" class="banner" style="height: 280px; width:1300px;">
      <h2 class="about-head text-center">Contact Us</h2>
    </div>
  </div>
</section>
<section>
  <h2 class="text-center" style="color: #fac564; font-weight:bold">Contact with us!
  </h2>
  <div class="row my-5 py-5">
    <div class="col-md-6">
      <img src="assets/img/bp4.avif" class="contact-image">
    </div>
    <div class="col-md-4  contact-form1">

      <form action="contact_action.php" method="post" enctype="multipart/form-data">
        <div class="form-floating text-left">
          <!-- <label for="name" class="text-white">Your Name</label> -->
          <input type="text" class="form-control btn btn-outline-light" id="name" name="name"
            aria-describedby="emailHelp" placeholder="Enter your name">
        </div></br>
        <div class="form-floating">
          <!-- <label for="email" class="text-white">Your Email</label> -->
          <input type="text" class="form-control btn btn-outline-light" id="email" name="email"
            aria-describedby="emailHelp" placeholder="Enter your email id">
        </div></br>
        <div class="form-floating">
          <!-- <label for="tel" class="text-white">Phone Number</label> -->
          <input type="tel" class="form-control btn btn-outline-light" placeholder="phone number" name="phone_no" id="phone_no">
        </div><br>
        <div class="form-group">
          <!-- <label for="exampleFormControlTextarea1" class="text-white">Message</label> -->
          <textarea class="form-control btn btn-outline-light" name="message" required="required"
            rows="3" style="width: 100%;" placeholder="message"></textarea>
        </div>
        <!-- <div class="form-group">
          <textarea name="message" id="" class="form-control btn btn-outline-light" placeholder="message" rows="3" style="width: 100%;" > 

          </textarea>
        </div> -->
        <div class="d-flex pt-2 ">Follow us:
            <a href="https://www.facebook.com" class=" btn-social fb p-1" style="color: #fac564;">
              <i class="ri-facebook-line"></i>
            </a>
            <a href="https://www.instagram.com" class=" btn-social insta p-1" style="color: #fac564;">
              <i class="ri-instagram-line"></i>
            </a>
            <a href="https://www.tiwtter.com" class=" btn-social tiwtter p-1" style="color: #fac564;">
              <i class="ri-twitter-line"></i>
            </a>
            <a href="https://www.linkedin.com" class=" btn-social linkedin p-1" style="color: #fac564;">
              <i class="ri-linkedin-line"></i>
            </a>
          </div>
        <div class="submet">
          <input type="submit" name="contactbtn" placeholder="" class="btn btn-outline-warning" value="Submit">
        </div>
      </form>
    </div>
  </div>
</section>
    <?php
    include("footer.php");
    include("footerlink.php");
    ?>