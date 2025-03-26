<?php
function factor($number) {
    $result=1;
    for ($i=2;$i<=$number;$i++) {
        $result*=$i;
    }
    return $result;
}
$factik=factor(5);
print ("Факториал 5: {$factik}");
?>
