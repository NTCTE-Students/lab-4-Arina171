<?php
function password($length) {
    $letters='0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*';
    $pass='';
    $Length=strlen($letters);
    // Нейронка помогла понять как сделать выбор случайного знака при помощи random'а (✿◡‿◡)
    for ($i=0;$i<$length;$i++) {
        $pass.=$letters[rand(0 ,$Length-1)];
    }
    return $pass;
}
print(password(8));
?>
