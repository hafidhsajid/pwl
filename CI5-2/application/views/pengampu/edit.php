<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4,1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if(validation_errors()): ?>
                        <div class="alert alert-danger">
                            <?= validation_errors()?>
                        </div>
                        <?php endif ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                            value="<?= $mahasiswa['nama'];?>">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim"
                            value="<?= $mahasiswa['nim'];?>">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email" name="email"
                            value="<?= $mahasiswa['email'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <?php foreach ($jurusan as $key):?>
                                    <?php if($key == $mahasiswa['jurusan']) : ?>
                                        <option value="<?= $key ?>"selected><?= $key ?></option>
                                    <?php else :?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>