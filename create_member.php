<?php
include('connect.php');
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
    <h3>Create Member</h3>
    <form action="crud.php" method="post" name="create">
        <p>Nama Lengkap</p>
        <input type="text" name="nama">
        <p>Program Studi</p>
        <input type="text" name="prodi">
        <p>Jenjang</p>
        <input type="text" name="jenjang">
        <p>Alamat</p>
        <input type="text" name="alamat"><br><br>
        <a href="list_member.php"><input type="button" value="Cancel"></a>
        <input type="submit" name="create_member" value="Create">
    </form>
</body>

</html>