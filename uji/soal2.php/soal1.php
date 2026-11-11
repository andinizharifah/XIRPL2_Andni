<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "
    SELECT parkir.*, user.nama_user
    FROM parkir
    LEFT JOIN user
    ON parkir.kd_user = user.kd_user
    ORDER BY parkir.kd_parkir ASC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Parkir Kendaraan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f5f4;
            margin: 0;
            padding: 40px 20px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 8px #ddd;
        }

        h2 {
            text-align: center;
            color: #333;
            font-size: 22px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 10px;
            font-size: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #eee;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Data Parkir Kendaraan</h2>

    <table>
        <tr>
            <th>NO</th>
            <th>NOMOR KENDARAAN</th>
            <th>NOMOR BLOK</th>
            <th>TANGGAL PARKIR</th>
            <th>USER</th>
        </tr>

        <?php
        $no = 1;

        while ($data = mysqli_fetch_assoc($query)) {
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= htmlspecialchars($data['no_kendaraan']); ?></td>
            <td><?= htmlspecialchars($data['no_blok']); ?></td>
            <td><?= htmlspecialchars($data['tanggal']); ?></td>
            <td><?= htmlspecialchars($data['nama_user'] ?? '-'); ?></td>
        </tr>

        <?php } ?>
    </table>
</div>

</body>
</html>