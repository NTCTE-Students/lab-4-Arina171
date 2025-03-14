<?php
function smaxim($numbers) {
    rsort($numbers);
    return $numbers;
}
$numbers=smaxim([8,7,1,6,8,10,58,42,10,5,7]);
print($numbers[1]);

