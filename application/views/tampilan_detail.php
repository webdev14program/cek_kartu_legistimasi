<div class="container">
    <div class="row">
        <div class="col-md mt-5">
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="text-uppercase text-center font-weight-bolder text-white">bisa & sudah ambil kartu Legistimasi</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($siswa_jursan_aktif as $row) {
                                ?>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td class="text-center"><?= $row['firstname']; ?></td>
                                    <td class="text-center"><?= $row['name']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md mt-5">
            <div class="card">
                <div class="card-header bg-danger">
                    <h5 class="text-uppercase font-weight-bolder text-center text-white">belum pembayarn SAS & KI & cicil spp</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($siswa_jursan_nonaktif as $row) {
                                ?>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td class="text-center"><?= $row['firstname']; ?></td>
                                    <td class="text-center"><?= $row['name']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>