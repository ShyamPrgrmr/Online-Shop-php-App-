<?php

require 'database.php';
                session_start();
                $shopid = $_SESSION['shusername'];
                $i=0;
                $sql="select * from cl2.delivery where merusername='$shopid'";
                $result = $conn -> query($sql);
                if($result-> num_rows > 0)
                {
                  while($row = $result-> fetch_assoc())
                  {
                  	$i=$i+1;

                    echo "<tr><td>$i</td><td>".$row["name"]."</td><td>".$row["phone"]."</td><td>".$row["address"]."</td><td><button class='bt btn-primary btn-sm' name='".$row["username"]."' onclick='deldeliveryboy(this.name);'>Delete</button></td></tr>";
                  }
                }
                else
                {
                	echo "no data";
                }
               
              

?>