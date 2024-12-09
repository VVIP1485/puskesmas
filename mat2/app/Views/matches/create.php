<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Match Baru</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            font-size: 14px;
        }

        .form-control:focus {
            outline: none;
            border-color: #1abc9c;
            background-color: #ffffff;
        }

        .btn-primary {
            background-color: #16a085;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn-primary:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Tambah Match Baru</h1>
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
        <h1>Tambah Pertandingan Baru</h1>

        <form action="/matches/store" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="tournament_id">Turnamen</label>
                <select class="form-control" id="tournament_id" name="tournament_id" required>
                    <option value="">Pilih Turnamen</option>
                    <?php foreach ($tournaments as $tournament): ?>
                        <option value="<?= $tournament['id']; ?>"><?= $tournament['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="form-group">
                <label for="team1_id">Tim 1</label>
                <input type="number" class="form-control" id="team1_id" name="team1_id" required>
            </div>

            <div class="form-group">
                <label for="team2_id">Tim 2</label>
                <input type="number" class="form-control" id="team2_id" name="team2_id" required>
            </div>

            <div class="form-group">
                <label for="match_date">Tanggal Pertandingan</label>
                <input type="date" class="form-control" id="match_date" name="match_date" required>
            </div>

            <div class="form-group">
                <label for="result">Hasil</label>
                <input type="text" class="form-control" id="result" name="result">
            </div>

            <button type="submit" class="btn-primary">Simpan</button>
        </form>
    </div>
</body>

</html>
