<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
     <link rel="stylesheet" href="../CSS/UpdatePassword.css">
</head>
<body>
    <div class="password-card">
        <h1>Update Your Password Here! </h1>
        <form>

<label >Old Password:</label>
<input type="password" id="oldPass" name="old_password">
<p class="error-msg"></p>


<label >New Password:</label>
<input type="password" id="newPass" name="new_password">
<p class="error-msg"></p>

<input type="submit" value="Update Password">


<button type ="button"  onclick="window.location.href='userdashboard.php'" class="back-btn">Back To Dashboard</button>

</form>    
</div>
    
</body>
</html>