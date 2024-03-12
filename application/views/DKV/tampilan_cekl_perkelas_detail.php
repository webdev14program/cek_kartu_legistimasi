<div class="container">
    <div class="row">
        <div class="col-md mt-4">
            <div class="card bg-primary">
                <div class="card-body">
                    <h4 class="text-center text-white">Cek Legistimasi</h4>
                    <h4 class="text-center text-white">DESAIN KOMUNIKASI VISUAL (DKV)</h4>
                    <h4 class="text-center text-white text-uppercase">Kelas : <?= $header['name'] ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md mt-4">
            <div class="card">
                <div class="card-header bg-success">
                    <h4 class="text-center text-uppercase text-white">Sudah AMbil legistimasi</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($aktif as $row) {
                                ?>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td class=""><?= $row['firstname']; ?></td>
                                    <td class="text-center"><?= $row['keterangan']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md mt-4">
            <div class="card">
                <div class="card-header bg-danger">
                    <h4 class="text-center text-uppercase text-white">Belum AMbil legistimasi</h4>
                </div>
                <div class="card-body ">
                    <table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Siswa</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                $no = 1;
                                foreach ($non_aktif as $row) {
                                ?>
                                    <td class="text-center"><?= $no++; ?></td>
                                    <td class=""><?= $row['firstname']; ?></td>
                                    <td class="text-center"><?= $row['keterangan']; ?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>