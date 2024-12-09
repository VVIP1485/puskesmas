<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tim Baru</title>
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

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 5px;
            color: #2c3e50;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #1abc9c;
        }

        .btn-primary {
            display: inline-block;
            background-color: #1abc9c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 8px;
            margin-top: 10px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #16a085;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Tambah Tim Baru</h1>
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
        <h1>Tambah Tim Baru</h1>
        <form action="/teams/store" method="post">
            <?= csrf_field(); ?>
            <div class="form-group">
                <label for="name">Nama Tim</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="region">Wilayah</label>
                <input type="text" id="region" name="region">
            </div>
            <button type="submit" class="btn-primary">Simpan</button>
        </form>
    </div>

</body>

</html>
