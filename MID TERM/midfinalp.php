<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Fill up</title>
    <style>
body{
    background-color:lavender;
}
form{

    background-color: white;
    height:550px;
    width:450px;
    margin: 0 auto;
    padding :20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}


</style>

</head>
<body>
    <center>
   <h1>Form Fill Up</h1>
</center>

<form onsubmit="return validation()">
    <label>Name</label>
    <input type ="text" id = "name"/>
    <br><br>

    <label>Email</label>
    <input type ="text" id = "email" placeholder="example@gmail.com"/>
    <br><br>

    <label> Department:</label>
    <select id ="department"name  ="department">
    <option value="">Select Department</option>
    <option value ="Fst">FST</option>
    <option value ="FE">FE</option>
    <option value = "BBA">BBa</option>
</select>
<br><br>

<label>Subjects You Want:</label>
<input type ="radio" name ="subject" value ="math">Math
<input type ="radio" name ="subject" value ="English">English
<br><br>

<label>How many credit you want:</label>
<input type ="number" id ="credit" placeholder="9 or 16"/>
<br><br>


<input type ="checkbox" id ="agree" />
<label>I accpect all the terms and condition</label>
<br><br>
<button type ="submit">Submit</button>
</form>
<script>
    function validation(){

    const name= document.getElementById("name").value.trim();
    if(name.length<10){
        alert("Must be 10 letters");
        return false;
    }

   const email =document.getElementById("email").value.trim();
   if(!email.includes("@")){
    alert("Must have '@'.");
        return false;

   }
   const department= document.getElementById("department").value;
   if(department===""){
    alert("must select");
    return false;
   }
   
   const subjects= document.getElementByName("subject");
   if(!subject)
{
    alert("one sub must be selected");
    return false;
}
 const credit= parseInt(document.getElementById("credit").value);
 if(isNaN(credit)){

    alert("Please Enter your credit amount");
    return false;

 }
 if(credit<9||credit>16){
    alert("between 9 to 16");
    return false;
 }

const agree=document.getElementById("agree").checked;
if(!agree){
    alert("must agree");
return false;
}
else{
alert("success");
return true;
}


    }


</script>
</body>

</html>