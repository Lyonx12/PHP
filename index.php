<?php
require_once 'Penghuni.php';
$penghuni = new Penghuni();
$data = $penghuni->getData();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penghuni Kost</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Penghuni Kost</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kamar</th>
                <th>No HP</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($data->num_rows > 0): ?>
                <?php $no = 1; while ($row = $data->fetch_assoc()): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= htmlspecialchars($row['Id']) ?></td>
                        <td><?= htmlspecialchars($row['Nama']) ?></td>
                        <td><?= htmlspecialchars($row['Kamar']) ?></td>
                        <td><?= htmlspecialchars($row['No_Hp']) ?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="4">Data tidak ditemukan.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
