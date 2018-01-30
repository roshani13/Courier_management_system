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
            $("#Save").click(function () {
               
               var Entrynumber = $("#Entrynumber").val();
               var PrepaidModelRs=$("#PrepaidModelRs").val();
               var Weight=$("#Weight").val();
               var Name=$("#Name").val();
               var Address=$("#Address").val();
               var Email=$("#Email").val();
               var ContactNo=$("#ContactNo").val();
               var TName=$("#TName").val();
               var TAddress=$("#TAddress").val();
               var POName=$("#POName").val();
               var PinCode=$("#PinCode").val();
               var City=$("#City").val();
               var DOR=$("#DOR").val();
               var ServiceTax=$("#ServiceTax").val();
               var TotalAmt=$("#TotalAmt").val();
               
               var data1="Entrynumber="+Entrynumber+"&PrepaidModelRs="+PrepaidModelRs+"&Weight="+Weight+"&Name="+Name+"&Address="+Address+"&Email="+Email+"&ContactNo="+ContactNo+"&TName="+TName+"&TAddress="+TAddress+"&POName="+POName+"&PinCode="+PinCode+"&City="+City+"&DOR="+DOR+"&ServiceTax="+ServiceTax+"&TotalAmt="+TotalAmt;
              var flag=0; 
       if (Entrynumber == '') 
       {
         alert("Entrynumber should not empty");
         flag=1;
         $("#Entrynumber").focus();  
       }

           
         if (Weight == '') 
       {
         alert("Weight should not empty");
         flag=1;
         $("#Weight").focus();  
       }  


             if (Name == '') 
       {
         alert("Name should not empty");
         flag=1;
         $("#Name").focus();  
       }       


           if (ContactNo == '') 
       {
         alert("ContactNo should not empty");
         flag=1;
         $("#ContactNo").focus();  
       }       
     

           
           if (PinCode == '') 
       {
         alert("PinCode should not empty");
         flag=1;
         $("#PinCode").focus();  
       }       

          
           if (TotalAmt == '') 
       {
         alert("TotalAmt should not empty");
         flag=1;
         $("#TotalAmt").focus();  
       }       

                    $.ajax({
                        
                        url:"record2.php",
                            data:data1,
                            success: function(result){
                                alert(result);
                              $("#Entrynumber").val("");
                              $("#PrepaidModelRs").val("");
                              $("#Weight").val("");
                              $("#Name").val("");
                              $("#Address").val("");
                              $("#Email").val("");
                              $("#ContactNo").val("");
                              $("#TName").val("");
                              $("#TAddress").val("");
                              $("#POName").val("");
                              $("#PinCode").val("");
                              $("#City").val("");
                              $("#DOR").val("");
                              $("#ServiceTax").val("");
                              $("#TotalAmt").val("");
                              
                              

                              
                            } 
              });
          
            });
         });
       </script>
<script type="text/javascript">
          $(document).ready(function () {
            $("#calculate").click(function () {
               
               var PrepaidModelRs=$("#PrepaidModelRs").val();
               var Weight=$("#Weight").val();
               var ServiceTax=$("#ServiceTax").val();
               
               var data1="&PrepaidModelRs="+PrepaidModelRs+"&Weight="+Weight+"&ServiceTax="+ServiceTax;
       


               $.ajax({
                            url:"calculate.php",
                            data:data1,
                            success: function(result){
                                
                               
                              $("#TotalAmt").val(result);
                              

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
        <li><a href="help.php"><span class="glyphicon glyphicon-leaf"></span> Help</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-cog"></span> About</a></li>
        <li><a href="firstpage.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
<div clas="row">
<b><h2 style="color:crimson;text-align:center">Registration Form</b></h2><br>
      
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
    <label class="control-label col-sm-3" for="PrepaidModelRs">RS per gram:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="PrepaidModelRs" placeholder="Enter Rs">
  </div>
 </div>
  <div class="col-sm-3">
 </div><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="Weight">weight(grams):</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Weight" placeholder="Enter weight">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br>

   <b><h4 style="color:mediumvioletred">*FORM ADDRESS:</b></h4>
   <div class="form-group">
    <label class="control-label col-sm-3" for="Name">Name:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Name" placeholder="Enter Name">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="Address">Address:</label>
     <div class="col-sm-6">
      <TEXTAREA width=300 height=400 name=Address class="form-control" id="Address" placeholder="Enter Address"></TEXTAREA>
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="Email">Email:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="Email" placeholder="Enter Email Address">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="ContactNo">Contact No:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="ContactNo" placeholder="Enter Contact No">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

<b><h4 style="color:mediumvioletred">*TO ADDRESS:</b></h4>
   <div class="form-group">
    <label class="control-label col-sm-3" for="TName">Name:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="TName" placeholder="Enter Name">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="TAddress">Address:</label>
     <div class="col-sm-6">
      <TEXTAREA width=300 height=400 name=TAddress class="form-control" id="TAddress" placeholder="Enter Address"></TEXTAREA>
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="POName">PO Name:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="POName" placeholder="Enter post office Name">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="PinCode">Pin Code:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="PinCode" placeholder="Enter Pin code">
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br><br>
      
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button type="Save" class="btn  btn-success btn-lg " id="Save">Save</button>&nbsp&nbsp&nbsp&nbsp
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  <button type="Cancle" class="btn  btn-success btn-lg " id="Cancle">Cancle</button>&nbsp&nbsp&nbsp&nbsp
   
</div>

  
    
<div class="col-sm-4">
  <div class="form-group">
    <label class="control-label col-sm-3" for="City">City:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="City" placeholder="Enter City">
  </div>
   <div class="col-sm-3">
  </div>
 </div><br><br><br>

    <div class="form-group">
   <!--date of registration-->
    <label class="control-label col-sm-2" for="DOR">DOR:</label>
     <div class="col-sm-8">
      <input type="date" class="form-control" id="DOR" placeholder="dd/mm/yyyy">
  </div>
  <div class="col-sm-2">
  </div>
 </div><br><br><br>

   <b><h4 style="color:mediumvioletred">*Tariff Calculated:</b></h4>

  

  <div class="form-group">
    <label class="control-label col-sm-5" for="ServiceTax">Service Tax:</label>
     <div class="col-sm-4">
      <input type="text" class="form-control" id="ServiceTax" >
  </div>
   <div class="col-sm-3">
  </div>
   </div><br><br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<button type="Cancle" class="btn  btn-success btn-lg " id="calculate">calculate</button><br><br>
  <div class="form-group">
    <label class="control-label col-sm-5" for="TotalAmt">Total Amt:</label>
     <div class="col-sm-4">
      <input type="text" class="form-control" id="TotalAmt" >
  </div>
   <div class="col-sm-3">
  </div>
 </div><br><br>
 
   


</div>
</div>
</div>
                   
  

</body>
</html>