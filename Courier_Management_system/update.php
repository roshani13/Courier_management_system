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
       <script type="text/javascript">
          $(document).ready(function () {
            $("#update").click(function () {
             
               var Entrynumber = $("#Entrynumber").val();
               var date=$("#date").val();
               var time=$("#time").val();
               var description=$("#description").val();
               
               
               var data1="Entrynumber="+Entrynumber+"&date="+date+"&time="+time+"&description="+description;
              var flag=0; 
       if (Entrynumber == '') 
       {
         alert("Entrynumber should not empty");
         flag=1;
         $("#Entrynumber").focus();  
       }

         
               
               
                    $.ajax({
                        
                        url:"updatephp.php",
                            data:data1,
                            success: function(result){
                                alert(result);
                              $("#Entrynumber").val("");
                              $("#date").val("");
                              $("#time").val("");
                              $("#description").val("");
                       
                            } 
              });
            
          
            });
         });
      
       </script>
</head>
<body style="background-color:lavender">
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


<div class="container">
<div clas="row">
<b><h2 style="color:crimson;text-align:center">Updation Form</b></h2><br>

    <div class="col-sm-2">
    </div>
      
<div class="col-sm-8">

  <div class="form-group">
    <label class="control-label col-sm-3" for="Entrynumber">Entry Number:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Entrynumber" placeholder="Enter Number">
  </div>
  </div>
  <div class="col-sm-3">
   </div><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="date">Date:</label>
     <div class="col-sm-6">
      <input type="date" class="form-control" id="date" placeholder="Enter Rs">
  </div>
 </div>
  <div class="col-sm-3">
 </div><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="time">Time:</label>
     <div class="col-sm-6">
      <input type="time" class="form-control" id="time" placeholder="Enter time">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br>

   
   <div class="form-group">
    <label class="control-label col-sm-3" for="description">Description:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="description" placeholder="Enter description">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button type="button" class="btn  btn-success btn-lg " id="update">Update</button>&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <button type="button" class="btn  btn-success btn-lg " id="Cancle">Cancle</button>&nbsp&nbsp&nbsp&nbsp
   
</div>
<div class="col-sm-2">
</div>
   
</div>
</div>
</div>
                   
  

</body>
</html>