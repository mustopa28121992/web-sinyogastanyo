<!DOCTYPE html>
<html>
	<head>
		<title>Form validation with javascript</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="wrapper">
			<form method="POST" action="asset/index.php" onsubmit="return Validate()" name="vform">
				<div>
					<input type="text" name="usernama" class="textInput" placeholder="Usernama">
					<div id="name_error" class="var_error"></div>
				</div>
				<div>
					<input type="email" name="email" class="textInput" placeholder="email">
					<div id="email_error" class="var_error"></div>
				</div>
				<div>
					<input type="password" name="password" class="textInput" placeholder="password">
				</div>
				<div>
					<input type="password" name="password_confirmation" class="textInput" placeholder="password confirmation">
					<div id="password_error" class="var_error"></div>
				</div>
				<div>
					<input type="submit" value="Register" class="btn" nama="Register">
				</div>

			</form>

		</div>



		<script type="text/javascript">
			var username = document.forms["vform"]["username"];
			var email = document.forms["vform"]["email"];
			var password = document.forms["vform"]["password"];
			var password_confirmation = document.forms["vform"]["password_confirmation"];


			var name_error = document.getElementById("name_error");
			var email_error = document.getElementById("email_error");
			var password_error = document.getElementById("password_error");

			username.addEventListener("blur", nameVerify, true);
			email.addEventListener("blur", emailVerify, true);
			password.addEventListener("blur", passwordVerify, true);

			function Validate(){
				if(username.value ==""){
					username.style.border = "1px solid red";
					name_error.textContent = "username is required";
					username.focus();
					return false;
				}
				if(email.value ==""){
					email.style.border = "1px solid red";
					email_error.textContent = "email is required";
					email.focus();
					return false;
				}
				if(password.value ==""){
					password.style.border = "1px solid red";
					password_error.textContent = "password is required";
					password.focus();
					return false;
				}


				if(password.value != password_confirmation.value){
					password.style.border = "1px solid red";
					password_confirmation.style.border = "1px solid red";
					password_error.innerHTML = "The two password do not match";
					return false;
				}
			}

			function nameVerify(){
				if(username.value !==""){
					username.style.border = "1px solid #5E6E66";
					name_error.innerHTML = "";
					return true;
				}
			}
			function emailVerify(){
				if(email.value !==""){
					email.style.border = "1px solid #5E6E66";
					email_error.innerHTML = "";
					return true;
				}
			}
			function passwordVerify(){
				if(password.value !==""){
					password.style.border = "1px solid #5E6E66";
					password_error.innerHTML = "";
					return true;
				}
			}






		</script>

	</body>
</html>