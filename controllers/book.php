<?php
include_once "models/Book.class.php";
$book = new Book($db);
$isSearched = isset($_POST['search']);
if ($isSearched) {
	$dep = (string)$_POST['from'];
	$arr = (string)$_POST['to'];
	$date = (string)$_POST['date'];
	if ($dep === "From" && $arr === "To" && !$date) {
		$bookData = $book->getAllBookData();
	} 
	
	if ($dep === $arr) {
		echo "
			<h2>please select two different cities.</h2>
			<a href='index.php?page=book' class='btn btn-primary btn-lg active' role='button'>Please select again.</a>
				";
		exit;
	}
	
	if ($dep != "From" && $arr != "To" && !$date){
		echo "
			<h2>please select a date.</h2>
			<a href='index.php?page=book' class='btn btn-primary btn-lg active' role='button'>Please select a date.</a>	
				";
		exit;
	}
	
	if ($dep && $arr && $date) {
		$bookData = $book->getBookData($dep, $arr, $date);
	}

	

	$bookView = include_once "views/book-html.php";
	return $bookView;
}
else{
	
	$bookView = include_once "views/book-form.php";
	return $bookView;
}