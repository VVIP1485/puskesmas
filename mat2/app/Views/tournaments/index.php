<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Turnamen</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* General styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100vh;
        }

        /* Header */
        h1 {
            text-align: center;
            font-size: 28px;
            color: #2c3e50;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Button Styles */
        .btn {
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            display: inline-block;
            text-align: center;
            transition: background-color 0.3s ease, transform 0.3s;
        }

        .btn-primary {
            background-color: #16a085;
            color: white;
        }

        .btn-primary:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        .btn-info {
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

        .btn-back {
            background-color: #3498db;
            color: white;
            margin-bottom: 20px;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            display: inline-block;
            transition: background-color 0.3s ease, transform 0.3s;
        }

        .btn-back:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        /* Table Styles */
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
        }

        table thead {
            background-color: #2c3e50;
            color: white;
        }

        table thead th {
            padding: 15px;
            text-align: left;
            font-size: 14px;
        }

        table tbody td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            font-size: 14px;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tbody tr:hover {
            background-color: #f8f9fa;
        }

        table a {
            text-decoration: none;
        }

        /* Margin around "Tambah Turnamen" button */
        .btn-container {
            text-align: center;
            margin-bottom: 20px;
        }

        /* Style for back button container */
        .btn-back-container {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 40px;
        }
    </style>
</head>

<body>
    <h1>Daftar Turnamen</h1>
    
    <div class="btn-container">
        <a href="/tournaments/create" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Turnamen
        </a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Turnamen</th>
                <th>Game ID</th>
                <th>Tanggal Mulai</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tournaments as $tournament): ?>
                <tr>
                    <td><?= $tournament['id']; ?></td>
                    <td><?= $tournament['name']; ?></td>
                    <td><?= $tournament['game_id']; ?></td>
                    <td><?= $tournament['start_date']; ?></td>
                    <td><?= $tournament['end_date']; ?></td>
                    <td>
                        <a href="/tournaments/show/<?= $tournament['id']; ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-eye"></i> Lihat
                        </a>
                        <a href="/tournaments/edit/<?= $tournament['id']; ?>" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="/tournaments/delete/<?= $tournament['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus turnamen ini?')">
                            <i class="fas fa-trash"></i> Hapus
                        </a>
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
</body>

</html>
