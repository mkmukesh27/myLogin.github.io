<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

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

input[type=text], input[type=email], input[type=number]{
  width: 50%;
  padding: 6px 12px;
  margin: 5px 0;
  box-sizing: border-box;
}

input[type=submit], input[type=reset]{
  width: 15%;
  padding: 8px 12px;
  margin: 5px 0;
  box-sizing: border-box;
}

</style>
    
    <script type="text/javascript">
        function validation()
        {
            // alert('Inside js function');
			// return false;
            if(document.reg_form.full_name.value == "")
            {
                alert( "Please enter your name!" );
                document.reg_form.full_name.focus() ;
                return false;
            }
            if(document.reg_form.user_phone.value == "")
            {
                alert( "Please enter your mobile number!" );
                document.reg_form.user_phone.focus() ;
                return false;
            }
            
            var mobileno = /^((\\+91-?)|0)?[0-9]{10}$/;
            if (mobileno.test(document.reg_form.user_phone.value) == false)
            {
                alert( "Enter valid mobile number!" );
                document.reg_form.user_phone.focus() ;
                return false;
            }
            if(document.reg_form.user_mail.value == "")
            {
                alert( "Please enter your email!" );
                document.reg_form.user_mail.focus() ;
                return false;
            }
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            if (reg.test(document.reg_form.user_mail.value) == false) 
            {
                alert('Invalid Email Address');
                document.reg_form.user_mail.focus() ;
                return false;
            }
            if(document.reg_form.user_password.value == "")
            {
                alert( "Please create password!" );
                document.reg_form.user_password.focus() ;
                return false;
            }
            if(document.reg_form.confirm_password.value == "")
            {
                alert( "Insert password again !" );
                document.reg_form.confirm_password.focus() ;
                return false;
            }
            var pss1= document.reg_form.user_password.value;	
            //alert(pss1);
            var pss= document.reg_form.confirm_password.value;
            //alert(pss);	 
            
            if( pss != pss1) {
                alert("Password is different!! Please insert same password")
                document.reg_form.confirm_password.focus();
                return false;
            }

            return true;
        }
    </script>

</head>
<body>
    <div>
        <form action="step1.php" method="POST" name="reg_form" onsubmit= "return validation()" enctype="multipart/formdata">
        <table border="0" align="center" cellpadding = "20">
            <th colspan="2">Student Details</th>
            <!-------------------------- Full Name ------------------------------------->
            <tr>
                <td>
                    Full Name:
                </td>
                <td>
                    <input type="text" name="full_name" placeholder="Enter full name">
                </td>
            </tr>
            <!-------------------------- Phone Number ------------------------------------->
            <tr>
                <td>
                    Phone No.:
                </td>
                <td>
                    <input type="tel"  maxlength="10" name="user_phone" size="30" placeholder="Phone number">
                </td>
            </tr>
            <!-------------------------- Email Id ------------------------------------->
            <tr>
                <td>
                    Email Id. :
                </td>
                <td>
                    <input type="email" name="user_mail" placeholder="Enter your email">
                </td>
            </tr>
            <!-------------------------- Password ------------------------------------->
            <tr>
                <td>Password</td>
                <td><input type="password" name="user_password" id="user_password" placeholder="Create password" minlength="8" />
                (minimum 8 character required) </td>
            </tr>
            <!-------------------------- Confirm Password ------------------------------------->
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm password" minlength="8" />
                (minimum 8 character required) </td>
            </tr>
            <!-------------------------- Buttons ------------------------------------->
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit" name="submit" >
                
                    <input type="reset" value="Clear">
                </td>
            </tr>
            <tr>
                <td colspan="2"> <h4> Already Register? <a href="login.php"> Click here to Login </a></h4> </td>
            </tr>
        </table>
</form>
    </div>
    
</body>
</html>