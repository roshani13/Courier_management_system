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
                 window.location="1page.php";
           });
          });
       </script>
         
       <script type="text/javascript">
          $(document).ready(function () {
            $("#save").click(function () {
          

               var name= $("#name").val();
               var address=$("#address").val();
               var email=$("#email").val();
               var contactno=$("#contactno").val();
              
               var identity=$("#identity").val();
               var  password=$("#password").val();
               var officepin=$("#officepin").val();
              
              
               
               var data1="name="+name+"&address="+address+"&email="+email+"&contactno="+contactno+"&identity="+identity+"&password="+password+"&officepin="+officepin;
              var flag=0; 
       if (name == '') 
       {
         alert("name should not empty");
         flag=1;
         $("#name").focus();  
       }

         
               
               
                    $.ajax({
                        
                        url:"adphp.php",
                            data:data1,
                            success: function(result){
                                alert(result);
                              $("#name").val("");
                              $("#address").val();
                              $("#email").val();
                              $("#contactno").val();
                             
                              $("#identity").val();
                              $("#password").val();
                              $("#officepin").val();
                            } 
              });
            
          
            });
         });
      
       </script>



</head>
<body style="background-color:skyblue">

 
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
       
        <li><a href="trackclient1.php"><span class="glyphicon glyphicon-leaf"></span> Tracking</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="aboutc.php"><span class="glyphicon glyphicon-cog"></span> About</a></li>
        <li><a href="help.php"><span class="glyphicon glyphicon-leaf"></span> Help</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
<div clas="row">
<b><h2 style="color:crimson;text-align:center">Admin Registration</b></h2><br>

    <div class="col-sm-2">
    </div>
      
<div class="col-sm-8">

  <div class="form-group">
    <label class="control-label col-sm-3" for="name">Name:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="name" >
  </div>
  </div>
  <div class="col-sm-3">
   </div><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="address">Admin address:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="address" >
  </div>
 </div>
  <div class="col-sm-3">
 </div><br><br>


<div class="form-group">
    <label class="control-label col-sm-3" for="email">Email:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="email" >
  </div>
 </div>
  <div class="col-sm-3">
 </div><br><br>


  <div class="form-group">
    <label class="control-label col-sm-3" for="contactno">Contact No:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="contactno" >
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br>

   
 <div class="form-group">
    <label class="control-label col-sm-3" for="identity">Id:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="identity" >
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  <div class="form-group">
    <label class="control-label col-sm-3" for="password">Password:</label>
     <div class="col-sm-6">
      <input type="password" class="form-control" id="password" >
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

<div class="form-group">
    <label class="control-label col-sm-3" for="officepin">Office Pin:</label>
     <div class="col-sm-6">
      <input type="text" class="form-control" id="officepin" >
  </div>
 </div>
  <div class="col-sm-3">
    </div><br><br><br>

  
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <button type="button" class="btn  btn-success btn-lg " id="save">save</button>&nbsp&nbsp&nbsp&nbsp
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