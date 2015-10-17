<?php
$dataFound = isset( $bookData );
if( $dataFound === false ){
    trigger_error( 'views/book-html.php needs an $bookData object' );
}

$bookIsSubmitted = isset( $_POST['search'] ); 
if ( $bookIsSubmitted ){
    $from = $_POST['from'];
    $to = $_POST['to'];
    $date = $_POST['date'];
    
    $count = 0;
    $flight = array(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);
    //shows all the tickets matching the information
    $output = "<h1>Book Your Tickets Here!</h1>";
    //$output .= showBookInfo( $from, $to, $date );
//     $output .= $bookData[0]['arrival_date'];
//     $output .= "<table class='table table-hover'>";
//     $output .= "
//         <tr>
//             <th>flight_no</th>
//             <th>arrival_date</th>
//             <th>depart_date</th>
//             <th>distance</th>
//             <th>plane_id</th>
//         </tr>
//     ";
//     foreach($bookData as $row) {
//         $output .= "<tr>";
//         $output .= "<td>".$row['flight_no']."</td>";
//         $output .= "<td>".$row['arrival_date']."</td>";
//         $output .= "<td>".$row['depart_date']."</td>";
//         $output .= "<td>".$row['distance']."</td>";
//         $output .= "<td>".$row['plane_id']."</td>";
//         $output .= "</tr>";
//     };
//     $output .= "</table>";

//     // inspect the $_POST superglobal array 
//  	$output .= "<pre>";
// 	$output .= print_r($_POST, true); 
// 	$output .= "</pre>";
//     $output .= "<pre>";
//     $output .= print_r($bookData, true); 
//     $output .= "</pre>";
    $output .= "<table class='table table-hover'>";
    $output .= "
        <tr>
            <th>flight_no</th>
			<th>depart_date</th>
    		<th>arrival_date</th>
    
    		<th>from</th>
    		<th>to</th>
            <th>price</th>
    	
        </tr>
    ";
    foreach($bookData as $row) {
    	$flight[$count] = $row['flight_no'];
    
    	$count+=1;
    	$output .= "<tr>";
    	$output .= "<td>".$row['flight_no']."</td>";
    	$output .= "<td>".$row['arrival_date']."</td>";
    	$output .= "<td>".$row['depart_date']."</td>";
    	$output .= "<td>".$row['departure']."</td>";
    	$output .= "<td>".$row['arrival']."</td>";
    
    	$price = "$".(double)($row['distance'] + rand(0,20)) * 0.6;
    	$output .= "<td>".$price."</td>";
    	//$output .= "<td>".$row['capacity']."</td>";
    
    	$output .= "</tr>";
    };
    $output .= "</table>";
    
//     $output .= "<pre>";
//     $output .= print_r($bookData, true);
//     $output .= "</pre>";
//     $output .= "<pre>";
//     $output .= print_r($_POST, true);
//     $output .= "</pre>";
    
    
    //pick a ticket part
    $output .= "
    
     <form method='post' action='index.php?page=userinfo' class='form-inline'>
    		<h2>
    		pick a flight number
    		</h2>
    		<div>
			<select class='form-control'name='flight_no' id='flight_no'>
    
		";
	    for($i = 0; $i<$count;$i++){
	    	$output .= "<option>";
	    	$output .= $flight[$i];
	    	$output .= "</option>";
	    }
	    $output .="
			</div>
	    	</select>
    	<button type='submit' class='btn btn-default navbar-btn' name='reserve-submitted'>Book a ticket</button>
	    <br>
	    <br>
	    <br>
	   	<br>
    </form>";
    	
} else {
    $output = include_once "views/book-form.php";
}

return $output;
