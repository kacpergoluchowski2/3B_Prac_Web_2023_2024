<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $language = 'n';
        if($language == 'a')
            echo "Angielski";
        elseif($language == 'n')
            echo "niemiecki";
        elseif($language == 'h')
            echo "hiszpanski";
        else
            echo "polski"
    ?>
</body>
</html>