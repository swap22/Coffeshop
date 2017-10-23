<?php
session_start();

//Open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'coffeshop');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
//escape the any special character user entered
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$lname = mysqli_real_escape_string($mysqli, $_POST['lname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

//VALIDATION

if (strlen($fname) < 3) { // checking first name is more than 2
    echo 'fname';
} elseif (strlen($lname) < 3) { // checking last name is more than 2
    echo 'lname';
} elseif (strlen($email) <= 4) { // checking emai is more than 4
    echo 'eshort';
} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) { // checking email format
    echo 'eformat';
} elseif (strlen($password) <= 4) { // checking password is more than 4 character
    echo 'pshort';
	
//VALIDATION
	
} else {
	
	//PASSWORD ENCRYPT it covert password into 60 character , the higher the cost more secure the passoword but it take to much time in databese to execute
	$spassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
	 // any no. about 13 or 14 are consider higher value
	$query = "SELECT * FROM members WHERE email='$email'";
	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
	$num_row = mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
        // if the number of row is less than one
		if ($num_row < 1) {

			$insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

			if ($insert_row) {

				$_SESSION['login'] = $mysqli->insert_id;
				$_SESSION['fname'] = $fname;
				$_SESSION['lname'] = $lname;

				echo 'true';

			}

		} else {

			echo 'false';

		}
		
}

?>