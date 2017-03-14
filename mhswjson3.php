<?php
$json_data=file_get_contents("datamhsw.json");
$obj = json_decode($json_data);
echo "Nim : "; echo $obj->nim;
echo "<br>";
echo "Nama : "; echo $obj->nama;
echo "<br>";
echo "No_HP : "; echo $obj->No_HP;
echo "<br>";
echo "Matakuliah pertama: ";echo $obj->mata_kuliah[0];
echo "<br>";
echo "Matakuliah kedua: ";echo $obj->mata_kuliah[1];
echo "<br>";
echo "Matakuliah ketiga: ";echo $obj->mata_kuliah[2];
?>