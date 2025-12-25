<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h1>Welcome to My Website</h1>

<?php
if (isset($_SESSION["username"])) {
    echo "<p>You are logged in as <b>" . $_SESSION["username"] . "</b></p>";
    echo "<a href='sessiondashboard.php'>Go to Dashboard</a><br><br>";
    echo "<a href='logoutsession.php'>Logout</a>";
} else {
    echo "<p>You are not logged in</p>";
    echo "<a href='loginsession.php'>Login</a>";
}
?>

</body>
</html>
