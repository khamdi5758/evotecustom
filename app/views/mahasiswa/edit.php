<div id="page-wrapper">
    <div id="page-inner">

        <!-- /. ROW  -->
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        data mahasiswa
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?= baseurl; ?>/mahasiswa/simpan" method="POST">
                                    <?php foreach ($data['mhs'] as $mhs) : ?>
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="hidden" class="form-control" id="nim" name="nim" value="<?= $mhs['nim']; ?>">
                                            <input type="text" class="form-control" id="nim" value="<?= $mhs['nim']; ?>" disabled>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">NAMA</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mhs['nama']; ?>">
                                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="prodi">PRODI</label>
                                            <input type="text" class="form-control" id="prodi" name="prodi" value="<?= $mhs['prodi']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="fakultas">FAKULTAS</label>
                                            <input type="text" class="form-control" id="fakultas" name="fakultas" value="<?= $mhs['fakultas']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">ALAMAT</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mhs['alamat']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="username">USERNAME</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= $mhs['username']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="password">PASSWORD</label>
                                            <input type="text" class="form-control" id="password" name="password" value="<?= $mhs['password']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>

                                    <?php endforeach; ?>
                                    <div class="form-group" style="float: right" ;>
                                        <button type="submit" class="btn btn-primary">simpan</button>

                                        <a href="<?= baseurl; ?>/haladmin/mahasiswa" class="btn btn-danger">batal</a>
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