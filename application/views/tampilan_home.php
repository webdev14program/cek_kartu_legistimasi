<body>
    <div class="jumbotron jumbotron-fluid bg-primary">
        <div class="container text-white">
            <h1 class="display-4 text-center text-uppercase">Cek Legistimasi Siswa </h1>
            <h2 class="display-4 text-center text-uppercase">SMK TUNAS HARAPAN</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md mt-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Data Perkelas</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>ID Kelompok</th>
                                    <th>Jurusan</th>
                                    <th>Kelas</th>
                                    <th>Jumlah Siswa</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    $no = 1;
                                    foreach ($kelas as $row) {
                                    ?>
                                        <td class="text-center"><?= $no++; ?></td>
                                        <td class="text-center"><?= $row['id']; ?></td>
                                        <td class="text-center"><?= $row['jurusan']; ?></td>
                                        <td class="text-center"><?= $row['name']; ?></td>
                                        <td class="text-center"><?= $row['jumlah_siswa'] ?></td>
                                        <td>
                                            <h5 class="text-center">
                                                <a class="btn btn-primary btn-sm text-uppercase" href="<?= base_url() ?>Home/tampilan_detail/<?= $row['id']; ?>">Detail</a>
                                            </h5>
                                        </td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>