<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>
    <div>
    <center>
        <h1>Register Now</h1>
</center>
<form method ="post" action ="RegistrationValidate.php">
    <div>
        <label>First Name :</label>
        <input type ="text" name ="fname" value="<?php echo $fname ;?>">
        <?php echo $fnameError;?>
        <br><br>
</div>

 <div>
        <label> Last Name :</label>
        <input type ="text" name ="lname" value="<?php echo $lname;?>">
        <?php echo $lnameError;?>
        <br><br>
</div>

 <div>
        <label>Phone Number :</label>
        <input type ="number" name ="number" value="<?php echo $number;?>">
        <?php echo $numberError;?>
        <br><br>
</div>

 <div>
        <label>Email :</label>
        <input type ="text" name ="email" value="<?php echo $email;?>">
        <?php echo $emailError;?>
        <br><br>
</div>

 <div>
        <label>Password:</label>
        <input type ="text" name ="password" >
        <?php echo $passwordError;?>
        <br><br>
</div>

 <div>
        <label>Confirm Password :</label>
        <input type ="text" name ="cpassword" >
        <?php echo $confirmError;?>
        <br><br>
</div>
<center>
<div>
<input type ="submit" name ="submit" value ="Register">
</div>
<p class ="login-link">
Already have an account?<a href ="Login.php"> Login Now!</a>
</p>
</center>


</form>
</div>
</body>
</html>