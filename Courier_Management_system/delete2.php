<?php
   $Entry number=$_GET['Entrynumber']
   $con=mysql_connect("localhost","root","");
   mysql_select_db("track2015",$con);
   $sql="insert into emp values($Entry number);
   echo "Record is Saved";
?>   

                              