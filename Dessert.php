<?php
include("headerlink.php");
  include("headernav.php");
  ?>
  <section>
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="bg-banner"> -->
        <img src="assets/img/banner.png" class="banner" style="height: 280px; width:100%;margin:0px;padding:0px;">
        <h2 class="about-header text-center">Dessert</h2>
      <!-- </div> -->
    </div>
    <div class="row">
          <div class="col-md-12 main-header my-2">
            <main class="maincon">
              <div class="button-group">
              <a href="Menu.php"><button class="button active" data-filter="me" href=""><span class="text-white">All</span></button></a>
              <?php
            $allcatname=getAllCategoryShow();
            if (!empty($allcatname)) {
              foreach ($allcatname as $catdata) {
            ?>
            <a class="button" data-filter=".pizza" href="<?php echo $catdata['category']?>.php?cname=<?php echo $catdata['category']?>"><?php echo $catdata['category']?></a>
            <!-- <a class="button" data-filter=".pasta" href="burger.php">burger</a>
            <a class="button" data-filter=".desert" href="desert.php">Desert</a>
            <a class="button" data-filter=".desert" href="pasta.php">Pasta</a>
            <a class="button" data-filter=".drink" href="drinks.php">Drink</a>
            <a class="button" data-filter=".sides" href="sides.php">Sides</a> -->
            <?php }}?>
              </div>
            </main>
          </div>
        </div>
      <div class="row my-5">
      <?php
            $alldata=getFoodDetailbycat($_GET['cname']);
            if(empty($alldata))
            {
              echo "<h1>No Food</h1>";
            }
            else{
              foreach($alldata as $data)
              {
              
            ?>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" >
          <img src="assets/food_img/<?php echo $data['image'];?>" alt=" " class="menu-pic">
          <h2 class="txtcolor"><?php echo $data['food_name'];?></h2>
            
            
          <a href="foodquantity.php?fid=<?php echo $data['f_id']?>&fprice=<?php echo $data['price'];?>" >
            <p class="my-4"><button style="background-color: black;">Add <i class="fa-solid fa-plus"></i>
          </a>
          <span class="m-button" style="color: aliceblue;">&#8377;<?php echo $data['price']; ?></span>
          </button>
             <a  href="order.php?uid=<?php echo $data['f_id'];?>"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
        <?php
              }}
              ?>
        <!-- <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" >
            <img src="assets/img/vegb.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Mushroom Burger</h2>
            
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;149  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/bburger.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Turkey Burger</h2>
           
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;170  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" >
            <img src="assets/img/bb.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Vegan Burger</h2>
            
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;169  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
      </div>
      <div class="row my-4">
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" style="margin-top: 10%;">
            <img src="assets/img/cheeseb.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Chicken Burger</h2>
           
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;189  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" style="margin-top: 10%;">
            <img src="assets/img/bimg1.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Bacon burger</h2>
            
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;189  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" style="margin-top: 10%;">
            <img src="assets/img/vegb.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Beef Burger</h2>
           
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;199  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards" style="margin-top: 10%;">
            <img src="assets/img/bpic1.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Chicken Burger</h2>
          
             <p class="my-4"><button style="background-color:black;">Add <i class="fa-solid fa-plus"></i><span class="m-button" style="color: aliceblue;">&#8377;140  <span class="m-button1">&#8377;200</span></span></button>
             <a  href="order_pizza.php"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
            </p>
          </div>
        </div>
      </div> -->
    </div>
  </section>
  <?php
  include("footer.php");
  include("footerlink.php");
  ?>
  