<?php
include "connection.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email    = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT id FROM users
            WHERE email='$email' AND password='$password'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
        $message = "User exists. Login successful.";
    } else {
        $message = "User does not exist.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f9fafb;
            position: relative;
            overflow: hidden;
            background: radial-gradient(circle at 0% 0%, #4f46e5 0, #0f172a 40%),
                        radial-gradient(circle at 100% 100%, #06b6d4 0, #020617 45%);
        }

        body::before,
        body::after {
            content: "";
            position: absolute;
            width: 420px;
            height: 420px;
            border-radius: 50%;
            filter: blur(90px);
            opacity: 0.55;
            z-index: 0;
        }

        body::before {
            background: #4f46e5;
            top: -80px;
            left: -60px;
        }

        body::after {
            background: #06b6d4;
            bottom: -80px;
            right: -60px;
        }

        .glass-card {
            position: relative;
            z-index: 1;
            width: 380px;
            padding: 30px 28px 24px;
            border-radius: 24px;
            background: radial-gradient(circle at top left,
                        rgba(255, 255, 255, 0.18) 0,
                        rgba(15, 23, 42, 0.65) 40%),
                        rgba(15, 23, 42, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow:
                0 24px 60px rgba(15, 23, 42, 0.85),
                0 0 0 1px rgba(148, 163, 184, 0.12);
            backdrop-filter: blur(20px);
        }

        .card-header {
            text-align: center;
            margin-bottom: 18px;
        }

        .card-title {
            font-size: 1.7rem;
            font-weight: 650;
            letter-spacing: 0.02em;
        }

        .card-subtitle {
            margin-top: 6px;
            font-size: 0.9rem;
            color: #e5e7eb;
            opacity: 0.8;
        }

        .message {
            margin-bottom: 12px;
            text-align: center;
            font-size: 0.9rem;
        }

        .message.success {
            color: #22c55e;
        }

        .message.error {
            color: #f97373;
        }

        form {
            margin-top: 8px;
        }

        .field-group {
            position: relative;
            margin-top: 18px;
        }

        .field-label {
            font-size: 0.8rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #9ca3af;
            margin-bottom: 4px;
        }

        .field-input {
            width: 100%;
            padding: 11px 12px;
            border-radius: 10px;
            border: 1px solid rgba(148, 163, 184, 0.55);
            background: rgba(15, 23, 42, 0.65);
            color: #e5e7eb;
            font-size: 0.95rem;
            outline: none;
            transition: border-color 0.18s ease, box-shadow 0.18s ease,
                        background 0.18s ease, transform 0.08s ease;
        }

        .field-input::placeholder {
            color: rgba(148, 163, 184, 0.75);
        }

        .field-input:focus {
            border-color: #a855f7;
            box-shadow:
                0 0 0 1px rgba(168, 85, 247, 0.7),
                0 18px 35px rgba(15, 23, 42, 0.9);
            background: rgba(15, 23, 42, 0.9);
            transform: translateY(-1px);
        }

        .helper-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            font-size: 0.8rem;
            color: #cbd5f5;
            opacity: 0.9;
        }

        .helper-row a {
            color: #a5b4fc;
            text-decoration: none;
        }

        .helper-row a:hover {
            text-decoration: underline;
        }

        .primary-button {
            width: 100%;
            margin-top: 22px;
            padding: 11px 0;
            border-radius: 999px;
            border: none;
            outline: none;
            cursor: pointer;
            font-weight: 600;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            font-size: 0.82rem;
            color: #020617;
            background: linear-gradient(135deg, #a855f7, #06b6d4);
            box-shadow:
                0 18px 40px rgba(15, 23, 42, 0.9),
                0 0 0 1px rgba(148, 163, 184, 0.35);
            transition: transform 0.12s ease, box-shadow 0.12s ease,
                        filter 0.12s ease;
        }

        .primary-button:hover {
            transform: translateY(-1px) scale(1.01);
            filter: brightness(1.05);
            box-shadow:
                0 24px 60px rgba(15, 23, 42, 0.95),
                0 0 0 1px rgba(129, 140, 248, 0.8);
        }

        .primary-button:active {
            transform: translateY(0px) scale(0.99);
            box-shadow:
                0 10px 24px rgba(15, 23, 42, 0.9),
                0 0 0 1px rgba(129, 140, 248, 0.8);
        }

        .card-footer {
            margin-top: 18px;
            text-align: center;
            font-size: 0.85rem;
            color: #e5e7eb;
            opacity: 0.85;
        }

        .card-footer a {
            color: #a5b4fc;
            text-decoration: none;
            font-weight: 500;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="glass-card">
    <div class="card-header">
        <div class="card-title">Log in</div>
        <div class="card-subtitle">Log in to continue</div>
    </div>

    <?php if ($message != ""): ?>
        <p class="message <?php echo (strpos($message, 'successful') !== false) ? 'success' : 'error'; ?>">
            <?php echo $message; ?>
        </p>
    <?php endif; ?>

    <form action="login.php" method="POST">
        <div class="field-group">
            <div class="field-label">Email</div>
            <input class="field-input" type="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="field-group">
            <div class="field-label">Password</div>
            <input class="field-input" type="password" name="password" placeholder="Enter your password" required>
        </div>

        <button class="primary-button" type="submit">Log in</button>
    </form>

    <div class="card-footer">
        New here?
        <a href="register.php">Register</a>
    </div>
</div>
</body>
</html>
