<!DOCTYPE html>
<html>
<head>
    <center>
    <title>PHP Validation Form</title>
</head>

<body>

<h1>Welcome To Our page</h1>

<?php

$name = $email = $dateofbirth =$gender= $bloodgroup="";
$nameError = $emailError = $dateofbirthError = $genderError=$bloodgroupError="";

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

    // Email validation
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
        }
    }

    // Date of Birth validation
    if (empty($_POST["dateofbirth"])) {
        $dateofbirthError = "Date of birth required";
    } else {
        $dateofbirth = $_POST["dateofbirth"];
        $year = date("Y", strtotime($dateofbirth));
        if ($year < 1953 || $year > 1998) {
            $dateofbirthError = "Year must be between 1953 and 1998";
        }
    }
    //Gender validation 
    if (empty($_POST["gender"])) {
        $genderErr = "Select  one";
    } else {
        $gender = $_POST["gender"];
    }

    //Blood Group validation
      if (empty($_POST["blood"])) {
        $bloodError = "Blood group required";
    } else {
        $bloodgroup = $_POST["blood"];
    }
}
?>


<form method="post" action="">

    <label>NAME:</label><br>
    <input type="text" name="name" value="<?php echo $name; ?>"><br>
    <?php echo $nameError; ?>
    <br><br>

    <label>EMAIL:</label><br>
    <input type="text" name="email" value="<?php echo $email; ?>"><br>
    <?php echo $emailError; ?>
    <br><br>

    <label>DATE OF BIRTH:</label><br>
    <input type="date" name="dateofbirth"><br>
    <?php echo $dateofbirthError; ?>
    <br><br>

    <label> SELECT GENDER:</label><br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <input type="radio" name="gender" value="Other"> Other
    <?php echo $genderError; ?>
    <br><br>

      <label>SELECT BLOOD GROUP:</label><br>
    <select name="SELECT BLOOD GROUP">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select><br><br>
    <?php echo $bloodgroupError; ?>
    <br><br>

    <input type="submit" value="SUBMIT">

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameError) && empty($emailError) && empty($dateofbirthError))
{
    echo "<h2>Your Input:</h2>";
    echo "Name: $name <br>";
    echo "Email: $email <br>";
    echo "DOB: $dateofbirth <br>";
    echo "Gender: $gender <br>";
    echo "  BloodGroup: $bloodgroup <br>";
}
?>
</center>
</body>
</html>
