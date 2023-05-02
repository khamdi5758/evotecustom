<?php
// require_once 'Kriptorc4.php';
include_once 'myrc4.php';
class Home extends controller
{
    public function index()
    {
        $plain = "khamdi";
        $key = "190631100106";
        $myrcen = new myrc4();
        $myrcen->setlkstream(8);
        $chip = $myrcen->enkripsi($plain,$key);
        echo "<br> chipper text = " .$chip."<br>";

        // $output = '';
        // for ($i = 0; $i < strlen($plain); $i += 8) {
        //     $block = substr($plain, $i, 8);
        //     // $cipher = $rc4->rc4($block);
        //     $cipher = $myrcen->enkripsi($block,$key);
        //     $output .= $cipher;
        // }


        // echo "<br> chipper text = ".$chip. "<br>";
        // echo "<br>";


        // $chipp = "334b505a59475b50";

        // $myrcdes = new myrc4();
        // $myrcdes->setlkstream(8);
        // $des =  $myrcdes->deskripsi($chipp,$key);
        // echo "deskripsi text = ".$des."<br>";


        
        // echo $myrcen->getlkstream()."<br>";

        // $ks = "153314296";
        // $chhipp = "4050513238343231";

        // $data['kandidat'] = $this->model('Kandidat_model')->getkandidat();
        // $this->view('templates/header_halamandepan');
        // $this->view('home/coba', $data);
        // $this->view('templates/footer_halamandepan');
        //echo "nama saya $nama , angkatan $angkatan";
        // $data['judul'] = 'dashboard';
        // $data['nama'] = $nama;
        // $data['angkatan'] = $angkatan;
        // foreach ($data['kandidat'] as $kandidat) {
        //     $data['suarakandidat'] = $this->model('Voting_model')->jumlahsuara($kandidat['id_kandidat']);
        //     echo "\n";
        //     echo count($data['suarakandidat']).",";
        // }
        //var_dump($data['kandidat']);
        //$this->view('home/coba2', $data);
    }
}
