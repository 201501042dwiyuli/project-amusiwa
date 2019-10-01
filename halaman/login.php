<html>
<head>
	<title>LOGIN</title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>


	<div class="container" style="margin:100px;padding:30px;">
    <div class="row">
		<div class="span4 offset4 well">
			<legend>Please Sign In</legend>
          	<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
            </div>
			<form method="POST" action="" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="Username">
			<input type="password" id="password" class="span4" name="password" placeholder="Password">
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Remember Me
            </label>
			<button type="submit" name="submit" class="btn btn-success btn-block">Sign in</button>

			</form>   
			<p>Belum punya akun? <a href="?p=register">Register</a> </p>
		</div>
	</div>
</div>

</body>
</html>


