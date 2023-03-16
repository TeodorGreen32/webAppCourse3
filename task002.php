<?php
function isEven($num){
   if($num % 2 == 0){
    return "true";
   }else{return "false"; }
}
echo isEven(5);
echo isEven(4);
