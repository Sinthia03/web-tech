<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard </title>
   
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>

    <main class="main-content">
        <h1>Welcome Back </h1>

        <div class="dashboard-grid">
            
            <section class="card">
                <h2>Booking Summary</h2>
                <div class="stat-item">
                    <span class="stat-label">Total Room Bookings</span>
                    <span class="stat-value">12</span>
                </div>
                <div class="stat-item">
                    <span class="stat-label">Upcoming Check-in</span>
                    <span class="stat-value">Dec 28, 2025</span>
                </div>
                
            </section>

            <section class="card">
                <h2>Quick Actions</h2>
                <div class="action-buttons">
                    <button class="btn" onclick="window.location.href='Profile.php'">View My Profile</button>
                    <button class="btn" onclick="window.location.href='RoomInventory.php'"> Book Room</button>
                    
                    <button class="btn">Export Bookings</button>
                </div>
            </section>
            

        </div>
    </main>
    <div class ="logout-container">
        <button class ="logout-btn">Logout </button>
</div>

</body>
</html>
