<html>
<head>

</head>
<body background="./Background-images/img2.jpg"><br><br>
<center><b><h1 style='color:violet'>Your courier status</b></h1></center><br><br>
<br><br>


<?php
  $q=$_GET['Entrynumber'];
  mysql_connect("localhost","root","");
  mysql_select_db("index");
  $sql="select * from demo1 where Entrynumber='".$q."'";
  $res=mysql_query($sql);
  echo "<center><table   style='text-align:center;background-color:lavenderBlush' border=8 width=700 height=150><tr><th style=color:red>Entrynumber</th><th style=color:red>date</th><th style=color:red>time</th><th style=color:red>description</th></tr>";
  while($row=mysql_fetch_array($res))
  {
    echo "<tr>";
    echo "<td>".$row['Entrynumber']."</td>";
    echo "<td>".$row['date']."</td>";
    echo "<td>".$row['time']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "</tr>";
  }
  echo "</table></center>";

  mysql_close();
 ?>
</body>
</html>
