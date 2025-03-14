<?php
function maxim($numbers) {
    sort($numbers);
    return $numbers;
}
$numbers=maxim([8,7,1,6,8,10,58,42,10,5,7]);
foreach ($numbers as $number) {
    print("{$number}, ");
}
?>
