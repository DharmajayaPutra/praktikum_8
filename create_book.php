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
    <h3>Register Book</h3>
    <form action="crud.php" method="post" name="create_book">
        <p>Judul</p>
        <input type="text" name="judul">
        <p>Pengarang</p>
        <input type="text" name="pengarang">
        <p>Penerbit</p>
        <input type="text" name="penerbit">
        <p>Tahun Terbit</p>
        <input type="number" name="tahun"><br><br>
        <a href="list_book.php"><input type="button" value="Cancel"></a>
        <input type="submit" name="create_book" value="Register">
    </form>
</body>

</html>