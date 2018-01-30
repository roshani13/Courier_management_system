<?php
   $Entrynumber=$_GET['Entrynumber'];
   $CBName=$_GET['CBName'];
   $date=$_GET['date'];
   $time=$_GET['time'];
  
   $vehicle=$_GET['vehicle'];  
   
   
   $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
   $sql="insert into shipment values('$Entrynumber','$CBName','$date','$time','$vehicle')";
   $rsesult=mysql_query($sql);
   echo "Record is Saved";
?>   

                              