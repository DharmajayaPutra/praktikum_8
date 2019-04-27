<?php
include('connect.php');

$id = $_GET['id'];
$show = "SELECT * FROM Buku WHERE Kd_Register =" . $id;
$res = $conn->query($show) or die($conn->error);

$row = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h3>Edit Book</h3>
    <form action="crud.php" method="post" name="create">
        <input type="hidden" name="id" value="<?= $id ?>">
        <p>Judul</p>
        <input type="text" name="judul" value="<?= $row['Judul_Buku']; ?>">
        <p>Pengarang</p>
        <input type="text" name="pengarang" value="<?= $row['Pengarang']; ?>">
        <p>Penerbit</p>
        <input type="text" name="penerbit" value="<?= $row['Penerbit']; ?>">
        <p>Tahun Terbit</p>
        <input type="text" name="tahun" value="<?= $row['Tahun_Terbit']; ?>"><br><br>
        <a href="list_member.php"><input type="button" value="Cancel"></a>
        <input type="submit" name="edit_book" value="Edit">
    </form>
</body>

</html>