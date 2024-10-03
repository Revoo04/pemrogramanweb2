<?php

class Orang{
    protected $nama;

    //constructor
    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    //mentod
    public function ucapSalam(){
        echo "Hallo nama saya " . $this->nama;
    }
}