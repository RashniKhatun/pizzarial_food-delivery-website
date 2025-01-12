<?php
include('../db_connection.php');

function getAllUsers()
{
	global $conn;
	$sql = "SELECT * FROM `registration`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}

function userDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `registration` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}

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
function UserUpdate($user_id, $name, $email, $gender,$image)
{
	global $conn;
	$sql = "UPDATE `registration` SET name='" . $name . "', email='" . $email . "',gender='" . $gender . "',image='".$image."' WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// =======================food===================
function getAllFood()
{
	global $conn;
	$sql = "SELECT * FROM `food`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function foodDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `food` WHERE f_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getFoodDetails($user_id)
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
function FoodUpdate($user_id, $food_name, $price, $stock_count,$food_status,$image)
{
	global $conn;
	$sql = "UPDATE `food` SET food_name='" . $food_name . "', price='" . $price . "',stock_count='" . $stock_count . "',food_status='".$food_status."',image='".$image."' WHERE f_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// =======================category===================
function getAllCategory(){
	global $conn;
	$sql = "SELECT * FROM `category`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function CategoryDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `category` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getCategoryDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `category` WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function CategoryUpdate($user_id, $category,$category_status,$image)
{
	global $conn;
	$sql = "UPDATE `category` SET category='" . $category . "',category_status='".$category_status."',image='".$image."' WHERE c_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// =======================service===================
function getAllService(){
	global $conn;
	$sql = "SELECT * FROM `service`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function ServiceDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `service` WHERE s_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getServiceDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `service` WHERE s_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function ServiceUpdate($user_id, $service,$service_status,$image)
{
	global $conn;
	$sql = "UPDATE `service` SET service='" . $service . "',service_status='".$service_status."',image='".$image."' WHERE s_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// =======================slider1===================
function getAllSlider1(){
	global $conn;
	$sql = "SELECT * FROM `slider1`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function Slider1Delete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `slider1` WHERE s1_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getSlider1Details($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `slider1` WHERE s1_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function Slider1Update($user_id, $slider1,$slider1_status,$image)
{
	global $conn;
	$sql = "UPDATE `slider1` SET slider1='" . $slider1 . "',slider1_status='".$slider1_status."',image='".$image."' WHERE s1_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// =====================slider2=====================
function getAllSlider2(){
	global $conn;
	$sql = "SELECT * FROM `slider2`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function Slider2Delete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `slider2` WHERE s2_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getSlider2Details($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `slider2` WHERE s2_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function Slider2Update($user_id, $slider2,$slider2_status,$image)
{
	global $conn;
	$sql = "UPDATE `slider2` SET slider2='" . $slider2 . "',slider2_status='".$slider2_status."',image='".$image."' WHERE s2_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// =====================contactus=====================
function getAllContact(){
	global $conn;
	$sql = "SELECT * FROM `contact_us`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function contactDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `contact_us` WHERE con_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
function getcontactDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `contact_us` WHERE con_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function contactUpdate($user_id, $name,$email,$phone_no,$message)
{
	global $conn;
	$sql = "UPDATE `contact_us` SET name='" . $name . "',email='".$email."',phone_no='".$phone_no."',message='".$message."' WHERE con_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	return $query ? true : false;
}
// ===================== order =====================
function getAllOrder(){
	global $conn;
	$sql = "SELECT * FROM `orderlist`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function getorderDetails($user_id)
{
	global $conn;
	$sql = "SELECT * FROM `orderlist` WHERE o_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);

	if (mysqli_num_rows($query)) {
		$data = mysqli_fetch_assoc($query);
		return $data;
	} else {
		return false;
	}
}
function orderDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `orderlist` WHERE o_id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}
// =====================pizza=====================
// function getAllPizza(){
// 	global $conn;
// 	$sql = "SELECT * FROM `pizza`";
// 	$query = mysqli_query($conn, $sql);
// 	if (mysqli_num_rows($query) > 0) {
// 		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
// 		return $data;
// 	} else {
// 		return false;
// 	}
// }
// function pizzaDelete($user_id)
// {
// 	global $conn;
// 	$sql = "DELETE FROM `pizza` WHERE p_id='" . $user_id . "'";
// 	$query = mysqli_query($conn, $sql);
// 	if ($query) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }
// function getPizzaDetails($user_id)
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
// function PizzaUpdate($user_id, $p_name, $price, $stock_count,$p_status,$image)
// {
// 	global $conn;
// 	$sql = "UPDATE `pizza` SET p_name='" . $p_name . "', price='" . $price . "',stock_count='" . $stock_count . "',p_status='".$p_status."',image='".$image."' WHERE p_id='" . $user_id . "'";
// 	$query = mysqli_query($conn, $sql);
// 	return $query ? true : false;
// }
// // ===================== order pizza =====================
// function getAllPizzaOrder(){
// 	global $conn;
// 	$sql = "SELECT * FROM `pizza_list`";
// 	$query = mysqli_query($conn, $sql);
// 	if (mysqli_num_rows($query) > 0) {
// 		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
// 		return $data;
// 	} else {
// 		return false;
// 	}
// }
// function getPizzaorderDetails($user_id)
// {
// 	global $conn;
// 	$sql = "SELECT * FROM `pizza_list` WHERE p_id='" . $user_id . "'";
// 	$query = mysqli_query($conn, $sql);

// 	if (mysqli_num_rows($query)) {
// 		$data = mysqli_fetch_assoc($query);
// 		return $data;
// 	} else {
// 		return false;
// 	}
// }
// function PizzaorderDelete($user_id)
// {
// 	global $conn;
// 	$sql = "DELETE FROM `pizza_list` WHERE p_id='" . $user_id . "'";
// 	$query = mysqli_query($conn, $sql);
// 	if ($query) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }
// =====================review=====================
function getAllreview(){
	global $conn;
	$sql = "SELECT * FROM `review`";
	$query = mysqli_query($conn, $sql);
	if (mysqli_num_rows($query) > 0) {
		$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $data;
	} else {
		return false;
	}
}
function ReviewDelete($user_id)
{
	global $conn;
	$sql = "DELETE FROM `review` WHERE id='" . $user_id . "'";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		return true;
	} else {
		return false;
	}
}

?>

