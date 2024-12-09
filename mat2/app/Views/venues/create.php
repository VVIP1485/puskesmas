<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Venue</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #2c3e50;
            font-size: 28px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
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
            text-decoration: none;
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
            transition: background-color 0.3s ease, transform 0.2s;
            text-align: center;
        }

        a:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <form action="<?= route_to('venues.store') ?>" method="post">
        <h1>Add New Venue</h1>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>

        <label for="capacity">Capacity:</label>
        <input type="number" id="capacity" name="capacity" required>

        <div class="button-group">
            <button type="submit">Save</button>
            <a href="<?= route_to('venues.index') ?>">Cancel</a>
        </div>
    </form>
</body>

</html>
