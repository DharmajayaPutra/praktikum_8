<html>

<head>
    <title>Program Perpustakaan</title>
</head>

<body>
    <h1>Form Tambah Data Anggota</h1>
    <hr>

    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("Anggota/tambah"); ?>
    <table cellpadding="8">
        <tr>
            <td>Kode</td>
            <td><input type="text" name="input_Kd_Anggota" value="<?php echo set_value('input_Kd_Anggota'); ?>"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="input_Nama" value="<?php echo set_value('input_Nama'); ?>"></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><input type="text" name="input_Prodi" value="<?php echo set_value('input_Prodi'); ?>"></td>
        </tr>
        <tr>
            <td>Jenjang</td>
            <td><input type="text" name="input_Jenjang" value="<?php echo set_value('input_Jenjang'); ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea name="input_Alamat"><?php echo set_value('input_Alamat'); ?></textarea></td>
        </tr>
    </table>

    <hr>
    <input type="submit" name="submit" value="Simpan">
    <a href="<?php echo base_url(); ?>"><input type="button" value="Batal"></a>
    <?php echo form_close(); ?>
</body>

</html>