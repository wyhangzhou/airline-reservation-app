<?php
//return "<pre>".print_r($_POST, true)."</pre>";
$signinIsSubmitted = isset( $_POST['signin-submitted'] ); 
if ( $signinIsSubmitted ){
	if (!$userData) {
		$output = include_once "views/signin-error.php";
		return $output;
	}
    $userid = $_POST['userid'];
    $output = "<h1>".$userid."'s Home Page.</h1>";
    $output .= "<table class='table table-hover'>";
    $output .= "
        <tr>
            <th>userid</th>
            <th>uname</th>
            <th>password</th>
            <th>email</th>
            <th>phone</th>
        </tr>
    ";
    $output .= "<tr>";
    $output .= "<td>".$userData->user_id."</td>";
    $output .= "<td>".$userData->Uname."</td>";
    $output .= "<td>".$userData->password."</td>";
    $output .= "<td>".$userData->email."</td>";
    $output .= "<td>".$userData->phone."</td>";
    $output .= "</tr>";
    $output .= "</table>";
	//include_once "views/user-info.php";
    
    if (!$reserveData) {
    	$output .= "<h1>not reserve any flight</h1>";
    	$output .= "<a href='index.php?page=book' class='btn btn-primary btn-lg active' role='button'>Book some tickets.</a>";
    } else {
    	$output .= "<table class='table table-hover'>";
    	$output .= "
        <tr>
            <th>flight_no</th>
            <th>arrival_date</th>
            <th>depart_date</th>
    		<th>From</th>
            <th>To</th>
            <th>distance</th>
    		<th>price</th>
        </tr>
    	";
    	foreach($reserveData as $row) {
	    	$output .= "<tr>";
	    	$output .= "<td>".$row['flight_no']."</td>";
	    	$output .= "<td>".$row['arrival_date']."</td>";
	    	$output .= "<td>".$row['depart_date']."</td>";
	    	$output .= "<td>".$row['departure']."</td>";
	    	$output .= "<td>".$row['arrival']."</td>";
	    	$output .= "<td>".$row['distance']."</td>";
	    	$price = "$".(double)($row['distance'] + rand(0,20)) * 0.6;
	    	$output .= "<td>".$price."</td>";
	    	$output .= "</tr>";
    	}
    	$output .= "</table>";
    	$output .= "
     	<form method='post' action='index.php?page=userinfo' class='form-inline'>
    		<label>
    		pick a flight number
    		</label>
    		<div>
			<select class='form-control'name='flight_no' id='flight_no'>
   
		";
    	foreach($reserveData as $row){
    		$output .= "<option>";
    		$output .= $row['flight_no'];
    		$output .= "</option>";
    	}
    	$output .="
	    	</select>
    		</div>
    		<button type='submit' class='btn btn-default navbar-btn' name='cancel-submitted'>Cancel a ticket</button>
    	</form>";
    }
    
    $output .= include_once "views/signin-update.php";
    

    // inspect the $_POST superglobal array 
//  	$output .= "<pre>";
// 	$output .= print_r($_POST, true); 
// 	$output .= "</pre>";
//     $output .= "<pre>";
//     $output .= print_r($userData, true); 
//     $output .= "</pre>";
    return $output;
} 

$updateIsSubmitted = isset( $_POST['update-submitted'] );
if ($updateIsSubmitted) {
	echo '<script> window.location="index.php?page=signin"; </script>';
} 

