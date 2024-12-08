<?php
    session_start();
    if(isset($_SESSION['login_admin'])){
        header("location:admin.php");
    }
    if(isset($_SESSION['login_user'])){
        header("location:user.php");
    }
?>
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
        <h3 class="h31">Selamat Datang Di Pubztyo.co.id</h3>
        <h3>Berita Seru Untuk Hidup Baru</h3>
        <form id="loginForm" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Masukan Username Anda" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Masukan Password" required>
            </div>
            <div class="registerwrap">
                <p>Belum Punya Akun? <a href="register.php" style="color:#28a745;">Gass Daftar</a></p>
            </div>
            <p class="gagallogin" id="gagallogin"></p>
            <button type="submit" name="submit">Login</button>
        </form>
        <p id="message"></p>
    </div>
    
    <?php
        include "db.php";
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $qryuser = "SELECT * FROM account WHERE username = '$username' AND password = '$password' AND role = 'user'";
            $qryadmin = "SELECT * FROM account WHERE username = '$username' AND password = '$password' AND role = 'admin'";
            $resultuser = mysqli_query($koneksi, $qryuser);      
            $resultadmin = mysqli_query($koneksi, $qryadmin);
            $loginuser = mysqli_num_rows($resultuser)>0;
            $loginadmin = mysqli_num_rows($resultadmin)>0;
            
            if($loginadmin){
                $_SESSION['login_admin'] = $username;
                header("Location:admin.php");
                exit();
            } elseif($loginuser){
                $_SESSION['login_user'] = $username;
                header("Location:user.php");
                exit();
            } else {
                echo "
                        <script type='text/javascript'>
                            document.getElementById('gagallogin').innerHTML =
                            'Username atau Password salah, periksa kembali.'
                        </script>
                     ";
            }
        }
    ?>
</body>
</html>