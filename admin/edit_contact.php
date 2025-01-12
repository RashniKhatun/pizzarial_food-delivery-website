<?php
include("admin_function.php");
$user_id = base64_decode($_GET['uid']);
//echo $user_id;
$data = getContactDetails($user_id);

// echo"<pre>";
// print_r($data);
?>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
</head>

<body>
    <div class="container-fluid bg-secondary m-0 p-0">
            <!-- <div class="row">
            <div class=""> -->
           
            <div class="row edit_back">
                <div class="col-md-8 main_edit">
                <div class="text-center">
                <h2 class="text-light">Edit Contact</h2>
            </div>
                    <form action="edit_contact_action.php" class="needs-validation edit" novalidate="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="user_id" value="<?php echo $data['con_id']; ?>" />
                        <div class="row g-2">
                        <div class="col-12">
                                <label for="name" class="form-label text-light">Name</label>
                                <input type="text" class="form-control bg-secondary" name="name" id="name" placeholder="name" required="" value="<?php echo $data['name'] ?>">
                                <div class="invalid-feedback">
                                    Please enter your shipping name.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label text-light">Email </label>
                                <input type="email" class="form-control bg-secondary" name="email" id="email" placeholder="email" value="<?php echo $data['email'] ?>">
                                <div class="invalid-feedback">
                                    Please enter your food name.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="phone_no" class="form-label text-light">Phone Number</label>
                                <input type="tel" class="form-control bg-secondary" name="phone_no" id="phone_no" placeholder="phone no" value="<?php echo $data['phone_no'] ?>" >
                                <div class="invalid-feedback">
                                    Please enter phone_no.
                                </div>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label text-light">Customer Message</label>
                               <textarea class="form-control bg-secondary" id="message" name="message" rows="3" readonly><?php echo htmlspecialchars( $data['message']);?></textarea>
                               
                            </div>
                            <div class="col-12">
                                <label for="adminreply" class="form-label text-light">Your Reply</label>
                               <textarea class="form-control bg-secondary" id="adminreply" name="adminreply" rows="3" placeholder="Enter your reply here"></textarea>
                               
                            </div>
                        </div>
                        
                        
                        <hr class="my-4">
                        <button class="w-100 btn btn-warning btn-lg" type="submit" fdprocessedid="g2865" name="contactEditBtn">Submit</button><br>
                    </form>
                </div>
            </div>
            </div>
            </div>
    </div>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
    <span id="PING_IFRAME_FORM_DETECTION" style="display: none;"></span>
    <script type="text/javascript" src="assets/js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap-4.6.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
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