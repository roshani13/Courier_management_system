



<?php
  $q=$_GET['Entrynumber'];
 $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
  $sql="delete   from demo1 where Entrynumber='$q' ";
  $res=mysql_query($sql);
  
  echo "Record is delete";
  mysql_close();
 ?>


