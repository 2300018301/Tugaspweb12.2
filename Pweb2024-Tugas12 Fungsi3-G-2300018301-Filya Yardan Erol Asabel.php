<?php

function luas_lingkaran($jari){
    return 3.14*$jari*$jari;
}

$r=10;
echo "Luas Lingkaran dengan jari-jari $r = ";
echo luas_lingkaran($r);
?>