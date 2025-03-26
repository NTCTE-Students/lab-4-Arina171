<?php
function temper($Cgrad) {
    $Fgrad=$Cgrad*1.8+32;
    return $Fgrad;
}
print("Congratulations! The Test is Now Over. All Aperture Technologies Remain Safety Operational Up to ".temper(3726.85)." Degrees Fahrenheit.");
?>
