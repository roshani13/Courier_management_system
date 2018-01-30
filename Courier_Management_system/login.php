<?php
   $identity=$_GET['identity'];
  $password=$_GET['password'];
  $con=mysql_connect("localhost","root","");
  mysql_select_db("index",$con);
  $sql="select * from addemo";
  $result=mysql_query($sql);
  $flag=0;
  while($row=mysql_fetch_array($result))
  {
     if($identity==$row['id'] && $password==$row['password'])
        $flag=1;
  }
   if($flag==1)
       echo "1";
     else
        echo "<font color=Red><b>Invalid user</b></font>";
?>