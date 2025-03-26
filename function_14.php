<?php
function datereverse($date) {
    $date=explode("-", $date);
    return $date[2]."/".$date[1]."/".$date[0];
}
print(datereverse("1999-09-09"));
?>
