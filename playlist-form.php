<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Videoplayer</title>
	<link rel="stylesheet" href="css/horizontal.css">
	<link rel="stylesheet" href="css/ospb.css">
    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
	<script src="./js/sly.js"></script>
  </head>
  
  <body>
    <!-- /*****************************************************************************************************/
			Fixed navbar 
			Zeigt eine Leiste im oberen Bereich die ein Logo, eine Suchleiste und einen Auslog-Button besitzt
		 /****************************************************************************************************/-->
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
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="hauptseite-form.php">Home</a></li>
			<li><a href="anmeldung-form.php">Ausloggen</a></li>
			
			<li class="dropdown">
			<a href="topten-form.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Top 10 <span class="caret"></span></a>
			<ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
         
          
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><!--<span class="glyphicon glyphicon-search" aria-hidden="true"></span>--></button>
			<!--<button type="submit" class="btn btn-link"><img src="./img/magnifier.png" height="20" width="25"><img></button>-->
		 </form>
		 
		 
			<li> <a href="playlist-form.php"> Playlists </a>
		 </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	
	</br></br></br>
	<div class="container">
		<div class="row">
<!-- /******************************************************************************************************************************************************/
			
			Die einzelnen Playlists werden untereinander angezeigt jeder mit eine Dropdown-Menü das die einzelnen Lieder anzeigt
			
		 /*****************************************************************************************************************************************************/-->
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<h1> Playlists </h1>
					<ul class="list-unstyled pre-scrollable">
						<li>
							<div class="dropdown">
								<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Playlist 1
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li> Titel 1</li>
									<li> Titel 2</li>
									<li> Titel 3</li>
									<li> Titel 4</li>
								</ul>
							</div>
						</li>
						<br>
						<li>
							<div class="dropdown">
								<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Playlist 2
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li> Titel 1</li>
									<li> Titel 2</li>
									<li> Titel 3</li>
									<li> Titel 4</li>
								</ul>
							</div>
						</li>
						<br>
						<li>
							<div class="dropdown">
								<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Playlist 3
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li> Titel 1</li>
									<li> Titel 2</li>
									<li> Titel 3</li>
									<li> Titel 4</li>
								</ul>
							</div>
						</li>
						<br>
						<li>
							<div class="dropdown">
								<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Playlist 4
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li> Titel 1</li>
									<li> Titel 2</li>
									<li> Titel 3</li>
									<li> Titel 4</li>
								</ul>
							</div>
						</li>
						<br>
						<li>
							<div class="dropdown">
								<button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Playlist 5
								<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
									<li> Titel 1</li>
									<li> Titel 2</li>
									<li> Titel 3</li>
									<li> Titel 4</li>
								</ul>
							</div>
						</li>
					</ul>
			</div>
				<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<!-- Ladet das Jquery und Bootstrap-->
    <script src="./js/jquery-1.11.1.js"></script>
    <script src="./js/bootstrap.min.js"></script>
	<script src="/js/docs.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/horizontal.js"></script>
	</body>
</html>