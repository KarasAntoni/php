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
         //view data
         $sql = "SELECT id, firstname, lastname FROM myUsers";
         $result = mysqli_query($conn, $sql);

         if(mysqli_num_rows($result)>0){

            while($row = mysqli_fetch_assoc($result)){
                echo "id: " . $row["id"]. " imie " . $row["firstname"]. " nazwisko " . $row["lastname"]. "<br>";
            }
        }
            else{
                    echo "Nie ma nic poza musztardą i octem";
            }
         
         mysqli_close($conn);
         


?>