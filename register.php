<?php
include 'header.php';
?>
<body>
<?php
include 'navigation.php';
?>
	<div class="form-div">
		<form method="POST" action="index.php" enctype="multipart/form-data">
			<h2>General registration requirements</h2>
			<p>First Name: <input type="text" name="fname" class="inputFields" required/></p>
			<p>Last Name: <input type="text" name="lname" class="inputFields" required/></p>
			<p>Email: <input type="text" name="email" class="inputFields" required/></p>
			<p>Confirm Email: <input type="text" name="confirmemail" class="inputFields" required/></p>
			<p>Password: <input type="password" name="password" class="inputFields" required/></p>
			<p>Confirm Password: <input type="password" name="confirmpassword" class="inputFields" required/></p>
			<p>Phone Number: <input type="text" name="phonenumber" class="inputFields" required></p>
			<p>Birthdate: <input type="date" name="bdate" placeholder="Birthdate" class="inputFields" required></p>
			<p>Gender:
				<select name="gender">
					<option value=""></option>
					<option value="m">Male</option>
					<option value="f">Female</option>
				</select> 
			</p>
			<p>Height: 
				<select name="height">
					<option value=""></option>
					<option value="4&rsquo;">4&rsquo;</option>
					<option value="4&rsquo;&nbsp;1&rdquo;">4&rsquo;&nbsp;1&rdquo;</option>
					<option value="4&rsquo;&nbsp;2&rdquo;">4&rsquo;&nbsp;2&rdquo;</option>
					<option value="4&rsquo;&nbsp;3&rdquo;">4&rsquo;&nbsp;3&rdquo;</option>
					<option value="4&rsquo;&nbsp;4&rdquo;">4&rsquo;&nbsp;4&rdquo;</option>
					<option value="4&rsquo;&nbsp;5&rdquo;">4&rsquo;&nbsp;5&rdquo;</option>
					<option value="4&rsquo;&nbsp;6&rdquo;">4&rsquo;&nbsp;6&rdquo;</option>
					<option value="4&rsquo;&nbsp;7&rdquo;">4&rsquo;&nbsp;7&rdquo;</option>
					<option value="4&rsquo;&nbsp;8&rdquo;">4&rsquo;&nbsp;8&rdquo;</option>
					<option value="4&rsquo;&nbsp;9&rdquo;">4&rsquo;&nbsp;9&rdquo;</option>
					<option value="4&rsquo;&nbsp;10&rdquo;">4&rsquo;&nbsp;10&rdquo;</option>
					<option value="4&rsquo;&nbsp;11&rdquo;">4&rsquo;&nbsp;11&rdquo;</option>
					<option value="5&rsquo;">5&rsquo;</option>
					<option value="5&rsquo;&nbsp;1&rdquo;">5&rsquo;&nbsp;1&rdquo;</option>
					<option value="5&rsquo;&nbsp;2&rdquo;">5&rsquo;&nbsp;2&rdquo;</option>
					<option value="5&rsquo;&nbsp;3&rdquo;">5&rsquo;&nbsp;3&rdquo;</option>
					<option value="5&rsquo;&nbsp;4&rdquo;">5&rsquo;&nbsp;4&rdquo;</option>
					<option value="5&rsquo;&nbsp;5&rdquo;">5&rsquo;&nbsp;5&rdquo;</option>
					<option value="5&rsquo;&nbsp;6&rdquo;">5&rsquo;&nbsp;6&rdquo;</option>
					<option value="5&rsquo;&nbsp;7&rdquo;">5&rsquo;&nbsp;7&rdquo;</option>
					<option value="5&rsquo;&nbsp;8&rdquo;">5&rsquo;&nbsp;8&rdquo;</option>
					<option value="5&rsquo;&nbsp;9&rdquo;">5&rsquo;&nbsp;9&rdquo;</option>
					<option value="5&rsquo;&nbsp;10&rdquo;">5&rsquo;&nbsp;10&rdquo;</option>
					<option value="5&rsquo;&nbsp;11&rdquo;">5&rsquo;&nbsp;11&rdquo;</option>
					<option value="6&rsquo;">6&rsquo;</option>
					<option value="6&rsquo;&nbsp;1&rdquo;">6&rsquo;&nbsp;1&rdquo;</option>
					<option value="6&rsquo;&nbsp;2&rdquo;">6&rsquo;&nbsp;2&rdquo;</option>
					<option value="6&rsquo;&nbsp;3&rdquo;">6&rsquo;&nbsp;3&rdquo;</option>
					<option value="6&rsquo;&nbsp;4&rdquo;">6&rsquo;&nbsp;4&rdquo;</option>
					<option value="6&rsquo;&nbsp;5&rdquo;">6&rsquo;&nbsp;5&rdquo;</option>
					<option value="6&rsquo;&nbsp;6&rdquo;">6&rsquo;&nbsp;6&rdquo;</option>
					<option value="6&rsquo;&nbsp;7&rdquo;">6&rsquo;&nbsp;7&rdquo;</option>
					<option value="6&rsquo;&nbsp;8&rdquo;">6&rsquo;&nbsp;8&rdquo;</option>
					<option value="6&rsquo;&nbsp;9&rdquo;">6&rsquo;&nbsp;9&rdquo;</option>
					<option value="6&rsquo;&nbsp;10&rdquo;">6&rsquo;&nbsp;10&rdquo;</option>
					<option value="6&rsquo;&nbsp;11&rdquo;">6&rsquo;&nbsp;11&rdquo;</option>
				</select>
				<h2>Knowledge of Ultimate</h2>
				<p>Experience:
					<select name="experience">
						<option value=""></option>
						<option value="none">None</option>
						<option value="league">Organized League Play</option>
						<option value="club">Club Level</option>
						<option value="college">College</option>
						<option value="limited">Limited Recreation</option>
					</select>
				</p>
				<p>Do you know what a vertical stack is:
					<select name="vstack">
						<option value=""></option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</p>
				<p>Do you know what a horizontal stack is:
					<select name="hstack">
						<option value=""></option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</p>
				<p>Do you know what a zone is:
					<select name="zone">
						<option value=""></option>
						<option value="1">Yes</option>
						<option value="0">No</option>
					</select>
				</p>
				<p>Additional comments about experience level:

				
				<textarea rows="4" cols="50" name="comment"></textarea>
				</p>
			<input type="submit" name="submit" class="buttons" value="Submit">
		</form>
	</div>

</body>
</html>