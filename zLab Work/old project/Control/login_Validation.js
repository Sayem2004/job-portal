function validateForm() {
    let phone = document.getElementById("phone").value.trim();
    let password = document.getElementById("password").value.trim();
    let phoneError = document.getElementById("phoneError");
    let passwordError = document.getElementById("passwordError");

    phoneError.innerText = "";
    passwordError.innerText = "";

    let isValid = true;
    let phonePattern = /^\d{10}$/;

    if (!phonePattern.test(phone)) {
        phoneError.innerText = "==> Enter a valid 10-digit phone number";
        isValid = false;
    }
    if (password.length < 6) {
        passwordError.innerText = "==> Password must be at least 6 characters";
        isValid = false;
    }
    return isValid;
}