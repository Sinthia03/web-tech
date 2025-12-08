<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form Page</title>
    <style>
     form {
      background-color: #ee7979ff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    <style>
    body {
      background-image: 
        linear-gradient(to right, #ccc 1px, transparent 1px),
        linear-gradient(to bottom, #ccc 1px, transparent 1px);
      background-size: 10px 10px; /* grid lines every 10px */
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      width: 300px;  /* 30 squares */
      height: 200px; /* 20 squares */
      background-color: #add8e6; /* light blue */
      position: relative; /* for positioning inner box */
      border: 2px solid #000;
    }

    .inner-box {
      width: 50px;  /* 5 squares */
      height: 40px; /* 4 squares */
      background-color: #f08080; /* light coral */
      position: absolute;
      bottom: 10px; /* 1 grid square from bottom */
      right: 10px;  /* 1 grid square from right */
      display: flex;
      justify-content: center;
      align-items: center;
      font-weight: bold;
      color: #fff;
      border: 1px solid #000;
    }
    bodyy {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      transition: background-color 0.5s ease; /* smooth color change */
      font-family: Arial, sans-serif;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }
    </style>
</head>
<body>
    <center>
    <h1>Registration Form</h1>
    </center>

<form onsubmit="return validateform()">
<label>Firstname  </label>
<input type="text" id="firstname"/>
<br><br>
<label>Lastname</label>
<input type="text" id="lastname"/>
<br><br>
<label>Address</label>
<input type="text" id="address" autocomplete="off"/>
<br><br>
<button type="submit">Submit</button>
</form>

<script>
    // Validate first name and last name
    function validateform(){
        const firstname = document.getElementById('firstname').value.trim();
        const lastname = document.getElementById('lastname').value.trim();

        if(firstname === "" || lastname === ""){
            alert("Please fill both fields");
            return false;
        }

        if(firstname.length < 2 || lastname.length < 2){
            alert("Each field must have at least 2 characters");
            return false;
        }

        return true; // form will submit if validation passes
    }

    // Convert address input to uppercase as the user types
    const address = document.getElementById('address');
    address.addEventListener('input', () => {
        address.value = address.value.toUpperCase();
    });
</script>

<center>
    <h2> Community Membership  Form</h2>
    </center>

<form>
<label>Age</label>
<input type = "number" id = age />
<br><br>
<div id ="message"></div>
</form>
<script>
    const age = document.getElementBtId('age');
    const messagediv=document.getElementBtId('message');
    age.addEventListner('input',()=>{//input
        const age = parseInt(age.value);
       
         if (isNaN(age)) {
        messageDiv.textContent = ""; // clear if input is empty or invalid
        messageDiv.classList.remove('red');
        return;

    }
 
      if (age < 40) {
        messageDiv.textContent = "To be a part of the community, you need to at least 40";
        messageDiv.classList.remove('red');
      } else if (age >= 40 && age <= 50) {
        messageDiv.textContent = "You are the youngsters of this community";
        messageDiv.classList.remove('red');
      } else if (age > 50) {
        messageDiv.textContent = "Top level members of the group";
        messageDiv.classList.add('red');
      }
    });



    



</script>

</body>
<br><br>
<center>
<body>
  <div class="container">
    <div class="inner-box">Bottom Right</div>
  </div>
</body>
</center>


</html>
