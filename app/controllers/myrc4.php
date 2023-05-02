<?php
class myrc4{
    public static $state;
    private static $lks;

    public function __construct() {
        self::sbox();
    }

    // inisialisasi sbox
    public static function sbox()
    {
        self::$state = array();
        for ($i=0; $i < 256; $i++) { 
            self::$state[$i] = $i;
        }
        return self::$state;
    }

    //menyimpan kunci ke bentuk array
    public static function menk($key)
    {
        $keybyte[] = strlen($key);
        $n   = strlen($key);
        $keyar = [];
        for ($a=0; $a < 256; $a++) { 
            $keyar[$a]=ord($key[$a % $n]);
        }
        return $keyar;
    }
    
    //permutasi nilai s box
    public static function mtsnsbox($keyq)
    {
        $kunci = self::menk($keyq);
        $j = 0;
        for ($i=0; $i < 256 ; $i++) { 
            $j = ($j+self::$state[$i]+$kunci[$i]) % 256; 
            $temp = self::$state[$i];
            self::$state[$i] = self::$state[$j];
            self::$state[$j] = $temp;
        }
        return self::$state;
    }
    
    //membangkitkan pseudorandom (keystream)
    public static function psdrndm($keyqq,$kalimat)
    {
        self::mtsnsbox($keyqq);
        $kstrm[] = strlen($keyqq);
        $strkstrm = '';
        $binkstrm[] = strlen($keyqq);
        
        $i = $j = 0;
        for ($c=0; $c < strlen($kalimat); $c++) { 
            $i = ($i+1)%256;
            $j = ($j+self::$state[$i])%256;
            $temp = self::$state[$i];
            self::$state[$i] = self::$state[$j];
            self::$state[$j] = $temp;
            $t = (self::$state[$i]+self::$state[$j])%256;
            $strkstrm = $strkstrm . self::$state[$t];
            $kstrm[] = self::$state[$t]; //keystream
        }
        return $strkstrm;
    }
    // $strkstrm = $state[$t];
    // if (strlen($state[$t]) % 2 != 0) {
        //     $state[$t] = str_pad($state[$t], strlen($state[$t]) + 1, "0", STR_PAD_LEFT);;
        // }
        // $binkstrm[] = hex2bin($state[$t]);
        // var_dump($kstrm);
        // echo($strkstrm);
        
    public static function enkripsi($plain,$key)
    {
        $ak =  self::psdrndm($key,$plain);
        $dk = '';
        for ($i=0; $i < self::getlkstream() ; $i++) { 
            $dk = $dk . $ak[$i];
        }
        $value = unpack('H*',$plain);
        $biner = base_convert($value[1],16,2);
        var_dump($dk);
        $value1 = unpack ('H*',$dk);
        $biner1 = base_convert($value1[1],16,2);
        
        if (strlen($biner) > strlen($biner1)) {
            $len = strlen($biner) - strlen($biner1);
            $biner1 = str_repeat("0", $len) . $biner1;
        } elseif (strlen($biner) < strlen($biner1)) {
            $len = strlen($biner1) - strlen($biner);
            $biner = str_repeat("0", $len) . $biner;
        }
        
        
        $hasil_xor = bindec($biner) ^ bindec($biner1);
        $hasil_biner = decbin($hasil_xor);
        $chiphex = base_convert($hasil_biner, 2, 16);
        return $chiphex;
    }
    // var_dump(self::$state);
    // self::setlkstream(strlen($ak));
    // echo $i;
    // echo $ak;
    // echo "<br>";
    // var_dump($value);
    // echo $biner; 
    // echo "<br>";
    // var_dump($value1[1]);
    // echo "<br>";
    // echo $biner1;
    // echo "<br>";
    // echo "Biner0: " . $biner . "<br>";
    // echo "Biner1: " . $biner1."<br>";
    // echo "Biner2: ".$hasil_biner."<br>";  
    
    public function deskripsi($chip,$key)
    {
        $ak =  self::psdrndm($key,$chip);
        $dk = '';
        for ($i=0; $i < self::getlkstream() ; $i++) { 
            $dk = $dk . $ak[$i];
        }
        $biner = base_convert($chip,16,2);
        var_dump($dk);
        $value1 = unpack ('H*',$dk);
        $biner1 = base_convert($value1[1],16,2);
        
        if (strlen($biner) > strlen($biner1)) {
            $len = strlen($biner) - strlen($biner1);
            $biner1 = str_repeat("0", $len) . $biner1;
        } elseif (strlen($biner) < strlen($biner1)) {
            $len = strlen($biner1) - strlen($biner);
            $biner = str_repeat("0", $len) . $biner;
        }
        $hasil_xor = bindec($biner) ^ bindec($biner1);
        $hasil_biner = decbin($hasil_xor);
        $deshex = base_convert($hasil_biner, 2, 16);
        
        return pack("H*", $deshex);
    }
    // echo self::$lks;
    // $chi = pack("H*", $chip);
    // echo $chi;
    // echo $i;
    // echo "<br>";
    // var_dump($ak);
    // var_dump($value);
    // echo $biner; 
    // echo "<br>";
    // var_dump($value1);
    // echo "<br>";
    // echo $biner1;
    // echo "<br>";
    
    // echo "Biner0: " . $biner . "<br>";
    // echo "Biner1: " . $biner1."<br>";
    
    // echo "Biner2: ".$hasil_biner."<br>";
    // echo $deshex."<br>";
    
    // $hasil = self::enkripsi($chip,$key);
    // return $hasil;
    
    public static function setlkstream($setlks)
    {
        return self::$lks = $setlks;
    }

    public static function getlkstream()
    {
        return self::$lks;
    }
}