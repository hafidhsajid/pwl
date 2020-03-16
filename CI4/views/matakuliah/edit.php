<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- https://getbootstrap.com/docs/4.1/components/card/ -->
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mata Kuliah
                </div>
                <div class="card-body">
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->
                        <input type="hidden" name="id" id="id" value="<?= $matakuliah['id_matkul'];?>">
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $matakuliah['kode']?>">
                        </div>
                        <div class="form-group">
                            <label for="matakuliah">Mata Kuliah</label>
                            <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="<?= $matakuliah['matakuliah']?>">
                        </div>
                        <div class="form-group">
                            <label for="jam">Lama jam</label>
                            <input type="number" class="form-control" id="jam" name="jam" value="<?= $matakuliah['jam']?>">
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" id="semester" name="semester">
                                <?php foreach ($semester as $key) :?>
                                <option value="<?= $key?>"> <?= $key?> </option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>