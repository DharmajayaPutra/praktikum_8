<html>

<head>
    <title>Program Perpustakaan</title>
</head>

<body>
    <h1>Data Anggota</h1>
    <hr>
    <a href='<?php echo base_url("Anggota/tambah"); ?>'>Tambah Anggota</a><br><br>
    <table border="1" cellpadding="7">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Program Studio</th>
            <th>Jenjang</th>
            <th>Alamat</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        if (!empty($Anggota)) {
            foreach ($Anggota as $data) {
                echo "<tr>
          <td>" . $data->Kd_Anggota . "</td>
          <td>" . $data->Nama . "</td>
          <td>" . $data->Prodi . "</td>
          <td>" . $data->Jenjang . "</td>
          <td>" . $data->Alamat . "</td>
          <td><a href='" . base_url("Anggota/ubah/" . $data->Kd_Anggota) . "'>Edit</a></td>
          <td><a href='" . base_url("Anggota/hapus/" . $data->Kd_Anggota) . "'>Delete</a></td>
          </tr>";
            }
        } else {
            echo "<tr><td align='center' colspan='7'>Tidak Ada Anggota</td></tr>";
        }
        ?>
    </table>
</body>

</html>