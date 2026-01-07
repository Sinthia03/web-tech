/**
 * Validation for Username on blur
 */
function checkLoginUsername() {
    const username = document.getElementById('loginUsername').value.trim();
    const errorDisplay = document.getElementById('loginUError');
    if (username === "") {
        errorDisplay.innerHTML = "Username is required!";
        return false;
    } else {
        errorDisplay.innerHTML = "";
        return true;
    }
}

/**
 * Validation for Password on blur
 */
function checkLoginPassword() {
    const password = document.getElementById('loginPassword').value;
    const errorDisplay = document.getElementById('loginPError');
    if (password === "") {
        errorDisplay.innerHTML = "Password is required!";
        return false;
    } else {
        errorDisplay.innerHTML = "";
        return true;
    }
}

/**
 * Main Login Function (AJAX - No JSON)
 */
function loginUser() {
    const btn = document.querySelector('.btn[type="submit"]');
    const statusMsg = document.getElementById('loginSuccess');
    
    // 1. Run validation
    const isUValid = checkLoginUsername();
    const isPValid = checkLoginPassword();

    const username = document.getElementById('loginUsername').value.trim();
    const password = document.getElementById('loginPassword').value;
    const remember = document.querySelector('input[name="remember"]:checked') ? '1' : '0';
    
    // 2. Stop if front-end validation fails
    if(!isUValid || !isPValid) return;

    // 3. UI Loading State
    btn.value = "Logging in...";
    btn.disabled = true;

    // 4. Prepare data as a URL-encoded string (Standard Form Data)
    const params = "username=" + encodeURIComponent(username) + 
                   "&password=" + encodeURIComponent(password) + 
                   "&remember=" + encodeURIComponent(remember);

    const xhttp = new XMLHttpRequest();
    // Ensure the path to your controller is correct
    xhttp.open('POST', '../controller/loginCheck.php', true);
    
    // Set header so PHP recognizes it as a standard POST request
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4) {
            // Reset button
            btn.value = "Login";
            btn.disabled = false;
            
            if (this.status == 200) {
                const response = this.responseText.trim();
                
                // 5. Handle redirects based on text responses from PHP
                if (response === 'admin_success') {
                    window.location.href = 'admin_dashboard.php';
                } else if (response === 'user_success') {
                    window.location.href = 'user_dashboard.php';
                } else {
                    // Display whatever error message PHP echoed
                    statusMsg.innerHTML = response;
                }
            } else {
                statusMsg.innerHTML = "Connection error. Try again.";
            }
        }
    };

    xhttp.send(params);
}