<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
           
            //connect to database
            $conn = mysqli_connect($servername, $username, $password);
            
            //check connect
            if(!$conn){
                die("Nieudane połączenie: " . mysqli_connect_error());
            }
            echo "Połączenie udane";

    ?>
</body>
</html>