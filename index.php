<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OEMS – Online Examination System</title>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@700;800&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --bg:      #07090f;
            --card:    #111827;
            --left-bg: #0b1225;
            --border:  rgba(255,255,255,0.07);
            --accent:  #4f8ef7;
            --accent2: #7c3aed;
            --text:    #eef2ff;
            --muted:   #6b7fa3;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--text);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .orb {
            position: fixed;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.11;
            pointer-events: none;
            z-index: 0;
        }
        .orb-1 { width: 500px; height: 500px; background: var(--accent);  top: -160px; right: -100px; }
        .orb-2 { width: 400px; height: 400px; background: var(--accent2); bottom: -120px; left: -100px; }

        .card {
            position: relative;
            z-index: 1;
            display: flex;
            width: 880px;
            max-width: 96vw;
            border-radius: 22px;
            overflow: hidden;
            border: 1px solid var(--border);
            box-shadow: 0 40px 100px rgba(0,0,0,0.6);
            animation: rise .5s cubic-bezier(.22,1,.36,1) both;
        }

        @keyframes rise {
            from { opacity: 0; transform: translateY(26px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        /* ── LEFT ── */
        .left {
            flex: 1;
            background: var(--left-bg);
            padding: 46px 42px;
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            background: rgba(79,142,247,0.09);
            border: 1px solid rgba(79,142,247,0.2);
            border-radius: 999px;
            padding: 5px 14px 5px 7px;
            width: fit-content;
        }
        .logo-icon {
            width: 26px; height: 26px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 13px;
        }
        .logo-text {
            font-family: 'Syne', sans-serif;
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: .1em;
            color: var(--accent);
        }

        .headline h1 {
            font-family: 'Syne', sans-serif;
            font-size: 38px;
            font-weight: 800;
            line-height: 1.15;
            color: var(--text);
            margin-bottom: 12px;
        }
        .headline h1 .hi { color: var(--accent); }

        .headline p {
            font-size: 13.5px;
            line-height: 1.75;
            color: var(--muted);
            max-width: 290px;
        }

        .features {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .feature {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 13px 15px;
            background: rgba(255,255,255,0.03);
            border: 1px solid var(--border);
            border-radius: 12px;
            transition: background .2s, border-color .2s;
        }
        .feature:hover {
            background: rgba(79,142,247,0.07);
            border-color: rgba(79,142,247,0.2);
        }

        .fi {
            width: 36px; height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            display: flex; align-items: center; justify-content: center;
            font-size: 16px;
            flex-shrink: 0;
        }

        .feature strong { font-size: 13.5px; display: block; margin-bottom: 2px; }
        .feature span   { font-size: 12px; color: var(--muted); }

        .credit {
            margin-top: auto;
            font-size: 11px;
            color: rgba(107,127,163,.35);
            border-top: 1px solid var(--border);
            padding-top: 14px;
        }

        /* ── RIGHT ── */
        .right {
            width: 340px;
            background: var(--card);
            border-left: 1px solid rgba(255,255,255,0.06);
            padding: 50px 38px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .right h2 {
            font-family: 'Syne', sans-serif;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .right .sub {
            font-size: 13px;
            color: var(--muted);
            margin-bottom: 28px;
        }

        .error {
            background: rgba(239,68,68,.09);
            border: 1px solid rgba(239,68,68,.22);
            color: #fca5a5;
            border-radius: 10px;
            padding: 10px 13px;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .form-group { margin-bottom: 15px; }

        label {
            display: block;
            font-size: 10.5px;
            text-transform: uppercase;
            letter-spacing: .09em;
            color: var(--muted);
            margin-bottom: 6px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.09);
            color: var(--text);
            padding: 10px 13px;
            border-radius: 10px;
            font-size: 13.5px;
            font-family: 'DM Sans', sans-serif;
            outline: none;
            transition: border-color .2s, box-shadow .2s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px rgba(79,142,247,.12);
        }
        input::placeholder { color: rgba(107,127,163,.4); }

        .btn-primary {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, var(--accent), var(--accent2));
            color: #fff;
            border: none;
            border-radius: 10px;
            font-family: 'Syne', sans-serif;
            font-size: 14px;
            font-weight: 700;
            cursor: pointer;
            margin-top: 6px;
            transition: transform .2s, box-shadow .2s;
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 28px rgba(79,142,247,.3);
        }
        .btn-primary:active { transform: translateY(0); }

        .divider {
            position: relative;
            text-align: center;
            font-size: 12px;
            color: var(--muted);
            margin: 18px 0;
        }
        .divider::before, .divider::after {
            content: '';
            position: absolute;
            top: 50%;
            width: 38%;
            height: 1px;
            background: var(--border);
        }
        .divider::before { left: 0; }
        .divider::after  { right: 0; }

        .btn-outline {
            display: block;
            width: 100%;
            padding: 11px;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.09);
            color: var(--muted);
            border-radius: 10px;
            font-family: 'DM Sans', sans-serif;
            font-size: 13px;
            text-align: center;
            text-decoration: none;
            transition: background .2s, color .2s, border-color .2s;
        }
        .btn-outline:hover {
            background: rgba(255,255,255,0.04);
            color: var(--text);
            border-color: rgba(255,255,255,0.15);
        }

        .register {
            text-align: center;
            font-size: 13px;
            color: var(--muted);
            margin-top: 18px;
        }
        .register a {
            color: var(--accent);
            text-decoration: none;
            font-weight: 500;
        }
        .register a:hover { text-decoration: underline; }
    </style>
</head>
<body>

<div class="orb orb-1"></div>
<div class="orb orb-2"></div>

<div class="card">

    <div class="left">
        <div class="logo">
            <div class="logo-icon">🎓</div>
            <span class="logo-text">OEMS</span>
        </div>

        <div class="headline">
            <h1>Online<br><span class="hi">Examination</span><br>Management</h1>
            <p>A smart platform for conducting online exams with automated checking and instant results.</p>
        </div>

        <div class="features">
            <div class="feature">
                <div class="fi">⏱</div>
                <div>
                    <strong>Timed Exams</strong>
                    <span>Auto-submit when time runs out</span>
                </div>
            </div>
            <div class="feature">
                <div class="fi">📊</div>
                <div>
                    <strong>Instant Results</strong>
                    <span>Get your score immediately</span>
                </div>
            </div>
            <div class="feature">
                <div class="fi">🗂</div>
                <div>
                    <strong>Multiple Categories</strong>
                    <span>PHP, HTML, AI, OOP &amp; more</span>
                </div>
            </div>
        </div>

        <div class="credit">Online Examination Management System</div>
    </div>

    <div class="right">
        <h2>Welcome Back</h2>
        <p class="sub">Sign in to your account to continue</p>

        <?php if (isset($_GET['run']) && $_GET['run'] === 'failed'): ?>
            <div class="error">⚠ Wrong email or password. Please try again.</div>
        <?php endif; ?>

        <form method="post" action="signin_sub.php">
            <div class="form-group">
                <label>Email Address</label>
                <input type="text" name="e" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="p" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn-primary">Sign In →</button>
        </form>

        <div class="divider">or</div>

        <a href="admin.php" class="btn-outline">Admin Login</a>

        <p class="register">New here? <a href="Register.php">Create an account</a></p>
    </div>

</div>
</body>
</html>
