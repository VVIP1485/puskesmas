<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pemeriksaan</title>
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

        input[type="text"], input[type="date"], textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1.1em;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus, input[type="date"]:focus, textarea:focus {
            border-color: #00796b;
            outline: none;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
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

        /* Error message styles */
        .error-message {
            color: red;
            font-size: 0.9em;
            margin-top: -15px;
            margin-bottom: 20px;
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

            input[type="text"], input[type="date"], textarea {
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
    <h1>Tambah Pemeriksaan</h1>

    <!-- Form tambah pemeriksaan -->
    <form action="/pemeriksaan/store" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="id_pasien">ID Pasien:</label>
            <input type="text" id="id_pasien" name="id_pasien" value="<?= old('id_pasien') ?>" required>
            <?php if (isset($validation) && $validation->hasError('id_pasien')): ?>
                <div class="error-message"><?= $validation->getError('id_pasien') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="id_dokter">ID Dokter:</label>
            <input type="text" id="id_dokter" name="id_dokter" value="<?= old('id_dokter') ?>" required>
            <?php if (isset($validation) && $validation->hasError('id_dokter')): ?>
                <div class="error-message"><?= $validation->getError('id_dokter') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="hasil_pemeriksaan">Hasil Pemeriksaan:</label>
            <input type="text" id="hasil_pemeriksaan" name="hasil_pemeriksaan" required><?= old('hasil_pemeriksaan') ?>
            <?php if (isset($validation) && $validation->hasError('hasil_pemeriksaan')): ?>
                <div class="error-message"><?= $validation->getError('hasil_pemeriksaan') ?></div>
            <?php endif; ?>
        </div>

        <div class="mb-3">
            <label for="tanggal_pemeriksaan">Tanggal Pemeriksaan:</label>
            <input type="date" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" value="<?= old('tanggal_pemeriksaan') ?>" required>
            <?php if (isset($validation) && $validation->hasError('tanggal_pemeriksaan')): ?>
                <div class="error-message"><?= $validation->getError('tanggal_pemeriksaan') ?></div>
            <?php endif; ?>
        </div>

        <button type="submit">Simpan</button>
        <a href="/pemeriksaan" class="btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
