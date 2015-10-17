<?php
include_once "models/Register.class.php";
$register = new Register($db);
$isRegisterSubmitted = isset($_POST['reg-submitted']);
if ($isRegisterSubmitted) {
	$userid = (string)$_POST['userid'];
	$name = (string)$_POST['name'];
	$email = (string)$_POST['email'];
	$password = (string)$_POST['password'];

	$register->updateUser($userid, $name, $email, $password);
}
$registerData = $register->getRegisterData();
$registerView = include_once "views/register-html.php";
return $registerView;