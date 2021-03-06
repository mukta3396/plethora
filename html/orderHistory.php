
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

    <div class="container">

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
		
		</ul>
		<ul class="nav navbar-nav navbar-right">
		<li><a href="home.php">Go back to Home!<span class="badge badge-important"></span></a></li>
		</ul>
          </div><!-- /.navbar -->
      </div>

      <div class="row-fluid">
      	<div class="span12">
      		<h1>Order History</h1>
      	</div>
      </div>
		<form oninput="pricePerItem.value=parseInt(quantity.value)*parseInt(price.value)" method="post" >
      <div class="row-fluid">
      	<div class="span12">
      		<div class="block">
                
                <div class="block-content collapse in">
                    <div class="span12">
                        <table class="table table-striped table-hover">
                        	<tr>
                        		<th>Image</th>
                        		<th>Title</th>
                        		<th>Price</th>
                        		<th>Quantity</th>
                        		<th>Total</th>
                        		</tr>
                        		 <?php
                        		 	 session_start();
											 $dbhost = 'localhost';
											 $dbuser = 'root';
											 $dbpass = 'mukta3396';
									 
											 $conn = mysql_connect($dbhost, $dbuser, $dbpass);
									 
											 if(! $conn ) {
												die('Could not connect: ' . mysql_error());
											 }
								
											 $sql = "SELECT * from Item,Cart WHERE Item.item_id = Cart.itemid and Cart.orderid in (select order_id from Buyer where buyer_id in (select login_id from Login where uname= '$_SESSION[UserName]'))";

											 mysql_select_db('plethora');
											 $retval = mysql_query( $sql, $conn );
											 if(! $retval ) {
												die('Could not get data: ' . mysql_error());
											 }
									 		$total=0;
											 while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) { if($row['cat_id']!=19){
												?>
											   
								            	<tr>
								            		<td class="span1"><a href='javascript:;'><img src='<?php echo $row['picture']; ?>' /></a></td>
								            		<td class="span5"><?php echo $row['item_name']; ?>
								            		</td>
								            		<td class="span2"><?php echo $row['price']; ?></td>
								            		<td class="span2">
								            			<div class="row-fluid">
								            				<div class="span7">
								            				   <?php echo $row['quantity']; ?>
																	<input type="hidden" id="price" name="price" value="<?php $total=$total+($row['quantity']*$row['price']); echo $row['price']; ?>">
																	
								            					
								            				</div>

								            			</div>
								            			
								            		</td>
								            		<td class="span1"><?php echo $row['quantity']*$row['price']; ?></td>
								            	</tr>
										  <?php }
										  else {?>
										  <tr>
								            		<td class="span1"><?php 	echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>'; ?></td>
								            		<td class="span5"><?php echo $row['item_name']; ?>
								            		</td>
								            		<td class="span2"><?php echo $row['price']; ?></td>
								            		<td class="span2">
								            			<div class="row-fluid">
								            				<div class="span7">
								            				   <?php echo $row['quantity']; ?>
																	<input type="hidden" id="price" name="price" value="<?php $total=$total+($row['quantity']*$row['price']); echo $row['price']; ?>">
																	
								            					
								            				</div>

								            			</div>
								            			
								            		</td>
								            		<td class="span1"><?php echo $row['quantity']*$row['price']; ?></td>
								            	</tr>
										<?php }}
									mysql_close($conn);
								?>
								<tr>
                        		<th colspan="4"></th>
                        		<th><?php  echo $total; ?></th>
                        	</tr>
                        </table>
                        <hr />
                        <div class="row-fluid">
                        	<div class="span6">
                        		<div class="row-fluid">
                        			
                        			
                        		</div>
                        	</div>
                        </div>
                    </div>
                </div>
            </div>
      	</div>
      </div>
   </form>


      <hr>

      <div class="footer">
        <p>&copy; Company 2016</p>
      </div>

    </div> <!-- /container -->

  </body>
</html>
