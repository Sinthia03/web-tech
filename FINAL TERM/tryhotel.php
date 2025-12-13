<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
        }

        /* Header */
        .header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        /* Quick Actions */
        .quick-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 20px 0;
        }
        .quick-actions a {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
        }
        .quick-actions a:hover {
            background-color: #0056b3;
        }

        /* Bookings Table */
        .bookings {
            width: 90%;
            margin: 0 auto 30px auto;
            border-collapse: collapse;
        }
        .bookings th, .bookings td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: center;
        }
        .bookings th {
            background-color: #007bff;
            color: white;
        }
        .bookings td button {
            padding: 6px 12px;
            background-color: #ff4d4d;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .bookings td button:hover {
            background-color: #cc0000;
        }

        /* Recent Reviews / Notifications */
        .notifications {
            width: 90%;
            margin: 0 auto 30px auto;
            background: white;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .notifications h3 {
            margin-top: 0;
        }
        .notifications ul {
            list-style: none;
            padding-left: 0;
        }
        .notifications li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }

        /* Footer */
        .footer {
            background-color: #003366;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

    </style>
</head>
<body>

    <!-- Header -->
    <div class="header">
        Welcome, John Doe!
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <a href="browse_rooms.php">Book Room</a>
        <a href="profile.php">Profile</a>
    </div>

    <!-- Upcoming Bookings Table -->
    <table class="bookings">
        <thead>
            <tr>
                <th>Room Type</th>
                <th>Check-in</th>
                <th>Check-out</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Deluxe Room</td>
                <td>2025-12-20</td>
                <td>2025-12-22</td>
                <td>Confirmed</td>
                <td><button>Cancel</button></td>
            </tr>
            <tr>
                <td>Suite Room</td>
                <td>2025-12-25</td>
                <td>2025-12-27</td>
                <td>Confirmed</td>
                <td><button>Cancel</button></td>
            </tr>
        </tbody>
    </table>

    <!-- Recent Reviews / Notifications -->
    <div class="notifications">
        <h3>Recent Notifications</h3>
        <ul>
            <li>Your booking for Deluxe Room on 2025-12-20 is confirmed.</li>
            <li>You submitted a review for Deluxe Room. Thank you!</li>
            <li>Your invoice for Suite Room is ready to download.</li>
        </ul>
    </div>

    <!-- Footer -->
    <div class="footer">
        Contact | Support | <a href="logout.php" style="color:white; text-decoration:underline;">Logout</a>
    </div>

</body>
</html>
