<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="EditProfile.css">

</head>
<body>
<form id ="editprofile" class ="edit-card" method ="post">
    <h1>Edit Profile!</h1>

<img src = "https://png.pngtree.com/png-vector/20190307/ourmid/pngtree-vector-edit-profile-icon-png-image_762931.jpg" id ="profile-edit" alt="profile">
<label>Name:</label>
<input type ="text" name ="name" id="editname" value="Sinthia">
<p class="err" id ="nameError">
</p>

<label>Email:</label>
<input type ="email" name ="email" id="editemail" value="Sinthia@gmai.com">
<p class="err" id ="EmailError">
</p>


<label> Update Profile Picture</label>
<input type ="file" name ="avatar" id="editavatar" accept="image/*">
<p class="err" id ="avatarError">
</p>


<input type = "submit" value ="Update Profile">
<input type ="button" value ="Back to Dashboard" onclick="window.location.href='userdashboard.php'" class ="secondary-btn">
    


<p>
</body>
</html>