<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #1b2631;
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }
        .background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(17, 118, 100, 0.9), rgba(27, 38, 49, 0.9));
            clip-path: circle(50% at center);
            z-index: -1;
            animation: expand 10s infinite alternate ease-in-out;
        }
        @keyframes expand {
            0% {
                clip-path: circle(30% at 50% 50%);
            }
            100% {
                clip-path: circle(70% at 50% 50%);
            }
        }
        .login-container {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            width: 350px;
            backdrop-filter: blur(10px);
        }
        .login-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #d4e157;
        }
        .login-container input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            background-color: #eeeeee;
            color: #000;
            font-size: 14px;
        }
        .login-container input:focus {
            outline: none;
            box-shadow: 0 0 5px #d4e157;
        }
        .login-container button {
            width: 100%;
            padding: 12px;
            background-color: #d4e157;
            color: #000;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: all 0.3s ease;
        }
        .login-container button:hover {
            background-color: #ffab40;
            transform: scale(1.05);
        }
        .error {
            color: #ff6f61;
            font-size: 14px;
            margin-bottom: 10px;
            animation: shake 0.3s ease-in-out;
        }
        @keyframes shake {
            0% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
            100% { transform: translateX(0); }
        }
        .footer {
            margin-top: 15px;
            font-size: 12px;
            color: #999999;
        }
        .footer a {
            color: #d4e157;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <div class="login-container">
        <h1>Login</h1>
        <?php if (session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error') ?></p>
        <?php endif; ?>
        <form action="<?= base_url('/authenticate') ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="footer">
            <p>Don't have an account? <a href="<?= base_url('/register') ?>">Sign Up</a></p>
        </div>
    </div>
</body>
</html>
