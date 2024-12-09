<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            color: #333;
            margin: 0;
        }

        .container {
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
        }

        .btn-group {
            margin-bottom: 30px;
            text-align: left; /* Center the buttons */
        }

        .btn-back, .btn-primary {
            background-color: #004d40;
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            font-size: 1.1em;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-back:hover, .btn-primary:hover {
            background-color: #00796b;
            transform: translateX(-5px);
        }

        .table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
        }

        .table th, .table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-size: 1.1em;
        }

        .table th {
            background-color: #00796b;
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table tr:hover {
            background-color: #f1f1f1;
        }

        .btn-warning, .btn-danger {
            font-size: 1em;
            border-radius: 8px;
            padding: 10px 15px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-warning {
            background-color: #ff9800;
            color: white;
        }

        .btn-warning:hover {
            background-color: #f57c00;
            transform: translateY(-3px);
        }

        .btn-danger {
            background-color: #e53935;
            color: white;
        }

        .btn-danger:hover {
            background-color: #d32f2f;
            transform: translateY(-3px);
        }

        .alert {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 20px;
            }

            h2 {
                font-size: 2em;
            }

            .table th, .table td {
                font-size: 1em;
                padding: 10px;
            }

            .btn-back, .btn-primary {
                padding: 10px 20px;
            }

            .btn-warning, .btn-danger {
                padding: 8px 12px;
                font-size: 0.9em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Data Pasien</h2>

   
    <div class="btn-group">
       <a href="/pasien/create" class="btn-primary">Tambah Pasien</a> 
       <a href="/dashboard" class="btn-back">kembali</a>
        
    </div>

    <?php if (session()->getFlashdata('message')): ?>
        <div class="alert">
            <?= session()->getFlashdata('message'); ?>
        </div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pasien as $key => $p): ?>
            <tr>
                <td><?= $key + 1 ?></td>
                <td><?= esc($p['nama']) ?></td>
                <td><?= esc($p['tanggal_lahir']) ?></td>
                <td><?= esc($p['jenis_kelamin']) ?></td>
                <td><?= esc($p['alamat']) ?></td>
                <td><?= esc($p['nomor_telepon']) ?></td>
                <td>
                    <a href="/pasien/edit/<?= $p['id_pasien'] ?>" class="btn btn-warning">Edit</a>
                    <a href="/pasien/delete/<?= $p['id_pasien'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
