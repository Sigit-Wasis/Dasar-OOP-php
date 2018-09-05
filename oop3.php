<?php

// ================================
// Enkapsulasi hak akses public
// ================================

// class Manusia
class Manusia {
    //property
    public $nama;
    public $warna;

    //method manusia
    function nama(){
        return "Nama saya Sigit wasis S.TI <br/>";
    }
}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method nama dari class manusia 
echo $manusia->nama();

// ================================
// Enkapsulasi hak akses private
// ================================

// class Manusia
class Manusia {
    //property
    private $nama;

    //method manusia
    public function nama(){
        return "Nama saya Sigit wasis S.TI <br/>";
    }
}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method nama dari class manusia 
echo $manusia->nama();

// ================================
// Enkapsulasi hak akses protected
// ================================

// class Manusia
class Manusia {
    //property
    protected $nama;

    //method manusia
    protected function nama(){
        return "Nama saya Sigit wasis S.TI <br/>";
    }
}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method nama dari class manusia 
echo $manusia->nama();

?>