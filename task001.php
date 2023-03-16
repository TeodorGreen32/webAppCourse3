<?php
function isNumberInRange($num){
    if($num > 0 && $num < 10){
        return true;
    }else{return false;}
}
echo isNumberInRange(5);
echo isNumberInRange(11);
echo isNumberInRange(-5);