<!DOCTYPE html>
<html>
<title>QusnEra login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>
<body>
<div class="header">
<h2>Login</h2>
</div>
<form method="post" action="login.php">
<div class="input-group">
<label>Username</label>
<input type="text" name="username">
</div>

<div class="input-group">
<label>Password</label>
<input type="password" name="password_1">
</div>

<div class="input-group">
<button type="submit" name="login" class="btn">Login</button>
</div>
<p> not a memeber?<a href="register.php">sign up</a>
</p>
</form>
</body>
</html>

