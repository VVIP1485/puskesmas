<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Turnamen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Reuse styles from the dashboard */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f4f6f9;
            color: #333;
        }

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

        .card {
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .card-header {
            background-color: #1abc9c;
            color: white;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
            font-size: 16px;
            line-height: 1.6;
        }

        .card-body p {
            margin: 10px 0;
        }

        .card-footer {
            text-align: right;
            padding: 15px;
            background-color: #f4f6f9;
        }

        .btn {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            margin-left: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-warning {
            background-color: #f1c40f;
            color: white;
        }

        .btn-warning:hover {
            background-color: #d4ac0d;
        }

        .btn-secondary {
            background-color: #3498db;
            color: white;
        }

        .btn-secondary:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Detail Turnamen</h1>
        <div class="user-actions">
            <span class="user-info">Hello, User</span>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="<?= route_to('dashboard.index') ?>" class="active"><i class="fas fa-home"></i> Dashboard</a>
        <a href="<?= route_to('teams.index') ?>"><i class="fas fa-users"></i> Teams</a>
        <a href="<?= route_to('tournaments.index') ?>"><i class="fas fa-trophy"></i> Tournaments</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Detail Turnamen</h1>

        <!-- Tournament Card -->
        <div class="card">
            <div class="card-header">
                <h3>Informasi Turnamen</h3>
            </div>
            <div class="card-body">
                <p><strong>ID Turnamen:</strong> <?= $tournament['id']; ?></p>
                <p><strong>Nama Turnamen:</strong> <?= $tournament['name']; ?></p>
                <p><strong>Game ID:</strong> <?= $tournament['game_id']; ?></p>
                <p><strong>Tanggal Mulai:</strong> <?= $tournament['start_date']; ?></p>
                <p><strong>Tanggal Selesai:</strong> <?= $tournament['end_date']; ?></p>
                <p><strong>Tanggal Dibuat:</strong> <?= $tournament['created_at']; ?></p>
            </div>
            <div class="card-footer text-end">
                <a href="/tournaments/edit/<?= $tournament['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="/tournaments" class="btn btn-secondary">Kembali ke Daftar</a>
            </div>
        </div>
    </div>

</body>

</html>
