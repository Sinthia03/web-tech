<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TRY</title>
</head>
<body>
    <h1>Hello </h1>
    <?php
$a =5;
$b=10;
if($a>$b){
    echo"$a is greater then $b <br>";
}
else {
    echo"$b is greater then $a <br>";
}

$c = "sinthia";
echo "My name is ".$c;

$name = "";
$nameerror = "";
if(empty($_POST["name"]))//checks if empty
    {
    $nameerror="name is required";
}
else {
    test_input($_POST(["name"]));//clean space

if(!preg_match("/^[a-zA-Z]*$"))//only  letters and middle space
    {
    $nameerror="only letters is allowed";
}
}
function test_input($data){
    $data = trim($data);// trim to remove previous values
    return $data;

}

    ?>

<form method ="post" action ="">
    name:<input type = "text" name ="name " value ="<?php echo $name ;?>">
<?php echo $nameerror ;?>

<input type ="submit" name ="submit" value ="Submit">
</form>


<?php

if($_SERVER["REQUEST_METHOD"]== "POST" && empty($nameerror))

{

echo "<h3> Your Input: </h3>";

echo "Name: ".$name. "<br>";
}
?>




</body>
</html>