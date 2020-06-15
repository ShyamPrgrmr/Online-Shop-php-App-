<?php
require 'database.php';

$ke=$_POST['dat'];
$i = 0;
$key="%".$ke."%";

session_start();
$client = $_SESSION['clname'];
		$sql="SELECT * FROM cl2.itemdata where itemname like '$key'";
		if($conn->query($sql))
         { 
   
                $result = $conn -> query($sql);
                if($result-> num_rows > 0)
                {

                  while($row = $result-> fetch_assoc())
                  {

                  	$sh = $row['merusername'];
                  	$sq = "select shname from cl2.merchants where username='$sh'";
                  	$re = $conn -> query($sq);
                  	$ro = $re-> fetch_assoc();

                  	$pass = $row["itemname"]."!".$row["price"].">".$sh."@".$ro["shname"]."/";

                  	
                  		
                  	$i=$i+1;
                    echo "<tr><td>$i</td><td>".$ro["shname"]."</td><td>".$row["itemname"]."</td><td>".$row["itemdis"]."<td>".$row["price"]."</td>Rs</td><td><button class='btn btn-sm btn-primary'  id='order' price='".$row["price"]." Rs.' shopid='$sh' shopname='".$ro["shname"]."' name='".$pass."' onclick='ordernow(this.name);'>order!</button></td></tr>";
                  }
                }
                else
                {
                	echo "no data";
                }
                  
                
            }

?>