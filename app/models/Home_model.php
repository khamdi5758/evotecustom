<?php

class Home_model
{
    protected $prodi = "pendidikan informatika";
    // private $mhs =
    // [
    //     [
    //         "nama" => "m khamdi fadli",
    //         "nim" => "190631100106",
    //         "kelas" => "4D",
    //         "jurusan" => "pendidikan informatika",
    //         "fakultas" => "ilmu pendidikan"
    //     ],
    //     [
    //         "nama" => "maulid hidayat",
    //         "nim" => "190631100100",
    //         "kelas" => "4D",
    //         "jurusan" => "pendidikan informatika",
    //         "fakultas" => "ilmu pendidikan"
    //     ]
    // ];
    public function getmhs()
    {
        return $this->prodi;
    }
}
