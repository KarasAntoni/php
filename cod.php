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
           VALUES('Bond', 'James', 'Błąd', 'bond@błąd.james')";

           if(mysqli_query($conn, $sql)){
               echo "Dodano";
           }
           else{
               echo "Error " . $sql . "<br>" . mysqli_error($conn);
           } 
           mysqli_close($conn);
            ?>