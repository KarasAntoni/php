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
            //create database
            $sql = "CREATE DATABASE mydb";

            if(mysqli_query($conn, $sql)){
            echo "utworzono bazę";
            }
            else{
                echo "Błąd tworzenia bazy: " . mysqli_error($conn);
            }
            mysqli_close($conn);
            
            ?>
