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
								echo $price;

								$fp      = fopen($tmpName, 'r');
								$content = fread($fp, filesize($tmpName));
								$content = addslashes($content);
								fclose($fp);

								if(!get_magic_quotes_gpc())
								{
									 $fileName = addslashes($fileName);
								}


								$con = mysqli_connect("localhost","root","mukta3396","plethora");

								$query = "INSERT INTO Item (item_name, cat_id, price, picture,ibrand_name ) ".
								"VALUES ('$pname', '19', '$price', '$content','-')";

								
								mysqli_query($con,$query);
								$sql1="SELECT item_id FROM Item ORDER BY item_id DESC LIMIT 1";
								$result=mysqli_query($con,$sql1);
								$row=mysqli_fetch_array($result,MYSQL_NUM);
								$id=$row[0]+1;

								$query = "INSERT INTO Seller (seller_id, sitem_id ) ".
								"VALUES ('$seller', '$id')";

								mysqli_query($con,$query);
								echo "<br>File $fileName product uploaded!<br>";
								}
								?>
