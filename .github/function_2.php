<?php
function palin($str) {
    $reversed=mb_strrev($str); 
    if ($str==$reversed) {
        return $str.' - Палиндром';
    } else {
        return $str.' - Не палиндром';
    }
}
function mb_strrev($str) {
    return implode('', array_reverse(mb_str_split($str)));
}
echo palin("шалаш");
?>
