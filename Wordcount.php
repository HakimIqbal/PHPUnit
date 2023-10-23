<?php
// File : Wordcount.php
class Wordcount
{
    // Membuat fungsi metode untuk menghitung jumlah kata dalam kalimat
    public function countWords($sentence)
    {
        // Sebagai pemisah String lalu merubahnya menjadi array 
        // Kemudian mengembalikannya sebagai hasil fungsi
        return count(explode(" ",$sentence));
    }
}
?>
