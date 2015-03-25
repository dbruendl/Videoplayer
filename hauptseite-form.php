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
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
			<li><a href="anmeldung-form.php">Ausloggen</a></li>
			<li class="dropdown">
				<a href="topten-form.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Top 10 <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="topten-form.php">Übersicht</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			  </ul>
			</li>
            </li>
          </ul>
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			<!--<button type="submit" class="btn btn-link"><img src="./img/magnifier.png" height="20" width="25"><img></button>-->
		 </form>
		 <ul class="nav navbar-nav">
			<li> <a href="playlist-form.php"> Playlists </a>
		 </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	
	
	</br></br></br>
	<div class="container">
		<div class="row">
		<!-- /*****************************************************************************************************/
			
			Hier ist ein Framework mit dem Namen Sly für eine schöne übersicht der Videos
			<div class="col-lg-6-offset col-md-6-offset col-sm-6-offset">
				<h2> Titel </h2>
				<video src="./vid/video_1.mp4" width="600" height="340" controls/> 	
			</div>
		 /****************************************************************************************************/-->
			<div class="wrap">
			<h2> Video</h2>

			<div class="scrollbar">
				<div class="handle">
					<div class="mousearea"></div>
				</div>
			</div>

			<div class="frame effects" id="effects">
				<ul class="clearfix">
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li><video src="./vid/video_1.mp4" width="500" height="250" controls/></li>
					<li>10</li><li>11</li><li>12</li><li>13</li><li>14</li><li>15</li><li>16</li><li>17</li><li>18</li>
					<li>19</li><li>20</li><li>21</li><li>22</li><li>23</li><li>24</li><li>25</li><li>26</li><li>27</li>
					<li>28</li><li>29</li>
				</ul>
			</div>

			<div class="controls center">
				<button class="btn prev"><i class="icon-chevron-left"></i> prev</button>
				<button class="btn next">next <i class="icon-chevron-right"></i></button>
			</div>
		</div>
			
			<!-- /*****************************************************************************************************/
		 
			<div class="col-lg-4 col-md-4 col-sm-4">
				<h2> Liste </h2>
				<ul class="list-unstyled pre-scrollable">
					<ul>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>
						<li><a> Video 1	</a></li>
						<li><a> Video 2	</a></li>
						<li><a> Video 3	</a></li>	
					</ul>
				</ul>
			</div>
		</div>
		
		/****************************************************************************************************/-->
		
		<!-- /*****************************************************************************************************/
			
			Hier wird eine Übersicht gezeigt die die Informationen zum Video darstellt
			
		 /****************************************************************************************************/-->
	<div class="jumbotron">	
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4">
			<h2> Info </h2>
				<ul class="list-unstyled">
					<li> Titel: </li>
					<li> Interpret: </li>
					<li> Beschreibung: </li>
				</ul>
				<button type="submit" class="btn btn-primary"> Zur Playlist hinzufügen </button>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<br><br><br><br><br><br><br>
				<button type="submit" class="btn btn-primary"> User </button>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<br><br><br><br><br><br><br>
				<button type="submit" class="btn btn-primary"> Neue Playlist erstellen </button>
			</div>
		</div>
	</div>

		</div>
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