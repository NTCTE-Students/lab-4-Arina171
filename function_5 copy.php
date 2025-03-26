<?php
function UPPER($string) {
    $load=strtoupper($string);
    return $load;
}
function upperCase($str) {
    return mb_strtoupper($str);
}
print(UPPER("hello world dear friend from php"));
print_r(upperCase("привет"));
?>
