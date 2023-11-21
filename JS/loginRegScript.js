const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const loginForm = document.forms["loginForm"];
const loginSButton = document.getElementById('signin');
const signupSButton = document.getElementById('signup');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

function validateLoginForm() {

    loginSButton.onclick = (e) => {
        e.preventDefault();
        const formData = new FormData(loginForm);

        fetch("../Controller/loginController.php", {
            method: "POST",
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                if (data === "success") {
                    location.href = "../View/adminLanding.php";
                }
                else if (data === "Invalid username/password") {
                    alert("Wrong password. Please try again.");
                }
                else {

                    const errorText = loginForm.querySelector(".error-text");
                    errorText.style.display = "block";
                    errorText.textContent = data;
                }
            })
            .catch(error => {
                console.error("Error:", error);
            });
    };

    return true;
}

function validateSignupForm() {
    let name = document.forms["signupForm"]["name"].value;
    let email = document.forms["signupForm"]["email"].value;
    let password = document.forms["signupForm"]["password"].value;

    if (name.trim() === "" || email.trim() === "" || password.trim() === "") {
        alert("Please fill in all the required fields.");
        return false;
    }

    let atPos = email.indexOf('@');
    let dotPos = email.lastIndexOf('.');

    if (atPos === -1 || atPos === 0 || dotPos === -1 || dotPos <= atPos + 1 || dotPos === email.length - 1) {
        alert("Please enter a valid email address.");
        return false;
    }

    if (password.length < 8) {
        alert("Your password must be at least 8 characters long");
        return false;
    }

    const numericDigits = "0123456789";

    let hasNumericDigits = false;

    for (let i = 0; i < password.length; i++) {
        const char = password.charAt(i);

        if (numericDigits.includes(char)) {
            hasNumericDigits = true;
        }
    }

    if (!hasNumericDigits) {
        alert("Your password must contain at least one numeric digit.");
        return false;
    }
    return true;
}