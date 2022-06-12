<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        silahkan pilih
                    </div>
                    <div class="panel-body">
                        <form action="<?= baseurl; ?>/halpemilih/suara" method="POST">
                            <div class="row">
                                <?php foreach ($data['kandidat'] as $kandidat) : ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="jumbotron">
                                                <center>
                                                    <input type="hidden" name="nim" value="<?= $_SESSION['user_session']; ?>">
                                                    <input type="radio" name="suara" value="<?= $kandidat['id_kandidat']; ?>">
                                                    <h1><?= $kandidat['id_kandidat']; ?></h1>
                                                    <!-- <label for="nourut">1</label> -->
                                                    <br>
                                                    <img src="<?= baseurl; ?>/images/<?= $kandidat['gambar']; ?>" alt="" style="width: 250px; height: 250px;">
                                                    <br>
                                                    <h3><?= $kandidat['nama_kandidat']; ?></h3>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="jumbotron">
                                            <center>
                                                <input type="radio" name="fav_language" value="kandidat1">
                                                <h1>2</h1>
                                                <label for="nourut">1</label>
                                                <br>
                                                <img src="/images/alfa.jpg" alt="" style="width: 250px; height: 250px;">
                                                <br>
                                                <h3>alfa nur safitri
                                                </h3>
                                            </center>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">kirim</button>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>