/**
 * Real-time validation for password matching and length
 */
function checkPasswordMatch() {
    const password = document.getElementById('newPassword').value;
    const confirm = document.getElementById('confirmPassword').value;
    const errorDisplay = document.getElementById('passError');

    // 1. Check for minimum length
    if (password.length > 0 && password.length < 6) {
        errorDisplay.innerHTML = "Password must be at least 6 characters long.";
        errorDisplay.style.color = "#e74c3c"; // Ensure it stays red
        return false;
    }

    // 2. Check if passwords match (only if confirm field isn't empty)
    if (confirm.length > 0 && password !== confirm) {
        errorDisplay.innerHTML = "Passwords do not match.";
        errorDisplay.style.color = "#e74c3c";
        return false;
    }

    // 3. Clear error if everything is fine
    errorDisplay.innerHTML = "";
    return true;
}

/**
 * Final validation triggered when clicking the "Update Password" button
 */
function validatePasswordForm() {
    const password = document.getElementById('newPassword').value;
    const confirm = document.getElementById('confirmPassword').value;
    const errorDisplay = document.getElementById('passError');

    // Check if fields are empty
    if (password === "" || confirm === "") {
        errorDisplay.innerHTML = "Please fill in both password fields.";
        return false;
    }

    // Run the matching check one last time
    return checkPasswordMatch();
}