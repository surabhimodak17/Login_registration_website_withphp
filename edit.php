<?php
include('db.php');

$id = $_GET['id'];

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$u_email = $_POST['user_email'];
	$u_phone = $_POST['user_phone'];
	$u_state = $_POST['state'];
	$add_by_user = $_POST['add_by_user'];
	$created_at = $_POST['created_at'];
	$updated_at = $_POST['updated_at'];
	$u_pincode = $_POST['pincode'];
	$description = $_POST['description'];
	
	$msg = "";
	$image = $_FILES['image']['name'];
	$target = "upload_images/".basename($image);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{$u_l_name = $_POST['user_last_name'];
  		$msg = "Failed to upload image";
	
  	}

	$update = "UPDATE card_activation SET  name = '$name', price = '$price',  u_email = '$u_email', u_phone = '$u_phone', u_state = '$u_state', add_by_user = '$add_by_user', created_at = '$created_at', updated_at = '$updated_at', u_pincode = '$u_pincode', description = '$description',  image = '$image' WHERE id=$id ";
	$run_update = mysqli_query($con,$update);

	if($run_update){
		header('location:index.php');
	}else{
		echo "Data not update";
	}
}

?>