<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info">
                    Detail Data Mata Kuliah
                </div>
                <div class="card-body">
                    <div class="card-title"><?= $mata_kuliah['matkul']; ?></h5>
                        <p class="card-text">
                            <label for=""><b> Kode:</b></label>
                            <?= $mata_kuliah['kode']; ?></p>
                        <p class="card-text">
                            <label for=""><b> Jumlah Jam:</b></label>
                            <?= $mata_kuliah['jam']; ?></p>
                        <p class="card-text">
                            <label for=""><b> Semester:</b></label>
                            <?= $mata_kuliah['semester']; ?></p>
                        <a href="<?= base_url(); ?>matkul" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>