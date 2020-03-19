<div class="container">
    <div class="row mt-3">
        <div class="col md-6">
            <div class="card">
                <div class="card-header">
                    FORM Tambah Data
                </div>
                <div class="card-body">
                    <?php if (validation_errors()): ?>
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
                                    <option value="kimia">Kimia</option>
                                    <option value="informatika">informatika</option>
                                    <option value="mesin">mesin</option>
                                </select>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary float-right"> submit </button>
                        </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>