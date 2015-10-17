<?php
session_start();
include_once "models/Userinfo.class.php";
$userinfo = new Userinfo($db);
$isReserveSubmitted = isset($_POST['reserve-submitted']);
$isCancelSubmitted = isset($_POST['cancel-submitted']);
$isChangeSubmitted = isset($_POST['update-submitted']);

if ($isReserveSubmitted) {
	
	if (isset($_SESSION['userid'])) {
		$userid = $_SESSION['userid'];
		$password = $_SESSION['password'];
		$flight_no = $_POST['flight_no'];
// 		echo "<p>$userid</p>";
// 		echo "<p>$password</p>";
// 		echo "<p>$flight_no</p>";
		$userinfo->addReserveData($userid, $flight_no);
		$reserveData = $userinfo->getReserveData($userid);
		$userData = $userinfo->getUserData($userid, $password);
		$userView = include_once "views/user-info.php";
		return $userView;
	} else {
		return "
				<div class='jumbotron' id='jumbotron-pleasesignin'>
					<h1>please sign in</h1>
					<meta http-equiv='refresh' content='2;url=index.php?page=signin'>
				</div>
				";
	}
}

if($isCancelSubmitted){
	if (isset($_SESSION['userid'])) {
		$userid = $_SESSION['userid'];
		$password = $_SESSION['password'];
		$flight_no = $_POST['flight_no'];
		// 		echo "<p>$userid</p>";
		// 		echo "<p>$password</p>";
		// 		echo "<p>$flight_no</p>";
		$userinfo->cancelReserveData($userid, $flight_no);
		$reserveData = $userinfo->getReserveData($userid);
		$userData = $userinfo->getUserData($userid, $password);
		$userView = include_once "views/user-info.php";
		return $userView;
} else {
	return "
				<div class='jumbotron' id='jumbotron-pleasesignin'>
					<h1>please sign in</h1>
					<meta http-equiv='refresh' content='2;url=index.php?page=signin'>
				</div>
				";
}
}

if ($isChangeSubmitted) {
	$userid = $_SESSION['userid'];
	$password = $_SESSION['password'];
} else {
	$userid = $_POST['userid'];
	$_SESSION['userid'] = $userid;
	$password = $_POST['password'];
	$_SESSION['password'] = $password;
	$reserveData = $userinfo->getReserveData($userid);
	$userData = $userinfo->getUserData($userid, $password);
}


if ($isChangeSubmitted) {
	$newPassword = $_POST['newpassword'];
	$newEmail = $_POST['newemail'];
	$newPhone = $_POST['newphone'];
	if ($newPassword)
		$userinfo->changePassword($newPassword, $userid);
	if ($newEmail)
		$userinfo->changeEmail($newEmail, $userid);
	if ($newPhone)
		$userinfo->changePhone($newPhone, $userid);
	$reserveData = $userinfo->getReserveData($userid);
	$userData = $userinfo->getUserData($userid, $password);
}

$userView = include_once "views/user-info.php";
return $userView;