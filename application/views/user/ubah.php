<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Form <?= $title; ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="text" class="form-control" id="id" name="id" value="<?= $user['id']; ?>" hidden>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user['fullname']; ?>">
                            <small class="form-text text-danger"><?= form_error('fullname'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>