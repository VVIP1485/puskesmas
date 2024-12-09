<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Player</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f6f9;
            color: #333;
        }

        h1 {
            color: #2c3e50;
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #2c3e50;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #333;
        }

        button {
            display: inline-block;
            background-color: #16a085;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        button:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        a {
            display: inline-block;
            color: #2980b9;
            text-decoration: none;
            font-size: 16px;
            margin-left: 10px;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1abc9c;
        }

        .actions {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Add New Player</h1>

    <form action="<?= route_to('players.store') ?>" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="team_id">Team ID:</label>
        <input type="text" id="team_id" name="team_id" required>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <div class="actions">
            <button type="submit">Save</button>
            <a href="<?= route_to('players.index') ?>">Cancel</a>
        </div>
    </form>
</body>

</html>
