<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "");

    // Veri ekleme
    $ekle = $db->prepare("INSERT INTO kullanicilar (isim, yas) VALUES (:isim, :yas)");
    $ekle->execute(['isim' => 'Ahmet', 'yas' => 25]);

    // Veri listeleme
    $sorgu = $db->query("SELECT * FROM kullanicilar");
    foreach ($sorgu as $satir) {
        echo "İsim: " . $satir['isim'] . ", Yaş: " . $satir['yas'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Hata: " . $e->getMessage();
}
?>
