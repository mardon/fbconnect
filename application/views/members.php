<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Members only</title>

	
</head>
<body>

<div id="container">
	<h1>Welcome</h1>
	
	<p><?php echo "Hello $name, How are you"; ?></p>
	<p><?php echo "Your email is $email"; ?></p>
	<p><?php echo "I know, because i got it from facebook"; ?></p>
	
	<a href='<?php echo base_url().'main/logout'; ?>' > Logout</a>
</div>

</body>
</html>