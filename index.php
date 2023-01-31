<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	 
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="#">Navbar</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">Link</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Dropdown
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Action</a>
	          <a class="dropdown-item" href="#">Another action</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Something else here</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link disabled" href="#">Disabled</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>

	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="images/1.jpg" class="img-fluid abouting">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<h2 class="display-4">Travel srilanka</h2>
				<p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn btn-success">Check more</a>
			</div>
		</div>
	</div>
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Services</h2>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/1.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">John Doe</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/2.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">John Doe</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card">
				  <img class="card-img-top" src="images/3.jpg" alt="Card image">
				  <div class="card-body">
				    <h4 class="card-title">John Doe</h4>
				    <p class="card-text">Some example text.</p>
				    <a href="#" class="btn btn-primary">See Profile</a>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact Us</h2>
	</div>
	<div class="w-50 m-auto">
		<form action="userinfo.php" methos="post">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="user" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile number</label>
				<input type="text" name="mobile" autocomplete="off" class="form-control">
			</div>
			<div class="form-group">
				<label>Comments</label>
				<textarea class="form-control" name="comment"></textarea>
			</div>
			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</section>
<footer>
	<p class="p-3 bg-dark text-white text-center">@Lakshan_Madhusanka</p>
</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>