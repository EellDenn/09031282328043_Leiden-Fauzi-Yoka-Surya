<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    
    if ($username === 'Leiden' && $password === 'Leiden1206') {
        $_SESSION['logged_in'] = true;
        header('Location: Profil.php');
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Sriwijaya</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f4f4;
            background: linear-gradient(135deg, #eaeaea, #d1d9e6);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }

        .moving-text {
            position: absolute;
            top: 0;
            width: 100%;
            overflow: hidden;
            white-space: nowrap;
            
        }

        .moving-text span {
            display: inline-block;
            font-size: 18px;
            color: #fff;
            background-color: #5a7184;
            padding: 10px 20px;
            border-radius: 8px;
            animation: moveText 12s linear infinite;
        }

        @keyframes moveText {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .container {
            background: #fff;
            color: #444;
            border-radius: 12px;
            width: 100%;
            max-width: 360px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            text-align: center;
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }

        h2 {
            font-size: 1.8em;
            margin-bottom: 20px;
            color: #34568B;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        button {
            padding: 12px;
            background: #34568B;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            transition: transform 0.2s, box-shadow 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(52, 86, 139, 0.4);
        }

        .error {
            color: #d32f2f;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
    <div class="moving-text">
        <span>Selamat Datang Mahasiswa/i Universitas Sriwijaya - Login untuk melanjutkan</span>
    </div>

    <div class="container">
        <h2>LOGIN</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($error)): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
