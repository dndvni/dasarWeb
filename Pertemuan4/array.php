<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];

$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai >= 70) {
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(", ", $nilaiLulus);
echo "<br><br><br><br";

//soal No 5.2
$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eve', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    if ($karyawan[1] > 5) {
        $karyawanPengalamanLimaTahun[] = $karyawan[0];
    }
}

echo "<br> Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun: " . implode(',', $karyawanPengalamanLimaTahun);
echo "<br><br>";

// soal No 5.3
$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charlie', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach ($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
}
echo "<br><br>";

// soal No 5.4
$siswa = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eve", 90],
];

$total_Nilai = 0;
foreach ($siswa as $nilai) {
    $total_Nilai += $nilai[1];
}
$rata_rata = $total_Nilai / count($siswa);

echo "Daftar Nilai Siswa yang mencapai Nilai di Atas Rata-rata kelas: <br>";
foreach ($siswa as $siswa) {
    if ($siswa[1] > $rata_rata) {
        echo $siswa[0] . ": " . $siswa[1];
    }
}

