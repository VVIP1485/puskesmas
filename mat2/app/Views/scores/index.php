<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores List</title>
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

        .success-message {
            color: green;
            text-align: center;
            font-size: 16px;
            margin-bottom: 20px;
        }

        a.btn-add,
        a.btn-back {
            display: inline-block;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 20px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        a.btn-add {
            background-color: #16a085;
        }

        a.btn-add:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        a.btn-back {
            background-color: #3498db;
        }

        a.btn-back:hover {
            background-color: #2980b9;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #2c3e50;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        td a {
            color: #2980b9;
            text-decoration: none;
            margin-right: 10px;
            font-size: 14px;
            border: 1px solid transparent;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        td a:hover {
            background-color: #1abc9c;
            color: white;
            transform: translateY(-2px);
        }

        .btn-edit {
            background-color: #f39c12;
            color: white;
        }

        .btn-edit:hover {
            background-color: #e67e22;
            transform: translateY(-2px);
        }

        td a.btn-delete {
            background-color: #e74c3c;
            color: white;
        }

        td a.btn-delete:hover {
            background-color: #c0392b;
            transform: translateY(-2px);
        }
        .no-data {
            text-align: center;
            font-size: 16px;
            color: #666;
            padding: 20px;
        }

        .top-button {
            text-align: center;
            margin-bottom: 20px;
        }

        .bottom-button {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Scores List</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <p class="success-message"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <div class="top-button">
        <a href="<?= route_to('scores.create') ?>" class="btn-add">Add New Score</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Match ID</th>
                <th>Team ID</th>
                <th>Points</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($scores)): ?>
                <?php foreach ($scores as $score): ?>
                    <tr>
                        <td><?= $score['id'] ?></td>
                        <td><?= $score['match_id'] ?></td>
                        <td><?= $score['team_id'] ?></td>
                        <td><?= $score['points'] ?></td>
                        <td>
                            <a href="<?= route_to('scores.edit', $score['id']) ?>" class="btn-edit">Edit</a>
                            <a href="<?= route_to('scores.delete', $score['id']) ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="no-data">No scores found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="bottom-button">
        <a href="/dashboard" class="btn-back">Back to Dashboard</a>
    </div>
</body>

</html>
