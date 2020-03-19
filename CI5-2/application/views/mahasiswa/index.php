<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible dade show" role="alert">
            Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash-data');?>
            <button type="button" class="close" data-dismiss = "alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>  
        </div>
    </div>
</div>
<?php endif;?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data mahasiswa" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        <br><br>
            <h2>Daftar Mahasiswa</h2>
        </div>
        <div class="col-md-12">
            
            <?php if(empty($mahasiswa)):?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa tidak ditemukan
                </div>
                <?php endif;?>
                <table class="table table-striped">
                    <tr>
                        
                        <th>Kode</th>
                        <th>Mata Kuliah</th>
                        <th>Jam</th>
                        <th>Semester</th>
                    </tr>                    
                    
                    
                    <?php foreach($mahasiswa as $mhs):?>
                        <tr>
                            <td><?= $mhs['nama'];?></td>
                            <td><?= $mhs['nim'];?></td>
                            <td><?= $mhs['jurusan'];?></td>
                            <td><?= $mhs['jeniskelamin'];?>
                            <a href="<?= base_url();?>mahasiswa/hapus/<?= $mhs['id'];?>"
                            class="badge badge-danger float-right" 
                            onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                            <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id'];?>"
                            class="badge badge-success float-right">Edit</a>
                            <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id'];?>"
                            class="badge badge-primary float-right">Detail</a></td>
                        </tr> 
                        <?php endforeach; ?>
                    </table>
                    </div>
                </div>
            </div>
