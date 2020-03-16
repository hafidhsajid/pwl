<div class="container">
    <div class="row mt-3">
        <div class="col-nd-6">
            <div class="card">
                <div class="card-header bg-info">
                    Form Edit Data Mata Kuliah
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mata_kuliah['id']; ?>">
                        <div class="form-group">
                            <label for="kode">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= $mata_kuliah['kode']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="matkul">Mata Kuliah</label>
                            <input type="text" class="form-control" id="matkul" name="matkul" value="<?= $mata_kuliah['matkul']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="jam">Jam</label>
                            <input type="jam" class="form-control" id="jam" name="jam" value="<?= $mata_kuliah['jam']; ?>">
                        </div>
                        <div class=" form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" id="semester" name="semester">
                                <?php foreach ($semester as $key) : ?>
                                    <?php if ($key == $mata_kuliah['semester']) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?></option>
                                    <?php else : ?>
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