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
                        <input type="hidden" name = "id" value="<?= $matakuliah['id_matkul']; ?>">
                        <!-- <form> -->
                            <div class="form-group">
                                <label for="kode">kode</label>
                                <input type="text" class="form-control" id="kode" name="kode"value="<?= $matakuliah['kode'];?>">
                            </div>
                            <div class="form-group">
                                <label for="matakuliah">matakuliah</label>
                                <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="<?= $matakuliah['matakuliah'];?>">
                            </div>
                            <div class="form-group">
                                <label for="jam">jam</label>
                                <select class="form-control" id="jam" name="jam">
                                    <?php foreach($jam as $key) : ?>
                                        <option value="<?= $key?>" ><?= $key ?>
                                    </option>
                                    <?php endforeach ?>
                                    <option selected><?= $matakuliah['jam'] ?></option>   
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select class="form-control" id="semester" name="semester">
                                <option selected><?= $matakuliah['semester'] ?></option>   
                                    <?php foreach($semester as $key) : ?>
                                        <option value="<?= $key?>" ><?= $key ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            
                            <button type="submit" name="submit" class="btn btn-primary float-right"> submit </button>
                        <!-- </form> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>