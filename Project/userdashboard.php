<?php
session_start();
//require_once('../model/userModel.php');

// --- Session & Cookie Guard ---
if (!isset($_SESSION['status']) || $_SESSION['status'] !== true) {
    if (isset($_COOKIE['status']) && (string)$_COOKIE['status'] === '1') {
        $_SESSION['status'] = true;
        if (!isset($_SESSION['username']) && isset($_COOKIE['remember_user'])) {
            $_SESSION['username'] = $_COOKIE['remember_user'];
        }
        if (!isset($_SESSION['role']) && isset($_COOKIE['remember_role'])) {
            $c = strtolower(trim((string)$_COOKIE['remember_role']));
            $_SESSION['role'] = ($c === 'admin') ? 'Admin' : 'User';
        }
    } else {
        header('location: ../view/login.php?error=badrequest');
        exit;
    }
}

// --- Get logged-in user ID ---
$userId = $_SESSION['user_id'] ?? 0;

// --- Dashboard Function Calls ---
$totalBookings   = getUserRoomBookings($userId);   // Total room bookings
$upcomingCheckin = getUpcomingCheckins($userId);  // Next reservation/check-in
$loyaltyPoints   = getLoyaltyPoints($userId);     // User loyalty points
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard - HotelESS</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins',sans-serif; }

        body {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url("../asset/img/hotel8.jpg") no-repeat center center/cover;
            color:#fff;
            min-height:100vh;
            display:flex;
            flex-direction:column;
        }

        /* Navbar */
        .navbar {
            width:100%;
            padding:15px 30px;
            background:rgba(0,0,0,0.6);
            display:flex;
            justify-content:space-between;
            align-items:center;
            box-shadow:0px 2px 6px rgba(0,0,0,0.5);
        }
        .navbar .logo {
            font-size:22px;
            font-weight:600;
            color:#f1c40f;
        }
        .navbar button {
            background:#e74c3c;
            border:none;
            padding:8px 18px;
            border-radius:6px;
            color:#fff;
            cursor:pointer;
            font-weight:600;
            transition:0.3s;
        }
        .navbar button:hover { background:#c0392b; }

        /* Main Container */
        .main {
            flex:1;
            display:flex;
            flex-direction:column;
            align-items:center;
            padding:30px;
        }

        h1 {
            margin-bottom:25px;
            font-size:28px;
            font-weight:600;
            color:#f1c40f;
            text-shadow:0px 2px 6px rgba(0,0,0,0.6);
        }

        .dashboard-container {
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:25px;
            width:100%;
            max-width:950px;
        }

        .dashboard-card {
            background:rgba(255,255,255,0.1);
            backdrop-filter:blur(8px);
            padding:25px;
            border-radius:12px;
            box-shadow:0px 4px 12px rgba(0,0,0,0.4);
        }

        .dashboard-card legend {
            font-size:18px;
            font-weight:600;
            color:#f1c40f;
            margin-bottom:15px;
        }

        .dashboard-card label { font-weight:500; margin-right:10px; }
        .dashboard-number {
            font-size:22px;
            font-weight:700;
            color:#1abc9c;
        }

        .dashboard-card input[type="button"] {
            display:block;
            width:100%;
            margin:8px 0;
            padding:12px;
            border:none;
            border-radius:8px;
            font-weight:600;
            font-size:15px;
            cursor:pointer;
            background:#1abc9c;
            color:#fff;
            transition:background 0.3s;
        }
        .dashboard-card input[type="button"]:hover { background:#16a085; }

        /* Responsive */
        @media(max-width:900px){
            .dashboard-container{ grid-template-columns:1fr; }
        }
    </style>

    <script>
        function updateDashboardData() {
            const xhttp = new XMLHttpRequest();
            xhttp.open('GET', '../controller/get_user_dashboard_data.php', true);
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    const data = JSON.parse(this.responseText);
                    if (data.status === 'success') {
                        document.getElementById('totalBookings').innerText   = data.totalBookings;
                        document.getElementById('upcomingCheckin').innerText = data.upcomingCheckin;
                        document.getElementById('loyaltyPoints').innerText   = data.loyaltyPoints;
                    }
                }
            };
            xhttp.send();
        }
        setInterval(updateDashboardData, 15000);
    </script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">HotelESS</div>
        <button onclick="window.location.href='../controller/logout.php'">Logout</button>
    </div>

    <!-- Main Content -->
    <div class="main">
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?> 👋</h1>

        <div class="dashboard-container">
            <!-- Summary -->
            <div class="dashboard-card">
                <fieldset>
                    <legend>Summary</legend>
                    <p><label>My Room Bookings:</label>
                       <span class="dashboard-number" id="totalBookings"><?php echo $totalBookings; ?></span></p>
                    <p><label>Upcoming Check-in:</label>
                       <span class="dashboard-number" id="upcomingCheckin"><?php echo $upcomingCheckin; ?></span></p>
            <!-- 
                    <p><label>Loyalty Points:</label>
                       <span class="dashboard-number" id="loyaltyPoints"><?php echo $loyaltyPoints; ?></span></p>   -->
                </fieldset>
            </div>      

            <!-- Quick Actions -->
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