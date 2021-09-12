<?php
include('db.php');

if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$u_email = $_POST['user_email'];
	$u_phone = $_POST['user_phone'];
	$u_state = $_POST['state'];
	$add_by_user = $_POST['add_by_user'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];
	$u_pincode = $_POST['pincode'];
	$u_mother = $_POST['user_mother'];
	$description = $_POST['description'];
	
       

	$msg = "";

	
	
  	}

  	$insert_data = "INSERT INTO card_activation(name,  price, u_email, u_phone, u_state, add_by_user, created_at, updated_at, u_pincode, u_mother, description, staff_id,uploaded) VALUES ('$name','$price','$u_email','$u_phone','$u_state','$add_by_user','$created_at','$updated_at','$u_pincode','$u_mother','$description',NOW())";
  	$run_data = mysqli_query($con,$insert_data);

  	if($run_data){
  		header('location:index.php');
  	}else{
  		echo "Data not insert";
  	}


?>