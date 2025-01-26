
<?php
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data sent via AJAX
    $formData = json_decode(file_get_contents('php://input'), true);

    // Process the form data
    $storeName = $formData['store_name'] ?? '';
    $address = $formData['address'] ?? '';
    $phone = $formData['phone'] ?? '';
    $email = $formData['email'] ?? '';
	
	echo "store: " . $storeName . "address: " . $address . " - phone: " . $phone . " - email: " . $email  . "<br>";

    // Process product data if present
    if (isset($formData['product'])) {
        foreach ($formData['product']['name'] as $index => $productName) {
            $productDesc = $formData['product']['desc'][$index] ?? '';
            $productImage = $_FILES['product']['image']['tmp_name'][$index] ?? '';
            $productImageType = $_FILES['product']['image']['type'][$index] ?? '';
            $productPrice = $formData['product']['price'][$index] ?? '';

            echo "product: " . $productName . "description: " . $productDesc . " - image: " . $productImage . " - type: " . $productImageType . " - price: " . $productPrice . "<br>";

			// Process each product data as needed
            // Here you can save the product data to a database or perform any other actions
        }
    }

    // You can perform further processing here based on the form data

    // Send a simple response back
    $response = ['message' => 'Form data received successfully'];
    echo json_encode($response);
} else {
    // Handle requests other than POST method
    http_response_code(405); // Method Not Allowed
    echo json_encode(['error' => 'Invalid request method']);
}
?>