<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <ul class="list-group">
                <?php foreach ($data["mahasiswa"] as $mhs) : ?>
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <?= $mhs["nama"]; ?>
                        <a href="<?= baseURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-bg-primary">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>