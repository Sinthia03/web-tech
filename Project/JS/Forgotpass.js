/**
 * Validates the email format and updates the UI
 */
function checkForgotEmail() {
    let emailInput = document.getElementById('forgotEmail');
    let errorDisplay = document.getElementById('forgotEError');
    let emailValue = emailInput.value.trim();
    
    // Simple email regex
    let emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;

    if (emailValue === "" || !emailPattern.test(emailValue)) {
        errorDisplay.innerHTML = "Please enter a valid email!";
        return false;
    } else {
        errorDisplay.innerHTML = "";
        return true;
    }
}

/**
 * Final check before form submission
 */
function forgotCheck() {
    return checkForgotEmail();
}