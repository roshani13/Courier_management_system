<html>
<head>

   <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
  <script type="text/javascript">
          $(document).ready(function () {
            $("#Cancle").click(function () {
          
                 window.location="newhome.php";
           });
          });
       </script>
    


      <script type="text/javascript">
          $(document).ready(function () {
            $("#detail").click(function () {
     
               var Entrynumber = $("#Entrynumber").val();
          
               var flag=0; 
       
       
              $.ajax
                   ({
                    
                    url: "rphp.php?Entrynumber="+Entrynumber,
                    
                    
                   success: function(data)
                    {
                      var obj=JSON.parse(data);
                     $("#Name").val(obj.message1);
                     $("#Address").val(obj.message2);
                     $("#TAddress").val(obj.message3);
                     $("#PinCode").val(obj.message4);
                     $("#Contactno").val(obj.message5);
                     $("#Weight").val(obj.message6);
                     $("#TotalAmt").val(obj.message7);
           

                     }
                   });

         
            });
         });
       </script>

  

</head>
<body style="background-color:cornsilk">
<FORM method=GET action="print1.php"  class="form-horizontal" role="form">
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
        <li><a href="abou.php"><span class="glyphicon glyphicon-cog"></span> About</a></li>
        <li><a href="firstpage.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div clas="row">

<div class="col-sm-1">
</div>

<div class="col-sm-10">
<FORM class="form-horizontal" role="form">
 <b><h2 style="color:maroon; text-align:center">Receipt</b></h2>
 
 
       
  <div class="col-sm-8">
   
     
   <div class="form-group">
      <h5><label class="control-label  col-sm-6" for="Transport Way">Transport Way:</label></h5>
      <div class="col-sm-6">
       <select name="Transport" class="form-control">
       <option value="fgn-AIR">fgn-AIR</option>
       <option value="Railway">Railway</option>
       <option value="Ship">Ship</option>
       <option value="BUS">Bus</option>
        <option value="BIKE">Bike</option>
      </select>
      </div>
      </div><br>
   
   <div class="form-group">
    <label class="control-label col-sm-6" for="Entrynumber">Entry Number:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Entrynumber" name="Entrynumber" placeholder="Entrynumber">
    </div><br>
  </div>
  
    

      <div class="form-group"> 
    <div class="col-sm-offset-6 col-sm-8">
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
   <input type=button class="btn btn-Info " id="detail" value="detail">
    </div><br>
    </div> 
      
  <div class="form-group">
    <label class="control-label col-sm-6" for="Name">Name:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter Name">
    </div><br>
  </div>
  

  <div class="form-group">
    <label class="control-label col-sm-6" for="Address">From Address:</label>
     <div class="col-sm-6">
      <TEXTAREA width=300 height=400  class="form-control" id="Address" name="Address" placeholder="Enter Address"></TEXTAREA>
     </div><br>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-6" for="TAddress">To Address:</label>
     <div class="col-sm-6">
      <TEXTAREA width=300 height=400  class="form-control" id="TAddress" name="TAddress" placeholder="Enter Address"></TEXTAREA>
     </div><br>
  </div>

   <div class="form-group">
    <label class="control-label col-sm-6" for="PinCode">Pin Code:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="PinCode" name="PinCode" placeholder="Enter Pin Code">
    </div><br>
  </div>
 
   <div class="form-group">
    <label class="control-label col-sm-6" for="Contactno">Contact no:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Contactno" name="Contactno" placeholder="Enter Contact no">
    </div><br>
  </div>
     
  
  
<p align="center"><button type="submit" class="btn btn-info btn-lg" id="Print">Print</button>&nbsp&nbsp
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-info btn-lg" id="Cancle">Cancle</button></p>
</div>
  
  <div class="col-sm-4">
    <img src="images/SameDayDelivery.jpg" class="img-responsive" alt="Cinque Terre" width="450" height="300"><br><br><br>
     
      
    <div class="form-group">
    <label class="control-label col-sm-6" for="Weight">Weight:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Weight" name="Weight" placeholder="Weight">
    </div><br>
  </div>
   
   <div class="form-group">
    <label class="control-label col-sm-6" for="TotalAmt">Total Amt:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="TotalAmt" name="TotalAmt" >
    </div><br>
  </div>

  <div class="col-sm-3">
 </div>
 
</div><br><br>
</div>
</form>
 </div>
    <div class="col-sm-1">
  </div>
</div>
</div>
</body>
</html>