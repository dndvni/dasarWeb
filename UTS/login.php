<?php
session_start();
include 'connect_database.php'; 

// mengecek apakah file sudah ke upload di file database 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM Peserta WHERE Email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($user['Password'] === $password) { 
            $_SESSION['peserta_id'] = $user['PesertaID']; 
            $_SESSION['nama'] = $user['Nama'];

            echo "<script>alert('Selamat datang, " . htmlspecialchars($user['Nama']) . "!'); window.location.href='dashboard.php';</script>";
            exit();
        } else {
            echo "<script>alert('Password salah!');</script>";
        }
    } else {
        echo "<script>alert('Login gagal! Email tidak ditemukan.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Pendaftaran Seminar</title>
    <link rel="stylesheet" href="login.css" >
    
</head>
<body>
    <div class="container">
        <h1>Pendaftaran Seminar</h1>
        <form method="POST" action="">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p>Belum punya akun? <a href="registrasi.php">Register di sini</a>.</p>
    </div>
</body>
</html>