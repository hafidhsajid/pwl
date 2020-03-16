<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Mata Kuliah <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>matkul/tambah" class="btn btn-primary">Tambah data</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mata Kuliah</h2>
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">Jam</th>
                        <th scope="col">Semester</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mata_kuliah as $mk) :
                    ?>
                        <tr>
                            <th scope="row"><?= $mk['kode']; ?></th>
                            <th scope="row"><?= $mk['matkul']; ?></th>
                            <th scope="row"><?= $mk['jam']; ?></th>
                            <th scope="row"><?= $mk['semester']; ?></th>
                            <th> <a href="<?= base_url(); ?>matkul/hapus/<?= $mk['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                                <a href="<?= base_url(); ?>matkul/edit/<?= $mk['id']; ?>" class="badge badge-success float-right">Edit</a>
                                <a href="<?= base_url(); ?>matkul/detail/<?= $mk['id']; ?>" class="badge badge-primary float-right">Detail</a></th>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>