<?php 
$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
$countries = array("Colombia","Venezuela","Ecuador","Argentina","Mexico","Other");
$ageRange = array("Less than 18","18 to 25","26 to 35","36 to 45","More than 45");
$diplomas = array("PHP","JAVA","SQL","Design","Marketing");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h1>Register</h1>
	<form method="POST" action="informationInscription.php">
		ID number<br>
		<input type="number" name="ID" required="" placeholder="1010101010"><br><br>
		Confirm your ID number<br>
		<input type="number" name="confirmID" required="" placeholder="1010101010"><br><br>
		Name <br>
		<input type="text" name="Name" required="" placeholder="Lara"><br><br>
		Last name <br>
		<input type="text" name="LastName" required="" placeholder="Croft"><br><br>
		email <br>
		<input type="email" name="Email" required="" placeholder="laracroft@tombraider.com"><br><br>
		Confirm your email <br>
		<input type="email" name="ConfirmEmail" required="" placeholder="laracroft@tombraider.com"><br><br>
		Country <br>
		<select name="Country" required="">
			<option>Select an option</option>
			<?php 
			foreach ($countries as $country) {
				?>
				<option value="<?php echo $country; ?>"><?php echo $country; ?></option>
				<?php
				}
			?>
		</select><br>
		State <br>
		<input type="text" name="State" required="" placeholder="Surrey"><br><br>
		City <br>
		<input type="text" name="City" required="" placeholder="Guildford"><br><br>
		Age range <br>
		<select name="Age" required="">
			<option>Select your age</option>
			<?php 
			foreach ($ageRange as $age) {
				?>
				<option value="<?php echo $age; ?>"><?php echo $age; ?></option>
				<?php
				}
			?>
		</select><br>
		Address <br>
		<input type="text" name="Address" required="" placeholder="142, Abbingdon Road"><br><br>
		Contact number <br>
		<input type="text" name="ContactNumber" required="" placeholder="123123123"><br><br>
		Select de diploma of your interest <br>
		<select name="Diploma" required="">
			<option>Not selected</option>
			<?php 
			foreach ($diplomas as $diploma) {
			?>
			<option value="<?php echo $diploma; ?>"><?php echo $diploma; ?></option>
			<?php
			}
			?>
		</select><br>
		How did you find us? <br>
		<input type="radio" name="Information" value="Social Media"> Social Media
		<input type="radio" name="Information" value="Friends or Family"> Friends or Family
		<input type="radio" name="Information" value="Other"> Other
		<br>Select gender <br>
		<input type="radio" name="Gender" value="Woman"> Woman
		<input type="radio" name="Gender" value="Man"> Man
		<input type="radio" name="Gender" value="Other"> Other
		<br>By clicking "Accept" you agree to our Terms, Data Policy and Cookie Policy.<br>
		<input type="radio" name="Policy" value="Accept"> Accept
		<input type="radio" name="Policy" value="Reject"> Reject
		<br>
		<input type="submit" value="Sign up">
	</form>
</body>
</html>