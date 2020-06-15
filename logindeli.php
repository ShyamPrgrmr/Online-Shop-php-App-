<?php
require 'database.php';

$usr=$_POST['usr'];
$pwd=$_POST['pwd'];

  			$sql="SELECT count(username) AS total FROM cl2.delivery where username='$usr' and password='$pwd'";
			  if($conn->query($sql))
          { 
        $result = $conn -> query($sql);
        $values=mysqli_fetch_assoc($result);
        $rowcount=$values['total'];
            

            if($rowcount==1)
            {

                $sql="select name,merusername from cl2.delivery where username='$usr' and password='$pwd'";
                  $result = $conn -> query($sql);
                if($result-> num_rows > 0)
                {
                  $row = $result-> fetch_assoc();
                  $send= $row['name'];
                  session_start();
                  $_SESSION['deliname'] = $send;
                  $_SESSION['shopname'] = $row['merusername'];
                }


                  echo "<input type='text' id='msg2' value='true' hidden>";
            }
            else
             {
             echo "<input type='text' id='msg2' value='false' hidden>";
            }
          }
        else
        {
        echo "Something went wrong";  
        }

?>