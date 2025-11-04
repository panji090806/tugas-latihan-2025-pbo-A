<?php

class LuasLingkaran {
    
    public const PHI = 3.14;
    public int $jariJari;
}

$lingkaran = new LuasLingkaran();
$lingkaran->jariJari = 10;

#echo LuasLingkaran::PHP#

$rumus = LuasLingkaran::PHI * $lingkaran->jariJari * $lingkaran->jariJari;
echo "hasilnya adalah $rumus";