<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Global styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7fafc;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            color: #00796b;
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .login-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .login-container div {
            margin-bottom: 15px;
        }

        label {
            font-size: 1.2em;
            color: #00796b;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            margin-top: 5px;
        }

        input:focus {
            border-color: #00796b;
        }

        button {
            width: 100%;
            padding: 14px;
            font-size: 1.2em;
            background-color: #00796b;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #004d40;
        }

        .error-message {
            color: red;
            margin-bottom: 20px;
            font-size: 1em;
            text-align: center;
        }

    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        <?php if (session()->getFlashdata('error')): ?>
            <div class="error-message">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="/login/authenticate" method="post">
            <div>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

</body>
</html>
