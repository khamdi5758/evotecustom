<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1>pemilihan</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>

                            <form action="<?= baseurl; ?>/halpemilih/prosesregister" method="POST">
                                <input type="hidden" class="form-control" id="nim" name="nim" placeholder="Enter nim" value="<?= $_SESSION['user_session']; ?>">

                                <input type="hidden" class="form-control" id="status" name="status" placeholder="Enter status" value="0">

                                <button type="submit" class="btn btn-primary">masuk ke pemilihan</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </div>
</div>