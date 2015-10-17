 <?php
//complete code for models/Poll.class.php
//beginning of class definition
class Book {
	private $db;

	public function __construct( $dbConnection ) {
		$this->db = $dbConnection;
	}

	public function getBookData($dep, $arr, $date) {
    	//the actual SQL statement
		$sql = "SELECT F.flight_no, F.arrival_date, F.depart_date, F.distance, F.plane_id,F.capacity, A.airport_id as arrival, D.airport_id as departure
                    FROM Flight F, Departs D, Arrives A, Plane P
                    WHERE D.airport_id = '$dep' and A.airport_id = '$arr' and D.flight_no = A.flight_no and F.flight_no = D.flight_no and Date(depart_date) = '$date'
                    and P.number_seats > F.capacity and P.plane_id = F.plane_id ;";
	    
	    
	    //Use the PDO connection to create a PDOStatement object
	    $statement = $this->db->prepare($sql);
	    //tell MySQL to execute the statement
	    $statement->execute();
	    //retrieve the first row of data from the table
	    $bookData = $statement->fetchAll(PDO::FETCH_ASSOC);
	    //make book data available to the caller
	    return $bookData;
	} 
	
	public function getAllBookData() {
		//the actual SQL statement
		$sql = "SELECT F.flight_no, F.arrival_date, F.depart_date, F.distance, F.plane_id,F.capacity,F.flight_no, A.airport_id as arrival, D.airport_id as departure
		FROM Flight F, Departs D, Arrives A
		WHERE D.flight_no = A.flight_no and F.flight_no = D.flight_no and F.flight_no = A.flight_no
		;";
		 
		 
		//Use the PDO connection to create a PDOStatement object
		$statement = $this->db->prepare($sql);
		//tell MySQL to execute the statement
		$statement->execute();
		//retrieve the first row of data from the table
		$bookData = $statement->fetchAll(PDO::FETCH_ASSOC);
		//make book data available to the caller
		return $bookData;
	}
}
//end of class definition