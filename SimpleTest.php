<?php
// Deklarasi penggunaan kelas TestCase yang disediakan oleh kerangka pengujian PHPUnit. TestCase sendiri sebagai kelas dasar untuk membuat tes.
use PHPUnit\Framework\TestCase;

// Sebagai class yang akan di test 
require_once "Wordcount.php"; 

// Class untuk run testing
class SimpleTest extends TestCase {

    // Melakukan deklarasi fungsi yang dimana memiliki kata awalan "test", sehingga dianggap sebagai metode..
    public function testCountWords()
    {
        // Menyimpan Instace pada Variabel
        $Wc =  new Wordcount();
        
        // Sebuah deklarasi variabel yang berisi kalimat yang akan diuji oleh metode countWords.
        $TestSentence = "My name is Iqbal"; //4 Kata

        // Penggunaan objek untuk pemanggilan metode
        $Wordcount = $Wc->countWords($TestSentence);

        // Sebagai pernyataan. Jika nilai tidak sama dengan 4, maka pengujian gagal
        $this->assertEquals(4, $Wordcount);
    }

}
?>