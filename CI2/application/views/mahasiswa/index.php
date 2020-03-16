<div class="container">
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
            <tr>
                <th scope="col">nama</th>
                <th scope="col">nim</th>
                <th scope="col">email</th>
                <th scope="col">jurusan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($mahasiswa as $mhs) :
            ?>
            <tr>
                <th scope="row"><?= $mhs['nama']; ?></th>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
            </tr>
            <?php
                endforeach;
                ?>
        </tbody>
    </table>
</div>