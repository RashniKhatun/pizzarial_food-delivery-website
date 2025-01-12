<?php
include("headerlink.php");
include("headernav.php");
// include("function.php");
// include('function.php');
?>
<!--============= slider =============-->
<section>
  <div class="slider">
    <div class="list">
      <?php
      $alldata = getAllSlider1Show();
      if (!empty($alldata)) {
        foreach ($alldata as $data) {
      ?>
          <div class="item active">
            <img src="assets/slider_img/<?php echo $data['image']; ?>">
            <div class="content">
              <h2><?php echo $data['slider1']; ?></h2>
              <p>
                Welcome to our pizzarial, where we serve handcrafted pizzas, juicy burgers, and mouth-watering pasta made with the freshest ingredients.
              </p>
            </div>
          </div>
      <?php
        }
      }
      ?>
      <!-- <div class="item">
        <img src="assets/img/beefb.webp">
        <div class="content">

          <h2><span style="color: #fac564;">B</span>urger</h2>
          <p>
           Welcome to our pizzarial, where we serve handcrafted pizzas, juicy burgers, and mouth-watering pasta made with the freshest ingredients.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="assets/img/ert.jpg">
        <div class="content">

          <h2><span style="color: #fac564;">D</span>essert</h2>
          <p>
           Welcome to our pizzarial, where we serve handcrafted pizzas, juicy burgers, and mouth-watering pasta made with the freshest ingredients.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="assets/img/pimg4.jpg">
        <div class="content">

          <h2><span style="color: #fac564;">P</span>epsi</h2>
          <p>
           Welcome to our pizzarial, where we serve handcrafted pizzas, juicy burgers, and mouth-watering pasta made with the freshest ingredients.
          </p>
        </div>
      </div>
      <div class="item">
        <img src="assets/img/img5.avif">
        <div class="content">

          <h2><span style="color: #fac564;">O</span>thers</h2>
          <p>
           Welcome to our pizzarial, where we serve handcrafted pizzas, juicy burgers, and mouth-watering pasta made with the freshest ingredients.
          </p>
        </div>
      </div> -->
    </div>
    <!-- button arrows -->
    <div class="arrows">
      <button id="prev">
        < <button id="next">>
      </button>
    </div>
    <!-- thumbnail -->
    <div class="thumbnail">
      <?php
      $alldata = getAllSlider2Show();
      if (!empty($alldata)) {
        foreach ($alldata as $data) {
      ?>
          <div class="item active">
            <img src="assets/slider_img/<?php echo $data['image']; ?>">
            <div class="content">
              <?php echo $data['slider2']; ?>
            </div>
          </div>
          <!-- <div class="item">
        <img src="assets/img/beefb.webp">
        <div class="content">
          Burger
        </div>
      </div>
      <div class="item">
        <img src="assets/img/ert.jpg">
        <div class="content">
          Dessert
        </div>
      </div>
      <div class="item">
        <img src="assets/img/pimg4.jpg">
        <div class="content">
          Drink
        </div>
      </div>
      <div class="item">
        <img src="assets/img/img5.avif">
        <div class="content">
          Others
        </div>
      </div> -->
      <?php
        }
      }
      ?>
    </div>

  </div>
</section>
<!--============ about us =============-->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6 my-2 py-2 ">
        <h2 class="line text-right us" style="font-weight:bold; color:#fac564">ABOUT US</h2>
        <h6 class="about text-light">At Pizzarial, we believe that great food brings people together, and we strive to create a welcoming space for friends, families, and pizza enth usiasts alike. Join us for a slice (or two) and experience the perfect ble nd of great food and friendly vibes.
          Our all foods are handmade, with dough that’s risen to perfection and topped with the freshest local ingre dients. Whether you’re a fan of classic Margherita or love experimentig with bold, new flavors, we have something to satisfy every craving.</h6>
        <a href="about.php" class="btn btn-outline-warning py-1 px-4 now">Show more</a>
      </div>
      <div class="col-md-6">

        <img src="assets/img/img6.png" alt="" class="picture">

      </div>
    </div>
  </div>
