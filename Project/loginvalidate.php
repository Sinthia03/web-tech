<?php
$name = $password = "";
$nameError = $passwordError="";

function test_input($data)
{
    $data = trim($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Name validation
    if (empty($_POST["name"])) {
        $nameError = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[A-Za-z][A-Za-z.\- ]*$/", $name)) {
            $nameError = "Invalid name format";
        } elseif (strlen($name) < 2) {
            $nameError = "At least two words required";
        }
    }

//password validation







}

?>