<?php
$isim = "Ahmet";
$yas = 25;
$ortalama = 85.6;

echo "İsim: $isim, Yaş: $yas, Ortalama: $ortalama";
?>

<?php
$globalDegisken = "Bu global bir değişkendir.";

function yazdir() {
    global $globalDegisken;
    echo $globalDegisken;
}

yazdir(); // Çıktı: Bu global bir değişkendir.
?>
<?php
function sayac() {
    static $sayi = 0;
    $sayi++;
    echo $sayi . "<br>";
}

sayac(); // 1
sayac(); // 2
sayac(); // 3
?>

