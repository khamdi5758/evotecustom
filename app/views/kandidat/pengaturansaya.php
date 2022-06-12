<?php foreach ($data['kandidat'] as $kandidat) : ?>
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-12">
                <!-- Media middle -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputdata" style="margin-bottom: 10px;">
                    ubah data
                </button>
                <div class="panel panel-default">
                    <!-- <div class="panel-heading">
                    data diri
                </div> -->
                    <div class="panel-body">

                        <!-- <form role="form"> -->
                        <div class="row">
                            <div class="col-md-12">
                                <?php Flasher::flash();
                                ?>
                            </div>


                            <div class="row">

                                <span class="chat-img pull-left" id="kotakangambar">
                                    <img src="<?= baseurl; ?>/images/<?= $kandidat['gambar']; ?>" alt="User" class="img-circle" id="profile" />
                                    <h1 class="nama"><?= $kandidat['nama_kandidat']; ?></h1>
                                </span>

                                <div class="col-md-7">
                                    <div class="well well-sm">
                                        <h4>VISI</h4>
                                        <p><?= $kandidat['visi']; ?></p>
                                    </div>
                                </div>

                                <div class="col-md-7">
                                    <div class="well well-sm">
                                        <h4>MISI</h4>
                                        <p><?= $kandidat['misi']; ?></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="inputdata" tabindex="-1" role="dialog" aria-labelledby="judul" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judul">ubah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= baseurl; ?>/halkandidat/simpan" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id">id_kandidat</label>
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $kandidat['id_kandidat']; ?>">
                            <input type="text" class="form-control" id="id" value="<?= $kandidat['id_kandidat']; ?>" disabled>
                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="nama">NAMA</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $kandidat['nama_kandidat']; ?>">
                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="visi">VISI</label>
                            <input type="text" class="form-control" id="visi" name="visi" value="<?= $kandidat['visi']; ?>">
                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="misi">MISI</label>
                            <input type="text" class="form-control" id="misi" name="misi" value="<?= $kandidat['misi']; ?>">
                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Enter gambar">
                            <input type="hidden" class="form-control" id="gambar" name="gambarx" value="<?= $kandidat['gambar']; ?>">
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
<?php endforeach; ?>