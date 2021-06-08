</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

<script type="js/main.js"></script>
</body>
</html>

<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST">
<?php

$FirstNameErr=$LastNameErr=$emailErr=$passwordErr=$confirm_pwdErr="";
$FirstName=$LastName=$email=$password=$confirm_pwd="";

if(isset($_POST['submit'])) {
// firstname
if (empty($_POST["FirstName"])) {
 $FirstNameErr = "Name is required";
} else {
 $FirstName = test_input($_POST["FirstName"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$FirstName)) {
$FirstNameErr = "Only letters and white space allowed";
}
 $FirstName = test_input($_POST["FirstName"]);
}

// lastname
if (empty($_POST["LastName"])) {
 $LastNameErr = "Name is required";
} else {
 $LastName = test_input($_POST["LastName"]);
if (!preg_match("/^[a-zA-Z-' ]*$/",$LastName)) {
$LastNameErr = "Only letters and white space allowed";
}
 $LastName = test_input($_POST["LastName"]);
}
// email
if (empty($_POST["email"])) {
 $emailErr = "Email is required";
} else {
 $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailErr = "Invalid email format";
}
 $email = test_input($_POST["email"]);
}


// password
if (empty($_POST["password"])) {
 $passwordErr = "Password is required";
} else {
 $password = test_input($_POST["password"]);
}

if (empty($_POST["confirm_pwd"])) {
 $confirm_pwdErr = "Password is required";
} else {
 $confirm_pwd = test_input($_POST["confirm_pwd"]);
}


}

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
