<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Dokter</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            color: #333;
            margin: 0;
        }

        .container {
            max-width: 600px;
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

        label {
            font-size: 1.2em;
            color: #00796b;
            margin-bottom: 8px;
        }

        input[type="text"], input[type="date"], input[type="number"], select, textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1em;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="date"]:focus, input[type="number"]:focus, select:focus, textarea:focus {
            border-color: #00796b;
            outline: none;
        }

        button {
            background-color: #00796b;
            color: white;
            padding: 12px 30px;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
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

        /* Responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 20px;
            }

            h1 {
                font-size: 2em;
            }

            input[type="text"], input[type="date"], input[type="number"], select, textarea {
                font-size: 1em;
                padding: 10px;
            }

            button {
                padding: 10px 25px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Edit Dokter</h1>

    <form action="/dokter/update/<?= $dokter['id_dokter'] ?>" method="POST">
        <input type="hidden" name="_method" value="PUT"> <!-- Spoofing method -->
        <?= csrf_field() ?>
        
        <div class="mb-3">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?= esc($dokter['nama']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="spesialisasi">Spesialisasi:</label>
            <input type="text" name="spesialisasi" id="spesialisasi" value="<?= esc($dokter['spesialisasi']) ?>" required>
        </div>
        <div class="mb-3">
            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" name="nomor_telepon" id="nomor_telepon" value="<?= esc($dokter['nomor_telepon']) ?>" required>
        </div>
        
        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/dokter" class="btn-secondary">Batal</a>
</div>

</body>
</html>
