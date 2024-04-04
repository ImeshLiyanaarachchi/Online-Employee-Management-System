<?php 
include("header.php");
?>

<div id="maindiv"><!-- stat of main DIV------------------------------------------------------------->
	
<form  id="RegistrationForm" action="registerCandidate.php" method="post">
		<table id="registrationtable">
		<tr ><th colspan="2"><h2>Candidate Registration</h2></th></tr>
			<tr>
				<td class="label">First Name</td>
				<td class="label">Last Name</td>
				
			</tr>
			<tr>
				<td><input class="txtclassshort" name="fname" type="text"></td>
				<td ><input class="txtclassshort" name="lname" type="text"></td>
				
			</tr>
			<tr>
				<td class="label">Date of Birth</td>
				<td class="label">Gender</td>
				
			</tr>
			<tr>
				<td><input class="txtclassshort" name="dob" type="date"></td>
				<td ><select class="txtclassshort" id="gender" name="gender">
						  <option value="1">Male</option>
						  <option value="2">Female</option>
					</select>
				
				</td>
				
			</tr>
			<tr>
				<td colspan="2"	class="label">Contact Number</td>
			</tr>
			<tr>
				<td ><input class="txtclassshort" name="contact" type="text"></td>
				
			</tr>
			<tr>
				<td colspan="2"	class="label">Email</td>
			</tr> 
			<tr>
				<td colspan="2"><input class="txtclasslong" name="email" id="email" type="text"></td>
			</tr>
			<tr>
				<td colspan="2"	class="label">Password</td>
			</tr>
			<tr>
				<td colspan="2"><input  class="txtclasslong" size="10" name="password" id="password" type="password"></td>
			</tr>
			<tr>
				<td colspan="2"	class="label">Confirm Password</td>
			</tr>
			<tr>
				<td colspan="2" ><input  class="txtclasslong" name="confpassword" id="confpassword" type="password"></td>
			</tr>
			
			<tr>
				<td><input class="btn" type="button" name="cancel" value="Cancel" ></td>
				<td><input class="btn" type="submit"  name="submi" value="Submit" onClick="return validate();" ></td>
			</tr>
		</table>
	</form>
</div>
<?php
include("footer.php")
?>
	