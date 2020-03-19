<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-4">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible dade show" role="alert">
                    Data Mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data mahasiswa" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
            <h2>Daftar Mahasiswa</h2>

            <?php if (empty($pengampu)) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa tidak ditemukan
                </div>
            <?php endif; ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Kode Mata Kuliah</th>
                        <th>Kode Kelas</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($pengampu as $mhs) : ?>
                        <tr class="even grade">
                            <td><?php echo $nomor; ?></td>
                            <td><?php echo $mhs['nim']; ?></td>
                            <td><?php echo $mhs['nama']; ?></td>
                            <td><?php echo $mhs['nama_matkul']; ?></td>
                            <td><?php echo $mhs['nama_kelas']; ?></td>
                            <td>
                                <a href="" class="btn btn-success">Ubah</a>
                                <a href="<?= base_url(); ?>pengampu/hapus/<?= $mhs['id_mengampu']; ?>" 
                                class="btn btn-danger" onclick="return confirm('Yakin Data ini akan dihapus');">Hapus</a>
                            </td>

                        </tr>
                        <?php $nomor++; ?>
                    <?php endforeach; ?>
                <tbody>
            </table>
        </div>
    </div>
</div>