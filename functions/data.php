<?php

function data_page($dbc, $id) {

	$q = "SELECT * FROM pages WHERE id=$id";

	$r = mysqli_query($dbc, $q);

	$page = mysqli_fetch_assoc($r);

	return $page;
}
?>