<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * $this->jari_jari ** 2;
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function __construct($jari_jari)
    {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4 / 3) * self::PHI * $this->jari_jari ** 3;
    }

    public function luas_permukaan() : float {
        return 4 * self::PHI * $this->jari_jari ** 2;
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari, $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * $this->jari_jari ** 2 * $this->tinggi;
    }

    public function luas_permukaan() : float {
        return 2 * self::PHI * $this->jari_jari * ($this->jari_jari + $this->tinggi);
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari, $tinggi;

    public function __construct($jari_jari, $tinggi)
    {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1 / 3) * self::PHI * $this->jari_jari ** 2 * $this->tinggi;
    }

    public function luas_permukaan() : float {
        $sisi_miring = sqrt($this->jari_jari ** 2 + $this->tinggi ** 2);
        return self::PHI * $this->jari_jari * ($sisi_miring + $this->jari_jari);
    }
}

$lingkaran = new Lingkaran(7);
echo "Luas Lingkaran: " . $lingkaran->luas() . "\n";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . "\n";

$bola = new Bola(7);
echo "Volume Bola: " . $bola->volume() . "\n";
echo "Luas Permukaan Bola: " . $bola->luas_permukaan() . "\n";

$tabung = new Tabung(7, 10);
echo "Volume Tabung: " . $tabung->volume() . "\n";
echo "Luas Permukaan Tabung: " . $tabung->luas_permukaan() . "\n";

$kerucut = new Kerucut(7, 10);
echo "Volume Kerucut: " . $kerucut->volume() . "\n";
echo "Luas Permukaan Kerucut: " . $kerucut->luas_permukaan() . "\n";

?>