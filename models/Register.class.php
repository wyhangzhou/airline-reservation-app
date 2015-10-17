 <?php
//complete code for models/Poll.class.php
//beginning of class definition
class Register {
	private $db;

	public function __construct( $dbConnection ) {
		$this->db = $dbConnection;
	}

	public function updateUser ( $userid, $name, $email, $password ) {
		$sql = "SELECT * FROM user WHERE user_id='$userid'";
		$statement = $this->db->prepare($sql);
		$statement->execute();
		$registerData = $statement->fetchObject();
		if ($registerData) {
			echo "
					<p>Invailed input: The username is already taken.</p>
					<a href='index.php?page=register' class='btn btn-primary btn-lg active' role='button'>Sign up again.</a>";
			exit;
		}

		$updateSQL = "
			INSERT INTO user (user_id, Uname, password, email) VALUES ('$userid', '$name', '$password', '$email')
		";
		//UPDATE user SET password = 'password123' WHERE uname = 'michel'
	    $updateStatement = $this->db->prepare($updateSQL);
	    $updateStatement->execute();
	}

    public function getRegisterData() {
        //the actual SQL statement
	    $sql = "SELECT user_id, Uname, password, email, phone FROM user";
	    //Use the PDO connection to create a PDOStatement object
	    $statement = $this->db->prepare($sql);
	    //tell MySQL to execute the statement
	    $statement->execute();
	    //retrieve the first row of data from the table
	    $registerData = $statement->fetchAll(PDO::FETCH_ASSOC);
	    //make book data available to the caller
	    return $registerData;
	} 
}
//end of class definition