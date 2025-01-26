const form = document.querySelector("form");
const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("cpassword");
const phone_codeInput = document.getElementById("phone");
const fullNameInput = document.getElementById('fname');
const usernameInput = document.getElementById('uname');
const emailInput = document.getElementById('email');
const addressInput = document.getElementById('address');
const birthDateInput = document.getElementById('bdate');
//const counrty = document.getElementById('country');
const countryText = document.getElementById('countryText');
const countrySelect = document.getElementById('country');

let countryInput = "";

document.addEventListener('DOMContentLoaded', function() {// Event listeners for input and form submission
// Your JavaScript code goes here
    alert("DOM fully loaded and parsed. JavaScript code is now running.");
	
passwordInput.addEventListener('input', validatePassword);
confirmPasswordInput.addEventListener('input', validatePassword);
fullNameInput.addEventListener('input', validateFullName);
usernameInput.addEventListener('input', validateUsername);
addressInput.addEventListener('input', validateAddress);
birthDateInput.addEventListener('input', validateBirthDate);
phone_codeInput.addEventListener('input', validatePhone);
    

// Prevent form submission if passwords do not match


});

// Function to input counrty code
function counrty_change(sel) {
  //countryText.value = sel.options[sel.selectedIndex].text;
  phone_codeInput.value = "+" + sel.value;
}


