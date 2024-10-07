<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas Data Siswa Adinda Mirza Devani</title>
    <link rel="stylesheet" href="styletambahan.css">
    <script type="text/javascript" src="jquery-3.7.1.js"></script>
    <script>
        $(document).ready(function(){
            $("#slide").click(function(){
                $(".datasiswa").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <h2>Tugas Data Siswa Adinda Mirza Devani</h2>
    <div id="slide" style="cursor: pointer">Click to Show Database</div>
    <div class="datasiswa">
        <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Kelas</th>
            <th>Alamat</th>
        </tr>      
        <?php
            $data_siswa = array(
                                array("Aida", 15, "10 A", "malang"),
                                array("Ananda", 16, "10 B", "Batu"),
                                array("Ilut", 15, "10 A", "Dinoyo"),
                                array("Keisya", 25, "15 A", "Dinoyo")
            );
            
            $jumlah_siswa = count($data_siswa);

            foreach ($data_siswa as $siswa) {
                echo "<tr>";
                echo "<td>" . $siswa[0] . "</td>";
                echo "<td>" . $siswa[1] . "</td>";
                echo "<td>" . $siswa[2] . "</td>";
                echo "<td>" . $siswa[3] . "</td>";
                echo "</tr>";
            }
        
            $rataRata = array_sum(array_column($data_siswa, 1)) / count($data_siswa);
        ?>
    </table>
    <div class="ratarata">
    <?php
    echo "Rata-rata Umur Siswa: " . $rataRata . " tahun";
    ?>
    </div>
</body>
</html>