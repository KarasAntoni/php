<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "mydb";

            //connect to database
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            
            //check connect
            if(!$conn){
                die("Nieudane połączenie: " . mysqli_connect_error());
            }
           
            //sql table to database
            $sql = "CREATE TABLE myUsers (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(30) NOT NULL,
                firstname VARCHAR(30) NOT NULL,
                lastname VARCHAR(30) NOT NULL,
                email VARCHAR(50) NOT NULL,
                reg_date TIMESTAMP
            )";

            if(mysqli_query($conn, $sql)){
                echo "Tabela myUsers została utworzona";
            }
            else {
                echo "Błąd przy tworzeniu tabeli : " . mysqli_error($conn);
            }
            mysqli_close($conn);

            ?>
