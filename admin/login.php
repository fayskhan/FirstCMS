<?php
include ('config/setup.php');
 ?>
<!DOCTYPE html>
<html>

	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		include ('config/css.php');
 ?>
		<?php
		include ('config/js.php');
 ?>
		
		<title><?php echo $page['title'] . ' | ' . $site_title; ?></title>
		
	</head>

	<body>

		<?php
		include ('template/navigation.php');
 ?>

		
			
			
			<div class="container">
				
				<div class="row">
					
					<div class="col-md-4 col-md-offset-4">

						<div class="panel panel-info">
							
							<div class="panel-heading">
								
								<h4>Please Login</h4>
							</div>
							
						<div class="panel-body">
							
							<?php
							session_start();
							
							if($_POST){
								
								$q = "SELECT * FROM users WHERE email='$_POST[email]' AND password= sha1('$_POST[password]')";
								
								$r = mysqli_query($dbc, $q);
								
								
								
								if(mysqli_num_rows($r) == 1) {
									
									$_SESSION['username'] = $_POST['email'];
									
									header('Location: index.php');
								}
							}
							
							?>
							<form action="login.php" method="post" role="form">
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>

				<div class="checkbox">
					<label>
						<input type="checkbox">
						Check me out </label>
				</div>
				<button type="submit" class="btn btn-default">
					Submit
				</button>
			</form>
			
			</div> <!-- Panel Body -->
			</div> <!-- END Panel -->

</div>
					
					
				</div>
</div>
			<?php
			include ('template/footer.php');
 ?>

	</body>

</html>
