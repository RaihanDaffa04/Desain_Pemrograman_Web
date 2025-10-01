<?php
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", <br/>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana","Hallo");

echo "<hr>";

$saya = "Daffa";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);

perkenalan($saya);
?>
