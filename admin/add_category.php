<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" type="text/css" href="assets/bootstrap-4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/dashboard.css">
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
    <div class="container-fluid">
      <div class="row my-4" style="margin: 22%; background-color:#000;">
        <div class=" col-md-12">
          <h1 class="text-center text-light">Add Category</h1>
          <form action="add_category_action.php" method="post" enctype="multipart/form-data">
            <div class="form-group from">
              <label for="category" class="text-light">Category</label>
              <input type="text" class="form-control btn btn-outline-light" style="text-align: left;" id="category" placeholder="category name" name="category">
            </div>
            
            <div class="row">
              
              <div class="form-group from col-md-6">
                <label for="category_status" class="text-light">Category Status:</label><br>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="available" value="available" class="form-check-input " name="category_status"><span class="text-white">Available</span>
                  </label>
                </div>
                <div class="form-check-inline">
                  <label class="form-check-label">
                    <input type="radio" id="unavailable" value="unavailable" class="form-check-input" name="category_status"><span class="text-white">Unavailable</span>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <label for="dob" class="form-label text-light">Profile Picture </label>
                <input type="hidden" name="old_img" value="<?php echo $data['image']; ?>" />
                <input type="file" class="form-control" id="pic" name="pic" accept="image/*"
                  onchange="viewImage(this)" />
              </div>
              <!-- <div class="mb-2 mt-2 row"> -->
              <!-- <div class="col-md-5">
                <img src="../assets/category_img/<?php echo $data['image'] != '' ? $data['image'] : 'no-img.jpg'; ?>" alt=" " style="height:100px;width:100px" id="view_profile_pic">
              
              </div> -->
            </div><br>
            <div class="form-group from">
              <button type="submit" class="btn btn-warning form-control" onclick="return formValidate();">Add</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
  <script>
    function formValidate() {
      let category = document.getElementById("category").value;
      
      
      if (category == "" || category == " ") {
        alert("Please Enter category name.....");
        document.getElementById("category").focus();
        return false;
      }
       else {
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