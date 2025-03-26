<?php
function simple($number) {
    if ($number<2) {
        return false;
    }
    for ($i=2;$i*$i<=$number;$i++) {
        if ($number%$i==0) {
            return false;
        }
    }
    return true;
}
$number = 17;
if (simple($number)) {
    print("{$number} - Простое число");
} else {
    print("{$number} - Не простое число");
}
?>
