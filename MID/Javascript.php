<!DOCTYPE html>
<html>
<head>
    <title>
        JS basic
    </title>
</head>
<body>
   
<h1 id="demo">Welcome to Js Class </h1>
<p> Lets Start the Class Today</p>
 
 
<script>
   var name="Robin Hood";
   let number=120;
   var num_2= 270.0;
   const last_name="Khan";
 
document.write("Hello World <br>");//webpage
console.log("Hello Console");//in console
alert("Hello Alert");//will pop up
 
var body=document.getElementById("demo");
body.innerHTML="GOOD Bye";
 
console.log("the dt of name: ",typeof name);
console.log("the dt of num1: ",typeof number);
console.log("the dt of num2: ",typeof num_2);
console.log(typeof undefined);
console.log("the dt of Lname: ",typeof last_name);
 
let sum = number+num_2;
console.log("The sum is : ",sum);
document.write("the sum is ",sum);

 
</script>
 
 
 
</body>
 
</html>
 