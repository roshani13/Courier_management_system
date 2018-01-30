<?php
   $Entrynumber=$_GET['Entrynumber'];
   $date=$_GET['date'];
   $time=$_GET['time'];
   $description=$_GET['description'];
  
   
   $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
   $sql="insert into demo1 values('$Entrynumber','$date','$time','$description')";
   $rsesult=mysql_query($sql);
   echo "Record is Saved";
?>   
                  
   