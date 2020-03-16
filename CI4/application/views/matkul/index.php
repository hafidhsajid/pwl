<div class="container">
    <?php if($this->session->flashdata('flash-data')); ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fase show" role="alert">
                Data Mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data');?>
                <button type="button", class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>matkul/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    
    <table class="table table-striped">
        <br><br><br>
    <h2>Daftar Mahasiswa</h2>
    <br><br>
        <thead>
            
        </thead>
        <tbody>
            <th>Kode</th>
            <th>Mata Kuliah</th>
            <th>Jam</th>
            <th>Semester</th>
            <?php
                foreach ($matkul as $mhs) :
            ?>
            <tr>
                <td><?= $mhs['kode']; ?>
                <!-- <a href="<?= base_url();?>/hapus/<?= $mhs['id_matkul'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Data ini akan dihapus');">Hapus</a> -->
                </td>
                <td><?= $mhs['matakuliah']; ?>
                <!-- <a href="<?= base_url();?>/hapus/<?= $mhs['id_matkul'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Data ini akan dihapus');">Hapus</a> -->
                </td>
                
                <td><?= $mhs['jam']; ?>
                <!-- <a href="<?= base_url();?>/hapus/<?= $mhs['id_matkul'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Data ini akan dihapus');">Hapus</a> -->
                </td>

                <td><?= $mhs['semester']; ?>
                <a href="<?= base_url();?>matkul/hapus/<?= $mhs['id_matkul'];?>" 
                class="badge badge-danger float-right"
                onclick="return confirm('Data ini akan dihapus');">Hapus</a>
                </td>

            </tr>
            <?php
                endforeach;
                ?>
        </tbody>
    </table>
</div>