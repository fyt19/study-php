<?php
$sayi = 10;

if ($sayi > 0) {
    echo "Sayı pozitiftir.";
} elseif ($sayi == 0) {
    echo "Sayı sıfırdır.";
} else {
    echo "Sayı negatiftir.";
}
?>

<?php
$gun = 3;

switch ($gun) {
    case 1:
        echo "Pazartesi";
        break;
    case 2:
        echo "Salı";
        break;
    case 3:
        echo "Çarşamba";
        break;
    default:
        echo "Geçersiz gün!";
}
?>
