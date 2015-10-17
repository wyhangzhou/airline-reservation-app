 <?php
class Signin {
	private $db;

	public function __construct( $dbConnection ) {
		$this->db = $dbConnection;
	}

    public function getUserData($userid, $password) {
	    $sql = "SELECT user_id, Uname, password, email, phone FROM user WHERE user_id = '$userid' and password = '$password'";
	    //Use the PDO connection to create a PDOStatement object
	    $statement = $this->db->prepare($sql);
	    $statement->execute();
	    $userData = $statement->fetchObject();
	    return $userData;
	}
}
