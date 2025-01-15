<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Sayı: $i<br>";
}
?>

<?php
$sayi = 1;

while ($sayi <= 5) {
    echo "Sayı: $sayi<br>";
    $sayi++;
}
?>

<?php
$dizi = ["Ahmet", "Mehmet", "Ayşe"];

foreach ($dizi as $isim) {
    echo "İsim: $isim<br>";
}
?>
