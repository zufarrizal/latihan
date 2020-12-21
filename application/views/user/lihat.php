<section class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <?= $title; ?>
                </div>
                <div class="card-body">
                    <h3>Lihat Data #<?= $user['id']; ?></h3>
                    <p>Username : <?= $user['username']; ?></p>
                    <p>Fullname : <?= $user['fullname']; ?></p>
                    <p>Email : <?= $user['email']; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>