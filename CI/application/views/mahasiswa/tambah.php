<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card-header">
                Form Tambah Data Mahasiswa
            </div>
            <div class="card-body">
                <?php if (validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors() ?>
                    </div>
                    <?php endif ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" class="form-control" id="nim">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="jurusan"></label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <option selected>---------</option>
                            <option value="kimia">Kimia</option>
                            <option value="informatika">Informatika</option>
                            <option value="mesin">Mesin</option>
                        </select>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>