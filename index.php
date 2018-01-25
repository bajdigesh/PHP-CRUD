<?php
	require_once('includes/header.php');
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
	}
	require_once('includes/footer.php');
?>