$cancelIsSubmitted = isset($_POST['cancel-submitted']);
if ($cancelIsSubmitted) {
	
	if (!$userData) {
		$output = include_once "views/signin-error.php";
		return $output;
	}
	$userid = $_SESSION['userid'];
	$output = "<h1>".$userid."'s Home Page.</h1>";
	$output .= "<table class='table table-hover'>";
	$output .= "
        <tr>
            <th>userid</th>
            <th>uname</th>
            <th>password</th>
            <th>email</th>
            <th>phone</th>
        </tr>
    ";
	$output .= "<tr>";
	$output .= "<td>".$userData->user_id."</td>";
	$output .= "<td>".$userData->Uname."</td>";
	$output .= "<td>".$userData->password."</td>";
	$output .= "<td>".$userData->email."</td>";
	$output .= "<td>".$userData->phone."</td>";
	$output .= "</tr>";
	$output .= "</table>";
	//include_once "views/user-info.php";
	
	if (!$reserveData) {
		$output .= "<h1>not reserve any flight</h1>";
		$output .= "<a href='index.php?page=book' class='btn btn-primary btn-lg active' role='button'>Book some tickets.</a>";
	} else {
		$output .= "<table class='table table-hover'>";
		$output .= "
        <tr>
            <th>flight_no</th>
            <th>arrival_date</th>
            <th>depart_date</th>
    		<th>From</th>
            <th>To</th>
            <th>distance</th>
    		<th>price</th>
        </tr>
    	";
		foreach($reserveData as $row) {
			$output .= "<tr>";
			$output .= "<td>".$row['flight_no']."</td>";
			$output .= "<td>".$row['arrival_date']."</td>";
			$output .= "<td>".$row['depart_date']."</td>";
			$output .= "<td>".$row['departure']."</td>";
			$output .= "<td>".$row['arrival']."</td>";
			$output .= "<td>".$row['distance']."</td>";
			$price = "$".(double)($row['distance'] + rand(0,20)) * 0.6;
			$output .= "<td>".$price."</td>";
			$output .= "</tr>";
		}
		$output .= "</table>";
		$output .= "
     	<form method='post' action='index.php?page=userinfo' class='form-inline'>
    		<label>
    		pick a flight number
    		</label>
    		<div>
			<select class='form-control'name='flight_no' id='flight_no'>
   
		";
		foreach($reserveData as $row){
			$output .= "<option>";
			$output .= $row['flight_no'];
			$output .= "</option>";
		}
		$output .="
	    	</select>
    		</div>
    		<button type='submit' class='btn btn-default navbar-btn' name='cancel-submitted'>Cancel a ticket</button>
    	</form>";
	}
	
	$output .= include_once "views/signin-update.php";
	
	// inspect the $_POST superglobal array
// 	$output .= "<pre>";
// 	$output .= print_r($_POST, true);
// 	$output .= "</pre>";
// 	$output .= "<pre>";
// 	$output .= print_r($userData, true);
// 	$output .= "</pre>";
	return $output;
}

$reserveIsSubmitted = isset($_POST['reserve-submitted']);
if ($reserveIsSubmitted) {
	if (!$userData) {
		$output = include_once "views/signin-error.php";
		return $output;
	}
    $userid = $_SESSION['userid'];
    $output = "<h1>".$userid."'s Home Page.</h1>";
    $output .= "<table class='table table-hover'>";
    $output .= "
        <tr>
            <th>userid</th>
            <th>uname</th>
            <th>password</th>
            <th>email</th>
            <th>phone</th>
        </tr>
    ";
    $output .= "<tr>";
    $output .= "<td>".$userData->user_id."</td>";
    $output .= "<td>".$userData->Uname."</td>";
    $output .= "<td>".$userData->password."</td>";
    $output .= "<td>".$userData->email."</td>";
    $output .= "<td>".$userData->phone."</td>";
    $output .= "</tr>";
    $output .= "</table>";
	//include_once "views/user-info.php";
    
    if (!$reserveData) {
    	$output .= "<h1>not reserve any flight</h1>";
    	$output .= "<a href='index.php?page=book' class='btn btn-primary btn-lg active' role='button'>Book some tickets.</a>";
    } else {
    	$output .= "<table class='table table-hover'>";
    	$output .= "
        <tr>
            <th>flight_no</th>
            <th>arrival_date</th>
            <th>depart_date</th>
    		<th>From</th>
            <th>To</th>
            <th>distance</th>
    		<th>price</th>
        </tr>
    	";
    	foreach($reserveData as $row) {
	    	$output .= "<tr>";
	    	$output .= "<td>".$row['flight_no']."</td>";
	    	$output .= "<td>".$row['arrival_date']."</td>";
	    	$output .= "<td>".$row['depart_date']."</td>";
	    	$output .= "<td>".$row['departure']."</td>";
	    	$output .= "<td>".$row['arrival']."</td>";
	    	$output .= "<td>".$row['distance']."</td>";
	    	$price = "$".(double)($row['distance'] + rand(0,20)) * 0.6;
	    	$output .= "<td>".$price."</td>";
	    	$output .= "</tr>";
    	}
    	$output .= "</table>";
    	$output .= "
     	<form method='post' action='index.php?page=userinfo' class='form-inline'>
    		<label>
    		pick a flight number
    		</label>
    		<div>
			<select class='form-control'name='flight_no' id='flight_no'>
    	
		";
	    foreach($reserveData as $row){
		    $output .= "<option>";
		    $output .= $row['flight_no'];
		    $output .= "</option>";
	    }
    	$output .="
	    	</select>
    		</div>
    		<button type='submit' class='btn btn-default navbar-btn' name='cancel-submitted'>Cancel a ticket</button>
    	</form>";
    }
    
    $output .= include_once "views/signin-update.php";
    
    // inspect the $_POST superglobal array 
//  	$output .= "<pre>";
// 	$output .= print_r($_POST, true); 
// 	$output .= "</pre>";
//     $output .= "<pre>";
//     $output .= print_r($userData, true); 
//     $output .= "</pre>";
	return $output;
}







