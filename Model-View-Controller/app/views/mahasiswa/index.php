<div class="container mt-5">
    <div class="d-flex align-items-center justify-content-between">
        <h3>Daftar Mahasiswa</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal" id="create-btn">
            Tambah
        </button>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-6">
            <form action="<?= baseURL; ?>/mahasiswa/search" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari..." name="search" id="search" aria-describedby="search" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="search">Button</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">

            <ul class="list-group">
                <?php foreach ($data["mahasiswa"] as $mhs) : ?>
                    <li class="list-group-item d-flex align-items-center justify-content-between">
                        <?= $mhs["nama"]; ?>
                        <div class="action">
                            <a href="<?= baseURL; ?>/mahasiswa/detail/<?= $mhs["id"]; ?>" class="badge text-light text-bg-primary">Detail</a>
                            <a href="<?= baseURL; ?>/mahasiswa/edit/<?= $mhs["id"]; ?>" class="badge text-light text-bg-warning" id="edit-btn" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs["id"]; ?>">Edit</a>
                            <a href="<?= baseURL; ?>/mahasiswa/delete/<?= $mhs["id"]; ?>" class="badge text-light text-bg-danger" id="delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= baseURL; ?>/mahasiswa/create" method="post">
                <input type="hidden" name="id" id="id">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalTitle"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="nrp" class="form-label">NRP</label>
                        <input type="number" class="form-control" name="nrp" id="nrp" required>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="jurusan">Jurusan</label>
                        <select class="form-select" name="jurusan" id="jurusan" required>
                            <option selected disabled>Pilih Jurusan</option>
                            <option value="Teknik Permesinan">Teknik Permesinan</option>
                            <option value="Teknik Kendaraan Ringan dan Otomotif">Teknik Kendaraan Ringan dan Otomotif</option>
                            <option value="Teknik Instalasi Tenaga Listrik">Teknik Instalasi Tenaga Listrik</option>
                            <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Tata Kecantikan Kulit dan Rambut">Tata Kecantikan Kulit dan Rambut</option>
                            <option value="Teknik Alat Berat">Teknik Alat Berat</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary"></button>
                </div>
            </form>
        </div>
    </div>
</div>