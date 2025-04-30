<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Pengulangan PHP</title>
    <style>
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        td, th {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        .judul {
            background-color: yellow;
        }
        .header-kiri {
            background-color: lime;
        }
        .hasil {
            background-color: cyan;
        }
    </style>
</head>
<body>

<h2>1. Bilangan Genap dari 1 sampai 10</h2>
<p>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            if ($i % 2 == 0) {
                echo $i . " ";
            }
        }
    ?>
</p>

<h2>2. Tabel Perkalian 1 sampai 10</h2>
<table>
    <tr>
        <th class="judul">bilangan</th>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "<th class='judul'>$i</th>";
            }
        ?>
    </tr>
    <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td class='header-kiri'>$i</td>";
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j;
                echo "<td class='hasil'>$hasil</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

</body>
</html>