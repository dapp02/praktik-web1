<?php
 // contoh fungsi
 function writeMsg($nama) {
     echo "selamat datang".$nama."<br>";
 }
 writeMsg("Ahmad"); // pemanggilan fungsi
 
 // fungsi dengan mengirim nilai baik
 function tambah(int $angka1, int $angka2) {
     $a = $angka1 + $angka2;
     return $a;
 }
 $hasil = tambah(5,5);
 echo ($hasil);
 ?>