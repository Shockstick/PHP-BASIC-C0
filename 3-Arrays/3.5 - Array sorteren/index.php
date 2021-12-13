<!DOCTYPE html>
<html>
<body>
<?php
$getallen =  ["676","5345","78657","3","46","21","47"];
$laag_hoog = asort($getallen);
$hoog_laag = arsort($getallen);

echo print_r($laag_hoog);
echo print_r($hoog_laag);
?>  
</body>
</html>