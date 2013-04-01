<?php
session_start();
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');

if(isset($_GET['p'])){
	if($page[$_GET['p']] != ''){
		require('include/header.php');
		require($page[$_GET['p']]);
		require('include/footer.php');
	}
} elseif(!isset($_GET['p'])) {
	require('include/header.php');
	require($page['home']);
	require('include/footer.php');
}
?>