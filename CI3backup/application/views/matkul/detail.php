<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Halaman Detail Mata Kuliah
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $matakuliah['matakuliah']; ?></h5>
                    <p class="card-text">
                        <label for=""><b> Kode:</b></label>
                        <?= $matakuliah['kode'];?>
                    </p>
                    <p class="card-text">
                        <label for=""><b> Jam:</b></label>
                        <?= $matakuliah['jam'];?>
                    </p>
                    <p class="card-text">
                        <label for=""><b> Jurusan:</b></label>
                        <?= $matakuliah['semester'];?>
                    </p>
                    <a href="<?= base_url();?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>