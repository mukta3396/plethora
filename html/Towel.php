
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Plethora</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->

    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"> <img src="logo.png" alt="Plethora logo" style="width:180px;height:32px;"> </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" 
aria-expanded="false">KIDS<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidGirl.php">Girls</a></li>
                  <li><a href="KidBoy.php">Boys</a></li>
                 
                </ul>
              </li>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="MenClothing.php">Tshirts&Shirts</a></li>
                  <li><a href="MenBottom.php">Jeans&Trousers</a></li>
                  <li><a href="MenFootwear.php">Footwear</a></li>
                  <li><a href="MenWatch.php">Watches</a></li>
                  <li><a href="MenAccessories.php">Accesories</a></li>
                 
                </ul>
              </li>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMEN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="WomenClothing.php">Indianwear</a></li>
                  <li><a href="WomenClothing2.php">Westernwear</a></li>
                  <li><a href="WomenAccessories.php">Accesories</a></li>
                  <li><a href="BeautyGrooming.php">Beauty and Grooming</a></li>
                  <li><a href="WomenFootWear.php">Footwear</a></li>
                  <li><a href="WomenWatch.php">Watches</a></li>
                 
                </ul>
              </li>
		</li>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME DECOR<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Blanket.php">Blankets</a></li>
                  <li><a href="Curtain.php">Curtains</a></li>
                  <li><a href="Towel.php">Towels</a></li>
                  <li><a href="Cushion.php">Cushions</a></li>
		  				<li><a href="Bedsheet.php">Bedsheets</a></li>
                 
                </ul>
              </li>
            </ul>
		<div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
        </div>
        <ul class="nav navbar-nav navbar-right">
        			 <li><?php session_start(); echo $_SESSION['UserName']; ?></li>
                <li><img src="user.png" alt="User Icon" style="width:32px;height:32px;"> </a></li>
                <li><a href="checkout.html"> <img src="cart.png" alt="Cart Icon" style="width:32px;height:32px;"> </a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="carousel_discount.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Example headline.</h1>
              <p>Some pic of some chic.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="carousel_discount2.jpeg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>LEVI'S</h1>
              <p>Comfort and style</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="carousel_discount3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Guess</h1>
              <p>Some discount offer.</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
     
      <!-- Example row of columns -->
   
      <div class="container">
        <div class="row">
          <div class="col-md-2">
               

    <div id="accordion" class="panel-group">

        <div class="panel panel-default">

            <div class="panel-heading">

                <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Brands</a>

                </h4>

            </div>

            <div id="collapseOne" class="panel-collapse collapse">

                <div class="panel-body">

                    <p>Add list of brands </p>

                </div>

            </div>

        </div>

        <div class="panel panel-default">

            <div class="panel-heading">

                <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Colours</a>

                </h4>

            </div>

            <div id="collapseTwo" class="panel-collapse collapse in">

                <div class="panel-body">

                    <p>Add colour pallete</p>

                </div>

            </div>

        </div>

        <div class="panel panel-default">

            <div class="panel-heading">

                <h4 class="panel-title">

                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Price Range</a>

                </h4>

            </div>

            <div id="collapseThree" class="panel-collapse collapse">

                <div class="panel-body">

                    <p>Add price scroller</p>

                </div>

            </div>

        </div>

    </div>


            </div>
           <div class="col-md-10">
          <div class="row">
           
          	   <?php
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = 'mukta3396';
		
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		
					if(! $conn ) {
						die('Could not connect: ' . mysql_error());
					}
		
					$sql = 'SELECT * from Item WHERE cat_id=16 LIMIT 12 ';
					mysql_select_db('plethora');
					$retval = mysql_query( $sql, $conn );
		
					if(! $retval ) {
						die('Could not get data: ' . mysql_error());
					}
		
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
						?>
					 <div class="col-sm-3 col-lg-3 col-md-3">
							<form method="post" action="addToCart.php">
                        <div class="thumbnail">
                            <img src="<?php echo $row['picture']; ?>">
                            <table table-layout="fixed">
                            <tr>
                            <th height="100"><?php echo $row['item_name']; ?></th></tr>
                            </table>
                            <table>
                            <tr>
                            <th>     <input type="submit" value="Add to cart" class="btnAddAction" /> </th>
                            <th><?php echo $row['price']; ?></th>
                            </tr></table>
                        </div>
                        </form>
                    </div>
				<?php }

   mysql_close($conn);
?>
                   </div>
                  </div>
                </div>
              </div>
              

      <hr>

      <div class="footer">
        <p>&copy; Made with Love. By Divija, Mukta and Pooja</p>
      </div>
      

    </div> <!-- /container -->

  </body>
</html>