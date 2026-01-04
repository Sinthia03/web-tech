<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
<div class ="login-box">
    <h1>Login Now! </h1>
    <form>
        <p class ="error-msg"></p>

       <input type ="text" placeholder="Enter Name">
       <p class ="error-msg"></p>

        <input type ="password" placeholder="Enter Password">
       <p class ="error-msg"></p>


       <label class ="checkbox-label">
        <input type="checkbox">Remember me</label>

        <div class="secondary-btn">
            <input type="button" onclick="window.location.href='Forgotpass.php'" value="Forgot Password?">
            <input type="button" onclick="window.location.href='Registration.php'" value="Register Now!">
</div>
</form>


    <input type="button" value="Back To Home" class="btn">




</div>
</body>
</html>