
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Form</title>
</head>

<!-- This is the Registeration form <!-->
<body>

<h3> Please enter your details below for registeration</h3>
<form method="post" action="recieveform.php">
    <input name="firstname" type="text" placeholder="First Name">

    <input name="lastname" type="text" placeholder="Last Name">
    <br>
    <input name="username" type="text" placeholder="Username">

    <input name="password" type="password" placeholder="Password">
    <br>
    <label>Address</label>
    <br>
    <textarea name="address" cols="50" rows="10"></textarea>
    <br>
    <input name="phone" type="text" placeholder="Phone Number">
    <br>
    <input type="submit" value="Register">

</form>
</body>
</html>