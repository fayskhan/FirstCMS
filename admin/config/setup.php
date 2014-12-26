<?php
include ('../config/connection.php');
include ('functions/data.php');
include ('functions/template.php');
$site_title = 'First CMS';

if (isset($_GET['page'])) {
	$pageid = $_GET['page'];

} else {
	$pageid = 1;
}

$page_title = 'Welcome to the page';

$page = data_page($dbc, $pageid);
?>