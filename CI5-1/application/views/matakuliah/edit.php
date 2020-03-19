<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Edit</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $matakuliah['id'];?>">
                        <div class="form-group">
                            <label for="kode">kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?=$matakuliah['kode'];?>">

                        </div>
                        <div class="form-group">
                            <label for="matakuliah">matakuliah</label>
                            <input type="text" class="form-control" id="matakuliah" name="matakuliah" value="<?=$matakuliah['matakuliah'];?>">
                        </div>
                        <div class="form-group">
                            <label for="jam">jam</label>
                            <input type="number" class="form-control" id="jam" name="jam" value="<?=$matakuliah['jam'];?>">
                        </div>
                        <div class="form-group">
                            <label for="semester">semester</label>
                            <input type="number" class="form-control" id="semester" name="semester" value="<?=$matakuliah['semester'];?>">
                    
                        </div>
                        <button type="submit" class="btn btn-primary float-right">edit</button>
                    </form>
                </div>
                
        </div>
    </div>
</div>