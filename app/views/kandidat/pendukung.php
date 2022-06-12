<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h2>Daftar pendukung</h2>
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
                        Advanced Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No </th>
                                        <th>ID KANDIDAT</th>
                                        <th>NAMA KANDIDAT</th>
                                        <th>NIM PENDUKUNG</th>
                                        <th>NAMA PENDUKUNG</th>
                                        <!-- <th>Gambar</th> -->
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data['pendukung'] as $pendukung) : ?>
                                        <tr class="odd gradeX">
                                            <td><?= $i++; ?></td>
                                            <td><?= $pendukung['id_kandidat']; ?></td>
                                            <td><?= $pendukung['nama_kandidat']; ?></td>
                                            <td><?= $pendukung['nim_pendukung']; ?></td>
                                            <td><?= $pendukung['nama']; ?></td>
                                            <td>
                                                <!-- <a href="" class="btn btn-warning" style="margin-bottom: 20px;">Edit</a> -->
                                                <a href="<?= baseurl; ?>/halkandidat/delete/<?= $pendukung['nim_pendukung']; ?>" class="btn btn-danger" style="margin-bottom: 20px;" onclick="return confirm('yakin')">Delete</a>
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
                <h5 class="modal-title" id="judul">tambah data pendukung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= baseurl; ?>/halkandidat/tambahpendukung" method="POST">
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Enter id">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Enter nim">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>