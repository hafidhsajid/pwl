<div class="container">
    <?php if ($this->session->flashdata('flash-data')); ?>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fase show" role="alert">
                Data Mahasiswa <strong> berhasil </strong> <?= $this->session->flashdata('flash-data'); ?>
                <button type="button" , class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>

    <br>

    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <br>

    <div class="input-group mb-3">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Cari data mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
            </div>
        </form>
    </div>


<table class="table table-striped">
    <h2>Daftar Mahasiswa</h2>
    <?php if (empty($mahasiswa)) : ?>
        <div class="alert alert-danger" role="alert">
            Data Mahasiswa tidak ditemukan
        </div>
    <?php endif; ?>
    <br><br>
    <thead>

    </thead>
    <tbody>
        <?php
        foreach ($mahasiswa as $mhs) :
        ?>
            <tr>
                <td><?= $mhs['nama']; ?>
                    <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Data ini akan dihapus');">Hapus</a>
                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-success float-right">Edit</a>
                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right">Detail</a>
                </td>
            </tr>
        <?php
        endforeach;
        ?>
    </tbody>
</table>
</div>