<?php

namespace App\math;

class Luaslingkaran 
{
    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari; //10
    }

    public function tampilLl($nama = 'ban')  {
        $rumus = Luaslingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran " . $nama . " ini hasil luarnya adalah : " . $rumus;
    }

    public static function testing() {
        echo "</br>";
        echo "Ini testing static<br>";
    }

    public function __destruct() {
        echo "<br/>";
        echo "udah ah cape";
    }
}
    ?>