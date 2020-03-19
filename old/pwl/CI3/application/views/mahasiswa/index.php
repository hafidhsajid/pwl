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
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    
    <table class="table table-striped">
        <br><br><br>
    <h2>Daftar Mahasiswa</h2>
    <br><br>
        <thead>
            
        </thead>
        <tbody>
            <?php
                foreach ($mahasiswa as $mhs) :
            ?>
            <tr>
                <td><?= $mhs['nama']; ?>
                <a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id'];?>" 
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