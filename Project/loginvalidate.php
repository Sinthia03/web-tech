<?php
$name = $password = $loginMessage = "";
$nameError = $passwordError= "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Name validation
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        
        }


//password validation
if(empty($_POST["password"]))
{
$passwordError ="Password is required";

}
else{
    $password =test_input($_POST["password"]);
    
}
if(empty($nameError)&& empty($passwordError)){
    echo "<h2> Login Successful </h2>";
    echo "<p>Welcome,". htmlspecialchars($name)."</p>";
}
else {
    include 'Login.php';
}



}

?>