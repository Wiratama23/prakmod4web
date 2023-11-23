<?php

namespace Calculator;

trait ProsesHitung
{
    public function penjumlahan($a, $b)
    {
        return "Penjumlahan $a + $b: ".($a + $b);
    }

    public function pengurangan($a, $b)
    {
        return "Pengurangan $a - $b: ".($a - $b);
    }

    public function perkalian($a, $b)
    {
        return "Perkalian $a x $b: ".($a * $b);
    }

    public function pembagian($a, $b)
    {
        if ($b == 0) {
            return "Error: Pembagian 0 dapat menimbulkan pengulanan infinity";
        }
        return "Pembagian $a / $b: ".($a / $b);
    }

    public function modulus($a, $b)
    {
        return "Modulus $a % $b: ".($a % $b);
    }
}

abstract class Calculator
{
    abstract public function hitung($pilih);
    abstract public function displayAll();
}

class Kalkulator extends Calculator
{
    use ProsesHitung;

    private $angka1;
    private $angka2;

    public function __construct($angka1, $angka2) {
        $this->angka1 = $angka1;
        $this->angka2 = $angka2;
    }

    public function displayAll()
    {
        $display = [
            $this->penjumlahan($this->angka1, $this->angka2),
            $this->pengurangan($this->angka1, $this->angka2),
            $this->perkalian($this->angka1, $this->angka2),
            $this->pembagian($this->angka1, $this->angka2),
            $this->modulus($this->angka1, $this->angka2)
        ];

        echo "Display All\n";
        foreach($display as $n)
        {
            echo "$n \n";
        }
    }

    public function hitung($pilih)
    {
        switch($pilih){
            case 1:
                return $this->penjumlahan($this->angka1,$this->angka2);
                break;
            case 2:
                return $this->pengurangan($this->angka1,$this->angka2);
                break;
            case 3:
                return $this->perkalian($this->angka1,$this->angka2);
                break;
            case 4:
                return $this->pembagian($this->angka1,$this->angka2);
                break;
            case 5:
                return $this->modulus($this->angka1,$this->angka2);
                break;
        }
    }
    public function __toString() {
        return "
        Hitung:
        1.Penjumlahan
        2.Pengurangan
        3.Perkalian
        4.Pembagian
        5.Modulus\n\n
        Pilih: ";
    }
}


//input-inputnya
echo "Masukkan angka pertama: ";
$angka1 = trim(fgets(STDIN));

echo "Masukkan angka kedua: ";
$angka2 = trim(fgets(STDIN));

$kalkulator = new Kalkulator($angka1, $angka2);

echo $kalkulator;
$pilih = trim(fgets(STDIN));

$hasil = $kalkulator -> hitung($pilih);

echo "\n$hasil\n\n";

$kalkulator->displayAll();
