<div id="page-wrapper">
    <div id="page-inner">
        <hr />
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        data panitia
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="<?= baseurl; ?>/panitia/simpan" method="POST">
                                    <?php foreach ($data['panitia'] as $panitia) : ?>
                                        <div class="form-group">
                                            <label for="id">id_panitia</label>
                                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $panitia['id_panitia']; ?>">
                                            <input type="text" class="form-control" id="id" value="<?= $panitia['id_panitia']; ?>" disabled>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">NAMA</label>
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $panitia['nama_panitia']; ?>">
                                            <!-- <small id=" emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="username">USERNAME</label>
                                            <input type="text" class="form-control" id="username" name="username" value="<?= $panitia['username']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="password">PASSWORD</label>
                                            <input type="text" class="form-control" id="password" name="password" value="<?= $panitia['password']; ?>">
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>
                                        <div class="form-group">
                                            <label for="hak akses">Hak Akses</label>

                                            <select class="form-control" name=hakakses>
                                                <option value="<?= $panitia['id_hakakses']; ?>"><?= $panitia['Keterangan']; ?></option>
                                                <option value=1>admin</option>
                                                <option value=2>pengawas</option>
                                            </select>
                                            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                                        </div>

                                    <?php endforeach; ?>
                                    <div class="form-group" style="float: right" ;>
                                        <button type="submit" class="btn btn-primary">simpan</button>

                                        <a href="<?= baseurl; ?>/haladmin/panitia" class="btn btn-danger">batal</a>
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