<html>
    <head>
        <title>Exercice 1</title>
    </head>
    <body>
        <?php
        function somme($n){
            $somme=0;
            for ($i=1;$i<=$n;$i++){
                $somme=$somme+$i;
            }
            echo $somme;
            echo ' ';
        }
        somme(5);
        somme(2);
        somme(8);
        ?>
    </body>
</html>
