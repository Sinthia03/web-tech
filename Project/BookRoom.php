<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Rooms</title>
    <script>
        function submitFilters() {
            document.getElementById('filterForm').submit();
        }

        function resetFilters() {
            document.getElementById('filterForm').reset();submitFilters();
        }
        </script>
</head>
<body>
    <h1>Book Room</h1>

    <form method="POST" action ="">
        <div class ="filters">
            <select name ="type" onchange ="submitFilters">
           <option value ="">Room Type </option>
           <option value ="1">Single </option>
           <option value ="2">Double </option>
           <option value ="3">Suite </option>
    </select>

    <select name ="feature" onchange ="submitFilters">
           <option value ="">Features </option>
           <option value ="1">Wi-fi </option>
           <option value ="2">Air Conditioning </option>
           <option value ="3">Balcony </option>
    </select>

  <select name="price" onchange="submitFilters()">
            <option value="">Price </option>
            <option value="0-2000">0-2000</option>
            <option value="2001-4000">2001-4000</option>
            <option value="4001-6000">4001-6000</option>
            <option value="6001-10000">6001-10000</option>
        </select>
       
        



    </form>

    
</body>
</html>