<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Well Come to Juntos</title>
  </head>
  <body style="background-color: #19181c">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
	<div style="position: absolute;left: 30px; top: 120px;">
		<img src="uploads/logo.png" width="120" height="130">
		<h1 style="color: #DF3A01; position: relative;bottom: 10px;left: 6px;">Juntos</h1>
		<p style="color: white; position: relative; bottom: 20px;">Together We Connect</p>

	</div>

	<div class="container" style="height: 100vh; color: white;">
	<form method="POST" action="includes/login.inc.php" style="background-color: #343438;width: 380px; height: 520px; padding: 30px; position: relative; left: 350px; top: 50px; border: ridge;border:0px; -webkit-box-shadow: 3px 4px 37px 0px rgba(0,0,0,0.58);
-moz-box-shadow: 3px 4px 37px 0px rgba(0,0,0,0.58);
box-shadow: 3px 4px 37px 0px rgba(0,0,0,0.58)">	
	  <div class="form-group">
	  	<h1>Log In</h1><br>
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" value="">
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="">
	  </div>
	  <div class="form-group form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="lgdin" value="">
	    <label class="form-check-label" for="exampleCheck1">Keep me logged in!</label>
	  </div>
	  <button type="submit" class="btn btn-sucess btn-block btn-primary" name="submit" value="login">Log In</button><br>
	  <p>Do not have an account?</p>
	  <button type="goto" class="btn btn-sucess btn-block btn-primary" name="signup" value="signup">Create an Account</button>
	</form>
	
	</div>

  </body>
</html>