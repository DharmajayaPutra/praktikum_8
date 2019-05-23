<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="<?= base_url('buku/index'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-alt-circle-left"></i></i> List Buku</a>

    <h1 class="h3 mb-2 text-gray-800">Tambah Buku</h1>
    <?= $this->session->flashdata('message'); ?>

    <form class="user" method="post" action="<?= base_url('buku/add'); ?>">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="judul" name="judul" placeholder="Enter Book Title">
            <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Enter Pengarang">
            <?= form_error('pengarang', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Enter Penerbit">
            <?= form_error('penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="tahun" name="tahun" placeholder="Enter Tahun Terbit">
        </div>
        <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
        <button type="submit" class="btn btn-success btn-user btn-block">
            Create Anggota
        </button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->