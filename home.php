<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Auth Home</title>
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
            width: 420px;
            padding: 32px 30px 26px;
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
            text-align: center;
        }

        .title {
            font-size: 1.9rem;
            font-weight: 650;
            letter-spacing: 0.03em;
        }

        .subtitle {
            margin-top: 8px;
            font-size: 0.95rem;
            color: #e5e7eb;
            opacity: 0.85;
        }

        .button-row {
            margin-top: 26px;
            display: flex;
            gap: 14px;
            justify-content: center;
        }

        .btn-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            border-radius: 999px;
            border: 1px solid rgba(148, 163, 184, 0.55);
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 550;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            backdrop-filter: blur(14px);
            transition: 0.14s ease all;
        }

        .btn-primary {
            background: linear-gradient(135deg, #a855f7, #06b6d4);
            color: #020617;
            box-shadow:
                0 18px 40px rgba(15, 23, 42, 0.9),
                0 0 0 1px rgba(148, 163, 184, 0.35);
        }

        .btn-secondary {
            background: rgba(15, 23, 42, 0.65);
            color: #e5e7eb;
        }

        .btn-link:hover {
            transform: translateY(-1px) scale(1.01);
            box-shadow:
                0 24px 60px rgba(15, 23, 42, 0.95),
                0 0 0 1px rgba(129, 140, 248, 0.8);
        }

        .meta {
            margin-top: 22px;
            font-size: 0.8rem;
            color: #cbd5f5;
            opacity: 0.75;
        }
    </style>
</head>
<body>
<div class="glass-card">
    <div class="title">Authentication demo</div>
    <div class="subtitle">Use the buttons below to register or log in</div>

    <div class="button-row">
        <a class="btn-link btn-primary" href="register.php">Register</a>
        <a class="btn-link btn-secondary" href="login.php">Login</a>
    </div>

    <div class="meta">
        Database: de>login_system</code> · Table: de>users</code>
    </div>
</div>
</body>
</html>
