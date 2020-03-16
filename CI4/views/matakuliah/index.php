<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data mata kuliah</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>matakuliah/tambah" class="btn btn-primary"> Tambah Data </a>
        </div>
    </div>
    <!-- mt-3 artinya margin top 3 -->
    <div class="row mt-3">
        <div class="col-md-7">
            <h2>Daftar Mata Kuliah</h2>
            <table class="table table-bordered-rows">
                <tr>
                    <th>KODE</th>
                    <th>MATA KULIAH</th>
                    <th>JAM</th>
                    <th>SEMESTER</th>
                    <th>AKSI</th>
                </tr>
                <?php foreach ($matakuliah as $matkul) : ?>
                    <tr>
                        <td><?= $matkul['kode']; ?></td>
                        <td><?= $matkul['matakuliah']; ?></td>
                        <td><?= $matkul['jam']; ?></td>
                        <td><?= $matkul['semester']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>matakuliah/detail/<?= $matkul['id_matkul'] ?>" class="badge badge-primary ">Detail</a>
                            <a href="<?= base_url(); ?>matakuliah/edit/<?= $matkul['id_matkul'] ?>" class="badge badge-success ">Edit</a>
                            <a href="<?= base_url(); ?>matakuliah/hapus/<?= $matkul['id_matkul'] ?>" class="badge badge-danger " onclick="return confirm('Yakin Data ini akan dihapus')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </table>
        </div>
    </div>
</div>
</div>