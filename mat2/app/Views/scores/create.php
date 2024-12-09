<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Score</title>
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
            display: block;
            font-size: 16px;
            margin-bottom: 8px;
            color: #2c3e50;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            display: inline-block;
            background-color: #16a085;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        button:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        a {
            display: inline-block;
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-left: 10px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        a:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        .form-actions {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1>Add New Score</h1>

    <form action="<?= route_to('scores.store') ?>" method="post">
        <label for="match_id">Match ID:</label>
        <input type="number" id="match_id" name="match_id" required>

        <label for="team_id">Team ID:</label>
        <input type="number" id="team_id" name="team_id" required>

        <label for="points">Points:</label>
        <input type="number" id="points" name="points" required>

        <div class="form-actions">
            <button type="submit">Save</button>
            <a href="<?= route_to('scores.index') ?>">Cancel</a>
        </div>
    </form>
</body>

</html>
