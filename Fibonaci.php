<?php
$angka1=$_GET ['num1'];
$angka2=$_GET ['num2'];
$range=$_GET ['num3']-3;

echo $angka1 . "<br>". $angka2;
for ($i=0; $i<=($range); $i++){
    $hasil = $angka1 + $angka2;
    echo "<br>" . $hasil;

    $angka1=$angka2;
    $angka2=$hasil;
    
}
