<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pertandingan</title>
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

        .btn-add {
            display: inline-block;
            background-color: #16a085;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .btn-add:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #34495e;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            color: #2980b9;
            text-decoration: none;
            margin-right: 10px;
            font-size: 14px;
            border: 1px solid transparent;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        td a:hover {
            background-color: #1abc9c;
            color: white;
            transform: translateY(-2px);
        }


        td a.btn-delete:hover {
            background-color: #e74c3c;
            color: white;
        }

        td a.btn-delete {
            color: #e74c3c;
        } .btn-info {
            background-color: #3498db;
            color: white;
        }

        .btn-info:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        .btn-warning {
            background-color: #f39c12;
            color: white;
        }

        .btn-warning:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: #e74c3c;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        /* Modal Style */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            overflow: auto;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 8px;
            width: 50%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Daftar Pertandingan</h1>
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
        <a href="<?= route_to('matches.index') ?>" class="active"><i class="fas fa-calendar-alt"></i> Matches</a>
        <a href="<?= route_to('players.index') ?>"><i class="fas fa-user"></i> Players</a>
        <a href="<?= route_to('venues.index') ?>"><i class="fas fa-map-marker-alt"></i> Venues</a>
        <a href="<?= route_to('scores.index') ?>"><i class="fas fa-chart-line"></i> Scores</a>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Daftar Pertandingan</h1>
        <a href="/matches/create" class="btn-add">Tambah Pertandingan</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Turnamen</th>
                    <th>Tim 1</th>
                    <th>Tim 2</th>
                    <th>Tanggal Pertandingan</th>
                    <th>Hasil</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($matches as $match): ?>
                    <tr>
                        <td><?= $match['id'] ?></td>
                        <td><?= $match['tournament_id'] ?></td>
                        <td><?= $match['team1_id'] ?></td>
                        <td><?= $match['team2_id'] ?></td>
                        <td><?= $match['match_date'] ?></td>
                        <td><?= $match['result'] ?></td>
                        <td>
                            <a href="/matches/show/<?= $match['id'] ?>" class="btn-info"> <i class="fas fa-eye"> </i>Lihat</a>
                            <a href="/matches/edit/<?= $match['id'] ?>" class="btn-warning"><i class="fas fa-edit"> </i>Ubah</a>
                            <a href="/matches/delete/<?= $match['id'] ?>" class="btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pertandingan ini?')"><i class="fas fa-trash"> </i>Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>
