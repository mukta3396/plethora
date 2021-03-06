<!-- <?php session_start(); echo $_SESSION['UserName']; ?>-->

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
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <![endif]-->
  </head>

  <body>

         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#"> <img src="logo.png" alt="Plethora logo" style="width:180px;height:32px;"> </a></li>
             
    </li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
             <li style="color:#9c27b0;font-family:verdana;"><a href="logout.php"> <?php session_start(); echo $_SESSION['UserName']; ?></a></li>
              <li><a href="login.php"> <img src="user.png" alt="User Icon" style="width:32px;height:32px;"> </a></li>
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
          <img class="first-slide" src="discount1.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Fresh sales</h1>
              <p>Best Discounts!</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="carousel_discount2.jpeg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Best Brands</h1>
              <p>Comfort and style</p>
              <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="discount3.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Lowest Prices</h1>
             
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
           <div class="col-md-10">
          <div class="row">
           
           
              <div class="row-fluid">
      	
      	<div class="span6">
      		<div class="block">
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><h1>The product to be uploaded:</h1></div>
                </div>
                <div class="block-content collapse in">
                    <div class="span12">
                        <form class="form-horizontal" method="post" enctype="multipart/form-data" >
                          <div class="control-group">
                          		<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
										<input type="hidden" name="seller" id="seller" value="<?php echo $_SESSION['UserName']; ?>" >
                                <label for="pname">The product Name</label><br>
                                <input type="text" id="pname" name="pname" value="" placeholder="Product Name">
                          </div>

                          <div class="control-group">
                                <label for="price">The product price</label><br>
                                <input type="number" min="1" id="price" name="price" value="" placeholder="Price">
                          </div>
                           <div class="control-grousp">
                                <label for="userfile">The product image to be uploaded:</label>
                                <input type="file" id="userfile" name="userfile" value="" placeholder="Image"><br>
                          </div>
								
                          <div class="control-group">
						    <div class="controls">
						        <button type="submit" class="btn btn-primary">Submit</button>
						    </div>
						  </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
								<?php
								if($_FILES['userfile']['size'] > 0)
								{
								$fileName = $_FILES['userfile']['name'];
								$tmpName  = $_FILES['userfile']['tmp_name'];
								$fileSize = $_FILES['userfile']['size'];
								$fileType = $_FILES['userfile']['type'];
								$seller= $_POST['seller'];
								$pname= $_POST['pname'];
								$price= $_POST['price'];
								echo "<br> $price";

								$fp      = fopen($tmpName, 'r');
								$content = fread($fp, filesize($tmpName));
								$content = addslashes($content);
								fclose($fp);

								if(!get_magic_quotes_gpc())
								{
									 $fileName = addslashes($fileName);
								}


								$con = mysqli_connect("localhost","root","mukta3396","plethora");
								$sql1="SELECT item_id FROM Item ORDER BY item_id DESC LIMIT 1";
								$result=mysqli_query($con,$sql1);
								$row=mysqli_fetch_array($result,MYSQL_NUM);
								$id=$row[0]+1;
								$seller=$seller-1;
								$query2 = "INSERT INTO Seller (seller_id, sitem_id ) ".
								"VALUES ('$seller', '$id')";
								mysqli_query($con,$query2);
								$query = "INSERT INTO Item (item_id,item_name, cat_id, price, picture,ibrand_name) VALUES ('$id','$pname',19,'$price', '$content','-')";
								$i =mysqli_query($con,$query);
								echo "<br> $i";
							
								echo "<br>File $fileName product uploaded!<br>";
								}
								?>
								<h2> The previous products uploaded:</h2>
								<?php
								// if id is set then get the file with the id from database
								$con = mysqli_connect("localhost","root","mukta3396","plethora");
								$query = "SELECT * from Item where item_id in (select sitem_id from Seller where seller_id in (select login_id from Login where uname='$_SESSION[UserName]'))";

								$result = mysqli_query($con,$query);?>
								<table class="table table-striped table-hover">
                        	<tr>
                        		<th>Image</th>
                        		<th>Title</th>
                        		<th>Price</th>
                        		</tr>
                        <?php
								while(list($id,$name, $type, $price,$image,$brand) = mysqli_fetch_array($result)) { ?>
								<tr>
			            		<td class="span1"><?php 	echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'"/>'; ?></td>
			            		<td class="span5"><?php echo $name; ?>
			            		</td>
			            		<td class="span2"><?php echo $price; ?></td>
			            		
			            	</tr> <?php
								
								}
								
									mysql_close($conn);
								?>

							</table>
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

