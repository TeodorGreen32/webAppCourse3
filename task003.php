<?php
function isEven($num){
    $res = $num%2==0?true:false;
    return $res;
}
$arr = [1,2,3,4,5,6,7,8,9,10,111,112];
$evenArr = [];
foreach($arr as $val){
    if(isEven($val)){
        array_push($evenArr,$val);
    }
}
foreach($evenArr as $key => $val){
    echo $key.") ".$val."<br>";
}