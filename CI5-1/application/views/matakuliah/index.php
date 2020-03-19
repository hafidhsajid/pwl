<div class="container">
<?php if($this->session->flashdata('flash-data')):?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Mata Kuliah<strong> Berhasil </strong><?= $this->session->flashdata('flash-data');?>
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
            </div>
        </div>
    </div>
<?php endif; ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url();?>matakuliah/tambah"class="btn btn-primary"> Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Mata Kuliah" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- mt-3 artinya margin top 3 -->
<div class="row mt-3">
    <div class="col-md-6" tab>
        <h2>Daftar Mata Kuliah</h2>
        <?php if(empty($matakuliah)):?>
                <div class ='alert alert-danger' role = 'alert'>
                  Data Mata Kuliah Tidak Ditemukan
                </div>
            <?php endif; ?>
       
        <table class="table table-hover" >
                <tr>
                    <td>Kode</td>
                    <td>Mata Kuliah</td>
                    <td>Jam</td>
                    <td>Semester</td>
                </tr>
                <?php
                    foreach ($matakuliah as $matkul) :
                        ?>
                        <tr>
                                <td><?= $matkul['kode']; ?></td>
                                <td><?= $matkul['matakuliah']; ?></td>
                                <td><?= $matkul['jam']; ?></td>
                                <td><?= $matkul['semester']; ?></td>
                                <td><a href="<?= base_url();?>matakuliah/hapus/<?=$matkul['id'];?>"class="badge badge-danger float-right"
                                onclick="return confirm('Yakin Data Ini Akan Dihapus');">Hapus</a>
                                <a href="<?= base_url(); ?>matakuliah/edit/<?=$matkul['id'];?>"
                                class="badge badge-success float-right">Edit</a>
                                <a href="<?= base_url(); ?>matakuliah/detail/<?=$matkul['id'];?>"
                                class="badge badge-primary float-right">Detail</a></td>
                            </tr>
                    <?php
                    endforeach;
                    ?>
                
            </table>
    </div>
</div>
        