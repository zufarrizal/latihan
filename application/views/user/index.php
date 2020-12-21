<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <a href="<?= base_url('user/tambah'); ?>" class="btn btn-success btn-sm my-3">Tambah</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($user as $usr) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $usr['username']; ?></td>
                            <td><?= $usr['fullname']; ?></td>
                            <td><?= $usr['email']; ?></td>
                            <td>
                                <a href="<?= base_url('user/lihat/') . $usr['id']; ?>" class="btn btn-primary btn-sm">Lihat</a>
                                <a href="<?= base_url('user/ubah/') . $usr['id']; ?>" class="btn btn-success btn-sm">Ubah</a>
                                <a href="<?= base_url('user/hapus/') . $usr['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>