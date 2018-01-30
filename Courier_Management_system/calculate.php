<?php 
   
   $PrepaidModelRs=$_GET['PrepaidModelRs'];
   $Weight=$_GET['Weight'];
   $ServiceTax=$_GET['ServiceTax'];
   
   $amt=$PrepaidModelRs*$Weight+$ServiceTax;
    echo $amt;

?>   
