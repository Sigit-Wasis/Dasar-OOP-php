<?php

// ======================================
// Membuat method Construct dan Destruct
// ======================================
// Construct adalah method yang pertama dijalankan pada class
// Destruct adalah method yang terakhir dijalankan setelah semua method berjalan

class manusia {

    // property
    var $nama;
    var $hobi;
    var $keahlian;

    // method construct 
    function __construct(){
        echo "<b/>Ini method construct<br/>";
    }

    // method hobi
    function hobi(){
        echo "Hobi saya selama ini adalah ngoding dan tenis meja<br/>";
    }

    // method destruct
    function __destruct() {
        echo "<b/>Ini method destruct";
    }

}

// instansiasi class manusia
$manusia = new manusia();

// memanggil method hobi
$manusia->hobi();

?>