<?php
include 'koneksi.php';

$query = mysqli_query($koneksi, "
    SELECT parkir.no_kendaraan,
           parkir.no_blok,
           user.nama_user
    FROM parkir
    LEFT JOIN user
        ON parkir.kd_user = user.kd_user
    ORDER BY parkir.kd_parkir ASC
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            margin-top: 20px;
        }

        th {
            background-color: #3498db;
            color: white;
            padding: 12px;
            font-size: 13px;
        }

        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 13px;
        }

        tr:nth-child(even) {
            background-color: #f8f9fa;
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
            <th>STATUS</th>
            <th>USER</th>
        </tr>

        <?php
        $no = 1;

        while ($data = mysqli_fetch_assoc($query)) {
            if ($data['no_blok'] == 1){
                $status = "keluar";
            }else {
                $status = "parkir";
            }
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $data['no_kendaraan']?></td>
            <td><?= $status; ?></td>
            <td><?= $data['nama_user']?></td>
        </tr>
        <?php } ?>