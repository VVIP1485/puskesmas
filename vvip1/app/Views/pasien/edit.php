<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pasien</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            color: #333;
            margin: 0;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #00796b;
            font-size: 2em;
            margin-bottom: 20px;
            font-weight: bold;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1.1em;
            margin-bottom: 8px;
            color: #333;
        }

        input, select, textarea {
            padding: 12px;
            font-size: 1em;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            outline: none;
            transition: border 0.3s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #00796b;
        }

        .btn-primary, .btn-secondary {
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 12px 20px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            text-align: center;
            display: inline-block;
            margin-right: 10px;
        }

        .btn-primary:hover {
            background-color: #004d40;
            transform: translateY(-3px);
        }

        .btn-secondary {
            background-color: #e53935;
        }

        .btn-secondary:hover {
            background-color: #d32f2f;
            transform: translateY(-3px);
        }

        .btn-container {
            text-align: center;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 20px;
            }

            h1 {
                font-size: 1.8em;
            }

            .btn-primary, .btn-secondary {
                font-size: 1em;
                padding: 10px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Data Pasien</h1>
        
        <?php if (session()->getFlashdata('error')): ?>
            <p style="color: red; font-weight: bold;"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>

        <form action="/pasien/update/<?= esc($pasien['id_pasien']) ?>" method="post">
            <?= csrf_field() ?>
            
            <!-- Nama -->
            <label for="nama">Nama Pasien</label>
            <input type="text" id="nama" name="nama" value="<?= esc($pasien['nama']) ?>" required>

            <!-- Alamat -->
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" rows="3" required><?= esc($pasien['alamat']) ?></textarea>

            <!-- Telepon -->
            <label for="telepon">Nomor Telepon</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="<?= esc($pasien['nomor_telepon']) ?>" pattern="[0-9]+" required>

            <!-- Jenis Kelamin -->
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L" <?= $pasien['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
                <option value="P" <?= $pasien['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
            </select>

            <!-- Tombol Aksi -->
            <div class="btn-container">
                <button type="submit" class="btn-primary">Simpan Perubahan</button>
                <a href="/pasien" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
