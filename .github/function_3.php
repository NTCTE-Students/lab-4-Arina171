<?php
function words($word) {
    $word=explode(" ", $word);
    return count($word);
}
echo words("Пришла новая книга");
?>
