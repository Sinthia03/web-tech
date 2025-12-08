<!DOCTYPE html>

<head>
   
    <title>Management Company</title>
</head>
<style>
    body {
        background-color:White;

    }
    
    div{
  width:300px;
  height: 550px;
  padding:50px;
  border:3px solid white ;
  margin:0;
 background-color:lightblue;
    }

    .actitem {
        margin:5px 0;
        padding:5px;
        background:white;
        border-radius:5px;
        align-items:center;
    }

    .removebtn {
        background:red;
        color:white;
        border:none;
        padding:3px 7px;
        border-radius:5px;
        cursor:pointer;
    }
   
</style>

<body>
    

<center>
 <div>
    
<table>
 <h1 style ="font-size:20px"> Participant Registration </h1>
   

<tr>
<td>Full Name:</td>
</tr>
<tr>
<td><input type="text" id="name"></td>
</tr>

<tr>
<td>Email:</td>
</tr>
<tr>
<td><input type="text" id="email"></td>
</tr>

<tr>
<td>Phone Number:</td>
</tr>
<tr>
<td><input type="text" id="phone"></td>
</tr>

<tr>
<td>Create Password:</td>
</tr>
<tr>
<td><input type="password" id="password"></td>
</tr>

<tr>
<td>Confirm Password:</td>
</tr>
<tr>
<td><input type="password" id=" Confirm password"></td>
</tr>
   
<tr>
<td><br><button type="button" onclick="handleSubmit()">Register</button></td>
</tr>


</table>
<p id="output" style="color:green; font-weight:bold;"></p>


<br><br>


<table>
<h2 style="font-size:18px">Choose Activities</h2>

<tr>
    <td>Activity Name:</td>
</tr>
<tr>
    <td><input type="text" id="activityInput"></td>
</tr>

<tr>
<td>
    <br><button type="button" onclick="addActivity()">Add Activity</button></td>
</tr>

</table>

<div id="activityList"></div>

</div>
</center>



<Script>
function handleSubmit() {
     
      var name = document.getElementById("name").value.trim();
      var email = document.getElementById("email").value.trim();
      var phone = document.getElementById("phone").value.trim();
      var password = document.getElementById("password").value.trim();
      var confirmpassword = document.getElementById(" confirmpassword").value.trim();
    
     
      var outputDiv = document.getElementById("output");

      outputDiv.innerHTML = "";
      
      if(name===""|| email ===""||phone===""||password===""||Confirm password===""){
         alert("Please fill in correctly");
        return false;
      }
    
    if(!email.includes("@")){
         alert ("Please fill in correctly with @ ");
        return false;
    }
    
    if(isNaN(phone)){

        alert("Phone number must contain digits");
        return false;

    }
    
    if(password!== confirmpassword){
        alert("Password is not correct.Give again");
        return false;
    }

  outputDiv.innerHTML = `
        <strong>Registration Complete!</strong><br><br>
        Name: ${name}<br>
        Email : ${email}<br>
        Phone : ${phone}
      `;
 
      return false;
    

    
    }

    function addActivity() {
    var activityName = document.getElementById("activityInput").value.trim();
    var activityList = document.getElementById("activityList");

    if alert ("Please enter an activity name");
        return;
    }

    var newDiv = document.createElement("div");
    newDiv.className = "actitem";

    newDiv.innerHTML = `
        ${activityName}
        <button class="emovebtn" onclick="removeActivity(this)">Remove</button>
    `;

    activityList.appendChild(newDiv);

    document.getElementById("activityInput").value = "";


function removeActivity(button) {
    button.parentElement.remove();
}

</Script>
</body>
</html>