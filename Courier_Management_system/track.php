<html>
<head>
   <link rel="stylesheet" href="./css/bootstrap.css">
       <script type="text/javascript" src="./js/jquery.js"></script>
       <script type="text/javascript" src="./js/bootstrap.min.js"></script>  
        <link rel="stylesheet" href="./css/bootstrap.css">
       <script type="text/javascript" src="./js/jquery.js"></script>
       <script type="text/javascript">
          $(document).ready(function () {
            $("#Cancle").click(function () {
                 window.location="newhome.php";
           });
          });
       </script>
       
</head>
<body background="./Background-images/img30.jpg" >

  <form  method=GET action=read123.php class="form-horizontal" role="form">
      <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
   
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
          
        </li>
        
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
    <b><h1 style="color:aquamarine;text-align:center"> Welcome To Track</b></h1>
      </div>   
      </div><br>
 
      <div style='border-style:solid; text-align:center;background-color:lavender ;padding-left:15px'><br><br>
      <div class="form-group">
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h4 label class="control-label col-sm-3" for="Tracking">Tracking:</h4></label><br>
     <div class="col-sm-5">
      <input type="text" class="form-control" name="Entrynumber" placeholder="enter entry number">
  </div>
 </div>
  <div class="col-sm-4">
    </div><br>

  <div class="form-group">
    <a href="trackinghelp.php"><h4 style="text-align:center;color:navy" label class="control-label col-sm-10" for="Help Me">*Help Me</a></h4></label>
     <div class="col-sm-1">
     </div>
 </div>
  <div class="col-sm-1">
    </div><br>

&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
<button type=submit class="btn btn-active btn-lg block " >Go</button>
&nbsp&nbsp&nbsp&nbsp <button type=button class="btn btn-active btn-lg block" id="Cancle">Cancle</button><br><br>
</div>
     </div>
   </div>
     
   <DIV class="COL-SM-3">
   </DIV>
    
</form>
 </body>
</html>