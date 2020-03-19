<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <img src="<?= base_url() ?>/uploads/foto/<?= $mahasiswa['foto'] ?>" alt="" width="100px">
                    <h5 class="card-title mt-2"> <?= $mahasiswa['nama'] ?> </h5>
                    <p class="card-text">
                        <label for="">Email: </label>
                        <?= $mahasiswa['email']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Nim: </label>
                        <?= $mahasiswa['nim']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Jenis kelamin: </label>
                        <?= $mahasiswa['jenis-kelamin']; ?>
                    </p>
                    <p class="card-text">
                        <label for="">Jurusan: </label>
                        <?= $mahasiswa['jurusan']; ?>
                    </p>
                    <a href="<?= base_url() ?>mahasiswa" class="btn btn-primary"> Kembali </a>
                </div>
            </div>
        </div>
    </div>
</div>