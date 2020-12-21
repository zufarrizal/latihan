<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Form <?= $title; ?>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username') ?>">
                            <small class="form-text text-danger"><?= form_error('username'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" value="<?= set_value('fullname') ?>">
                            <small class="form-text text-danger"><?= form_error('fullname'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password2">Retype Password</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                            <small class="form-text text-danger"><?= form_error('password2'); ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>