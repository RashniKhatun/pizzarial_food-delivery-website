<?php
include("headerlink.php");
  include("headernav.php");
  // include("function.php");
  ?>
  <section>
  <div class="row">
      <div class="bg-banner">
        <img src="assets/img/banner.png" class="banner" style="height: 280px; width:1300px;">
        <h2 class="about-head text-center">Our Services</h2>
      </div>
  </div>
  </section>
<!-- <section>
    <div class="row my-4">
      <div class="col-md-12 services">
        <h2 class=" text-center service-line">OUR SERVICE</h2>
        <div class="col-md-12 text-light" style="padding-left: 15%; padding-right:15%">
        <p class="card-text text-light text-center">We offer free delivery on all ord ers, with no hidden fees or mini mum purchase required. 
            
            </p>
    </div>
      </div>
    </div>
    <div class="row my-4 py-2">
      <div class="col-md-4">
        <div class="service-card c1" style="width: 18rem; margin-left:20%;">
          <img src="assets/img/mobile1.png" class="card-img-top ser-img" alt="...">
          <div class="card-body">
            <h3 class="text-center txtcolor">Online Order</h3>
            <p class="card-text">Our online ordering system is qui ck, easy to use, and design to get your order just the way you like it.

            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card c2" style="width: 18rem;">
          <img src="assets/img/dimg1.jpg" class="card-img-top ser-img" alt="...">
          <div class="card-body">
            <h3 class="text-center txtcolor">Free Delivery</h3>
            <p class="card-text text-light">We offer free delivery on all ord ers, with no hidden fees or mini mum purchase required. 
            
          </p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="service-card c3" style="width: 18rem;">
          <img src="assets/img/dimg3.jpeg" class="card-img-top ser-img" alt="...">
          <div class="card-body">
            <h3 class="text-center txtcolor">Freash Food</h3>
            <p class="card-text text-light">we handpick local produce, use premium cheeses, and make our dough from scratch daily.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-4">
        <h5 class="text-center">Select Delivery or Takeaway to see local detals</h5>
      </div>
      <div class="col-md-6">
        <a href="location1.html">
          <div class="box5">

            <h2 class="text-light">
              
              Delevery <span class="arro">
                <i class="fa-solid fa-location-dot"></i></span>
            </h2>
            <h6 class="loc text-light">Let us know your location</h6>
          </div>
        </a>
      </div>
      <div class="col-md-6">
        <a href="location2.html">
          <div class="box5">
            <h2 class="text-light">
             
              Takaway<span class="arro"><i class="fa-solid fa-location-dot"></i></span>
            </h2>
            <h6 class="loc text-light">Find your nearest hut</h6>
          </div>
        </a>
      </div>
    </div>

    </div>
  </section> -->
  <section>
  <div class="row my-4 ">
    <div class="col-md-12 services">
      <h2 class=" text-center service-line" style="color: #fac564; font-weight:bold">OUR SERVICE</h2>
        <div class="col-md-12 text-light" style="padding-left: 15%; padding-right:15%">
      <p class="text-center">We believe that great food should be paired with equally great service. Our team is dedicated to creating an enjoyable dining experience, whether you’re dining in, ordering takeout, or enjoying our speedy delivery.</p>
    </div>
    </div>
  </div>
  <div class="row my-4 py-2">
  <?php 
        $alldata=getAllServiceShow();
        if(!empty($alldata)){
          foreach($alldata AS $data){
            ?>
    <div class="col-md-4">
      <div class="service-card caard" style="width: 18rem;">
        <img src="assets/service_img/<?php echo $data ['image'];?>" class="card-img-top ser-img" alt="...">
        <div class="card-body">
          <h3 class="text-center" style="color: #fac564; font-weight:bold"><?php echo $data ['service'];?></h3>
          <p class="card-text text-light">From food delivery to curated sele ctions, we focus on bringing conv enience and quality directly to you. </p>
        </div>
      </div>
    </div>
    <?php
          }
        }
        ?>
    <!-- <div class="col-md-4">
      <div class="service-card c2" style="width: 18rem;">
        <img src="assets/img/dimg1.jpg" class="card-img-top ser-img" alt="...">
        <div class="card-body">
          <h3 class="text-center" style="color: #fac564; font-weight:bold">Free Delivery</h3>
          <p class="card-text text-light">We offer free delivery on all ord ers, with no hidden fees or mini mum purchase required. 
            
          </p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="service-card c3" style="width: 18rem;">
        <img src="assets/img/de1.jpg" class="card-img-top ser-img" alt="...">
        <div class="card-body">
          <h3 class="text-center" style="color: #fac564; font-weight:bold">Freash Food</h3>
          <p class="card-text text-light">we handpick local produce, use premium cheeses, and make our dough from scratch daily.</p>
        </div>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-12 my-4">
      <h5 class="text-center">Select Delivery or Takeaway to see local detals</h5>
    </div>
    <div class="col-md-6">
      <a href="location1.html">
        <div class="box5">

          <h2 class=" "  style="color:#fac564; font-weight:bold">
            
            Delevery <span class="arro">
              <i class="fa-solid fa-location-dot text-warning"></i></span>
          </h2>
          <h6 class="loc text-light">Let us know your location</h6>
        </div>
      </a>
    </div>
    <div class="col-md-6">
      <a href="location2.html">
        <div class="box5">
          <h2 class="" style="margin-left: 10px; color:#fac564; font-weight:bold">
            
            Takaway<span class="arro"><i class="fa-solid fa-location-dot text-warning"></i></span>
          </h2>
          <h6 class="loc text-light">Find your nearest hut</h6>
        </div>
      </a>
    </div>
  </div>
</section>
  <?php
  include("footer.php");
  include("footerlink.php");
  ?>