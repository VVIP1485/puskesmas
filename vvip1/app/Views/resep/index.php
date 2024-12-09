<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            color: #333;
            margin: 0;
        }

        .container {
            max-width: 1000px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
        }

        .btn-primary, .btn-secondary {
            background-color: #00796b;
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            font-size: 1.1em;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
            margin-right: 10px;
        }

        .btn-primary:hover, .btn-secondary:hover {
            background-color: #004d40;
            transform: translateY(-3px);
        }

        .btn-edit {
            background-color: #ff9800;
            color: white; 
        }

        .btn-edit:hover {
            background-color: #f57c00;
            transform: translateY(-3px);
        }

        .btn-delete {
            background-color: #e53935;
            color: white;
        }


        .btn-delete:hover {
            background-color: #d32f2f;
            transform: translateY(-3px);
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
            font-size: 1.1em;
        }

        table th {
            background-color: #00796b;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table a {
            color: #00796b;
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        table a:hover {
            background-color: #004d40;
            color: white;
            transform: translateY(-3px);
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 20px;
            }

            h1 {
                font-size: 2em;
            }

            table th, table td {
                padding: 8px;
                font-size: 1em;
            }

            .btn-primary {
                padding: 10px 20px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1><?= esc($title) ?></h1>

    <!-- Display success message -->
    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <!-- Add prescription button -->
    <a href="/resep/create" class="btn-primary">Tambah Resep</a>

    <!-- Back button -->
    <a href="/dashboard" class="btn-secondary mb-3">Kembali</a>

    <!-- Prescriptions table -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Pasien</th>
                <th>ID Dokter</th>
                <th>Tanggal Resep</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($resep) && is_array($resep)): ?>
                <?php foreach ($resep as $item): ?>
                    <tr>
                        <td><?= esc($item['id_resep']) ?></td>
                        <td><?= esc($item['id_pasien']) ?></td>
                        <td><?= esc($item['id_dokter']) ?></td>
                        <td><?= esc($item['tanggal_resep']) ?></td>
                        <td>
                            <a href="/resep/edit/<?= $item['id_resep'] ?>" class="btn-edit">Edit</a> | 
                            <a href="/resep/delete/<?= $item['id_resep'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data resep.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>
