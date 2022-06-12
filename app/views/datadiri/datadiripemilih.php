<div id="page-wrapper">
    <div id="page-inner">
        <div class="col-md-12">
            <!-- Media middle -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    data diri
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <?php foreach ($data['datausers'] as $user) : ?>
                                <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <img src="/images/piti.jpg" class="align-self-center mr-3" style="width:5cm ; height: 5cm ; margin-top: 20px;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <span class="icon-box bg-color-red set-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </span>
                                <div class="text-box">
                                    <p class="main-text">120 New</p>
                                    <p class="text-muted">Messages</p>
                                </div>
                            </div> -->

                                <span class="chat-img pull-left">
                                    <img src="<?= baseurl; ?>/images/user.jpg" alt="User" class="img-circle" id="profile" />
                                </span>
                                <div class="chat-body">
                                    <!-- <label for="nim">nama : </label>
                                <br>
                                <label for="nama">nama : </label>
                                <br>
                                <label for="prodi">nama : </label>
                                <br>
                                <label for="fakultas">nama : </label>
                                <br>
                                <label for="alamat">nama : </label> -->

                                    <table>

                                        <tr>
                                            <td>nim</td>
                                            <td> : </td>
                                            <td><?= $user['nim']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>nama</td>
                                            <td> : </td>
                                            <td><?= $user['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>prodi</td>
                                            <td> : </td>
                                            <td><?= $user['prodi']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>fakultas</td>
                                            <td> : </td>
                                            <td><?= $user['fakultas']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td> : </td>
                                            <td><?= $user['alamat']; ?></td>
                                        </tr>

                                    </table>
                                </div>
                            <?php endforeach; ?>
                        </div>
                </div>
            </div>
            </form>
        </div>



    </div>
</div>
</div>