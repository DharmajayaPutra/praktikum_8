<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="<?= base_url('anggota/index'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-alt-circle-left"></i></i> List Anggota</a>

    <h1 class="h3 mb-2 text-gray-800">Tambah Anggota</h1>
    <?= $this->session->flashdata('message'); ?>

    <form class="user" method="post" action="<?= base_url('anggota/add'); ?>">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Enter Fullname">
            <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="prodi" name="prodi" placeholder="Enter Program Studi">
            <?= form_error('prodi', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="jenjang" name="jenjang" placeholder="Enter Jenjang Pendidikan">
            <?= form_error('jenjang', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Enter Address">
        </div>
        <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
        <button type="submit" class="btn btn-success btn-user btn-block">
            Create Anggota
        </button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->