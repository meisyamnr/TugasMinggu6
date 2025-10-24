<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Login</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: linear-gradient(135deg, #2575fc, #6a11cb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
            margin: 0;
        }
        .result-box {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px 60px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 0 25px rgba(0,0,0,0.2);
        }
        h2 {
            margin-bottom: 10px;
        }
        .success {
            color: #00ffb7;
        }
        .fail {
            color: #ff6b6b;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: white;
            color: #2575fc;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover {
            background: #e3e3e3;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <?php
        // Ambil input dari form
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Tentukan username dan password yang valid
        $valid_username = "meisyamnur";
        $valid_password = "12345";

        // Validasi login
        if ($username === $valid_username && $password === $valid_password) {
            echo "<h2 class='success'>Login Berhasil!</h2>";
            echo "<p>Selamat datang, <b>$username</b>.</p>";
        } else {
            echo "<h2 class='fail'>Login Gagal!</h2>";
            echo "<p>Username atau password salah!</p>";
        }
        ?>
        <a href="login.html">Kembali</a>
    </div>
</body>
</html>