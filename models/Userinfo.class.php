 <?php
class Userinfo {
	private $db;

	public function __construct( $dbConnection ) {
		$this->db = $dbConnection;
	}
	
	public function getReserveData($userid) {
		$sql = "SELECT F.flight_no, F.arrival_date, F.depart_date, D.airport_id as departure, A.airport_id as arrival, F.distance FROM flight F, reserves R, user U, departs D, arrives A WHERE F.flight_no = R.flight_no and U.user_id = R.user_id and U.user_id = '$userid' and R.flight_no = D.flight_no and R.flight_no = A.flight_no";
		//Use the PDO connection to create a PDOStatement object
		$statement = $this->db->prepare($sql);
		$statement->execute();
		$reserveData = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $reserveData;
	}
	
	public function addReserveData($userid, $flight_no) {
		$sql = "INSERT INTO reserves (user_id, flight_no) VALUES ('$userid', $flight_no);";
		$statement = $this->db->prepare($sql);
		$statement->execute();
		
		$sql1 = "UPDATE flight SET capacity = capacity + 1 WHERE flight_no=$flight_no;";
		$statement = $this->db->prepare($sql1);
		$statement->execute();
	}
	
	public function cancelReserveData($userid, $flight_no) {
		$sql = "DELETE FROM reserves WHERE user_id = '$userid' and flight_no=$flight_no;";
		$statement = $this->db->prepare($sql);
		$statement->execute();
	
		$sql1 = "UPDATE flight SET capacity = capacity - 1 WHERE flight_no=$flight_no;";
		$statement = $this->db->prepare($sql1);
		$statement->execute();
	}
	
	
    public function getUserData($userid, $password) {
	    $sql = "SELECT user_id, Uname, password, email, phone FROM user WHERE user_id = '$userid' and password = '$password'";
	    //Use the PDO connection to create a PDOStatement object
	    $statement = $this->db->prepare($sql);
	    $statement->execute();
	    $userData = $statement->fetchObject();
	    return $userData;
	}
	
	public function changePassword($password, $userid) {
		$sql = "UPDATE user SET password = '$password' WHERE user_id = '$userid'";
		//Use the PDO connection to create a PDOStatement object
		$statement = $this->db->prepare($sql);
		$statement->execute();
	}
	
	public function changeEmail($email, $userid) {
		$sql = "UPDATE user SET email = '$email' WHERE user_id = '$userid'";
		//Use the PDO connection to create a PDOStatement object
		$statement = $this->db->prepare($sql);
		$statement->execute();
	}
	
	public function changePhone($phone, $userid) {
		$sql = "UPDATE user SET phone = '$phone' WHERE user_id = '$userid'";
		//Use the PDO connection to create a PDOStatement object
		$statement = $this->db->prepare($sql);
		$statement->execute();
	}
}
