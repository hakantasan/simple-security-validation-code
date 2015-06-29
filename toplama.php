<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <title>Ders Örnekleri</title>

        <!-- Tasarım Kodları Başlangıç -->
        <style>
            #form
            {
                padding: 10px;
                width: 350px;
                border: 1px solid black
            }  
            label
            {          
                float: left;
                width: 150px
            }
            #toplama
            {
                width:40px;
                text-align:center;
            }
        </style>
        <!-- Tasarım Kodları Bitiş -->

    </head>
    <body>
        <div id="form">
            <form action="sonuc.php" method="post">
                <label>Adı:</label> 
                <input type="text" name="ad">
                <br><br>
                <label>Soyadı:</label> 
                <input type="text" name="soyad">
                <br><br>
                <label>Güvenlik Sorusu:</label>
                <?php    
                    $toplam1 = mt_rand(1,9);
                    $toplam2 = mt_rand(1,9);

                    session_start();

                    $toplam_sayi = $toplam1+$toplam2;

                    $_SESSION['toplama'] = $toplam_sayi;
                ?>
                <input id="toplama" type="text" name="toplam1" readonly placeholder="<?php echo $toplam1; ?>"> + 
                <input id="toplama" type="text" name="toplam2" readonly placeholder="<?php echo $toplam2; ?>"> = 
                <input id="toplama" type="text" name="sonuc" autocomplete="off" placeholder="?">
                <br><br>
                <button type="submit" id="gonder">Gönder</button>
                <br><br>
                <div class="mesaj">
                    <?php
                        if(isset($_SESSION['bilgi']) && $_SESSION['bilgi'] == "Hata")
			{
                            echo "Güvenlik sorusunu hatalı girdiniz.";
			    unset($_SESSION['bilgi']);
			}
                        else if(isset($_SESSION['bilgi']) && $_SESSION['bilgi'] == "Doğru")
			{
                            echo "Tebrikler, kaydınız tamamlandı.";
			    unset($_SESSION['bilgi']);
			}
                    ?>
                </div>
            </form>
        </div>
    </body>
</html>
