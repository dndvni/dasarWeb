<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table {
                border-collapse: collapse;
                width: 30%;
            }

            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php
        $Dosen = [
            'nama' => 'Elok Nur Hamdana',
            'domisili' => 'Malang',
            'jenis_kelamin' => 'Perempuan' 
        ];

        echo "Nama : {$Dosen ['nama']} <br>";
        echo "Domisili : {$Dosen ['domisili']} <br>";
        echo "Jenis Kelamin : {$Dosen ['jenis_kelamin']} <br>";
        ?>

        <table>
            <tr>
                <th style="background-color: azure;">Key</th>
                <th style="background-color: azure;">Dosen</th>
            </tr>
            <?php foreach ($Dosen as $key => $value) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value?></td>
                </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>