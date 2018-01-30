<html>
<head>
      <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js">    

    
       <script type="text/javascript">
          $(document).ready(function () {
            $("#Cancle").click(function () {
              
                 window.location="newhome.php";
           });
          });
       </script>
        
       
</head>

<BODY background="./images/quincy-courier-service_2.jpg">
 <form  method="GET" action="delete123.php" class="form-horizontal" role="form"> 
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="newhome.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-briefcase"></span>Admin Menu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="regform.php">Courier Registration Form</a></li>
            <li><a href="shipment1.php">Courier Shipment</a></li>
            <li><a href="delete.php">Courier Delete</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-briefcase"></span>Admin station<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="Update.php">Courier Update</a></li>
            <li><a href="track.php">Courier Status</a></li>
            <li><a href="receipt.php">Courier Delivered</a></li>
          </ul>
        </li>
        <li><a href="track.php"><span class="glyphicon glyphicon-leaf"></span> Tracking</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="about.php"><span class="glyphicon glyphicon-cog"></span> About</a></li>
        <li><a href="firstpage.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>


<DIV class="container">

<DIV class="row">
<DIV class="COL-SM-3">
</DIV>

<DIV class="COL-SM-6">

      <div class="form-group">
      <div class="col-sm-2">         
      </div>
      <div class="col-sm-10">
    <b><h1 style="color:navy;text-align:center"> Courier Delete</b></h1>
      </div>   
      </div><br><br><br>
 
      <div style="background-color:lavenderBlush; border-radius:10px"> <br><br>
      <div class="form-group">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h4 style="text-align:center;color:red"label class="control-label col-sm-5" for="Tracking" name="Entrynumber">Entry Number:</h4></label><br>
     <div class="col-sm-5">
      <input type="text" class="form-control"  name="Entrynumber" >

  </div>
 </div>
  <div class="col-sm-2">
    </div><br>

  <div class="form-group">
   
     <div class="col-sm-1">
     </div>
 </div>
  <div class="col-sm-1">
    </div><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
 <button type="submit" class="btn btn-active btn-lg block " id="Delete">Delete</button>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <button type="button" class="btn btn-active btn-lg block" id="Cancle">Cancle</button><br><br>
</div>
     </div>
   </div>
     
   <DIV class="COL-SM-3">
   </DIV>
    </form>
   </body>
</html>