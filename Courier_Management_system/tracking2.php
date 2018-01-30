<html>
<head>
 <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<BODY style="background-color:lightblue">

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

<!--........bg image....-->
<div class="container">
<div clas="row">
<div class="col-sm-2">
</div>

<div class="col-sm-8">
<b><h2 style="text-align:center ;color:red">CURRENT REGISTRATION</h2></b> <BR>
  <div class="col-sm-4">
    <b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDate</b><br><br>
    <input type="date" class="form-control" id="date" placeholder="dd/mm/yyyy">
  </div>
  
  <div class="col-sm-6">
   <b>&nbsp&nbsp&nbsp&nbsp&nbspDescription</b>
  </div>
    
  <div class="col-sm-2">
  <b>Time</b>
  </div>


</div>
</div>
<div class="col-sm-2">
</div>
</div>
</div>
</body>
</html>

