<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List Data Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <a href="<?= base_url('buku/create'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-user-plus"></i> Tambah Buku</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Kode</th>
                            <th>Judul</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($list_buku as $row) : ?>
                            <tr>
                                <td><?= $row['Kd_Register']; ?></td>
                                <td><?= $row['Judul_Buku']; ?></td>
                                <td><?= $row['Pengarang']; ?></td>
                                <td><?= $row['Penerbit']; ?></td>
                                <td><?= $row['Tahun_Terbit']; ?></td>
                                <td><a href="<?= base_url('buku/edit'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i class="fas fa-user-edit"></i> Edit</a> <a href="<?= base_url('buku/delete'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-user-times"></i> Delete</a></td>
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