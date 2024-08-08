<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $data["mahasiswa"]["nama"]; ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data["mahasiswa"]["nrp"]; ?></h6>
            <p class="card-text"><?= $data["mahasiswa"]["jurusan"]; ?></p>
            <p class="card-text"><?= $data["mahasiswa"]["email"]; ?></p>
            <a href="<?= baseURL; ?>/mahasiswa" class="card-link">Kembali</a>
        </div>
    </div>
</div>