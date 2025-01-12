<?php
include("headerlink.php");
include("headernav.php");
// include("function.php");

?>
<section>
  <div class="container-fluid">
    <div class="row">
      <!-- <div class="bg-banner"> -->
      <img src="assets/img/banner.png" class="banner" style="height: 280px; width:100%;margin:0px;padding:0px;">
      <h2 class="about-header text-center">Our Menu</h2>
      <!-- </div> -->
    </div>
    <div class="row my-2 py-2 menup">
      <div class="col-md-6 my-5">
        <h1 class="t-menu">MENU</h1>
        <p class="menu-color">At Pizza Pie Café we live and breathe good pizza. From the fresh ingredients on the
          salad bar until your last bite of dessert, we work to ensure your meal is delicious.</p>
        <h3 class="t-menu">Salad Bar.........</h3>
        <p class="menu-color">Start your meal off right with our famous salad bar. The wide selection of toppings allows you to make an
          appetizer that will whet anyone's appetite. Just be careful to save room for the main course.</p>
        <h3 class="t-menu">Pasta Bar..........</h3>
        <p class="menu-color">Choose between several sauces and noodle types to construct a pasta dish just for you, and watch it get
          prepared right then.</p>
        <h3 class="t-menu">Pizza..........</h3>
        <p class="menu-color"> Don't settle for just one kind of pizza; There are several available at any time, with more constantly being
          prepared. Play it safe with the cheese pizza, or be adventurous and try something you've never had before.</p>
        <h3 class="t-menu">Dessert..........</h3>
        <p class="menu-color">Have you saved room? You're going to want to make room, because our dessert pizzas aren't to be missed.
          We offer a variety of Gluten Free Pizza, Pasta, Salad & Dessert Pizza options.
        </p>
      </div>
      <div class="col-md-6 menu-image">
        <img src="assets/img/menup.jpg" class="menu-p">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 main-header">
        <main class="maincon">
          <div class="button-group">
            <button class="button active" data-filter="me" href="">All</button>
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
</section>
<!-- <h1 class="m-pizza linee">All Food</h1> -->
<div class="row my-4 py-4">
  <?php
  $alldata = getAllFoodShow();
  if (!empty($alldata)) {
    foreach ($alldata as $data) {
  ?>


      <div class="col-lg-3 col-md-3 col-6">
        <div class="cards" style="margin-top: 10%;">
          <img src="assets/food_img/<?php echo $data['image']; ?>" alt=" " class="menu-pic">
          <h2 class="txtcolor"><?php echo $data['food_name']; ?></h2>
          <!-- <a href="addcart.php?fid=<?php //echo $data['f_id']; 
                                        ?>"> -->

          <a href="foodquantity.php?fid=<?php echo $data['f_id']?>&fprice=<?php echo $data['price'];?>" >
            <p class="my-4"><button style="background-color: black;">Add <i class="fa-solid fa-plus"></i>
          </a>
          <span class="m-button" style="color: aliceblue;">&#8377;<?php echo $data['price']; ?></span>
          </button>


          <a href="order.php?uid=<?php echo $data['f_id']; ?>"> <button class="my-2" style="width:70%; background-color: #fac564;">Order Now</button></a>
          </p>
        </div>
      </div>
  <?php
    }
  }
  ?>

  <!-- <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/tp6.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Buffalo Chicken</h2>
           
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/pimg.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Meat Pizza</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/pimg2.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Veggie Pizza</h2>
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div> -->
</div>
<!-- <a href="pizza.php"><span class="view">view all</span></a> -->
<!-- <h1 class="m-pizza linee">BURGER</h1>
      <div class="row my-4">
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/b1.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Pepperoni Pizza</h2>
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/vegb.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Buffalo Chicken</h2>
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/bburger.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Meat Pizza</h2>
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/bb.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Veggie Pizza</h2>
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
      </div>
      <a href="burger.php"><span class="view">view all</span></a>
      <h1 class="m-pizza linee">DESERT</h1>
      <div class="row my-4">
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/de1.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Fanta</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/de2.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Sprite</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/red valvate.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Mirinda</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/image2.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Pepsi</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
      </div>
      <a href="desert.php"><span class="view">view all</span></a>
      <h1 class="m-pizza linee">Pasta</h1>
      <div class="row my-4">
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/pasta-1.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Arrabita Pasta</h2>
             <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400  <span class="m-button1">&#8377;400</span></span></button></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/pasta-2.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Chicken Pasta</h2>
            
             <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400  <span class="m-button1">&#8377;400</span></span></button></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/pasta-3.jpg" alt=" " class="menu-pic">
            <h2 class="txtcolor">Italian Pasta</h2>
            
             <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400  <span class="m-button1">&#8377;400</span></span></button></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/picture3.avif" alt=" " class="menu-pic">
            <h2 class="txtcolor">Masala Pasta</h2>
            
             <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400  <span class="m-button1">&#8377;400</span></span></button></p>
          </div>
        </div>
      </div>
      <a href="pasta.php"><span class="view">view all</span></a>
      <h1 class="m-pizza linee">Drinks</h1>
      <div class="row my-4">
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/f1.png" alt=" " class="menu-pic">
            <h2 class="txtcolor">Fanta</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/f2.png" alt=" " class="menu-pic">
            <h2 class="txtcolor">Sprite</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/m2.webp" alt=" " class="menu-pic">
            <h2 class="txtcolor">Mirinda</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-6">
          <div class="cards">
            <img src="assets/img/pepsi3.png" alt=" " class="menu-pic">
            <h2 class="txtcolor">Pepsi</h2>
            
            <p class="my-4"><button>Add <span class="m-button" style="color: aliceblue;">&#8377;400 <span class="m-button1">&#8377;400</span></span></button>
            </p>
          </div>
        </div>
      </div>
      <a href="drinks.php"><span class="view">view all</span></a> -->
<!-- </div> -->
</section>
<?php
include("footer.php");
include("footerlink.php");
?>
