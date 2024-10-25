<?php  
include 'connect_database.php';  

function getAllSeminarDetails() {  
    global $conn;  
    $sql = "SELECT s.SeminarID, s.Judul, s.Deskripsi, s.Tanggal, s.Tempat, s.Kuota,   
                   t.NamaTopik, d.Biaya, d.Deskripsi AS DeskripsiDetail, d.Tempat AS TempatDetail  
            FROM Seminar s  
            JOIN TopikWebinar t ON s.TopikID = t.TopikID  
            JOIN DetailEventSeminar d ON s.SeminarID = d.SeminarID";  
    $stmt = $conn->query($sql);  
    return $stmt->fetchAll(PDO::FETCH_ASSOC);  
}  

$seminarDetails = getAllSeminarDetails();  
?>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Dashboard Seminar</title>
    <link href="dashboard.css" rel="stylesheet">
    <style>  
        body {  
            font-family: Arial, sans-serif;  
            display: flex;  
            flex-direction: column;  
            margin: 0;  
        }  
        .navbar {  
            display: flex;  
            justify-content: space-between;  
            background-color: #007BFF;  
            padding: 10px 20px;  
            color: white;  
        }  
        .navbar a {  
            color: white;  
            text-decoration: none;  
            padding: 10px;  
        }  
        .navbar a:hover {  
            background-color: rgba(255, 255, 255, 0.2);  
            border-radius: 4px;  
        }  
        .content {  
            flex-grow: 1;  
            padding: 20px;  
            display: flex;  
            flex-direction: column;  
        }  
        .seminar-container {  
            display: flex;  
            flex-wrap: wrap;  
            justify-content: space-around;  
            margin-top: 20px;  
        }  
        .seminar-card {  
            border: 1px solid #ddd;  
            border-radius: 8px;  
            width: 300px;  
            margin: 15px;  
            padding: 20px;  
            box-shadow: 0 0 10px rgba(0,0,0,0.1);  
        }  
        .seminar-card img {  
            width: 100%;  
            height: 200px;  
            object-fit: cover;  
            border-radius: 8px;  
        }  
        .seminar-card h3 {  
            margin: 15px 0;  
        }  
        .seminar-card p {  
            font-size: 14px;  
            line-height: 1.5;  
        }  
        .seminar-card .topik {  
            font-weight: bold;  
            color: #007BFF;  
        }  
        .seminar-card .biaya {  
            font-weight: bold;  
            color: #28a745;  
        }  
    </style>  
</head>  
<body>  

<div class="navbar">  
    <div class="navbar-left">  
        <h1>Seminar Dashboard</h1>  
    </div>  
    <div class="navbar-right">  
        <a href="#">Home</a>  
        <a href="#">Profile</a>  
        <a href="#">Settings</a>  
        <a href="#">Logout</a>  
    </div>  
</div>  

<div class="content">  
    <div class="seminar-container">  
        <?php if (count($seminarDetails) > 0): ?>  
            <?php foreach ($seminarDetails as $seminar): ?>  
                <div class="seminar-card">  
                    <img src="seminar1.jpg" alt="Poster Seminar <?php echo htmlspecialchars($seminar['Judul']); ?>">  
                    <h3><?php echo htmlspecialchars($seminar['Judul']); ?></h3>  
                    <p class="topik">Topik: <?php echo htmlspecialchars($seminar['NamaTopik']); ?></p>  
                    <p><?php echo htmlspecialchars($seminar['Deskripsi']); ?></p>  
                    <p>Tanggal: <?php echo htmlspecialchars($seminar['Tanggal']); ?></p>  
                    <p>Tempat: <?php echo htmlspecialchars($seminar['TempatDetail']); ?></p>  
                    <p>Kuota: <?php echo htmlspecialchars($seminar['Kuota']); ?> peserta</p>  
                    <p class="biaya">Biaya: Rp <?php echo number_format($seminar['Biaya'], 2, ',', '.'); ?></p>  
                    <p><?php echo htmlspecialchars($seminar['DeskripsiDetail']); ?></p>  
                </div>  
            <?php endforeach; ?>  
        <?php else: ?>  
            <p>Tidak ada seminar tersedia saat ini.</p>  
        <?php endif; ?>  
    </div>  
</div>  

</body>  
</html>