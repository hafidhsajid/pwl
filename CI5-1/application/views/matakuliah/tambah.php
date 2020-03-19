<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Form Tambah Mata Kuliah</div>
                <div class="card-body">
                <?php
                        if (validation_errors()) {
                            echo '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
                        }
                    ?>
                    <form action="" method="post">
                        
                        <div class="form-group">
                            <label for="nim">kode</label>
                            <input type="text" class="form-control" id="kode" name="kode">
                        </div>
                        <div class="form-group">
                            <label for="matakuliah">matakuliah</label>
                            <input type="text" class="form-control" id="matakuliah" name="matakuliah">
                        </div>
                        <div class="form-group">
                            <label for="jam">jam</label>
                            <input type="number" class="form-control" id="jam" name="jam">
                        </div>
                        <div class="form-group">
                            <label for="semester">semester</label>
                            <input type="number" class="form-control" id="semester" name="semester">
                        </div>
                        
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
                
        </div>
    </div>
</div>