<?php
class Kriptorc4 {
    function setupkeyen($kce){
        // echo "kunci enkripsi = $kce";
        for ($i=0; $i<strlen($kce) ; $i++) { 
            $key[$i] = ord($kce[$i]);
        }
        global $m;
        $m = array();

        //untuk encrypt
        for ($i=0; $i < 256; $i++) { 
            $m[$i] = $i;
        }

        $j = $k = 0;
        for ($i=0; $i < 256; $i++) { 
            $a = $m[$i];
            $j = ($j + $m[$i]+$key[$k])%256;
            $m[$i] = $m[$j];
            $m[$j] = $a;
            $k++;
            if ($k>15) {
                $k = 0;
            }
        }
    }

    function crypt2($inp)
    {
        global $m;
        $x=0 ; 
        $y=0;
        $bb = '';
        $x = ($x+1)%256;
        $a = $m[$x];
        $y = ($y + $a) %256;
        $m[$x]=$b = $m[$y];
        $m[$y] = $a;
        $bb = ($inp^$m[($a + $b)%256])%256;
        return $bb;
    }

    function enkripsi($kalimat,$key)
    {     
        $blockSize = 16;
        $padChar = $blockSize - (strlen($key) % $blockSize);
        $key = $key . str_repeat(chr($padChar), $padChar);
        $this->setupkeyen($key);
        for ($i=0; $i < strlen($kalimat) ; $i++) { 
            $kode[$i]=ord($kalimat[$i]);
            $b[$i] = $this->crypt2($kode[$i]);
            $c[$i] = chr($b[$i]);
        }
        // echo "kalimat asli : ";
        for ($i=0; $i < strlen($kalimat) ; $i++) {
            // echo $kalimat[$i];
        }
        // echo "<br>";
        // echo "hasil enkripsi = ";
        $hslen = '';
        for ($i=0; $i < strlen($kalimat) ; $i++) {
            // echo $c[$i];
            $hslen = $hslen . $c[$i];
        }
        return $hslen;

    }

    function setupkeydes($kcd){
        for ($i=0; $i < strlen($kcd) ; $i++) { 
            $key[$i] = ord($kcd[$i]);
         } 
        global $mm;
        $mm = array();
        for ($i=0; $i < 256; $i++) 
            $mm[$i] = $i;

        $j = $k = 0;
        for ($i=0; $i < 256; $i++) { 
            $a = $mm[$i];
            $j = ($j + $a + $key[$k])%256;
            $mm[$i] = $mm[$j];
            $mm[$j] = $a;
            $k++;
            if ($k>15) {
                $k = 0;
            }

        }
        
    }

    function decrypt2($inp)
    {
        global $mm;
        $xx=0;
        $yy=0;
        $bb='';
        $xx = ($xx+1) % 256;
        $a = $mm[$xx];
        $yy = ($yy + $a) %256;
        $mm[$xx] = $b = $mm[$yy];
        $mm[$yy] = $a;

        $bb = ($inp^$mm[($a + $b) % 256]) % 256;
        return $bb;
    }

    function deskripsi($enkripsi,$key)
    {
        $blockSize = 16;
        $padChar = $blockSize - (strlen($key) % $blockSize);
        $key = $key . str_repeat(chr($padChar), $padChar);
        $this->setupkeydes($key);
        $isi = $enkripsi;
        // echo "Chiper text : $isi"."<br>";
        for ($i=0; $i < strlen($isi) ; $i++) { 
            $b[$i] = ord($isi[$i]);
            $d[$i] = $this->decrypt2($b[$i]);
            $s[$i] = chr($d[$i]);
        }
        // echo "hasil deskripsi : ";
        $hsldes = '';
        for ($i=0; $i < strlen($isi) ; $i++) { 
            $hsldes = $hsldes . $s[$i];
            // echo $s[$i];
        }
        return $hsldes;
    }

}


// $kalim = "nama saya m khamdi fadli";
// $kkalim = "190631100106";
// $cobrc4 = new Kriptorc4();
// $hasenrc4 = $cobrc4->enkripsi($kalim,$kkalim);
// echo $hasenrc4;

// echo "<br>";
// echo "<br>";

// $cobrc4des = new Kriptorc4();
// echo $cobrc4des->deskripsi($hasenrc4,$kkalim);