<?PHP
	require("ulogin.php");
	require($root."dbconn.php");
	$page_title = 'Change User Password';
	require($root."header.php");
?>

<body>
<table class='OutlineTable' align=center width="640px">
<tr>
	<td class='login-header' colspan='2' align=center>Change User Password<br></td>
</tr>
<tr>
	<td class='login' align=left><br>
	<div align="center">
		<table border="0" width="100%" id="table1">
		<tr>
			<td>
<?PHP

        if (isset($_POST['submitted'])){
             //Initialize the error array
             $errors = array();

             //Validate info
           	 	 $result = @mysql_query($sql) or mysql_error();
             
             
             	
             	$errors[] = 'Your current password was incorrect.';
             	
             }
             	 
                $errors[] = 'You did not enter a new password.';
             }
             
             	$errors[] = 'New password entries did not match.';
             
	         }
             
             

             if (empty($errors)){
                 //Do the Update

                $resultUpdate = @mysql_query($sqlUpdate);
              }
              else{//report the errors
                  echo '<br>';
                  echo '<p class="Error"> The following error(s) occurred:<br>';

                  foreach ($errors as $msg){
                     echo " - $msg<br>\n";
                  }
                  echo '<br>Please try again.</p><br> <a href="javascript:history.go(-1)">Go Back</a> </br';
               }
?>

			</td>
		</tr>
		<tr>
		    <td>
		        <?PHP
		        

                                  echo '<form action="editPassword.php" method="post">';
                                  echo '<p><b>Current Password:</b> <input type="text" name="User_Password" maxlength="15" size="75" value="" /></p>';
                                  
                                  
                                  echo '<p><input type="submit" name="submit" value="Update User Information" onclick="javascript:return confirm(\'Are you sure you want to update your password?\')" /></p>';
                                  echo '<input type="hidden" name="submitted" value="TRUE" />';
                                  echo '</form>';
                        ?>
		    </td>
		</tr>
		</table>
	</div>
	</td>
</tr>
</table></div>
</body>
<?PHP
	require($root."footer.php");
?>
