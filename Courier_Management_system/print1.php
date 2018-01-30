

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
   $sql="select * from rentry values('$Entrynumber','$Name','$Address','$TAddress','$PinCode','$Contactno','$Weight','$TotalAmt')";
   $rsesult=mysql_query($sql);

echo "<br><br>";
echo "<b><center>Entry number:$Entrynumber</center></b><br>";
echo "<b><center>Name:$Name</center></b><br>";
echo "<b><center>Address:$Address</center></b><br>";
echo "<b><center>TAddress:$TAddress</center></b><br>";
echo "<b><center>PinCode:$PinCode</center></b><br>";
echo "<b><center>Contactno:$Contactno</center></b><br>";
echo "<b><center>Weight:$Weight</center></b><br>";
echo "<b><center>TotalAmt:$TotalAmt</center></b></br>";
echo "<br>";

echo "<center>Sign:-</center>";
?>

