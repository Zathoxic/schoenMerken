<?php

    //  Establish connection with database
    $conn = new mysqli('localhost', 'root', '', 'schoenMerken');

    //  Check if the connection is successful, else stop the code and return the error
    if(!$conn){
        die('No connection: ' . mysqli_connect_error());
    }
