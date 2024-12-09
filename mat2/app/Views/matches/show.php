<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pertandingan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
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
        }

        .sidebar a {
            display: block;
            color: white;
            padding: 15px 20px;
            text-decoration: none;
            font-size: 16px;
            margin-bottom: 10px;
            text-align: center;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .sidebar a:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        /* Content */
        .content {
            margin-left: 270px;
            padding: 20px;
            width: calc(100% - 270px);
            margin-top: 80px;
        }

        .content h1 {
            font-size: 28px;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        .details-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .details-container p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .details-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #16a085;
            color: white;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .details-container a:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Detail Pertandingan</h1>
        <div class="user-actions">
            <span class="user-info">Hello, User</span>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="<?= route_to('dashboard.index') ?>"><i class="fas fa-home"></i> Dashboard</a>
        <a href="<?= route_to('teams.index') ?>"><i class="fas fa-users"></i> Teams</a>
        <a href="<?= route_to('tournaments.index') ?>"><i class="fas fa-trophy"></i> Tournaments</a>
        <a href="<?= route_to('matches.index') ?>"><i class="fas fa-calendar-alt"></i> Matches</a>
        <a href="<?= route_to('players.index') ?>"><i class="fas fa-user"></i> Players</a>
        <a href="<?= route_to('venues.index') ?>"><i class="fas fa-map-marker-alt"></i> Venues</a>
        <a href="<?= route_to('scores.index') ?>"><i class="fas fa-chart-line"></i> Scores</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Detail Pertandingan</h1>
        <div class="details-container">
            <p><strong>ID:</strong> <?= $match['id'] ?></p>
            <p><strong>Turnamen ID:</strong> <?= $match['tournament_id'] ?></p>
            <p><strong>Tim 1 ID:</strong> <?= $match['team1_id'] ?></p>
            <p><strong>Tim 2 ID:</strong> <?= $match['team2_id'] ?></p>
            <p><strong>Tanggal Pertandingan:</strong> <?= $match['match_date'] ?></p>
            <p><strong>Hasil:</strong> <?= $match['result'] ?></p>
            <a href="/matches">Kembali</a>
        </div>
    </div>
</body>

</html>
