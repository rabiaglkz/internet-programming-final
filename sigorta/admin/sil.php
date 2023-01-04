<?php
$conn = new PDO("mysql:host=localhost;dbname=sigorta;charset=utf8", "root", "");

if($_GET['id']) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `iletisim` WHERE `id` = '$id'";
    $sorgu = $conn->query($sql);
    if($sorgu) {
        echo "Kullanıcı başarıyla silindi.";
        header("Location: index.php");
    } else {
        echo "Kullanıcı silinemedi.";
    }
} else {
    echo "Kullanıcı silinemedi.";
}


?>