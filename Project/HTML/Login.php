<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
     <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
<div>
  
    <center>
         <h1>Login Now</h1>
         </center>
        <form method = "post" action ="loginvalidate.php">
            <div>
            <label>Enter your name:</label>
   <input type ="text"  name="name" value="<?php echo $name; ?>">
   <?php echo $nameError; ?>
    <br><br>
</div>

 <div>
   <label>Enter your password:</label>
    <input type ="text" name="password"  value= "">
   
    <br><br>
</div>
    <center>
 <div>
 <input type ="submit" name="submit" value ="Login">
<br><br>
</div>

 <div>
<a href ="#">Forgot Password ?</a>
</div>
</center>
</form>



</div>
</body>
</html>