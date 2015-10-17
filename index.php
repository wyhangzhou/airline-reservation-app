<?php
//session_start();
error_reporting( E_ALL );
ini_set( "display_errors", 1 );

include_once "models/Page_Data.class.php";
$pageData = new Page_Data();

// $pageData->addScript('https://code.jquery.com/jquery-1.11.1.min.js');
// $pageData->addScript('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js');
// $pageData->addScript('js/bootstrap-datetimepicker.min.js');


$pageData->title = "Book Tickets";
//database credentials
$dbInfo = "mysql:host=localhost;dbname=airline_reservation_new"; 
$dbUser = "root";
$dbPassword = "root";
try {
    //try to create a database connection with a PDO object
    $db = new PDO( $dbInfo, $dbUser, $dbPassword );
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}catch ( Exception $e ) {
    $pageData->content = "<h1>Connection failed!</h1><p>$e</p>";
}

$pageData->content .= include_once "views/navigation.php";

$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');
$pageData->addCSS('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css');
$pageData->addCSS('css/bootstrap-datetimepicker.min.css');


$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
	$fileToLoad = $_GET['page'];
} else {
	$fileToLoad = "book";
}
$pageData->content .= include_once "controllers/$fileToLoad.php";


$page = include_once "templates/page.php";
echo $page;

