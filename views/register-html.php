<?php
$dataFound = isset( $registerData );
if( $dataFound === false ){
	trigger_error( 'views/register-html.php needs an $registerData object' );
}

$regIsSubmitted = isset( $_POST['reg-submitted'] ); 
if ( $regIsSubmitted ){
    $output = "<h1>You have registered successfully.</h1>";
    $output .= "
			<a href='index.php?page=signin' class='btn btn-primary btn-lg active' role='button'>Please sign in.</a>
    		";
//     $output .= "<table class='table table-hover'>";
//     $output .= "
//         <tr>
//     		<th>user_id</th>
//             <th>uname</th>
//             <th>password</th>
//             <th>email</th>
//             <th>phone</th>
//         </tr>
//     ";
//     foreach($registerData as $row) {
//         $output .= "<tr>";
//         $output .= "<td>".$row['user_id']."</td>";
//         $output .= "<td>".$row['Uname']."</td>";
//         $output .= "<td>".$row['password']."</td>";
//         $output .= "<td>".$row['email']."</td>";
//         $output .= "<td>".$row['phone']."</td>";
//         $output .= "</tr>";
//     };
//     $output .= "</table>";
//     // inspect the $_POST superglobal array 
//  	$output .= "<pre>";
// 	$output .= print_r($_POST, true); 
// 	$output .= "</pre>";

} else {
    $output = include_once "views/register-form.php";
}

return $output;