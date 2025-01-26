<?php
// Database connection details
include '..\config\config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Retrieve form data
	$username = $_POST['lname'];
	$password = $_POST['lpassword'];
	
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);

	$response = []; // Initialize response array

try {
    // Validate input (e.g., ensure username and password are provided)
    if (empty($username) || empty($password)) {
        throw new Exception("Username and password are required.");
    }

    // Prepare the SQL statement to retrieve the user's data
    $check_sql = "SELECT id, password FROM users WHERE username = ?";
    $check_stmt = $conn->prepare($check_sql);

    if (!$check_stmt) {
        throw new Exception("Database error: Unable to prepare statement.");
    }

    // Bind parameters and execute the query
    $check_stmt->bind_param("s", $username);
    if (!$check_stmt->execute()) {
        throw new Exception("Database error: Unable to execute statement.");
    }

    // Store the result and check if the user exists
    $check_stmt->store_result();
    if ($check_stmt->num_rows === 0) {
        throw new Exception("Wrong username or password.");
    }

    // Bind the result to variables
    $check_stmt->bind_result($user_id, $stored_hashed_password);
    $check_stmt->fetch();

    // Verify the password
    if (!password_verify($password, $stored_hashed_password)) {
        throw new Exception("Wrong username or password.");
    }

    // Login successful
    setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // Cookie expires in 30 days
    $response['success'] = 'User logged-in successfully. Redirecting to the home page...';
} catch (Exception $e) {
    // Handle exceptions
    $response['usernameError'] = $e->getMessage();
    $response['passwordError'] = $e->getMessage();
} finally {
    // Close the statement
    if (isset($check_stmt)) {
        $check_stmt->close();
    }
}
    echo json_encode($response);
}

$conn->close();

?>