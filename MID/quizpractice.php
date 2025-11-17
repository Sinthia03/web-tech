<!DOCTYPE html>

<html>
    <head>
        <title>
            Quiz Practice</title>
</head>
<body>
    
    <h1 id="dem">Welcome</h1>
   
 

    <script>

 var body=document.getElementById("dem");
    body.innerHTML="Bye";

    var _name1="Sinthia";
    var _name2="Siddika";
    let num_1 = 2890;
    let num_2= 12.09;
    const water ="transparent";
   
document.write(_name1+"<br>");
console.log( _name2);
console.log("data type is :",typeof water);

//alert("why");

let sum = num_1+num_2;
document.write("sum is ",sum + "<br>");
var _addname = _name1+" "+_name2;
document.write(_addname);
let x = 10;
x += 5;
document.write(x);

//button creation
//<button type = "button" onclick = 'document.getElementById("de").innerHTML="Bye"'>Click me</button>
var car = ["BMW", "Audi", "Tesla"];
let text = " ";

for (let i = 0; i < car.length; i++) {
  text += car[i] + "<br>";
}

document.write(text);


</script>
 <h2 id ="De" >js </h2>
<h3 id="demo">JavaScript can change HTML content.</h3>

<button type="button" onclick='document.getElementById("demo").innerHTML = "Hello JavaScript!"'>Click Me!</button>
<button type = "button" onclick = 'document.getElementById("de").innerHTML="Bye"'>Click me</button>
</body>




</html>