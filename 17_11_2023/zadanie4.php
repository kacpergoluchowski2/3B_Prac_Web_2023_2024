<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 2;
        $b = 3;
        
        if($a > $b)
            echo $a. ' jest wieksze od '.$b;
        elseif($a==$b)
            echo $a. ' jest rowne '.$b;
        else
            echo $a. ' jest mniejsze od ', $b
    ?>
</body>
</html>