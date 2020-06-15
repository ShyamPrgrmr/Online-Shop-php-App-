<?php

             require 'database.php';
              if(mysqli_connect_error())
              {
              echo('Connect error ('.mysqli_connect_error());
              }
              else
              {
                session_start();
                $shopid = $_SESSION['shusername'];
                $i=0;
                $sql="select * from cl2.itemdata where merusername='$shopid'";
                $result = $conn -> query($sql);
                if($result-> num_rows > 0)
                {
                  while($row = $result-> fetch_assoc())
                  {
                  	$i=$i+1;
                    echo "<tr><td>$i</td><td>".$row["itemname"]."</td><td>".$row["itemdis"]."</td><td>".$row["price"]." Rs.</td><td><button class='btn btn-sm btn-primary' name='".$row["itemname"]."' id='deleteitem' onclick='del();'>delete</button></td></tr>";
                  }
                }
                else
                {
                	echo "no data";
                }
               
              }
?>