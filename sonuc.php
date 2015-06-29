<?php
    $girilen_sonuc = $_POST['sonuc'];
    
    session_start();
    
    if($_SESSION['toplama'] != $girilen_sonuc)
        $_SESSION['bilgi'] = "Hata";
    else
        $_SESSION['bilgi'] = "Doğru";
    
        header("Location: toplama.php");
    exit;
?>
