<?php
function sumir($number) {
    $sum=str_split($number);
    return array_sum($sum);
}
print(sumir("358"));
?>
