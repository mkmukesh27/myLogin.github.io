<?php

    $conn = new mysqli('localhost','root', '','ajax_jquery');
    $query = "SELECT * FROM  user_address_info ";
    $result = mysqli_query($conn,$query);
    $record1 = mysqli_fetch_array($result);
    
    echo "<h3>Hello User your Address is:<strong> '".$record1['user_address']."'</strong></h3> "; 
?>
