<?php
function palin($str) {
    $reversed=mb_strrev($str); 
    if ($str==$reversed) {
        return $str.' - Палиндром';
    } else {
        return $str.' - Не палиндром';
    }
}
// Честно, нейронка помогла мне, так как mb_strrev не работал иначе без следующего фрагмента... ¬_¬
function mb_strrev($str) {
    return implode('', array_reverse(mb_str_split($str)));
}
echo palin("шалаш");
?>
