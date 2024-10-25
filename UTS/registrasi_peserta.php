<?php
include 'connect_database.php';  

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $password = $_POST['password']; 

    try {
        // Cek apakah email sudah terdaftar
        $checkSql = "SELECT * FROM Peserta WHERE Email = :email";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bindParam(':email', $email);
        $checkStmt->execute();
        
        if ($checkStmt->fetch(PDO::FETCH_ASSOC)) {
            $message = "Email sudah terdaftar!";
        } else {
            // Menyimpan data peserta baru
            $sql = "INSERT INTO Peserta (Nama, Email, Telepon, Password) VALUES (:nama, :email, :telepon, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nama', $nama);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':telepon', $telepon);
            $stmt->bindParam(':password', $password);  
            $stmt->execute(); 
            
            $message = "Registrasi berhasil! Silakan <a href='login.php'>login</a>.";
        }
    } catch (PDOException $e) {
        $message = "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Registrasi Peserta</title>  
    <link rel="stylesheet" href="registrast_peserta.css" />  
</head>  
<body>  
    <div class="container">  
        <form method="POST" action="">   
            <h1>Registrasi Peserta</h1> <!-- Judul dipindah ke dalam form -->  
            <?php if ($message): ?>  
                <p class="message"><?php echo $message; ?></p>  
            <?php endif; ?>  

            <input type="text" name="nama" placeholder="Nama" required>  
            <input type="email" name="email" placeholder="Email" required>  
            <input type="text" name="telepon" placeholder="Telepon" required>  
            <input type="password" name="password" placeholder="Password" required>  
            <button type="submit" name="register">Register</button>  
        </form>  
    </div>  
</body>  
</html>