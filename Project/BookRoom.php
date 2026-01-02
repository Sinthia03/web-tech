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

    <select name ="type" onchange ="submitFilters">
           <option value ="">Room Type </option>
           <option value ="1">Single </option>
           <option value ="2">Double </option>
           <option value ="3">Suite </option>
    </select>



    </form>

    
</body>
</html>