<?php
session_start();

$error = '';
$success = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');

    if ($email === '' || !filter_var($email, PHP_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email!';
    } else {
        // Logic for sending email would go here
        $success = '✅ A reset link has been sent to your email!';
    }
}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>Forgot Password - HotelESS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    
    <link rel="stylesheet" href="Forgotpass.css">
</head>
<body>

<div class="container">
    <div class="left-panel"></div>

    <div class="right-panel">
        <div class="form-box">
            <h1>Forgot Password</h1>
            <p class="desc">Enter your registered email to receive a reset link.</p>

            <?php if ($success): ?>
                <p class="ok"><?= htmlspecialchars($success) ?></p>
            <?php endif; ?>

            <form method="post" action="" onsubmit="return forgotCheck()">
                <input type="text" id="forgotEmail" name="email"
                       placeholder="Enter your email"
                       value="<?= htmlspecialchars($email) ?>"
                       onblur="checkForgotEmail()" />
                
                <p id="forgotEError" class="error-msg"><?= htmlspecialchars($error) ?></p>

                <input type="submit" class="btn" value="Send Reset Link" />
            </form>

            <a href="Login.php" class="secondary-btn">Back to Login</a>
        </div>
    </div>
</div>

<script src="Forgotpass.js"></script>

</body>
</html>