<!-- <?php 
var_dump($mahasiswa);
?> -->
<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Mahasiswa</h2>
            <ul class="list-group">
                <!-- <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li> -->
                <?php foreach ($mahasiswa as $mhs ): ?>
                    <li class="list-group-item"><?= $mhs['nama'];?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>