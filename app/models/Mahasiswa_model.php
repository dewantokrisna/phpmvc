<?php

class Mahasiswa_model
{
    // private $mhs = [
    //     [
    //         "nama" => "Dietrich",
    //         "nrp" => "0",
    //         "email" => "dewanto.krisna@gmail.com",
    //         "jabatan" => "CEO"
    //     ],
    //     [
    //         "nama" => "Siegfried",
    //         "nrp" => "1",
    //         "email" => "siegfried@gmail.com",
    //         "jabatan" => "CTO"
    //     ],
    //     [
    //         "nama" => "Dewanto Krisna",
    //         "nrp" => "2",
    //         "email" => "dietrich@gmail.com",
    //         "jabatan" => "Founder"
    //     ]
    // ];



    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
