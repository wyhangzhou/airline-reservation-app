<?php
session_start();
session_destroy();
session_start();

include_once "models/Signin.class.php";
$signin = new Signin($db);
$isSigninSubmitted = isset($_POST['signin-submitted']);
$userid = "";
$password = "";
if ($isSigninSubmitted) {
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	if ($userid === "" || $password === "") {
		$output = include_once "views/signin-error.php";
		return $output;
	}
	echo'<script> window.location="index.php?page=userinfo"; </script> ';
	$userView = include_once "controllers/userinfo.php";
}
$userData = $signin->getUserData($userid, $password);

$userView = include_once "views/signin-html.php";
return $userView;