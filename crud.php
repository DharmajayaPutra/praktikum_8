<?php
include('connect.php');

if (isset($_POST['create_member'])) {
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $alamat = $_POST['alamat'];

    $create = "INSERT INTO Anggota(Nama, Prodi, Jenjang, Alamat) VALUES ('" . $nama . "', '" . $prodi . "', '" . $jenjang . "', '" . $alamat . "')";
    $res = $conn->query($create) or die($conn->error);

    header('Location: list_member.php');
}

if (isset($_POST['edit_member'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $jenjang = $_POST['jenjang'];
    $alamat = $_POST['alamat'];

    $edit = "UPDATE Anggota SET Nama = '" . $nama . "', Prodi = '" . $prodi . "', Jenjang = '" . $jenjang . "', Alamat = '" . $alamat . "' WHERE Kd_Anggota =" . $id;
    $res = $conn->query($edit) or die($conn->error);

    header('Location: list_member.php');
}




if (isset($_POST['create_book'])) {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    $create = " INSERT INTO Buku(Judul_Buku, Pengarang, Penerbit, Tahun_Terbit) VALUES('" . $judul . "', '" . $pengarang . "', '" . $penerbit . "', " . $tahun .  ")";
    $res = $conn->query($create) or die($conn->error);

    header('Location: list_book.php');
}

if (isset($_POST['edit_book'])) {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    $edit  = "UPDATE Buku SET Judul_Buku = '" . $judul . "', Pengarang = '" . $pengarang . "', Penerbit = '" . $penerbit . "', Tahun_Terbit = '" . $tahun . "' WHERE Kd_Register =" . $id;
    $res = $conn->query($edit) or die($conn->error);

    header('Location: list_book.php');
}
