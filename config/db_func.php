 <?php
	class DataBaseImplementation
	{
		
		include 'config.php';
		// Create connection
		function open_connection()
		{
			$servername = "localhost";
			$username = "root";
			$password = "Admin@123";
			$dbname = "sudan_souq_db";
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			return $conn;
		}


		
		/****** store ***********/
		//add store
		function add_store($scat_id, $user_id, $store_name, $country_id, $address, $phone, $email)
		{
			$last_insert_id = 0;
			$conn= $this->open_connection();
			$sql = "INSERT INTO `store-info`(`sub_category_id`, `user_id`, `store_name`, `country_id`, `address`, `phone`, `email`) 
			VALUES (?,?,?,?,?,?,?)";

			try{
				$conn->execute_query($sql, [$scat_id, $user_id, $store_name, $country_id, $address, $phone, $email]);
				if ($conn) {
				// Get the ID of the last inserted row
					$last_insert_id = mysqli_insert_id($conn);
				}
				echo "New record created successfully ?", $last_insert_id;
			} catch (Exception $e) {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$this->close_connection($conn);
			return $last_insert_id;
		}
		
		//select store informations
		function search_store($scat_id, $user_id, $store_name, $country_id, $address, $phone, $email)
		{
			$conn= $this->open_connection();
			$sql = "INSERT INTO `store-info`(`sub_category_id`, `user_id`, `store_name`, `country_id`, `address`, `phone`, `email`) 
			VALUES (?,?,?,?,?,?,?)";

			try{
				$conn->execute_query($sql, [$scat_id, $user_id, $store_name, $country_id, $address, $phone, $email]);
				echo "New record created successfully";
			} catch (Exception $e) {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$this->close_connection($conn);
		}
		//add store
		function delete_store($scat_id, $user_id, $store_name, $country_id, $address, $phone, $email)
		{
			$conn= $this->open_connection();
			$sql = "INSERT INTO `store-info`(`sub_category_id`, `user_id`, `store_name`, `country_id`, `address`, `phone`, `email`) 
			VALUES (?,?,?,?,?,?,?)";

			try{
				$conn->execute_query($sql, [$scat_id, $user_id, $store_name, $country_id, $address, $phone, $email]);
				echo "New record created successfully";
			} catch (Exception $e) {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			$this->close_connection($conn);
		}
		


		/******** products *******/
		//insert product
		function add_product($store_id, $product_name, $descreption, $price, $photo, $image_type)
		{
			$last_insert_id = 0;
			$conn= $this->open_connection();
			$sql = "INSERT INTO `products`(`store_id`, `product name`, `description`, `price`, `photo`, `type`) 
			VALUES (?,?,?,?,?,?)";

			try{
				$conn->execute_query($sql, [$store_id, $product_name, $descreption, $price, $photo, $image_type]);
				if ($conn) {
				// Get the ID of the last inserted row
					$last_insert_id = mysqli_insert_id($conn);
				}
				echo "New record created successfully ?", $last_insert_id;
			} catch (Exception $e) {
				echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
				
			$this->close_connection($conn);
		}
		
		
		
		/******** close connection *******/
		function close_connection ($conn)
		{
			mysqli_close($conn);
		}
	}
?> 