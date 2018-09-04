<?php

// ===============================================
// make OOP Class, Object, Property and Method   
// ===============================================

// contoh kelasnya adalah manusia
class manusia {

    // propertynya
    var $nama;
    var $kesibukan;
    var $alamat;

    // method manusia
    function nama(){
        return "Nama saya adalah Sigit wasis subekti <br/>";
    }

    function kesibukan(){
        return "Kesibukan saya setiap hari adalah ngoding <br/>";
    }

    function alamat(){
        return "Alamat saya Sekarang adalah Lampung Barat";
    }

}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method nama dari class manusia 
echo $manusia->nama();

// memanggil method kesibukan dari class manusia
echo $manusia->kesibukan();

// memanggil method alamat dari class manusia
echo $manusia->alamat();

