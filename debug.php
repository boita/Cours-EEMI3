<?php
	// Test user toto
	session_start();

	echo "<pre>";
	echo "<<<<<<<< Trace \$_SESSION V3 >>>>>>><br />";
	print_r($_SESSION);
	echo "<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>><br />";
	echo "</pre>";

	echo "<pre>";
	echo "<<<<<<<< Trace \$_COOKIES >>>>>>><br />";
	print_r($_COOKIE);
	echo "<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>><br />";
	echo "</pre>";

	echo "<pre>";
	echo "<<<<<<<< Trace \$_SERVER >>>>>>><br />";
	print_r($_SERVER);
	echo "<<<<<<<<<<<<<<<<>>>>>>>>>>>>>>>><br />";
	echo "</pre>";
?>