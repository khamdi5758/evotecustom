<!doctype html>
<html>

<head>
    <title>Menampilkan data dari database MySQL ke grafik dengan PHP dan Chart JS | www.hakkoblogs.com</title>
    <script src="<?= baseurl; ?>/assets2/dist/Chart.bundle.js"></script>
    <script src="<?= baseurl; ?>/assets2/dist/utils.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>
</head>

<body>
    <div id="container" style="width: 75%;">
        <canvas id="canvas"></canvas>
    </div>
    <?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "e-vote";

    $koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_errno()) {
        echo 'Gagal melakukan koneksi ke Database : ' . mysqli_connect_error();
    }

    $alldata = mysqli_query($koneksi, "SELECT * FROM `kandidat` ");
    $alldata2 = mysqli_query($koneksi, "SELECT * FROM `voting` GROUP BY suara_kandidat asc");
    ?>
    <script>
        // var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        var color = Chart.helpers.color;
        var barChartData = {
            // labels: [<?php //while ($row = mysqli_fetch_array($alldata)) {
            //                 echo '"' . $row['nama_kandidat'] . '",';
            //             } ?>],

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
                // data: [
                //     <?php //while ($row = mysqli_fetch_array($alldata2)) {
                //         echo '"' . $row['suara_kandidat'] . '",';
                //     } ?>
                // ]
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
</body>

</html>



<?php
// $data['suarakandidat'] = $this->model('Voting_model')->jumlahsuara($kandidat['id_kandidat']);
// echo "\n";
// foreach ($data['suarakandidat'] as $suara) {
//          echo count($suara['suara_kandidat'].',');
// echo count($data['suarakandidat']);
//         }
// echo $kandidat['nama_kandidat'];
// endforeach;
?>