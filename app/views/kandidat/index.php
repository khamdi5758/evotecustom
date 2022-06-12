<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar kandidat</h2>
                <!-- <h5>Welcome Jhon Deo , Love to see you back. </h5> -->

            </div>

        </div>
        <!-- /. ROW  -->
        <!-- <hr /> -->

        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <?php Flasher::flash();
                        ?>
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
                                        <th>ID KANDIDAT</th>
                                        <th>NAMA KANDIDAT</th>
                                        <th>VISI</th>
                                        <th>MISI</th>
                                        <th>USERNAME</th>
                                        <th>PASSWORD</th>
                                        <!-- <th>Gambar</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data['kandidat'] as $kandidat) : ?>
                                        <tr class="odd gradeX">
                                            <td><?= $i++; ?></td>
                                            <td><?= $kandidat['id_kandidat']; ?></td>
                                            <td><?= $kandidat['nama_kandidat']; ?></td>
                                            <td><?= $kandidat['visi']; ?></td>
                                            <td><?= $kandidat['misi']; ?></td>
                                            <td><?= $kandidat['username']; ?></td>
                                            <td><?= $kandidat['password']; ?></td>
                                            <td>
                                                <a href="<?= baseurl; ?>/kandidat/edit/<?= $kandidat['id_kandidat']; ?>" class="btn btn-warning" style="margin-bottom: 20px;">ubah</a>
                                                <a href="<?= baseurl; ?>/kandidat/delete/<?= $kandidat['id_kandidat']; ?>" class="btn btn-danger" style="margin-bottom: 20px;" onclick="return confirm('yakin')">hapus</a>
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
                <h5 class="modal-title" id="judul">tambah data kandidat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= baseurl; ?>/kandidat/tambah" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Enter id">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="visi">VISI</label>
                        <input type="text" class="form-control" id="visi" name="visi" placeholder="Enter visi">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="misi">MISI</label>
                        <input type="text" class="form-control" id="misi" name="misi" placeholder="Enter misi">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>

                    <div class="form-group">
                        <label for="username">USERNAME</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="password">PASSWORD</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter password">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Enter gambar">
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