<?php
   $Entrynumber=$_GET['Entrynumber'];
   $PrepaidModelRs=$_GET['PrepaidModelRs'];
   $Weight=$_GET['Weight'];
   $Name=$_GET['Name'];
   $Address=$_GET['Address'];
   $Email=$_GET['Email'];
   $ContactNo=$_GET['ContactNo'];
   $TName=$_GET['TName'];
   $TAddress=$_GET['TAddress'];
   $POName=$_GET['POName'];
   $PinCode=$_GET['PinCode'];
   $City=$_GET['City'];
   $DOR=$_GET['DOR'];
   
   $ServiceTax=$_GET['ServiceTax'];
   $TotalAmt=$_GET['TotalAmt'];
   
   $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
   $sql="insert into rentry values('$Entrynumber',$PrepaidModelRs,$Weight,'$Name','$Address','$Email','$ContactNo','$TName','$TAddress','$POName','$PinCode','$City','$DOR',$ServiceTax,$TotalAmt)";
   $rsesult=mysql_query($sql);
   echo "Record is Saved";
?>   

                              