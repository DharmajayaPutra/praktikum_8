<?php
include('connect.php');
//include('crud.php');

$show = "SELECT * FROM Buku ORDER BY Kd_Register DESC";
$res = $conn->query($show) or die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Buku</title>
</head>

<body>
    <h3>List Book</h3>
    <a href="index.php"><input type="button" value="Beranda"></a>
    <a href="create_book.php"><input type="button" value="Tambah Buku"></a>
    <table border="1">
        <thead>
            <tr>
                <td>ID</td>
                <td>Judul</td>
                <td>Pengarang</td>
                <td>Penerbit</td>
                <td>Tahun Terbit</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $res->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['Kd_Register']; ?></td>
                    <td><?= $row['Judul_Buku']; ?></td>
                    <td><?= $row['Pengarang']; ?></td>
                    <td><?= $row['Penerbit']; ?></td>
                    <td><?= $row['Tahun_Terbit']; ?></td>
                    <td><a href="edit_book.php?id=<?= $row['Kd_Register']; ?>"><button>Edit</button></a></td>
                </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
</body>

</html>