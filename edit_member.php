<?php
include('connect.php');

$id = $_GET['id'];
echo $id;
$show = "SELECT * FROM Anggota WHERE Kd_Anggota =" . $id;
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
    <h3>Edit Member</h3>
    <form action="crud.php" method="post" name="create">
        <input type="hidden" name="id" value="<?= $id ?>">
        <p>Nama Lengkap</p>
        <input type="text" name="nama" value="<?= $row['Nama']; ?>">
        <p>Program Studi</p>
        <input type="text" name="prodi" value="<?= $row['Prodi']; ?>">
        <p>Jenjang</p>
        <input type="text" name="jenjang" value="<?= $row['Jenjang']; ?>">
        <p>Alamat</p>
        <input type="text" name="alamat" value="<?= $row['Alamat']; ?>"><br><br>
        <a href="list_member.php"><input type="button" value="Cancel"></a>
        <input type="submit" name="edit_member" value="Edit">
    </form>
</body>

</html>