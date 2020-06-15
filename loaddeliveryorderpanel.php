<?php

             require 'database.php';
              
                session_start();
                $delname = $_SESSION['deliname'];
                $shopname = $_SESSION['shopname'];
                

                $i=0;
                $sql="select * from cl2.order where merusername='$shopname' and accept = 'yes'";
                $result = $conn -> query($sql);
                if($result-> num_rows > 0)
                {
                  while($row = $result-> fetch_assoc())
                  {
                  	$i=$i+1;
                    $senddata = $row["custname"]."&".$row["itemname"]."/".$row["quantity"].":".$row["custaddress"]."*";


                    echo "<tr><td>$i</td><td>".$row["itemname"]."</td><td>".$row["quantity"]."</td><td>".$row["custname"]."</td><td>".$row["custphone"]."</td><td>".$row["custaddress"]."</td><td><button class='btn btn-sm btn-primary' name='$senddata' id='delivered' onclick='deliveredyes(this.name);'>Delivered</button></td></tr>";
                  }
                }
                else
                {
                	echo "no data";
                }
?>