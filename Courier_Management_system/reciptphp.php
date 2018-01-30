<?php 
   $Entrynumber=$_GET['Entrynumber'];
   $Name=$_GET['Name'];
   $Address=$_GET['Address'];
   $TAddress=$_GET['TAddress'];
   $PinCode=$_GET['PinCode'];
   $Contactno=$_GET['Contactno'];
   $Weight=$_GET['Weight'];
   $TotalAmt=$_GET['TotalAmt'];
   
   $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
   $sql="insert into rentry values('$Entrynumber','$Name','$Address','$TAddress','$PinCode','$Contactno','$Weight','$TotalAmt')";
   $result=mysql_query($sql);

   echo "Record is Saved";

?>   
