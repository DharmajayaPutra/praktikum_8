<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Data Anggota</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('anggota/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-user-plus"></i> Tambah Anggota</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Jenjang</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($list_anggota as $row) : ?>
                            <tr>
                                <td><?= $row['Kd_Anggota']; ?></td>
                                <td><?= $row['Nama']; ?></td>
                                <td><?= $row['Prodi']; ?></td>
                                <td><?= $row['Jenjang']; ?></td>
                                <td><?= $row['Alamat']; ?></td>
                                <td><a href="<?= base_url('petugas/edit'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-user-edit"></i> Edit</a> <a href="<?= base_url('petugas/delete'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-user-times"></i> Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->