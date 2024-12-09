<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Obat</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fb;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 650px;
            margin: 50px auto;
            padding: 40px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            color: #00796b;
            margin-bottom: 30px;
        }

        label {
            font-size: 1.1em;
            color: #00796b;
            margin-bottom: 8px;
            display: block;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1.1em;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="number"]:focus {
            border-color: #00796b;
            outline: none;
        }

        button {
            width: 100%;
            background-color: #00796b;
            color: white;
            padding: 14px;
            font-size: 1.2em;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            border: none;
        }

        button:hover {
            background-color: #004d40;
            transform: translateY(-3px);
        }

        .btn-secondary {
            display: inline-block;
            background-color: #bdbdbd;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 1.1em;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: 15px;
            text-align: center;
        }

        .btn-secondary:hover {
            background-color: #757575;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 20px;
            }

            h1 {
                font-size: 2em;
            }

            input[type="text"], input[type="number"] {
                font-size: 1em;
                padding: 10px;
            }

            button {
                padding: 12px 25px;
                font-size: 1.1em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Resep</h1>

    <!-- Display error or success messages -->
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <!-- Edit form -->
    <form action="/resep/update/<?= esc($resep['id_resep']) ?>" method="post">
        <?= csrf_field() ?>
        
        <div class="form-group">
            <label for="id_pasien">ID Pasien</label>
            <input type="text" id="id_pasien" name="id_pasien" value="<?= esc($resep['id_pasien']) ?>" required>
        </div>

        <div class="form-group">
            <label for="id_dokter">ID Dokter</label>
            <input type="text" id="id_dokter" name="id_dokter" value="<?= esc($resep['id_dokter']) ?>" required>
        </div>

        <div class="form-group">
            <label for="tanggal_resep">Tanggal Resep</label>
            <input type="date" id="tanggal_resep" name="tanggal_resep" value="<?= esc($resep['tanggal_resep']) ?>" required>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn-primary">Simpan Perubahan</button>
            <a href="/resep" class="btn-secondary">Batal</a>
        </div>
    </form>
</div>


</body>
</html>
