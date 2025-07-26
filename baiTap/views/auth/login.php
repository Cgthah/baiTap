

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        :root {
            --primary: #eb6d75;
            --primary-dark: hsl(340, 83%, 73%);
            --secondary: #f5f5f5;
            --text: #222;
            --border-radius: 8px;
            --shadow: 0 2px 12px rgba(0,0,0,0.07);
        }
        body {
            background: var(--secondary);
            color: var(--text);
            font-size: 15px;
            font-family: sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-container {
            background: #fff;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 32px 28px 24px 28px;
            width: 100%;
            max-width: 370px;
        }
        .auth-title {
            text-align: center;
            font-size: 1.5rem;
            color: var(--primary);
            margin-bottom: 24px;
            font-weight: 700;
            letter-spacing: 1px;
        }
        .auth-form label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
        }
        .auth-form input {
            width: 100%;
            padding: 10px 14px;
            border-radius: var(--border-radius);
            border: 1px solid #e0e0e0;
            margin-bottom: 18px;
            font-size: 15px;
            transition: border 0.2s;
        }
        .auth-form input:focus {
            border: 1.5px solid var(--primary);
            outline: none;
        }
        .auth-form button {
            width: 100%;
            padding: 12px 0;
            background: var(--primary);
            color: #fff;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
        }
        .auth-form button:hover {
            background: var(--primary-dark);
        }
        .auth-switch {
            text-align: center;
            margin-top: 18px;
            font-size: 15px;
        }
        .auth-switch a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        .auth-switch a:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }   
    </style>
</head>
<body>
    <div class="auth-container">
        <div class="auth-title">Đăng nhập</div>
        <form class="auth-form" action="index.php?controller=auth&action=auth_login" method="post">
            <label for="login-username">Email</label>
            <input type="text" id="login-username" name="email" required>
            <label for="login-password">Mật khẩu</label>
            <input type="password" id="login-password" name="password" required>
            <button type="submit" name="btn_login">Đăng nhập</button>
        </form>
        <div class="auth-switch">
            Chưa có tài khoản?<a href="index.php?controller=auth&action=register">Đăng ký</a>
        </div>
    </div>
</body>
</html> 