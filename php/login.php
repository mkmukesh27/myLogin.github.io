<?php

    if(isset( $_POST['login'] ) && $_POST['login']=='Login' )
    {
        //echo "<pre>";
        //print_r($_POST);
        
        // Create connection
        $conn = new mysqli('localhost','root', '','ajax_jquery');
        // Check connection
        // if ($conn->connect_error) {
        //   die("Connection failed: " . $conn->connect_error);
        // }
        // echo "Connected successfully";
        
        $query = "SELECT * FROM  login_info WHERE user_mail = '".$_POST['userName']."' OR user_phone = '".$_POST['userName']."' AND user_password = '".$_POST['user_password']."' ";
        //echo  $query; 
        $result = $conn->query($query);
        
        //$record = $result->fetch_assoc();
        $record = $result->fetch_array();  /// Mostly used
        //$record = $result->fetch_row();
        print_r($record);
        
        ///Total Number of Records :
        $total = $result->num_rows;
        //echo "<br/>"."Total number of Records :".$total."<br/>";
        if($total=='1')
            header("Location: data.php");

        elseif($total > '1' OR  $total=='0')
            $error_msg = "Invalid userid or password!!";
    }
?>

<html>
<head>
<title>Student Login page</title>
<style>
	h2{
  font-family: Sans-serif; 
  font-size: 24px;         
  font-style: normal; 
  font-weight: bold; 
  color: blue;
  text-align: center; 
  text-decoration: underline
}

table{
  font-family: verdana; 
  color:black; 
  font-size: 16px; 
  font-style: normal;
  font-weight: bold;
  background-color: #ffb6c1; 
  border-collapse: collapse; 
  border: 4px solid #000000;
  border-style: dashed;
}
table.inner{
  border: 10px
}

input[type=text]{
  width: 50%;
  padding: 6px 12px;
  margin: 5px 0;
  box-sizing: border-box;
}

input[type=submit], input[type=reset]{
  width: 15%;
  padding: 10px 12px;
  margin: 5px 5px;
  box-sizing: border-box;
}

</style>

<!-- Java Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>
<body>
    <h2>Student Login page</h3>
    <form action="" method="post" name ="myForm" id="myForm" onsubmit = "return( login_validation() );">
    <table align="center" cellpadding = "10">

        <?php
            if(@$error_msg)
            {
                echo "<tr><td colspan='2'>".@$error_msg."</td></tr>";
            }
        ?>

        <!-------------------------- Username ------------------------------------->
        <tr align="center">
            <td>Username</td>
            <td><input type="text" name="userName" id="userName" size="50" placeholder="Email or phone number" /> 
                <div class="nameErr"> </div>
            </td>
        </tr>
    
        <!-------------------------- Password ------------------------------------->
        <tr align="center">
            <td>Password</td>
            <td><input type="password" name="user_password" id="user_password" size="24" placeholder="ex: *****" minlength="8" />
                <div class="passErr"> </div>
             </td>
        </tr>
    
        <!----------------------- Login and Reset ------------------------------->
        <tr>
            <td colspan="2" align="center"><input type="submit" id="submit" name="login" value="Login">
            <input type="reset" value="Reset">
            </td>
        </tr>
        <tr>
            <td colspan="2"> <h5> New user please <a href="register.php"> click here to Register!! </a></h5> </td>
        </tr>


    </table>
    </form>

    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
                var uname = $('#userName').val();
                var upass = $('#user_password').val();
                if(uname == ""){
                    $('.nameErr').html('**Enter user name.');
                    $('.nameErr').css('color','red');
                    
                }
                if(upass == ""){
                    $('.passErr').html('**Enter password');
                    $('.passErr').css('color','red');
                    return false;
                }
            });
        });
    </script>

</body>
</html>
