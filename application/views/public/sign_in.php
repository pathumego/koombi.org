<form method="post" action="<?php print site_url('sign_in'); ?>" enctype="application/x-www-form-urlencoded">

	<table>
    
    	<tr> <td>E-mail</td> <td><input type="text" name="email" id="email" /></td> </tr>
        <tr> <td>Password</td> <td><input type="password" name="pwd" id="pwd" /></td> </tr>
        
        <tr> 
        	<td><input type="hidden" name="action" value="sign_in" /></td> 
            <td><input type="submit" name="submit_sign_in" id="submit_sign_in" value="Sign In" /></td> 
       	</tr>
    
    </table>

</form>

<?php print_r( $returnData ); ?>

<?php print_r($this->session->all_userdata()); ?>