<?php
  $name=$_GET['name'];
   $address=$_GET['address'];
   $email=$_GET['email'];
   $contactno=$_GET['contactno'];
  $identity=$_GET['identity'];
  $password=$_GET['password'];
  $officepin=$_GET['officepin'];
   
   
   $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
   $sql="insert into addemo values('$name','$address','$email','$contactno','$identity','$password','$officepin')";
   $rsesult=mysql_query($sql);
   echo "Record is Saved";
?>   
                  