// Function to validate full name
function validateFullName() {
    const fullName = fullNameInput.value.trim();
    if (!/^[A-Za-z\u0600-\u06FF\s'-]{1,50}$/.test(fullName)) {
        fullNameInput.setCustomValidity("Please enter a valid username (A-Z, a-z, ا-ي, space)");
		fullNameInput.reportValidity();
		fullNameInput.style.borderColor = "red";
	} else {
        fullNameInput.setCustomValidity('');
		fullNameInput.style.borderColor = '#00cc66';
    }
}

// Function to validate Username
function validateUsername() {
    const username = usernameInput.value.trim();
    if (!/^[a-zA-Z0-9_]{4,20}$/.test(username)) {
        usernameInput.setCustomValidity("Username must be 4-20 characters long and contain only letters, numbers, and underscores.");
		usernameInput.reportValidity();
		usernameInput.style.borderColor = "red";
	} else {
        usernameInput.setCustomValidity('');
		usernameInput.style.borderColor = '#00cc66';
    }
}

// Function to validate address
function validateAddress() {
    const address = addressInput.value.trim();
    if (!/^[A-Za-z0-9\s\.,'-]{1,100}$/.test(address)) {
        addressInput.setCustomValidity("Please enter a valid address.");
		addressInput.reportValidity();
		addressInput.style.borderColor = "red";
	} else {
        addressInput.setCustomValidity('');
		addressInput.style.borderColor = '#00cc66';
    }
}


// JavaScript to update the hidden input with the selected country text
    countrySelect.addEventListener('change', function() {
        countrySelect = document.getElementById('countrySelect');
		if (countrySelect.value === '') {
			countrySelect.setCustomValidity('Please select a country');
		} else {
			countrySelect.setCustomValidity('');
			countryText.value = countrySelect.options[countrySelect.selectedIndex].text;
		}
    });


// Function to validate password
function validatePassword() {
	const password = passwordInput.value.trim();
    const confirmPassword = confirmPasswordInput.value.trim();

    if (password.length < 8) {
        passwordInput.setCustomValidity("Password must be at least 8 characters long.");
		.reportValidity();
		addressInput.style.borderColor = "red";
	} else if (!/(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}/.test(password)) {
        passwordInput.setCustomValidity("Password must contain at least 8 characters, including uppercase, lowercase, numbers, and special characters.");
		passwordInput.reportValidity();
		passwordInput.style.borderColor = "red";
	} else if (password.toLowerCase().includes("password") || password.toLowerCase().includes("123456")) {
        passwordInput.setCustomValidity("Avoid using common passwords.");
		passwordInput.reportValidity();
		passwordInput.style.borderColor = "red";
	} else if (password.toLowerCase().includes(usernameInput.value.toLowerCase())) {
        passwordInput.setCustomValidity("Password cannot contain your username.");
		passwordInput.reportValidity();
		passwordInput.style.borderColor = "red";
	} else {
        passwordInput.setCustomValidity('');
		passwordInput.style.borderColor = '#00cc66';
    }

    // Check if confirm password field has been touched or modified
    if (confirmPasswordInput.value && confirmPasswordInput.value !== password) {
        confirmPasswordInput.setCustomValidity("Passwords do not match.");
		confirmPasswordInput.reportValidity();
		confirmPasswordInput.style.borderColor = "red";
	} else {
        confirmPasswordInput.setCustomValidity('');
		confirmPasswordInput.style.borderColor = '#00cc66';
    }
}

// Function to validate birth date
function validateBirthDate() {
    const birthDate = birthDateInput.value.trim();

    // Validate date format
    const isValidDate = /^\d{4}-\d{2}-\d{2}$/.test(birthDate);

    if (!isValidDate) {
        birthDateInput.setCustomValidity("Please enter a valid date in the format YYYY-MM-DD.");
        birthDateInput.reportValidity();
		birthDateInput.style.borderColor = "red";
		return;
    }

    // Validate date range
    const enteredDate = new Date(birthDate);
    const currentDate = new Date();
    
    if (enteredDate >= currentDate) {
        birthDateInput.setCustomValidity("Birth date cannot be in the future.");
        birthDateInput.reportValidity();
		birthDateInput.style.borderColor = "red";
		return;
    }

    // Optional: Validate age limit
    // const minAgeDate = new Date();
    // minAgeDate.setFullYear(minAgeDate.getFullYear() - 18); // Minimum age of 18
    // if (enteredDate >= minAgeDate) {
    //     birthDateInput.setCustomValidity("You must be at least 18 years old.");
    //     return;
    // }

    birthDateInput.setCustomValidity('');
	birthDateInput.style.borderColor = '#00cc66';
}

function validatePhone(inputElement) {
    const phoneNumber = inputElement.value.trim();

    // Regular expression to match a phone number starting with a country code (+)
    const phoneRegex = /^\+\d{1,}$/;

    if (phoneRegex.test(phoneNumber)) {
        // Phone number is valid
		phoneNumber.setCustomValidity('');
		phoneNumber.style.borderColor = '#00cc66';
        console.log("Phone number is valid: " + phoneNumber);
        // You can add further validation logic or success handling here
    } else {
        // Phone number is invalid
        console.log("Invalid phone number: " + phoneNumber);
		phoneNumber.setCustomValidity("Invalid phone number. phone must start with + followed by country code and the phone number");
        phoneNumber.reportValidity();
		phoneNumber.style.borderColor = "red";
        // You can display an error message or apply error styling to the input element
    }
}


function submitButton() {alert("Function triggered.");

e.preventDefault();
    if (countrySelect.value === '') {alert("Country not selected.");
        countrySelect.setCustomValidity('Please select a country');
    } else {alert("Country selected.");
        countrySelect.setCustomValidity('');
    }
    if (passwordInput.value !== confirmPasswordInput.value) {alert("password doesnot match.");
        e.preventDefault(); // Prevent form submission
        confirmPasswordInput.setCustomValidity("Passwords do not match");
    } else {alert("password match");
        confirmPasswordInput.setCustomValidity("");
    }
	
	
alert("Submitting form data.");
    const formData = new FormData(this);
alert("Form data:", formData);
     // AJAX call to registration.php for form submission and uniqueness check
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'registration.php', true);
	alert(1);
    /*xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.onreadystatechange = function() {alert(2);
        if (xhr.readyState === 4 && xhr.status === 200) {alert(3);
			try {alert(4);
            const response = JSON.parse(xhr.responseText);

            if (response.error) {alert(5);
                // Display error messages using setCustomValidity
                if (response.usernameError) {alert(6);
                    usernameInput.setCustomValidity(response.usernameError);
					emailInput.setCustomValidity(response.emailError);
                } else {alert(7);
					alert("Error inserting user data Please try again later");
                    usernameInput.setCustomValidity('');
					emailInput.setCustomValidity('');
                }

                /*if (response.emailError) {
                    emailInput.setCustomValidity(response.emailError);
                } else {
                    emailInput.setCustomValidity('');
                }*/

                // Trigger form validation to show custom error messages
                /*form.reportValidity();
            } else if (response.success) {alert(8);
                alert(response.success); // Display success message

                form.reset(); // Reset the form

                setTimeout(function() {alert(9);
                    window.location.href = '../index.php'; // Redirect to main index page after 3 seconds
                }, 3000); // 3 seconds delay before redirecting
            }
			 } catch (error) {alert(10);
                console.error("Error parsing JSON response:", error);
            }
        }
    };
    xhr.send(formData);alert(11);*/
}
/////////alert(sel.options[sel.selectedIndex].text); (sel.options[sel.selectedIndex].text);
// Selecting form and input elements
/*const form = document.querySelector("form");
const passwordInput = document.getElementById("password");
const cpasswordInput = document.getElementById("cpassword");
const passToggleBtn = document.getElementById("pass-toggle-btn");
const cpassToggleBtn = document.getElementById("cpass-toggle-btn");
// Function to display error messages
const showError = (field, errorText) => {
    field.classList.add("error");
    const errorElement = document.createElement("small");
    errorElement.classList.add("error-text");
    errorElement.innerText = errorText;
    field.closest(".form-group").appendChild(errorElement);
}



// Function to handle form submission
const handleFormData = (e) => {
    e.preventDefault();

    // Retrieving input elements
    const fullnameInput = document.getElementById("fullname");
    const emailInput = document.getElementById("email");
    const dateInput = document.getElementById("date");
    const genderInput = document.getElementByName("gender").checked;

    // Getting trimmed values from input fields
    const fullname = fullnameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
	const cpassword = cpasswordInput.value.trim();
    const date = dateInput.value;
    const gender = genderInput.value;

    // Regular expression pattern for email validation
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    // Clearing previous error messages
    document.querySelectorAll(".form-group .error").forEach(field => field.classList.remove("error"));
    document.querySelectorAll(".error-text").forEach(errorText => errorText.remove());

    // Performing validation checks
    if (fullname === "") {
        showError(fullnameInput, "Enter your full name");
    }
    if (!emailPattern.test(email)) {
        showError(emailInput, "Enter a valid email address");
    }
    if (password === "") {
        showError(passwordInput, "Enter your password");
    }
	if (cpassword === "") {
        showError(cpasswordInput, "Confirm your password");
    }
	if (cpassword !== password) {
        showError(cpasswordInput, "Password does not match");
    }
    if (date === "") {
        showError(dateInput, "Select your date of birth");
    }
    /*if (gender === "") {
        showError(genderInput, "Select your gender");
    }*/

    // Checking for any remaining errors before form submission
    /*const errorInputs = document.querySelectorAll(".form-group .error");
    if (errorInputs.length > 0) return;

    // Submitting the form
    form.submit();
}

// Toggling password visibility
passToggleBtn.addEventListener('click', () => {
    passToggleBtn.className = passwordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});

// Toggling confirm password visibility
cpassToggleBtn.addEventListener('click', () => {
    cpassToggleBtn.className = cpasswordInput.type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    cpasswordInput.type = cpasswordInput.type === "password" ? "text" : "password";
});

// Handling form submission event
form.addEventListener("submit", handleFormData);*/