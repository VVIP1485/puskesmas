<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Tim</title>
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
            flex-direction: column;
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

        .content {
    margin-top: 80px;
    padding: 20px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center; /* Center content horizontally */
}

.btn-primary {
    display: inline-block;
    background-color: #1abc9c;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    font-size: 16px;
    border-radius: 8px;
    margin-bottom: 20px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-align: center;
}

.btn-primary:hover {
    background-color: #16a085;
    transform: translateY(-2px);
}

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th,
        table td {
            padding: 12px 15px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #2c3e50;
            color: white;
            text-transform: uppercase;
        }

        table tr:hover {
            background-color: #f2f2f2;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-info {
            background-color: #3498db;
            color: white;
        }

        .btn-info:hover {
            background-color: #2980b9;
        }

        .btn-warning {
            background-color: #f1c40f;
            color: white;
        }

        .btn-warning:hover {
            background-color: #d4ac0d;
        }

        .btn-danger {
            background-color: #e74c3c;
            color: white;
        }

        .btn-danger:hover {
            background-color: #c0392b;
        }

        /* Style for back button container */
        .btn-back-container {
            text-align: center;
            margin-top: 30px;
        }

        .btn-back {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-back:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <!-- Top Bar -->
    <div class="top-bar">
        <h1>Daftar Tim</h1>
        <div class="user-actions">
            <span class="user-info">Hello, User</span>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        <h1>Daftar Tim</h1>
        <a href="/teams/create" class="btn-primary">Tambah Tim</a>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Tim</th>
                    <th>Wilayah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teams as $team): ?>
                    <tr>
                        <td><?= $team['id']; ?></td>
                        <td><?= $team['name']; ?></td>
                        <td><?= $team['region']; ?></td>
                        <td>
                            <a href="/teams/show/<?= $team['id']; ?>" class="btn btn-info" >
                            <i class="fas fa-eye"> </i> Lihat</a>

                            <a href="/teams/edit/<?= $team['id']; ?>" class="btn btn-warning"> <i class="fas fa-edit"> </i>Edit</a>
                            <a href="/teams/delete/<?= $team['id']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus tim ini?')"> <i class="fas fa-trash"> </i>Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Button to go back to the dashboard at the bottom center -->
        <div class="btn-back-container">
            <a href="/dashboard" class="btn-back">
                <i class="fas fa-arrow-left"></i> Kembali ke Dashboard
            </a>
        </div>
    </div>

</body>

</html>
