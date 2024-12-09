<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Obat</title>
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
            margin-bottom: 40px;
            font-weight: bold;
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
            margin-top: 20px;
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
    <h1>Edit Obat</h1>

    <!-- Form Edit Obat -->
    <form action="/obat/update/<?= $obat['id_obat'] ?>" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="nama_obat">Nama Obat:</label>
            <input type="text" id="nama_obat" name="nama_obat" value="<?= esc($obat['nama_obat']) ?>" required>
        </div>

        <div class="mb-3">
            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="<?= esc($obat['harga']) ?>" required>
        </div>

        <button type="submit">Perbarui</button>
        <a href="/obat" class="btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
