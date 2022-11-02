<?php
    $one = $_POST["o"];
    $two = $_POST["t"];
    $three = $_POST["thr"];
    $four = $_POST["f"];
    $five = $_POST["fi"];
    $six = $_POST["s"];
    $seven = $_POST["se"];
    $eight = $_POST["e"];
    $nine = $_POST["n"];
    $ten = $_POST["t"];
    $eleven = $_POST["el"];
    $twelve = $_POST["tw"];
    $thirty = $_POST["th"];
    $fourty = $_POST["fo"];
    $fifty = $_POST["fif"];
    $code = $one . $two . $three . $four . $five . $six . $seven . $eight . $nine . $ten . $eleven . $twelve . $thirty . $fourty . $fifty;
    
    $comment = $_POST["comment"];

    if($comment==""){
        echo "Заполните все поля";
    } 
    else {
        echo "Принято!" . "Ваш код: " . $code;
    }
?>