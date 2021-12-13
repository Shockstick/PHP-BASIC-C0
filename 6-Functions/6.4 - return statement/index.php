<!DOCTYPE html>
<html>
<body>

<?php
function geefTienProcent(){
    $koopPrijs = '75';
    $korting = '10';
    $factor = (100 - $korting) / 100; 
    echo $koopPrijs * $factor;
}

geefTienProcent();
?>
    
</body>
</html>