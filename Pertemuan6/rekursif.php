<?php
// function tampilkanHaloDunia() {
    // echo "Halo Dunia! <br>";

    // tampilkanHaloDunia();
// }

// tampilkanHaloDunia();

for ($i=1; $i <=25; $i++) {
    echo "Perulangan ke-{$i} <br><br><br><br>";
}

function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    // panggil diri sendiri selama $indeks <= $jumlah
    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}
tampilkanAngka(20);
?>