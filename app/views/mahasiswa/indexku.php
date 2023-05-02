<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar mahasiswa</h2>
                <!-- <h5>Welcome Jhon Deo , Love to see you back. </h5> -->

            </div>

        </div>
        <!-- /. ROW  -->
        <!-- <hr /> -->

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <?php Flasher::flash();?>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputdata" style="margin-bottom: 10px;">
                            tambah data
                        </button>
                    </div>
                </div>
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>NIM</th>
                                        <th>NAMA</th>
                                        <th>PRODI</th>
                                        <th>FAKULTAS</th>
                                        <th>ALAMAT</th>
                                        <th>USERNAME</th>
                                        <th>PASSWORD</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data['mhs'] as $mhs) : ?>
                                        <tr class="odd gradeX">
                                            <td><?= $i++; ?></td>
                                            <td><?= $mhs['nim']; ?></td>
                                            <td><?= $mhs['nama']; ?></td>
                                            <td><?= $mhs['prodi']; ?></td>
                                            <td><?= $mhs['fakultas']; ?></td>
                                            <td><?= $mhs['alamat']; ?></td>
                                            <td><?= $mhs['username']; ?></td>
                                            <td>
                                                <?php 
                                                    
                                                    $unmmhs = $mhs['username'];
                                                    $pwmhs = $mhs['password']; 
                                                    // $dpwmhs = RC4::decrypt($unmmhs,$pwmhs);
                                                    echo $pwmhs;
                                                    // $cobrc4des = new Kriptorc4();
                                                    // echo $cobrc4des->deskripsi($pwmhs,$unmmhs);
                                                
                                                ?>
                                            
                                            </td>
                                            <td>
                                                <a href="<?= baseurl; ?>/mahasiswa/edit/<?= $mhs['nim']; ?>" class="btn btn-warning" style="margin-bottom: 20px;">ubah</a>
                                                <a href="<?= baseurl; ?>/mahasiswa/delete/<?= $mhs['nim']; ?>" class="btn btn-danger" style="margin-bottom: 20px;" onclick="return confirm('yakin')">hapus</a>
                                            </td>

                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. ROW  -->

        <!-- /. ROW  -->
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judul">tambah data mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= baseurl; ?>/mahasiswa/tambah" method="POST">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Enter nim">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="prodi">PRODI</label>
                        <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Enter prodi">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="fakultas">FAKULTAS</label>
                        <input type="text" class="form-control" id="fakultas" name="fakultas" placeholder="Enter fakultas">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="alamat">ALAMAT</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" maxlength="8">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>