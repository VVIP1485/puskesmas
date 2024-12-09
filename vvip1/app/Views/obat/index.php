<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Obat</title>
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
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
            text-align: center;
            text-transform: uppercase;
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
            display: inline-block;
        }

        .btn-primary:hover, .btn-secondary:hover {
            background-color: #004d40;
            transform: translateY(-3px);
        }

        .mb-3 {
            margin-bottom: 20px;
        }

        /* Table Styles */
        table {
            width: 100%;
            margin-top: 30px;
            border-collapse: collapse;
            font-size: 1.1em;
        }

        table th, table td {
            padding: 14px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #00796b;
            color: white;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e0f2f1;
            transform: translateY(-2px);
            transition: background-color 0.2s, transform 0.2s;
        }

        table a {
            color: #00796b;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s, transform 0.3s;
        }

        table a:hover {
            background-color: #004d40;
            color: white;
            transform: translateY(-2px);
        }

        table button {
            background-color: #e53935; /* Delete button color */
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 6px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        table button:hover {
            background-color: #d32f2f; /* Hover effect for delete button */
            transform: translateY(-2px);
        }

        .btn-edit {
            background-color: #ff9800;
            color: white; 
        }

        .btn-edit:hover {
            background-color: #f57c00;
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
                padding: 10px;
                font-size: 1em;
            }

            .btn-primary {
                padding: 10px 20px;
                font-size: 1em;
            }

            .btn-secondary {
                padding: 10px 20px;
                font-size: 1em;
            }
        }
    </style>
    <script>
        // Konfirmasi sebelum menghapus
        function confirmDelete(event) {
            if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Daftar Obat</h1>

        <?php if (session()->getFlashdata('success')): ?>
            <p style="color: green; font-weight: bold;"><?= session()->getFlashdata('success') ?></p>
        <?php endif; ?>

        <a href="/obat/create" class="btn-primary mb-3">Tambah Obat</a>
        <a href="/dashboard" class="btn-secondary mb-3">Kembali</a>

        <!-- Daftar Obat table -->
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Obat</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($obat) && is_array($obat)): ?>
                    <?php foreach ($obat as $item): ?>
                        <tr>
                            <td><?= esc($item['id_obat']) ?></td>
                            <td><?= esc($item['nama_obat']) ?></td>
                            <td>Rp. <?= number_format(esc($item['harga']), 0, ',', '.') ?></td>
                            <td>
                                <a href="/obat/edit/<?= $item['id_obat'] ?>" class="btn-edit">Edit</a>
                                <form action="/obat/delete/<?= $item['id_obat'] ?>" method="post" style="display:inline;">
                                    <?= csrf_field() ?>
                                    <button type="submit" onclick="confirmDelete(event)">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" style="text-align: center; font-style: italic;">Tidak ada data obat.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
