<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header">
                    FORM Tambah Data
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <form>
                            <div class="form-group">
                                <label for="nama">nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="form-group">
                                <label for="nim">nim</label>
                                <input type="text" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="form-group">
                                <label for="email">email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="jurusan">jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option selected>----------</option>
                                    <?php foreach ($jurusan as $key) : ?>
                                        <option value="<?= $key ?>"><?= $key ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <input type="radio" name="gender" value="Laki - Laki"> Laki - Laki
                            <input type="radio" name="gender" value="Perempuan"> Perempuan
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary float-right"> submit </button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>