<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $mahasiswa['email'] ?>">
                        </div>
                        <label for="jenis kelamin">Jenis Kelamin</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis-kelamin" id="jenis-kelamin" value="Laki-laki" <?= ($mahasiswa['jenis-kelamin'] == 'Laki-laki' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="laki-laki">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="jenis-kelamin" id="jenis-kelamin" value="Perempuan" <?= ($mahasiswa['jenis-kelamin'] == 'Perempuan' ? 'checked' : ''); ?>>
                                <label class="form-check-label" for="perempuan">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach ($jurusan as $key) : ?>
                                    <?php if ($key == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $key ?>" selected> <?= $key ?> </option>
                                    <?php else : ?>
                                        <option value="<?= $key ?>"> <?= $key ?> </option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <p for="gambar">Foto : </p>
                            <?php if ($mahasiswa['foto'] == null) : ?>
                                <small>(Foto tidak ada)</small>
                            <?php else : ?>
                                <img src="<?= base_url() ?>/uploads/foto/<?= $mahasiswa['foto'] ?>" alt="" width="75px">
                            <?php endif ?>
                        </div>

                        <div class="form-group">
                            <input type="hidden" name="fotoLama" value="<?= $mahasiswa['foto']; ?>">
                            <label for="image">Ubah Foto:</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>