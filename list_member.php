<?php
include('connect.php');
//include('crud.php');

$show = "SELECT * FROM Anggota ORDER BY Kd_Anggota DESC";
$res = $conn->query($show) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Anggota</title>
</head>

<body>
    <h3>List User</h3>
    <a href="index.php"><input type="button" value="Beranda"></a>
    <a href="create_member.php"><input type="button" value="Tambah Anggota"></a>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nama</td>
                <td>Prodi</td>
                <td>Jenjang</td>
                <td>Alamat</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $res->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['Kd_Anggota']; ?></td>
                    <td><?= $row['Nama']; ?></td>
                    <td><?= $row['Prodi']; ?></td>
                    <td><?= $row['Jenjang']; ?></td>
                    <td><?= $row['Alamat']; ?></td>
                    <td><a href="edit_member.php?id=<?= $row['Kd_Anggota']; ?>"><button>Edit</button></a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</body>

</html>