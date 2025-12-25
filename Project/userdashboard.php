<?php
session_start();

// --- Session Guard ---
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    header('location: login.php?error=badrequest');
    exit;
}

// --- Mock Data (No DB) ---
$userId = $_SESSION['user_id'] ?? 1;
$_SESSION['username'] = $_SESSION['username'] ?? 'JohnDoe';
$totalBookings   = 5;   // mock data
$upcomingCheckin = '2026-01-01'; // mock data
$loyaltyPoints   = 120; // mock data
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - HotelESS</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script>
        function updateDashboardData() {
            // In a no-DB setup, just randomize mock data for demo
            document.getElementById('totalBookings').innerText = Math.floor(Math.random()*10 + 1);
            document.getElementById('upcomingCheckin').innerText = "2026-01-" + (Math.floor(Math.random()*28 + 1));
            document.getElementById('loyaltyPoints').innerText = Math.floor(Math.random()*500 + 50);
        }
        setInterval(updateDashboardData, 15000);
    </script>
</head>
<body>
    <div class="navbar">
        <div class="logo">HotelESS</div>
        <button onclick="window.location.href='../controller/logout.php'">Logout</button>
    </div>

    <div class="main">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h1>

        <div class="dashboard-container">
            <div class="dashboard-card">
                <fieldset>
                    <legend>Summary</legend>
                    <p><label>My Room Bookings:</label>
                       <span class="dashboard-number" id="totalBookings"><?php echo $totalBookings; ?></span></p>
                    <p><label>Upcoming Check-in:</label>
                       <span class="dashboard-number" id="upcomingCheckin"><?php echo $upcomingCheckin; ?></span></p>
                    <p><label>Loyalty Points:</label>
                       <span class="dashboard-number" id="loyaltyPoints"><?php echo $loyaltyPoints; ?></span></p>
                </fieldset>
            </div>      

            <div class="dashboard-card">
                <fieldset>
                    <legend>Quick Actions</legend>
                    <input type="button" value="My Profile" onclick="window.location.href='profile.php'" />
                    <input type="button" value="Contact Us" onclick="window.location.href='contact.php'" />
                    <input type="button" value="Book a Room" onclick="window.location.href='room_inventory.php'" />
                    <input type="button" value="Export Bookings" onclick="window.location.href='export.php'" />
                    <input type="button" value="Activity Log" onclick="window.location.href='activitylog.php'" />
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>
