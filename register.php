<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form id="loginForm" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Buat username anda" required>
            </div>
            <div class="form-group">
                <label for="password">Nama Lengkap:</label>
                <input type="text" id="namalengkap" name="namalengkap" placeholder="Siapa nama lengkap anda?" required>
            </div>
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" placeholder="emailanda@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="password">Nomor Telepon:</label>
                <input type="number" id="nomortelepon" name="nomortelepon" placeholder="081234567890" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="registerwrap">
                <p>Sudah Daftar? <a href="index.php" style="color:#28a745;">Login Deh</a></p>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
        <p id="message"></p>
    </div>
    
    <?php
        include "db.php";
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $namalengkap = $_POST['namalengkap'];
            $email = $_POST['email'];
            $nomortelepon = $_POST['nomortelepon'];
            $password = $_POST['password'];
            $role = "user";

            $qry = "INSERT INTO account VALUES ('$username', '$namalengkap', '$email', '$nomortelepon', '$password', '$role')";

            mysqli_query($koneksi, $qry);
        }
    ?>
</body>
</html>