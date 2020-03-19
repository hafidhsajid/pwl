<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mata Kuliah
                </div>
                <div class="card-body">
                    <p class="card-text">
                        <label for="">Kode : </label>
                        <?= $matakuliah['kode']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Mata Kuliah: </label>
                        <?= $matakuliah['matakuliah']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Lama jam: </label>
                        <?= $matakuliah['jam']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Semester : </label>
                        <?= $matakuliah['semester']; ?>
                    </p>
                    <a href="<?= base_url() ?>matakuliah" class="btn btn-primary"> Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>