<?php 

if(isset($_POST['submit'])){
    $name =htmlentities($_POST['name']);
    $password = $_POST["password"])
	$confirm_password = $_POST["confirmPassword"])
    if(empty($name) || empty($email) || empty($username) || empty($password) || empty($confirmPassword) || empty($gender || empty($year) || empty($month) || empty($day) ){
        echo "Please fill up all the fields";
    }else{
        setcookie('name',$name, time()+3600);
        header('Location: login.php');
    }
}else{
    header('location: registration.php');
}
?>
<!DOCTYPE html>
<head>
    <title>Registration</title>
</head>
<body>
	<fieldset>
	    <legend><b>REGISTRATION</b></legend>
		<form>
			<br/>
			<table width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>Name</td>
					<td>:</td>
					<td><input name="name" type="text"></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td>
						<input name="email" type="text">
						<abbr title="hint: sample@example.com"><b>i</b></abbr>
					</td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>User Name</td>
					<td>:</td>
					<td><input name="userName" type="text"></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input name="password" type="password"></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td>Confirm Password</td>
					<td>:</td>
					<td><input name="confirmPassword" type="password"></td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Gender</legend>    
							<input name="gender" type="radio">Male
							<input name="gender" type="radio">Female
							<input name="gender" type="radio">Other
						</fieldset>
					</td>
					<td></td>
				</tr>		
				<tr><td colspan="4"><hr/></td></tr>
				<tr>
					<td colspan="3">
						<fieldset>
							<legend>Date of Birth</legend>    
							<input name="year" type="text" size="2" />/
							<input name="month" type="text" size="2" />/
							<input type="day" size="4" />
							<font size="2"><i>(dd/mm/yyyy)</i></font>
						</fieldset>
					</td>
					<td></td>
				</tr>
			</table>
			<hr/>
			<input type="submit" value="Submit">
			<input type="reset">
		</form>
	</fieldset>
</body>
</html>