</section>
<!--========== our service ============-->
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
    $alldata = getAllServiceShow();
    if (!empty($alldata)) {
      foreach ($alldata as $data) {
    ?>
        <div class="col-md-4">
          <div class="service-card caard" style="width: 18rem;">
            <img src="assets/service_img/<?php echo $data['image']; ?>" class="card-img-top ser-img" alt="...">
            <div class="card-body">
              <h3 class="text-center" style="color: #fac564; font-weight:bold"><?php echo $data['service']; ?></h3>
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

          <h2 class=" " style="color:#fac564; font-weight:bold">

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

<!--=========== hot deals =============-->
<!-- <section>
  <div class="row my-4">
    <div class="col-md-12">
      <h1 class="service-line text-center services" style="color: #fac564; font-weight:bold">HOT DEALS</h1>
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner deal">
          <div class="carousel-item active">
            <img src="assets/img/deal4.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/deal2.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/deal3.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/deal4.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/deal5.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/deal6.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="assets/img/deal3.jpg" class="d-block w-100 d-img" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </button>
      </div>
    </div>
  </div>
</section> -->
<!--============ our menu =============-->
<section>
  <div class="row my-4">
    <div class="col-md-12 services">
      <h2 class="service-line text-center" style="color: #fac564; font-weight:bold">OUR CATEGORY</h2>
    </div>
  </div>
  <div class="container1">
    <?php
    $alldata = getAllCategoryShow();
    if (!empty($alldata)) {
      foreach ($alldata as $data) {
    ?>
        <div class="card">
          <div class="face front">
            <img src="assets/category_img/<?php echo $data['image']; ?>" alt="" />
            <h3 style="color: #fac564; font-weight:bold"><?php echo $data['category']; ?></h3>
          </div>
          <div class="face back">
            <h3 style="color: #fac564; font-weight:bold"><?php echo $data['category']; ?></h3>
            <p>
              Our pizzas are loaded with rich toppings, burgers are juicy and satisfying, and pastas are perfe ctly sauced. Treat yourself to our delightful desserts and refresh ing drinks for the perfect finish to your meal. Each bite is made to bring joy and quality to your dining experience.
            </p>
            <a href="Menu.php" class="btn btn-outline-warning py-1 px-5 s-menu">Show All</a>
          </div>
        </div>
    <?php
      }
    }
    ?>
    <!-- <div class="card">
      <div class="face front">
        <img src="assets/img/picture3.avif" alt="" />
        <h3 style="color: #fac564; font-weight:bold">Pastas</h3>
      </div>
      <div class="face back">
        <h3 style="color: #fac564; font-weight:bold">Pastas</h3>
        <p>
        Discover our flavorful pasta dish es, from classic Spaghetti Bolo gnese to rich Fettuccine Alfredo. Savor the spice of Penne Arrabb iata or enjoy a fresh twist with Pesto Linguine. Each dish is crafted with the finest ingredients for an authentic Italian experience.
        </p>
        <a href="pasta.php" class="btn btn-outline-warning py-1 px-5 s-menu">Show All</a>
      </div>
    </div>
    <div class="card">
      <div class="face front">
        <img src="assets/img/pic2.avif" alt="" />
        <h3 style="color: #fac564; font-weight:bold">Desserts</h3>
      </div>
      <div class="face back">
        <h3 style="color: #fac564; font-weight:bold">Desserts</h3>
        <p>
        Indulge in our sweet selection, crafted to satisfy every craving. From rich chocolate delights to light fruity creations, we have something for every sweet tooth. Each dessert is made with fresh ingredients and a touch of love.
        </p>
        <a href="desert.php" class="btn btn-outline-warning py-1 px-5 s-menu">Show All</a>
      </div>
    </div>
    <div class="card">
      <div class="face front">
        <img src="assets/img/bburger.jpg" alt="" />
        <h3 style="color: #fac564; font-weight:bold">Burger</h3>
      </div>
      <div class="face back">
        <h3 style="color: #fac564; font-weight:bold">Burger</h3>
        <p>
        Sink your teeth into our juicy, handcrafted burgers made from premium ingredients. From clas sic beef to creative veggie optio ns, there’s something for every burger lover. Each burger is gril led to perfection and topped with fresh, flavorful ingredients.
        </p>
        <a href="burger.php" class="btn btn-outline-warning py-1 px-5 s-menu">Show All</a>
      </div>
    </div>
    <div class="card">
      <div class="face front">
        <img src="assets/img/pic4.jpg" alt="" />
        <h3 style="color: #fac564; font-weight:bold">Drinks</h3>
      </div>
      <div class="face back">
        <h3 style="color: #fac564; font-weight:bold">Drinks</h3>
        <p>
        Quench your thirst with our refre shing drink selections. From han dcrafted cocktails to freshly squ eezed juices, there’s a perfect drink for every mood. Enjoy our expertly brewed coffee or indu lge in our fine wine collection.
        </p>
        <a href="drinks.php" class="btn btn-outline-warning py-1 px-5 s-menu">Show All</a>
      </div>
    </div>
    <div class="card">
      <div class="face front">
        <img src="assets/img/ff1.avif" alt="" />
        <h3 style="color: #fac564; font-weight:bold">Sides</h3>
      </div>
      <div class="face back">
        <h3 style="color: #fac564; font-weight:bold">Sides</h3>
        <p>
        Our sides are the perfect comple ment to any meal. From crispy fri es to fresh salads, each option is crafted with quality ingredient. Satisfy your cravings with a varie ty of flavors and textures.
        </p>
        <a href="sides.php" class="btn btn-outline-warning py-1 px-5 s-menu">Show All</a>
      </div>
    </div> -->

  </div>
  <a href="Menu.php" class="text-warning view">View menu</a>
</section>
<!--============= counter ==============-->
<section>
  <div class="counter mt-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3 mb-lg-0 mb-mb-0 mb-5">
          <h1>
            <span id="count1"></span>+
          </h1>
          <p>Happy Customer</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-mb-0 mb-5">
          <h1>
            <span id="count2"></span>+
          </h1>
          <p>New Customer</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-mb-0 mb-5">
          <h1>
            <span id="count3"></span>+
          </h1>
          <p>Five Star Rating</p>
        </div>
        <div class="col-md-3 mb-lg-0 mb-mb-0 mb-5">
          <h1>
            <span id="count4"></span>+
          </h1>
          <p>Order</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--========= customer review ===========-->
<section>
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center">
        <h6 class="text-center text-light px-3">Testimonial</h6>
        <h1 class="mb-5" style="color: #fac564; font-weight:bold">Customer Review</h1>
      </div>

      <div class="owl-carousel owl-theme owl-loaded owl-drag" id="testimonial">

        <div class="owl-stage-outer">
          <div class="owl-stage"
            style="transform: translate3d(-1211px, 0px, 0px); transition: all 0s ease 0s; width: 4845px;">
            <?php
            /* $alldata=getAllReviewShow();
        if(!empty($alldata)){
          foreach($alldata AS $data){*/
            ?>
            <?php
            $alldata2 = getAllReviewShow();
            if (!empty($alldata2)) {
              foreach ($alldata2 as $data) {
            ?>

                <div class="owl-item testimonial-item  text-center border p-4 active">
                  <img src="assets/user_img/<?php echo $data['image']; ?>" class="d-block bg-warning rounded-circle shadow p-1 mx-auto mb-3"
                    style="width: 100px;height: 100px;" alt="...">
                  <h5 class="mb-0"><?php echo $data['name']; ?></h5>
                  <div>
                    <span class="star text-warning">
                      <span class="star text-warning">
                        <?php
                        // Display filled stars for rating
                        for ($i = 1; $i <= $data['rating']; $i++) {
                          echo "<i class='ri-star-fill'></i>";  // Filled star
                        }
                        // Display empty stars if rating is less than 5
                        for ($i = $data['rating'] + 1; $i <= 5; $i++) {
                          echo "<i class='ri-star-line'></i>";  // Empty star
                        }
                        ?>
                      </span>


                    </span>
                  </div>

                  <p class="mb-0"><?php echo $data['opinion']; ?> </p>

                </div>
            <?php
              }
            }
            ?>

          </div>
        </div>

      </div>
    </div>

  </div>
</section>
<!--============ Contact us ============-->
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
          <input type="tel" class="form-control btn btn-outline-light"
            placeholder="phone number" name="phone_no" id="phone_no">
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
<!--=========== Back to Top ===========-->
<a href="#arrow" class="btn btn-primary  btn-lg-square rounded-circle back-to-top "><i class="fa fa-arrow-down" style="width: 20px;"></i></a>
<!--============== footer ===============-->
<?php
include("footer.php");
include("footerlink.php");
?>