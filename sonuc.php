<?php
    $girilen_sonuc = $_POST['sonuc'];

    session_start();

    if($_SESSION['toplama'] != $girilen_sonuc)
    {
        $_SESSION['giris'] = "yanlış";
        header("Location: toplama.php");
        exit;
    }
    else
    {
        $_SESSION['giris'] = "doğru";
        header("Location: toplama.php");
        exit;
    }
?>
