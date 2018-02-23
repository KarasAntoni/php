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
           VALUES('ajednak', 'Tonie', 'Był', 'koniec.com@net')";
           
           $sql .= "INSERT INTO myUsers (username, firstname, lastname, email) 
           VALUES('user12', 'wreszcie', 'szybki', 'coskolejnego.com@net')";
           
           $sql .= "INSERT INTO myUsers (username, firstname, lastname, email) 
           VALUES('ido', 'dalej', 'usery', 'aaaaaaa.com@net')";
           
           $sql .= "INSERT INTO myUsers (username, firstname, lastname, email) 
           VALUES('aaaaaaaaa', 'aaaaaaa', 'aaaaa', 'aaaa.iaaaaa@iaaaaaa')";
           
            if(mysqli_multi_query($conn, $sql)){
               echo "Dodano";
           }
           else{
               echo "Error " . $sql . "<br>" . mysqli_error($conn);
           } 
           mysqli_close($conn);
            ?>