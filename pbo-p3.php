<?php

namespace App\math;

class Luaslingkaran 
{
    public const phi = 3.14;
    public int $jari;

    public function __construct($isijari = 1)

    {
        $this->jari = $isijari;
    }

    public function tampilLl($nama = 'ban')  
    {
        $rumus = Luaslingkaran ::phi * ($this->jari * $this->jari);
        echo "Lingkaran" . ($nama) . " ini hasil luarnya adalah : " . $rumus . "<br/>";
    }

    public static function testing()
    {
        echo "</br>";
        echo "Ini testing static<br>";
    }
    public function __destruct()
    {
        echo "udah capek luas<br>";
    }
    // {
    //     echo "ini testing static";
    // }
}



class Kelilinglingkaran
{
    
    public const phi = 3.14;
    public int $jari;
    public function __construct($isijari = 1)

    {
        $this->jari = $isijari;
    }

    public function tampilKl($nama = 'ban')
    {
        $rumus = 2 * Kelilinglingkaran ::phi * $this->jari;
        echo "Lingkaran" . ($nama) . " hasil Kelilingnya adalah : " . $rumus2 . "<br>";
    }

    public static function testing()
    {
        echo "</br>";
        echo "ini testing static keliling <br>";
    }

    public function __destruct()
    {
        echo "udah capek keliling<br>";
    }
    // __construct()
    // echo "ini dari constructor";
    // echo "<br/>";
}

$lingkaran = new Luaslingkaran();
$lingkaran->jari = 10;
$lingkaran->tampilLl("ban");

$lingkaran2 = new Kelilinglingkaran();
$lingkaran2->jari = 10;
$lingkaran2->tampilKl("ban");

Luaslingkaran::testing();
Kelilinglingkaran::testing();
?>