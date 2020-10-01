<?php
$angka1=$_GET ['num1'];
$angka2=$_GET ['num2'];
$range=$_GET ['num3'];
$selisih=$angka2-$angka1;

echo $angka1 . "<br>". $angka2;

    for ($i=1 ; $i<=$range; $i++){
        $hasil = $angka1 + ($angka2*($i-1));
        echo "<br>".$hasil;

}

$hasilsuku = $angka1 + ($range-3) * $angka2;
echo "<br> <br> Nilai suku ke- ". $range;
echo "<br>".$hasilsuku;
?>