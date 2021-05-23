<?php 
    session_start();    

    $alınanEPosta= $_POST['eposta'];
    $alınanSifre=  $_POST['sifre'];
    $url=htmlspecialchars($_SERVER['HTTP_REFERER']);
    $giris= 'giris.php';
    $epostalar= array('burakortakuz@gmail.com','deneme@gmail.com');
    $sifreler= array('123456789','1234567890');
	for($i=0;i<count($epostalar);$i++){
        if( $epostalar[$i]== $alınanEPosta){
            if($sifreler[$i]== $alınanSifre){
                echo $_SESSION['eposta']=$alınanEPosta;
                header('Location:'.$giris);
                
            }else{
                header('Location:'.$url);
            }
            
        }
    }
    
?>