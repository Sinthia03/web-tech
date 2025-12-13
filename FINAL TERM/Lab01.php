<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>My Favorite Car</title>
</head>
<body>
<center>
    
    <h1 style="color:black;">Car Details</h1>
    <h2> welcome</h2>
   <p>Show for more car details</p>
    <?php
    
    $car = [
        "Brand" => "Ford",
        "Model" => "Mustang",
        "Year" => 1964
    ];

    
    echo "<p><strong>Model:</strong> " . $car['Model'] . "</p>";

   
    echo "<p><strong>All Car Details:</strong></p>";
    foreach ($car as $key => $value) {
        echo "<p><strong>$key:</strong> $value</p>";
    }
    ?>
</center>
</body>
</html>
