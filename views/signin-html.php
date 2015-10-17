<?php
$dataFound = isset( $userData );
if( $dataFound === false ){
    trigger_error( 'views/signin-html.php needs an $userData object.' );
    
}

$signinIsSubmitted = isset( $_POST['signin-submitted'] ); 
if ( $signinIsSubmitted ){
	if (!$userData) {
		$output = include_once "views/signin-error.php";
		return $output;
	}
}
$output = include_once "views/signin-form.php";
return $output;
