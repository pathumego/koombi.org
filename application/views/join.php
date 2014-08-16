Join

<?php echo validation_errors(); ?>

<form method="post" action="<?php print site_url('join'); ?>" enctype="multipart/form-data">

	<table>
    
    	<tr> <td>First Name</td> <td><input type="text" name="first_name" id="first_name" value="" /></td> </tr>
        <tr> <td>Last Name</td> <td><input type="text" name="last_name" id="last_name" value="" /></td> </tr>
        <tr> <td>User name</td> <td><input type="text" name="user_name" id="user_name" value="" /></td> </tr>
        <tr> <td>E-mail</td> <td><input type="text" name="user_email" id="user_email" value="" /></td> </tr>
        <tr> <td>Password</td> <td><input type="password" name="user_pwd" id="user_pwd" value="" /></td> </tr>
        <tr> <td>Retype password</td> <td><input type="password" name="user_pwd_re" id="user_pwd_re" value="" /></td> </tr>
        
        <tr> 
        	<td><input type="hidden" name="action" value="sign_up" /></td> 
        	<td><input type="submit" name="submit_sign_up" id="submit_sign_up" value="Sign Up" /></td> 
        </tr>
    
    </table>

</form>