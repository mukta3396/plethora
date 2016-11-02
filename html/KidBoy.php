
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
    <script>
    input[type=number]{
    width: 10px;
} 
    </script>
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
                  <li><a href="KidBoy.php?category=18">Girls</a></li>
                  <li><a href="KidBoy.php?category=17">Boys</a></li>
                 
                </ul>
              </li>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MEN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=7">Tshirts&Shirts</a></li>
                  <li><a href="KidBoy.php?category=8">Jeans&Trousers</a></li>
                  <li><a href="KidBoy.php?category=10">Footwear</a></li>
                  <li><a href="KidBoy.php?category=11">Watches</a></li>
                  <li><a href="KidBoy.php?category=9">Accesories</a></li>
                 
                </ul>
              </li>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">WOMEN<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=1">Indianwear</a></li>
                  <li><a href="KidBoy.php?category=2">Westernwear</a></li>
                  <li><a href="KidBoy.php?category=3">Accesories</a></li>
                  <li><a href="KidBoy.php?category=4">Beauty and Grooming</a></li>
                  <li><a href="KidBoy.php?category=5">Footwear</a></li>
                  <li><a href="KidBoy.php?category=6">Watches</a></li>
                 
                </ul>
              </li>
		</li>
		<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">HOME DECOR<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="KidBoy.php?category=13">Blankets</a></li>
                  <li><a href="KidBoy.php?category=14">Curtains</a></li>
                  <li><a href="KidBoy.php?category=16">Towels</a></li>
                  <li><a href="KidBoy.php?category=15">Cushions</a></li>
		  				<li><a href="KidBoy.php?category=12">Bedsheets</a></li>
                 
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
        <font size="6"><?php session_start();  if($_SESSION['UserName']!="")echo $_SESSION['UserName'], " Logged In!"; ?></font>
        <ul class="nav navbar-nav navbar-right"> 
                <li><a href="checkout.php"> <img src="cart.png" alt="Cart Icon" style="width:32px;height:32px;"> </a></li>
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
              <p><a class="btn btn-lg btn-primary" href="#" role="button" >Learn more</a></p>
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
                    <form action="<?php session_start(); echo "KidBoy.php?category=".$_GET['category']; $_SESSION['brandSelect']="True";?>" method="post">
                    <?php
                    		session_start();
								$dbhost = 'localhost';
								$dbuser = 'root';
								$dbpass = 'mukta3396';

								$conn = mysql_connect($dbhost, $dbuser, $dbpass);

								if(! $conn ) {
									die('Could not connect: ' . mysql_error());
								}
					
								$sql = "SELECT DISTINCT(ibrand_name) from Item WHERE cat_id='$_GET[category]' ";
								mysql_select_db('plethora');
								$retval = mysql_query( $sql, $conn );

								if(! $retval ) {
									die('Could not get data: ' . mysql_error());
								}

								while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
									?>

												
												
								             <input type="radio" name="ibrand_name" value="<?php echo $row['ibrand_name']; ?>" > <?php echo $row['ibrand_name']; ?><br>
								            
							<?php }

				mysql_close($conn);
			?>
					 <input type="submit" value="GO!" class="btnAddAction" /> 
     				</form>

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
                    
				 <form oninput="x.value=parseInt(a.value)" action="<?php session_start();  echo "KidBoy.php?category=".$_GET['category'];  $_SESSION['priceSelect']="True";?>" method="post">
						<p>
						<input type="range" min=100 max=26000 id="a" name="a" value="50"></p>
						<p><output align="center" name="x" for="a b"></output></p>
						<input type="submit" value="GO!" class="btnAddAction" /> 
     				</form>

                </div>

            </div>

        </div>

    </div>


            </div>
           <div class="col-md-10">
          <div class="row">
           
          	   <?php
          	   session_start();
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = 'mukta3396';
		
					$conn = mysql_connect($dbhost, $dbuser, $dbpass);
		
					if(! $conn ) {
						die('Could not connect: ' . mysql_error());
					}
					$category=$_SESSION['category'];
					if($_POST[ibrand_name] && $_POST[a]){
					$minprice=$_POST[a]-500;
					$maxprice=$_POST[a]+500;
					echo "<script> alert('hello'); </script>";
					$brand=$_POST[ibrand_name];
               $sql = "SELECT * from Item WHERE  price>='$minprice' and price<='$maxprice' and ibrand_name='$_POST[ibrand_name]' and cat_id='$_GET[category]'";
            
               }
					else if($_POST[ibrand_name]){
					$brand=$_POST[ibrand_name];
               $sql = "SELECT * from Item WHERE ibrand_name='$_POST[ibrand_name]' and cat_id='$_GET[category]'";
            
               }
               else if($_POST[a]){
               
					$minprice=$_POST[a]-500;
					$maxprice=$_POST[a]+500;
					echo "<script> alert($minprice); </script>";
               $sql = "SELECT * from Item WHERE price>='$minprice' and price<='$maxprice' and cat_id='$_GET[category]'";
               }
               else
					$sql = "SELECT * from Item WHERE cat_id='$_GET[category]' ";

					mysql_select_db('plethora');
					$retval = mysql_query( $sql, $conn );
		
					if(! $retval ) {
						die('Could not get data: ' . mysql_error());
					}
		
					while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
						?>
					 <div class="col-sm-4 col-lg-4 col-md-4">
							
                        <div class="thumbnail">
                        <form method="post" action="addToCart.php">
                            <img src="<?php echo $row['picture']; ?>">
                            <input type="hidden" name="titem_id" value="<?php echo $row['item_id']; ?>">
                            <table table-layout="fixed">
                            <tr>
                            <th height="100"><?php echo $row['item_name']; ?></th>
                            <th><?php echo "Rs. ".$row['price']; ?></th>
                            </tr>
                            </table>
                            <table>
                            <tr>
                            <th> <input size="1" type="number" name="quantity" min="1" placeholder="Quantity"></th>
                            </table>
                            <table>
                            <tr>
                            <th><input type="submit" value="Add to cart" class="btnAddAction" /></form> </th>
                           	<th><form method="post" action="deleteFromCart.php">
                           	 <input type="hidden" name="titem_id" value="<?php echo $row['item_id']; ?>">
                        		<input type="submit" value="Delete" class="btnAddAction" />
                        </form></th>
                            </tr></table>             
                        </div>
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