<?php
// Database connection details
include '..\config\config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$full_name = $_POST['fname'];
	$username = $_POST['uname'];
	$country = $_POST['country_text'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['bdate'];
	$password = $_POST['password'];

	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	// Check for unique username and email
    $check_sql = "SELECT id FROM users WHERE username = ? OR email = ?";
    $check_stmt = $conn->prepare($check_sql);
	// Execute the prepared statement
	try{
		if ($check_stmt) {
			$check_stmt->bind_param("ss", $username, $email);
			$check_stmt->execute();
			$check_stmt->store_result();

			if ($check_stmt->num_rows > 0) {
				$response['usernameError'] = 'Username or email already in use. Please choose a different one.';
				$response['emailError'] = 'Username or email already in use. Please choose a different one.';
			} else {
				// Insert the user data into the database
				$insert_sql = "INSERT INTO `users`(`fullname`, `username`, `email`, `phone`, `password`, `country`, `address`, `gender`, `birth_date`)
				VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
				$insert_stmt = $conn->prepare($insert_sql);

				if ($insert_stmt) {
					$insert_stmt->bind_param("sssssssss", $full_name, $username, $email, $phone, $hashed_password, $country, $address, $gender, $birthdate);

					if ($insert_stmt->execute()) {
						// Get the auto-generated user_id
						$user_id = $conn->insert_id;

						// Set the user ID in a cookie
						setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // Cookie expires in 30 days
						//setcookie("country", $country, time() + (86400 * 30), "/");

						$response['success'] = 'User added successfully. Redirecting to the home page...';
					} else {
						$response['error'] = 'Error inserting user data.';
					}

					$insert_stmt->close();
				} else {
					$response['error'] = 'Error preparing insert statement.';
				}
			}

			$check_stmt->close();
		} else {
			$response['error'] = 'Error preparing check statement.';
		}
	}catch(Exception $e) {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	//header('Content-Type: application/json');
    echo json_encode($response);
}

$conn->close();

?>