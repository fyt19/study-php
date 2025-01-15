<?php
// DEĞİŞKENLER
$isim = "Ahmet"; // Normal değişken
$yas = 25;

// Global değişken örneği
function testGlobal() {
    global $isim; // Global değişkene erişim
    echo $isim;
}

// Static değişken örneği
function sayac() {
    static $sayac = 0; // Static değişken
    $sayac++;
    echo $sayac;
}

// KOŞULLAR
// if-else örneği
$not = 75;
if ($not >= 90) {
    echo "AA";
} elseif ($not >= 80) {
    echo "BA";
} else {
    echo "BB";
}

// switch-case örneği
$gun = "Pazartesi";
switch ($gun) {
    case "Pazartesi":
        echo "Haftanın ilk günü";
        break;
    case "Cuma":
        echo "Haftanın son iş günü";
        break;
    default:
        echo "Diğer günler";
}

// DÖNGÜLER
// for döngüsü
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// while döngüsü
$j = 0;
while ($j < 5) {
    echo $j;
    $j++;
}

// foreach döngüsü
$renkler = ["kırmızı", "mavi", "yeşil"];
foreach ($renkler as $renk) {
    echo $renk;
}

// FONKSİYONLAR
// Değer almayan fonksiyon
function selamla() {
    echo "Merhaba!";
}

// Değer alan fonksiyon
function topla($sayi1, $sayi2) {
    return $sayi1 + $sayi2;
}

// DİZİLER
$meyveler = ["elma", "armut", "muz"];
array_push($meyveler, "çilek"); // Diziye eleman ekleme
$meyveler[] = "portakal"; // Alternatif ekleme yöntemi

// Associative array (İlişkisel dizi)
$ogrenci = [
    "ad" => "Mehmet",
    "soyad" => "Yılmaz",
    "yas" => 20
];

// HAZIR FONKSİYONLAR
echo gettype($isim); // Değişken tipini gösterir
echo rand(1, 100); // 1-100 arası rastgele sayı
var_dump($meyveler); // Değişken içeriğini detaylı gösterir
echo strlen("Merhaba"); // String uzunluğunu gösterir

// CONST VE DEFINE
const PI = 3.14;
define("SITE_URL", "www.example.com");

// PDO İLE VERİTABANI BAĞLANTISI
try {
    $db = new PDO(
        "mysql:host=localhost;dbname=test;charset=utf8",
        "kullanici_adi",
        "sifre"
    );
    
    // Örnek sorgu
    $sorgu = $db->prepare("SELECT * FROM kullanicilar WHERE id = ?");
    $sorgu->execute([1]);
    $kullanici = $sorgu->fetch(PDO::FETCH_ASSOC);
    
    // Örnek ekleme sorgusu
    $ekle = $db->prepare("INSERT INTO kullanicilar (ad, soyad) VALUES (?, ?)");
    $ekle->execute(["Ali", "Veli"]);
    
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}
