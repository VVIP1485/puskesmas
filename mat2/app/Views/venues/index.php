<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venues List</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f6f9;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .top-button-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .bottom-button-container {
            margin-top: 40px; /* Sedikit dinaikkan */
            display: flex;
            justify-content: center;
            padding: 20px 0;
        }

        a.btn-add,
        a.btn-back {
            display: inline-block;
            background-color: #16a085;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            margin: 0 10px;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        a.btn-add:hover,
        a.btn-back:hover {
            background-color: #1abc9c;
            transform: translateY(-2px);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
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
    </style>
</head>

<body>
    <h1>Venues List</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <p class="success-message"><?= session()->getFlashdata('success') ?></p>
    <?php endif; ?>

    <div class="top-button-container">
        <a href="<?= route_to('venues.create') ?>" class="btn-add">Add New Venue</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Location</th>
                <th>Capacity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($venues)): ?>
                <?php foreach ($venues as $venue): ?>
                    <tr>
                        <td><?= $venue['id'] ?></td>
                        <td><?= $venue['name'] ?></td>
                        <td><?= $venue['location'] ?></td>
                        <td><?= $venue['capacity'] ?></td>
                        <td>
                            <a href="<?= route_to('venues.edit', $venue['id']) ?>" class="btn-edit">Edit</a>
                            <a href="<?= route_to('venues.delete', $venue['id']) ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="no-data">No venues found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <div class="bottom-button-container">
        <a href="<?= route_to('dashboard') ?>" class="btn-back">Back to Dashboard</a>
    </div>
</body>

</html>
