<?php
session_start();
if($_SESSION['updateWindow']){
    $i = $_SESSION['updateWindow'];
    
}
else{
    $i = 0;
    echo "Вы еще не заходили на эту страницу!";
}
$i++;
$_SESSION['updateWindow'] = $i;
echo $_SESSION['updateWindow'];


