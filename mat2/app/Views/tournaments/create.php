<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Turnamen Baru</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            margin-top: 20px;
            color: #2c3e50;
            font-size: 28px;
            text-align: center;
        }

        form {
            width: 90%;
            max-width: 600px;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="date"]:focus {
            border-color: #16a085;
            outline: none;
            box-shadow: 0 0 5px rgba(22, 160, 133, 0.5);
        }

        .btn {
            display: inline-block;
            background-color: #16a085;
            color: white;
            text-decoration: none;
            text-align: center;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
            width: 100%;
        }

        .btn:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        .btn:active {
            background-color: #138d75;
        }
    </style>
</head>

<body>
    <h1>Tambah Turnamen Baru</h1>
    <form action="/tournaments/store" method="post">
        <?= csrf_field(); ?>
        <div class="form-group">
            <label for="name">Nama Turnamen</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="game_id">Game ID</label>
            <input type="text" id="game_id" name="game_id">
        </div>
        <div class="form-group">
            <label for="start_date">Tanggal Mulai</label>
            <input type="date" id="start_date" name="start_date" required>
        </div>
        <div class="form-group">
            <label for="end_date">Tanggal Selesai</label>
            <input type="date" id="end_date" name="end_date">
        </div>
        <button type="submit" class="btn">Simpan</button>
    </form>
</body>

</html>
