<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f6f9;
            color: #333;
        }

        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #2c3e50;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            top: 60px;
            left: 0;
            box-shadow: 2px 0 8px rgba(0, 0, 0, 0.2);
            color: white;
            transition: all 0.3s ease-in-out;
        }

        .sidebar h2 {
            color: #d4e157;
            text-align: center;
            padding: 20px;
            margin: 0;
            font-size: 24px;
            border-radius: 25px;
            margin-bottom: 15px;
            background-color: #1abc9c;
            border-bottom: 1px solid #ddd;
        }

        /* Sidebar */
        .sidebar a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 10px;
            transition: background-color 0.3s, transform 0.3s;
            text-align: center;
            border-radius: 8px;
        }

        .sidebar a:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .sidebar a.active {
            background-color: #2980b9;
            color: #000;
        }

        /* Top Bar */
        .top-bar {
            height: 60px;
            background-color: #2c3e50;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            box-sizing: border-box;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .top-bar h1 {
            margin: 0;
            color: #d4e157;
            font-size: 20px;
            font-weight: bold;
        }

        .top-bar .user-info {
            color: #ffffff;
            font-size: 16px;
            padding: 5px 15px;
            border-radius: 8px;
            background-color: #117864;
            transition: background-color 0.3s ease, color 0.3s ease;
            cursor: pointer;
        }

        .top-bar .user-info:hover {
            background-color: #ffab40;
            color: #000000;
        }

        /* Content */
        .content {
            margin-left: 270px;
            padding: 20px;
            width: calc(100% - 270px);
            margin-top: 80px;
        }

        .content h2.stat-title {
            font-size: 24px;
            color: #2c3e50;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        /* Stats Section */
        .stats {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            gap: 20px;
            margin-top: 20px;
            padding: 0 20px;
            margin-left: 30px;
        }

        /* Stat Box */
        .stat-box {
            background-color: #16a085;
            padding: 20px;
            text-align: center;
            border-radius: 8px;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, background-color 0.3s ease;
            width: 220px;
            height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .stat-box:hover {
            transform: translateY(-5px);
            background-color: #1abc9c;
        }

        .stat-box h2 {
            font-size: 18px;
            margin-bottom: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .stat-box .count {
            font-size: 28px;
            font-weight: bold;
        }

        /* Table Style */
        table {
            width: 90%;
            margin: 30px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 10px 12px;
            text-align: left;
            border: 1px solid #ddd;
            font-size: 14px;
        }

        table th {
            background-color: #2c3e50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table a {
            color: #2980b9;
            text-decoration: none;
        }

        table a:hover {
            text-decoration: underline;
        }

        /* Logout Button Style */
        .btn-logout {
            background-color: #e74c3c;
            color: white;
            padding: 5px 10px;
            text-decoration: none;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-logout:hover {
            background-color: #c0392b;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Dashboard</h1>
        <div class="user-actions">
            <span class="user-info">Hello, User</span>
            <a href="/logout" class="btn-logout">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="<?= route_to('dashboard.index') ?>" class="active"><i class="fas fa-home"></i> Dashboard</a>
        <a href="<?= route_to('teams.index') ?>"><i class="fas fa-users"></i> Teams</a>
        <a href="<?= route_to('tournaments.index') ?>"><i class="fas fa-trophy"></i> Tournaments</a>
        <a href="<?= route_to('matches.index') ?>"><i class="fas fa-calendar-alt"></i> Matches</a>
        <a href="<?= route_to('players.index') ?>"><i class="fas fa-user"></i> Players</a>
        <a href="<?= route_to('venues.index') ?>"><i class="fas fa-map-marker-alt"></i> Venues</a>
        <a href="<?= route_to('scores.index') ?>"><i class="fas fa-chart-line"></i> Scores</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h2 class="stat-title">STATISTIK</h2>
        <div class="stats">
            <div class="stat-box">
                <h2>Total Teams</h2>
                <p class="count"><?= $total_teams ?></p>
            </div>
            <div class="stat-box">
                <h2>Total Tournaments</h2>
                <p class="count"><?= $total_tournaments ?></p>
            </div>
            <div class="stat-box">
                <h2>Total Matches</h2>
                <p class="count"><?= $total_matches ?></p>
            </div>
            <div class="stat-box">
                <h2>Total Players</h2>
                <p class="count"><?= $total_players ?></p>
            </div>
            <div class="stat-box">
                <h2>Total Venues</h2>
                <p class="count"><?= $total_venues ?></p>
            </div>
            <div class="stat-box">
                <h2>Total Scores</h2>
                <p class="count"><?= $total_scores ?></p>
            </div>
        </div>
    </div>

</body>

</html>
