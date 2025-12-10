<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Random Background Color</title>
  <style>
    body {
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
  <button id="changeBgBtn">Change Background</button>

  <script>
    const button = document.getElementById('changeBgBtn');

    // Function to generate a random color
    function getRandomColor() {
      // Generate random RGB values
      const r = Math.floor(Math.random() * 256);
      const g = Math.floor(Math.random() * 256);
      const b = Math.floor(Math.random() * 256);
      return `rgb(${r}, ${g}, ${b})`;
    }

    // Add click event listener
    button.addEventListener('click', () => {
      const randomColor = getRandomColor();
      document.body.style.backgroundColor = randomColor;
    });
  </script>
</body>
</html>
