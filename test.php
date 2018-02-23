<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $link=mysql_connect('localhost','root','','testowa');
        if(!$link){
            echo('Nie udało się połączyć');
            exit();
        }
        mysqli_close($link);
    ?>
</body>
</html>