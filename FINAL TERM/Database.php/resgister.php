<?php
include 'databaselab.php';
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $username =$_POST["username"];
    $password =$_POST ["password"];
    $email =$_POST["email"];
 
    if(empty($username) || empty($password) || empty($email)) {
        echo "All fields are required.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
       $sql = "INSERT INTO users(username,password,email) VALUES ('$username','$hashedPassword', '$email')";
       
    }
 if ($conn->query($sql))
 {
    $success ="registration complete";
 }
else {
    $error ="Error".$conn->error;
}

}
?>
<!DOCTYPE html>
<html>  
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="POST" action="">
        Username: <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" name="register" value="Register">
    </form>
 
    <?php
    if (isset($_POST['register'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
 
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);
 
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }
 
        $stmt->close();
        $conn->close();
    }
    ?>