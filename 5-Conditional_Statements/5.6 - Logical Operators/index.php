<!DOCTYPE html>
<html>
<body>

<?php

$var1 = 50;

if($var1 < 60 && $var1 > 100) {
    echo "het getal zit tussen de 100 en de 60!";
} else {
    echo "het getal is groter dan 100 of kleiner dan 60!";
}
echo "<br>";
if($var1 < 25 || $var1 > 100) {
    echo "het getal zit tussen de 100 en de 25!";
} else {
    echo "het getal is groter dan 100 of kleiner dan 25!";
}
echo "<br>";
if($var1 < 10 xor $var1 > 100) {
    echo "het getal zit tussen de 10 en de 100!";
} else {
    echo "het getal is groter dan 10 of kleiner dan 100!";
}
echo "<br>";

if($var1 < 75 !== $var1 > 100) {
    echo  "het getal zit tussen de 75 en de 100!";
} else {
    echo "het getal is groter dan 75 of kleiner dan 100!";
}
?>
</body>
</html>