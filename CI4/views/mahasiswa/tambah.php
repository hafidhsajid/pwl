<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->

                    <?php if ($this->session->flashdata('flash-data')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Eror</strong> <?= $this->session->flashdata('flash-data'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                    <?php endif; ?>

                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <?= form_open_multipart('mahasiswa/tambah') ?>
                    <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="number" class="form-control" id="nim" name="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <label for="jenis kelamin">Jenis Kelamin</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis-kelamin" id="jenis-kelamin" value="Laki-laki" checked>
                            <label class="form-check-label" for="laki-laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis-kelamin" id="jenis-kelamin" value="Perempuan">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan">
                            <?php foreach ($jurusan as $key) : ?>
                                <option value="<?= $key ?>"> <?= $key ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="upload-foto">Upload Foto</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>