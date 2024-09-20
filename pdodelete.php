<?php

try {

    $baglanti = new PDO("mysql:host=localhost;dbname=veritabaniadi", "root", "");
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $record_row = $baglanti->exec("DELETE FROM tabloadi WHERE id = 9");// sadece  9 nolu silinecektir.

    if ($record_row > 0) {
        echo $record_row . " kayıt silindi. -  record deleted";
    } else {
        echo "Herhangi bir kayıt silinemedi.- Could not delete any record";
    }

} catch (PDOException $e) {
    die($e->getMessage());
}

$baglanti = null;

?>