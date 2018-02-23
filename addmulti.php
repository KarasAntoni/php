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
           //insert to table
           $sql = "INSERT INTO myUsers (username, firstname, lastname, email) 
                    VALUES('teraz', 'chyba', 'bedzie', 'ostatni.com@net');";
        
           
            if(mysqli_multi_query($conn, $sql)){
               echo "Dodano nowy rekord o id: " . mysqli_insert_id($conn);
           }
           else{
               echo "Error " . $sql . "<br>" . mysqli_error($conn);
           } 
           mysqli_close($conn);
            ?>