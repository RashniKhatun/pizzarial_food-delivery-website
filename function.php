<?php
include("db_connection.php");
function getAllFoodShow(){
    global $conn;
    $sql="SELECT * FROM `food` WHERE status=1 ORDER BY f_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function getAllPizzaShow(){
    global $conn;
    $sql="SELECT * FROM `pizza` WHERE status=1 ORDER BY p_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function getAllBurgerShow(){
    global $conn;
    $sql="SELECT * FROM `burger` WHERE status=1 ORDER BY b_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function getAllCategoryShow(){
    global $conn;
    $sql="SELECT * FROM `category` WHERE status=1 ORDER BY c_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}

function getAllServiceShow(){
    global $conn;
    $sql="SELECT * FROM `service` WHERE status=1 ORDER BY s_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function getAllSlider1Show(){
    global $conn;
    $sql="SELECT * FROM `slider1` WHERE status=1 ORDER BY s1_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function getAllSlider2Show(){
    global $conn;
    $sql="SELECT * FROM `slider2` WHERE status=1 ORDER BY s2_id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
function getFoodDetail($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `food` WHERE f_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function getFoodDetailbycat($cname)
{
	global $conn;
	$sql = "SELECT * FROM `food` WHERE cname='$cname'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
	} else {
		return false;
	}
}
// function getPizzaDetail($user_id)
// {
// 	global $conn;
// 	$sql = "SELECT * FROM `pizza` WHERE p_id='" . $user_id . "'";
// 	$query = mysqli_query($conn, $sql);

// 	if (mysqli_num_rows($query)) {
// 		$data = mysqli_fetch_assoc($query);
// 		return $data;
// 	} else {
// 		return false;
// 	}
// }

// ========================cart========================
function getAllCart(){
	global $conn;
	$sql = "SELECT cart.*,food.food_name,food.image,food.price FROM `cart` INNER JOIN `food`ON cart.f_id = food.f_id;";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function getAllCartno(){
	global $conn;
	$sql = "SELECT cart.*,food.food_name,food.image,food.price FROM `cart` INNER JOIN `food`ON cart.f_id = food.f_id;";
	$query = mysqli_query($conn, $sql);
    $count=mysqli_num_rows($query);
	
		
		return $count;
	
}
function getCartDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `cart` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function CartDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `cart` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
//-------------------- review ------------------
function getAllReviewShow(){
    global $conn;
    $sql="SELECT review.opinion, review.id,review.rating, registration.name, registration.image FROM review INNER JOIN registration ON review.user_id=registration.id ORDER BY review.id DESC";
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)){
        $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
        return $data;
    }
    else{
        return false;
    }
}
// function getAllUserShow($uid){
//     global $conn;
//     $sql="SELECT * FROM `registration` WHERE id=$uid ORDER BY id DESC";
//     $query=mysqli_query($conn,$sql);
//     if(mysqli_num_rows($query)){
//         $data=mysqli_fetch_all($query,MYSQLI_ASSOC);
//         return $data;
//     }
//     else{
//         return false;
//     }
// }
function getUserDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `registration` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
?>