<?php
session_start();

include("function.php");
$id = $_SESSION['id'];
$data = getUserDetails($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: rgb(223, 233, 243);
        }

        /* Profile Container */
        .profile-container {
            position: relative;
            width: 400px;
            border-radius: 15px;
            background-color: #ffffff;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            text-align: center;
        }

        /* Close Button */
        .close-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 18px;
            cursor: pointer;
            color: #888;
            transition: color 0.3s ease;
        }

        .close-btn:hover {
            color: #333;
        }

        /* User Photo */
        .profile-photo {
            margin-top: 20px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            border: 3px solid #ffffff;
            background-color: #ddd;
        }

        /* User Name and Info */
        .user-name {
            margin-top: 10px;
            font-size: 20px;
            color: #333;
            font-weight: bold;
        }

        .user-email,
        .user-id,
        .user-role {
            font-size: 14px;
            color: #666;
            margin-top: 5px;
        }

        .user-role strong {
            font-weight: bold;
            color: #333;
        }

        /* Links Section */
        .profile-links {
            margin: 15px 0;
        }

        .link {
            text-decoration: none;
            color: #007bff;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .link:hover {
            color: #0056b3;
        }

        .dot {
            margin: 0 5px;
            color: #999;
        }

        /* Buttons Section */
        .profile-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-secondary {
            background-color: #f0f0f0;
            color: #333;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .btn-secondary:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>

<body>
    <div class="profile-container">
        <div class="profile-card">
            <!-- Close button -->
            <div class="close-btn" onclick="closeProfile()">&#x2715;</div>

            <!-- User Photo -->
            <img src="assets/user_img/<?php echo $data['image'] != '' ? $data['image'] : 'no-image.jpg' ?>" alt="mdo" class="rounded-circle mt-6 profile-photo" style="margin-top:50px;">

            <!-- User Details -->
            <h2 class="user-name"><?php echo  $_SESSION['name'];?></h2>
            <p class="user-email"><?php echo  $_SESSION['email'];?></p>
             <p class="user-id"><?php echo " User ID:". $_SESSION['id'];?></p>
            <!-- <p class="user-role"><?php //echo " Address:". $_SESSION['address'];?></p> -->

            <!-- Links -->
            <div class="profile-links">
                <a href="#" class="link">Control Panel</a>
                <span class="dot">•</span>
                <a href="#" class="link">Subscription</a>
            </div>

            <!-- Buttons -->
            <div class="profile-buttons">
                <button class="btn">My account</button>
                <a href="logout.php"><button class="btn btn-secondary">Sign out</button></a>
            </div>
        </div>
    </div>
    <script>
        // Function to simulate closing the profile card
        function closeProfile() {
            const profileCard = document.querySelector('.profile-container');
            profileCard.style.display = 'none';
            alert("Profile closed.");
            window.location.href = 'index.php';
        }
    </script>

</body>

</html>