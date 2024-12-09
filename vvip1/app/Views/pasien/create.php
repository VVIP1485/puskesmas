<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pasien</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            color: #333;
            margin: 0;
        }

        .container {
            max-width: 800px;
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

        .btn-primary {
            background-color: #00796b;
            color: white;
            border-radius: 8px;
            padding: 12px 25px;
            font-size: 1.1em;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #004d40;
            transform: translateY(-3px);
        }

        .btn-secondary {
            background-color: #bdbdbd;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1.1em;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-secondary:hover {
            background-color: #757575;
            transform: translateY(-3px);
        }


        .form-label {
            font-size: 1.1em;
            color: #00796b;
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #ccc;
            font-size: 1em;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #00796b;
            box-shadow: 0 0 5px rgba(0, 121, 107, 0.5);
        }

        .mb-3 {
            margin-bottom: 20px;
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

            .form-label {
                font-size: 1em;
            }

            .form-control {
                font-size: 0.9em;
                padding: 10px;
            }

            .btn-primary, .btn-secondary {
                padding: 10px 20px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Tambah Pasien</h2>
    <form action="/pasien/store" method="POST">
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
        </div>
        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <a href="/pasien" class="btn btn-secondary mt-3">batal</a>
</div>

</body>
</html>
