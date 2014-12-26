<?php include('config/setup.php'); ?>
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

		<div class="container">

			<h1><?php echo $page['header']; ?></h1>
			<?php echo $page['body']; ?>
		</div>

		<?php include('template/footer.php'); ?>

	</body>

</html>
