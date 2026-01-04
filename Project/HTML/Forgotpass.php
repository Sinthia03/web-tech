<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Pass</title>
    <link rel="stylesheet" href="../CSS/Forgotpass.css">
</head>

<body>
<div class="forgot-container">
     <form method ="post" action ="">
    <h1>Forgot Pass ?</h1>
   <p> Enter a new password to change your password  </p>
   
 <label>New Password:</label>
<input type ="password" id="newpassword" name="newpassword"   placeholder="Must be 8 character long"/>

<br><br>
<br><br>


<label>Confirm New Password:</label>
<input type ="password" id="confirmpassword" name="confirmpassword" placeholder="Re-type here"  />

<br><br>
<br><br>

<button type ="button"  onclick="window.location.href='Login.php'">Back </button>
<button type ="submit">Submit</button>
<br><br>



</div>

</form>




   





</body>
</html>