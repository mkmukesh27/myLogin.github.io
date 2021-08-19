<?php
    // echo "<pre>";
    // print_r($_POST);
    $conn = new mysqli('localhost', 'root', '','ajax_jquery');
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully <br>"; 
    
    $sql = "INSERT INTO login_info (full_name, user_phone, user_mail, user_password )
    VALUES ('".$_POST['full_name']."', '".$_POST['user_phone']."', '".$_POST['user_mail']."', '".$_POST['user_password']."' )";

    if ($conn->query($sql) === TRUE) {
      echo "<b>User Register Successfully!! Click here to</b><a href='login.php'>Login!</a> ";
      
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>