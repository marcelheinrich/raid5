<?php

    $palavra = $_POST['palavra'];
    $contPalavra = count($palavra);
    $tamanhoPalavra = (ceil($contPalavra / 2)) * 2;

    //if($contPalavra == ($tamanhoPalavra){
    $arraymetade1 = str_split($str,$tamanhoPalavra);
    $metade1 = $arraymetade1[0];
    $metade2 = $arraymetade1[1];

    $paridade = $metade1 ^ $metade2;

    echo $dado2 ^ $paridade;
    echo $dado1 ^ $paridade;

    header("Location: raid5.php");   
    //}else{
    //    $arraymetade2= str_split($str,$tamanhoPalavra);
   // }


?>


c l a u d i o 