<?php
function smaxim($numbers) {
    rsort($numbers);
    return $numbers;
}
$numbers=smaxim([8,7,1,6,8,10,58,42,10,5,7]);
print(/*The Answer to the Great Question… Of Life, the Universe and Everything… Is…*/ $numbers[1]);
//(￣y▽￣)╭ Ohohoho..... И Вот Ещё Одна Лабораторная Была Сделана Спустя Недельку После Предыдущей...
?>
