<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pass</title>
    <link rel="stylesheet" href="Forgotpass.css">
</head>

<body>
 <center>
     <form method ="post" action ="Forgetpassvalidate.php">
    <h1>Forgot Pass ?</h1>
   <p> Enter a new password to change your password  </p>
   
 <label>New Password:</label>
<input type ="text"  name="newpassword" id="newpassword" placeholder="Must be 8 character long"/>
<br><br>
<br><br>


<label>Confirm New Password:</label>
<input type ="text" name="confirmpassword" id="confirmpassword" />
<br><br>
<br><br>

<button type ="button"  onclick="window.location.href='Login.php';">Back </button>
<button type ="submit">Submit </button>






</form>

</center>

   





</body>
</html>