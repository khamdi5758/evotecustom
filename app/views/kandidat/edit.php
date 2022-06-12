<div id="page-wrapper">
    <div id="page-inner">

        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        data kandidat
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?= baseurl; ?>/kandidat/simpan" method="POST">
                                    <?php foreach ($data['kandidat'] as $kandidat) : ?>
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
                                            <input type="text" class="form-control" id="kandidat" name="kandidat" value="<?= $kandidat['visi']; ?>">
                                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="misi">MISI</label>
                                            <input type="text" class="form-control" id="MISI" name="MISI" value="<?= $kandidat['misi']; ?>">
                                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="username">USERNAME</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= $kandidat['username']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="password">PASSWORD</label>
                                            <input type="text" class="form-control" id="password" name="password" value="<?= $kandidat['password']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="gambar">gambar</label>
                                            <input type="text" class="form-control" id="gambar" name="gambar" value="<?= $kandidat['gambar']; ?>">
                                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>

                                    <?php endforeach; ?>
                                    <div class="form-group" style="float: right" ;>
                                        <button type="submit" class="btn btn-primary">simpan</button>

                                        <a href="<?= baseurl; ?>/haladmin/kandidat" class="btn btn-danger">batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
<!-- /. ROW  -->
<div class="row">
    <div class="col-md-12">
        <h3>More Customization</h3>
        <p>
            For more customization for this template or its components please visit official bootstrap website i.e getbootstrap.com or <a href="http://getbootstrap.com/components/" target="_blank">click here</a> . We hope you will enjoy our template. This template is easy to use, light weight and made with love by binarycart.com
        </p>
    </div>
</div>
<!-- /. ROW  -->
</div>
<!-- /. PAGE INNER  -->
</div>