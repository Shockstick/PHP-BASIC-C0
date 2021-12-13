<html>
<head>
</head>
<body>

    <div class="index">
        <?php $leeftijd = '19' ?> 
    </div>
    <div id="isMeerderJarig">
        <?php
            if($leeftijd > 18 ){
                echo "<h6>Je bent ouder dan 18 om deze pagina te bekijken</h6>";
            }
        ?>
    </div>

</body>
</html>