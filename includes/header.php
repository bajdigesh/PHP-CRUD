<?php
	session_start();
	require_once('includes/connection.php');
	require_once('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROJECT OOP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" href="css/custom.css" type="text/css" />
</head>
<body>
	<div class="wrapper <?php echo pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) ?>">