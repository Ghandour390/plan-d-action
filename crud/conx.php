<?php

    $server ="localhost";
    $username = "root";
    $password= "";
    $db= 'crudtest';
    $conn = mysqli_connect($server, $username, $password, $db);
    
     if($conn){
        echo'bravo';     }

      else{
        echo 'erour conx';} 

        $firstname='';
        $lastname= '';
        $email= '';

        $sql ="INSERT INTO users('firstname','lastname','email','pasword') VALUES('$firstname','$lastname','$email','$pasword')";

        mysqli_query($conn, $sql);
        if(mysqli_query($conn,$sql)){
            echo "query bon";
        }


?>