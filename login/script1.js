const form = document.querySelector("form");
const passwordInput = document.getElementById("lpassword");
const nameInput = document.getElementById('lname');


// Function to validate Username
function validateName() {
    const name = nameInput.value.trim();
    if (!/^[a-zA-Z0-9_]{4,20}$/.test(nameInput)) {
        nameInput.setCustomValidity("worng username");
    } else {
        nameInput.setCustomValidity('');
    }
}

// Function to validate password
function validatePassword() {
	const password = passwordInput.value.trim();

    if (password.length < 8) {
        passwordInput.setCustomValidity("worng password");
    } else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/.test(password)) {
        passwordInput.setCustomValidity("worng password");
    } else if (password.toLowerCase().includes("password") || password.toLowerCase().includes("123456")) {
        passwordInput.setCustomValidity("worng password");
    } else if (password.toLowerCase().includes(nameInput.value.toLowerCase())) {
        passwordInput.setCustomValidity("worng password");
    } else {
        passwordInput.setCustomValidity('');
    }

}

    
// Event listeners for input and form submission
passwordInput.addEventListener('input', validatePassword);
nameInput.addEventListener('input', validateName);

// Prevent form submission if passwords do not match
form.addEventListener('submit', function(e) {
    
	
	event.preventDefault();

    const formData = new FormData(this);

     // AJAX call to registration.php for form submission and uniqueness check
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'login.php', true);
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
			try{
            const response = JSON.parse(xhr.responseText);

            if (response.error) {
                // Display error messages using setCustomValidity
                if (response.usernameError) {
                    nameInput.setCustomValidity(response.usernameError);
					passwordInput.setCustomValidity(response.passwordError);
                } else {
					alert("Error checking your informations");
                    nameInput.setCustomValidity('');
					passwordInput.setCustomValidity('');
                }

                // Trigger form validation to show custom error messages
                form.reportValidity();
            } else if (response.success) {
                alert(response.success); // Display success message

                form.reset(); // Reset the form

                setTimeout(function() {
                    window.location.href = '../index.php'; // Redirect to main index page after 3 seconds
                }, 3000); // 3 seconds delay before redirecting
            }
			 } catch (error) {
                console.error("Error parsing JSON response:", error);
            }
        }
    };
    xhr.send(formData);
});
