<!-- Header-->
<header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Selamat datang</h1>
        <p class="lead">Mari gunakan hak pilih anda</p>
        <a class="btn btn-lg btn-light" href="<?= baseurl; ?>/auth">klik disini</a>
    </div>
</header>

<section id="suara">
    <div class="container px-4">
        <div class="row gx-12 justify-content-center">
            <div class="col-lg-12">
                <h2>hasil suara sementara </h2>
                <div id="container" style="width: 75%;">
        <canvas id="canvas"></canvas>
    </div>
                <p class="lead"></p>
            </div>
        </div>
    </div>
</section>
<!-- Services section-->
<section class="bg-light" id="kandidat">
    <div class="container px-4">
        <div class="row">
            <?php foreach ($data['kandidat'] as $kandidat) : ?>
                <div class="col-lg-6">
                    <div class="kotakkandidat">
                        <h2 style="color: black;">CALON KETUA UMUM <?= $kandidat['id_kandidat']; ?></h2>
                        <hr class="garis">
                        <img src="<?= baseurl; ?>/images/<?= $kandidat['gambar']; ?>">
                        <h3><?= $kandidat['nama_kandidat']; ?></h3>
                        <p>
                            <b>Visi</b><br>
                            <?= $kandidat['visi']; ?>
                            <br><br>
                            <b>Misi</b><br>
                            <?= $kandidat['misi']; ?>

                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="col-lg-6">
                <div class="kotakkandidat">
                    <h2 style="color: black;">CALON KETUA UMUM 1</h2>
                    <hr class="garis">
                    <img src="nanda.jpg" alt="">
                    <h3>Nanda Afdlolul Basyar</h3>
                    <p>
                        <b>Visi</b><br>
                        Menjadikan mahasiswa prodi pendidikan informatika yang unggul, bermartabat, dan berwibawa, serta menciptakan perauan seluruh elemen PIF
                        <br><br>
                        <b>Misi</b>
                    <ul>
                        <li>Menjadikan HIMAPIF lebih maju</li>
                        <li>Menjadikan mahasiswa PIF sejahtera</li>
                        <li>Menciptakan rasa kekeluargaan pada semua elemen PIF</li>
                        <li>Menciptakan kader yang unggul</li>
                    </ul>
                    </p>
                </div>
            </div> -->

        </div>
    </div>
</section>
<!-- Contact section-->
<!-- <section id="contact">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center">
            <div class="col-lg-8">
                <h2>Contact us</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
            </div>
        </div>
    </div>
</section> -->


<!-- <section class="home" id="home">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center">hai</h1>
            <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorem repudiandae minus. Veritatis nesciunt vitae quod eos perferendis, odio quaerat tempore laudantium expedita. Eveniet adipisci blanditiis vitae ipsum nesciunt explicabo!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorem repudiandae minus. Veritatis nesciunt vitae quod eos perferendis, odio quaerat tempore laudantium expedita. Eveniet adipisci blanditiis vitae ipsum nesciunt explicabo!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorem repudiandae minus. Veritatis nesciunt vitae quod eos perferendis, odio quaerat tempore laudantium expedita. Eveniet adipisci blanditiis vitae ipsum nesciunt explicabo!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum dolorem repudiandae minus. Veritatis nesciunt vitae quod eos perferendis, odio quaerat tempore laudantium expedita. Eveniet adipisci blanditiis vitae ipsum nesciunt explicabo!</p>
        </div>
    </div>
</section> -->


<!-- kandidat -->
<!-- <section class="kandidat" id="kandidat">
    <div class="row">
        <div class="col-md-6">
            <div class="container-calon1">
                <h2 style="color: black;">CALON KETUA UMUM 1</h2>
                <hr class="garis">
                <img src="nanda.jpg" alt="">
                <h3>Nanda Afdlolul Basyar</h3>
                <p>
                    <b>Visi</b><br>
                    Menjadikan mahasiswa prodi pendidikan informatika yang unggul, bermartabat, dan berwibawa, serta menciptakan perauan seluruh elemen PIF
                    <br><br>
                    <b>Misi</b>
                <ul>
                    <li>Menjadikan HIMAPIF lebih maju</li>
                    <li>Menjadikan mahasiswa PIF sejahtera</li>
                    <li>Menciptakan rasa kekeluargaan pada semua elemen PIF</li>
                    <li>Menciptakan kader yang unggul</li>
                </ul>
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="container-calon1">
                <h2 style="color: black;">CALON KETUA UMUM 1</h2>
                <hr class="garis">
                <img src="nanda.jpg" alt="">
                <h3>Nanda Afdlolul Basyar</h3>
                <p>
                    <b>Visi</b><br>
                    Menjadikan mahasiswa prodi pendidikan informatika yang unggul, bermartabat, dan berwibawa, serta menciptakan perauan seluruh elemen PIF
                    <br><br>
                    <b>Misi</b>
                <ul>
                    <li>Menjadikan HIMAPIF lebih maju</li>
                    <li>Menjadikan mahasiswa PIF sejahtera</li>
                    <li>Menciptakan rasa kekeluargaan pada semua elemen PIF</li>
                    <li>Menciptakan kader yang unggul</li>
                </ul>
                </p>
            </div>
        </div>

    </div>



</section> -->

<script>
        var color = Chart.helpers.color;
        var barChartData = {
            labels: [<?php foreach ($data['kandidat'] as $kandidat) {
                            echo '"' . $kandidat['nama_kandidat'] . '",';
                        } ?>],
            datasets: [{
                label: 'suara',
                backgroundColor: [
                    color(window.chartColors.red).alpha(0.5).rgbString(),
                    color(window.chartColors.blue).alpha(0.5).rgbString(),
                    color(window.chartColors.yellow).alpha(0.5).rgbString(),
                    color(window.chartColors.blue).alpha(0.5).rgbString(),
                    color(window.chartColors.default).alpha(0.5).rgbString()
                ],
                borderColor: [
                    window.chartColors.red,
                    window.chartColors.blue,
                    window.chartColors.yellow,
                    window.chartColors.blue,
                    window.chartColors.default
                ],

                borderWidth: 3,
                data: [

                    <?php foreach ($data['kandidat'] as $kandat) {
                        $data['suarakandidat'] = $this->model('Voting_model')->jumlahsuara($kandat['id_kandidat']);
                        echo count($data['suarakandidat']).",";
                    } ?>
                ]
            }]

        };

        window.onload = function() {
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'perolehan hasil suara '
                    }
                }
            });

        };
    </script>
