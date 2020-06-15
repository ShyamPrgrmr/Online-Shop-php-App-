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
                $sql="select * from cl2.order where merusername='$shopid' and accept = 'no'";
                $result = $conn -> query($sql);
                if($result-> num_rows > 0)
                {
                  while($row = $result-> fetch_assoc())
                  {
                  	$i=$i+1;
                    $senddata = $row["custname"]."&".$row["itemname"]."@".$row["price"]."/".$row["quantity"].":".$row["custaddress"]."*";


                    echo "<tr><td>$i</td><td>".$row["custname"]."</td><td>".$row["custphone"]."</td><td>".$row["custaddress"]."</td><td>".$row["itemname"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td><td><button class='bt btn-primary btn-sm' name='$senddata' onclick='accept(this.name);'>Accept</button></td></tr>";
                  }
                }
                else
                {
                	echo "no data";
                }
               
              }
?>