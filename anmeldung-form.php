<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Videoplayer</title>
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
  </head>
  
  <body>
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Videoplayer</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Anmeldung</a></li>
			<li><a href="#">Home</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	</br></br></br></br>
	<div class="container">
		<div class="col-md-6">
			<form class="form-horizontal">
			  <fieldset>
				<legend>Registrieren</legend>
					<div class="form-group">
					  <!--<label for="inputEmail" class="col-lg-3 control-label">Email</label>-->
					  <div class="col-lg-12">
						<input type="text" class="form-control" id="inputEmail" placeholder="Email">
					  </div>
					</div>
					<div class="form-group">
					  <!--<label for="inputUser" class="col-lg-3 control-label">Benutzername</label>-->
					  <div class="col-lg-12">
						<input type="text" class="form-control" id="inputUser" placeholder="Benutzername">
					  </div>
					</div>
					<div class="form-group">
					  <!--<label for="inputPassword" class="col-lg-3 control-label">Password</label>-->
					  <div class="col-lg-12">
						<input type="password" class="form-control" id="inputPassword" placeholder="Password">
					  </div>
					</div>
					<a href="hauptseite-form.php" class="btn btn-primary">Registrieren</a>
				</fieldset>
			</form>
		</div>
		<div class="col-md-6">
		<form class="form-horizontal">
			  <fieldset>
				<legend>Einloggen</legend>
					<div class="form-group">
					  <!--<label for="inputUser" class="col-lg-2 control-label">Benutzername/E-mail</label>-->
					  <div class="col-lg-12">
						<input type="text" class="form-control" id="inputUser" placeholder="Benutzername/E-mail">
					  </div>
					</div>
					<div class="form-group">
					  <!--<label for="inputPassword" class="col-lg-2 control-label">Password</label>-->
					  <div class="col-lg-12">
						<input type="password" class="form-control" id="inputPassword" placeholder="Password">
					  </div>
					</div>
					<a href="hauptseite-form.php" class="btn btn-primary">Einloggen</a>
				</fieldset>
			</form>
		</div>
	</div>
	
	
	
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- Ladet das Jquery und Bootstrap-->
    <script src="./js/jquery-1.11.1.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	</body>
</html>