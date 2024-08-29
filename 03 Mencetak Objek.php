<?php
class Buah {
  public $nama;
  public $warna;

  public function __construct($nama, $warna){
    $this->nama = $nama;
    $this->warna = $warna;
  }
}

$apel = new Buah("Apel", "Merah");
$Pir = new Buah("Pir", "putih");
print_r($apel);
print "<p>";
print_r($Pir);


print_r("<i><p><strong>By  : Ahmad arjun trisula");