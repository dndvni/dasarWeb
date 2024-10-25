<?php
try {
    $conn = new PDO("sqlsrv:Server=DESKTOP-KN69B8G; Database=PendaftaranSeminarDB");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<br>";
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}

// Fungsi untuk tabel Peserta
function addPeserta($nama, $email, $telepon, $password) {
    global $conn;
    $sql = "INSERT INTO Peserta (Nama, Email, Telepon, Password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$nama, $email, $telepon, $password]);
    return $conn->lastInsertId();
}

// Fungsi untuk tabel Topik Webinar
function addTopikWebinar($namaTopik, $deskripsi) {
    global $conn;
    $sql = "INSERT INTO TopikWebinar (NamaTopik, Deskripsi) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$namaTopik, $deskripsi]);
    return $conn->lastInsertId();
}

// Fungsi untuk tabel Seminar
function addSeminar($judul, $deskripsi, $tanggal, $tempat, $kuota, $topikID) {
    global $conn;
    $sql = "INSERT INTO Seminar (Judul, Deskripsi, Tanggal, Tempat, Kuota, TopikID) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$judul, $deskripsi, $tanggal, $tempat, $kuota, $topikID]);
    return $conn->lastInsertId();
}

// Fungsi untuk tabel Pendaftaran
function registerPeserta($pesertaID, $seminarID) {
    global $conn;
    $sql = "INSERT INTO Pendaftaran (PesertaID, SeminarID) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$pesertaID, $seminarID]);
    return $conn->lastInsertId();
}

// Fungsi untuk tabel Detail Event Seminar
function addDetailEventSeminar($seminarID, $tanggal, $biaya, $tempat, $kuota, $deskripsi) {
    global $conn;
    $sql = "INSERT INTO DetailEventSeminar (SeminarID, Tanggal, Biaya, Tempat, Kuota, Deskripsi) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$seminarID, $tanggal, $biaya, $tempat, $kuota, $deskripsi]);
    return $conn->lastInsertId();
}

// Fungsi untuk mendapatkan semua seminar
function getAllSeminars() {
    global $conn;
    $sql = "SELECT * FROM Seminar";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fungsi untuk mendapatkan semua peserta
function getAllPeserta() {
    global $conn;
    $sql = "SELECT * FROM Peserta";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fungsi untuk mendapatkan semua topik webinar
function getAllTopikWebinar() {
    global $conn;
    $sql = "SELECT * FROM TopikWebinar";
    $stmt = $conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Fungsi untuk mendapatkan detail event seminar
function getDetailEventSeminar($seminarID) {
    global $conn;
    $sql = "SELECT * FROM DetailEventSeminar WHERE SeminarID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$seminarID]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>