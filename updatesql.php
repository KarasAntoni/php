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

            $sql = "UPDATE myUsers SET lastname='Error' WHERE id='1' ";
           
            if(mysqli_multi_query($conn, $sql)){
                echo "Zmieniono";
            }
            else{
                echo "Error " . $sql . "<br>" . mysqli_error($conn);}

             mysqli_close($conn);
            ?>