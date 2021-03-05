<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>
<body>
	<?php  
	require 'config/config.php';


	if (isset($_SESSION['username'])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = mysqli_query($con, "SELECT * FROM users WHERE username='$userLoggedIn'");
	$user = mysqli_fetch_array($user_details_query);
	}
		else {
	header("Location: register.php");
	}
	?>

	<script>
		function toggle(){
			var element = document.getElementById("comment_section");

			if(element.style.display = "block")
				element.style.display = "none";
			else
				element.style.display = "block";
	</script>

	<?php
	if(isset($_GET['post_id'])){
		$post_id = $_GET['post_id'];
	}

	$user_query = mysqli_query($con, "SELECT added_by, user_to FROM posts WHERE id = '$post_id'");
	$row = mysqli_fetch_array($user_array);

	$posted_to = $row['added_by'];

	if(isset($_POST['postComment'.$post_id])){
		$post_body = $_POST['post_body'];
		$post_body = mysqli_escape_string($con, $post_body);
		$date_time_now = date("Y-m-d H:i:s");
		$insert_post = mysqli_query($con, "INSERT INTO")
	}
	?>

	<form action="comment_frame.php?post_id=<?= $post_id;?>" id="comment_form" name="postComment<?= $post_id; ?>" method="POST">
		
	</form>
</body>
</html>