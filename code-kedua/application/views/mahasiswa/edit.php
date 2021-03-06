<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header bg-info">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $key) : ?>
                                    <?php if ($key == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?></option>
                                    <?php else : ?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="badge"><input type="radio" name="jeniskelamin" value="Laki-Laki" required> Laki-Laki </label>
                            <label class="badge"><input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan </label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>