<!-- Begin Page Content -->
<div class="container-fluid">
    <a href="<?= base_url('petugas/index'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-arrow-alt-circle-left"></i></i> List Petugas</a>

    <h1 class="h3 mb-2 text-gray-800">Tambah Petugas</h1>
    <?= $this->session->flashdata('message'); ?>

    <form class="user" method="post" action="<?= base_url('petugas/add'); ?>">
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="fullname" name="fullname" placeholder="Enter Fullname">
            <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="address" name="address" placeholder="Enter Address">
            <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Addrress">
            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Confirm Password">
            <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
            Crete Account
        </button>
    </form>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->