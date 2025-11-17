<!DOCTYPE html>

<head>
   
    <title>wt-o</title>
    
    <style>
        
        body {
            background-color: #F2F0EF;
           
            text-align: center; 
            margin: 0;
            padding: 0;
        }
        
        /* --- Main Container Box Styles (Replaces the generic 'div' selector) --- */
        .main-box {
            width: 400px;
            height: 550px;
            padding: 10px;
            border: 3px solid white;
            /* Centers the block element horizontally */
            margin: 0 auto; 
            background-color: white;
            /* Added vertical space at the top so it doesn't stick to the top edge */
            margin-top: 50px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* --- Common Styles for Input Containers --- */
        .input-container {
            height: 50px;
            width: 300px;
            border: 1px solid #ccc; /* Subtle border added for clarity */
            padding: 2px;
            margin: 10px auto; /* Centers the input boxes within the main box */
            display: flex; /* Helps align the input field inside */
            align-items: center;
        }

        /* --- Input Field Styling --- */
        .input-container input {
            width: 100%;
            height: 100%;
            border: none; /* Removes the default input border */
            padding: 0 10px; /* Internal spacing for text */
            box-sizing: border-box; /* Ensures padding is included in the 100% width */
            font-size: 16px;
        }
        
        /* --- Specific Background Colors --- */
        .id-container {
            background-color: lightpink;
        }

        .id-password {
            background-color: lightgrey;
        }

        /* --- Header Styling for Consistent Centering --- */
        h1, h2, h3 {
            text-align: center;
            /* Use padding for separation instead of multiple <br> tags */
            margin-bottom: 5px; 
        }

    </style>
</head>

<body>
    
    <div class="main-box">
        
        <h1 style="color:Black;font-size:20px;font-family: 'Roboto', sans-serif;">American International University<br>-Bangladesh</h1>

        <h2 style="font-size:15px;font-family: Georgia, 'Times New Roman', serif;opacity:.8;">-where leaders are created</h2>

        <h3 style="font-size:15px;font-family: Georgia, 'Times New Roman', serif; margin-top: 30px;"> Sign in with your organizational id number</h3>
        
        <div style="height: 50px;"></div> 

        <div class="id-container input-container">
            <input type="text" placeholder="Enter your id-number">
        </div>

        <div class="id-password input-container">
            <input type="password" placeholder="Enter your password">
        </div>
        
        <button style="margin-top: 25px; padding: 10px 20px; background-color: darkblue; color: white; border: none; cursor: pointer; font-size: 16px;">Login </button>
      <h4 style="font-size:15px;font-family: Georgia, 'Times New Roman', serif; color:lightblue"> Can't access to your account?</h4>
    </div>
      
</body>
</html>