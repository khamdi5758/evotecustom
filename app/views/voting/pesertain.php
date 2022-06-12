<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        peserta voting masuk
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>id voting</th>
                                        <th>nim</th>
                                        <th>status vote</th>
                                        <th>aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($data['voting'] as $voting) : ?>
                                        <tr class="odd gradeX">
                                            <td><?= $i++; ?></td>
                                            <td><?= $voting['nim']; ?></td>
                                            <td>
                                                <?php
                                                if ($voting['status_vote'] == 0) {
                                                    echo 'pending';
                                                } else if ($voting['status_vote'] == 1) {
                                                    echo 'diijinkan';
                                                }
                                                ?>
                                            </td>
                                            <td><a href="<?= baseurl; ?>/voting/updatestatus/<?= $voting['nim']; ?>" class="btn btn-danger" style="margin-bottom: 20px;" onclick="return confirm('yakin')">ijinkan</a></td>
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
    </div>
</div>