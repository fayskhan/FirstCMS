<?php 

# Start the session

session_start();

if(!isset($_SESSION['username'])){
	
	header('Location: login.php');
	
	
	
}

echo $_SESSION['username'];
?>


<?php include('../config/connection.php'); ?>
<!DOCTYPE html>
<html>

	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php include('config/css.php'); ?>
		<?php include('config/js.php'); ?>
		
		<title><?php echo $page['title'].' | '.$site_title; ?></title>
		
	</head>

	<body>

		<?php include('template/navigation.php'); ?>

		
			<h1>Admin Dashboard</h1>
			<?php include('template/footer.php'); ?>

	</body>

</html>
