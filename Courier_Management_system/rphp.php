<?php
   $Entrynumber=$_GET['Entrynumber'];
   $con=mysql_connect("localhost","root","");
   mysql_select_db("index",$con);
   $sql="select * from rentry where Entrynumber='$Entrynumber'"; 
   $result=mysql_query($sql);
   while($row=mysql_fetch_array($result))
{
  echo json_encode(
      array("message1" => $row['Name'], 
      "message2" => $row['Address'],
"message3" => $row['TAddress'],
"message4" => $row['PinCode'],
"message5" => $row['ContactNo'],
"message6" => $row['Weight'],
"message7" => $row['TotalAmt'])

 );
}
   
?>   
  










 