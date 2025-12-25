<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - HotelESS</title>
   
    <link rel="stylesheet" href="userstyle.css">
</head>
<body>

    <header class="navbar">
        <div class="logo">HotelESS</div>
        <button class="logout-btn">Logout</button>
    </header>

    <main class="main-content">
        <h1>Welcome Back 👋</h1>

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
                <div class="stat-item">
                    <span class="stat-label">Loyalty Points</span>
                    <span class="stat-value">450 pts</span>
                </div>
            </section>

            <section class="card">
                <h2>Quick Actions</h2>
                <div class="action-buttons">
                    <button class="btn">View My Profile</button>
                    <button class="btn">Book New Room</button>
                    <button class="btn">Contact Support</button>
                    <button class="btn">View Activity Log</button>
                </div>
            </section>

        </div>
    </main>

</body>
</html>
