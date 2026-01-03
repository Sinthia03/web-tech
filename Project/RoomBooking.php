<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="RoomBooking.css">
</head>
<body>

<div class ="container">
    <h1> Room 101_Delux </h1>
    <img src = "" alt ="Room image">
<p><strong>Price Per Night : </strong> TK 3500.00</p>
<p>Status:</strong>
<span class ="badge available" >Available</span>
</p>

<p><strong>Features:</strong>Wi-fi,Air Conditioning ,Balcony</p>

<form method ="POST" action ="">
    <label>CheckIn Date</label>
    <input type ="date" id ="checkin_date" >

     <label>Nights</label>
    <input type ="number" id ="nights" min="1" value="1" >

     <label>CheckOut Date</label>
    <input type ="date" id ="checkout_date" >


<p id ="totalcost" class="total">Total:Tk 3500.00</p>
<button type ="submit">Confirm Booking </button>


</form>



    
</body>
</html>