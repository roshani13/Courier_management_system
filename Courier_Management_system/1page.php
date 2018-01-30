

<html>
<head>
 <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="./js/jquery.js"></script>
  <script src="./js/bootstrap.min.js"></script>
<script type="text/javascript">
          $(document).ready(function () {
            $("#help").click(function () {
                 window.location="help.php";
           });
          });
       </script>
   <script type="text/javascript">
          $(document).ready(function () {
            $("#About").click(function () {
                 window.location="about.php";
           });
          });
       </script>
      

    <script>

      function closeMe()
      {
        alert("ok");
        var win=window.open("","_self");
         win.close();
       }
     </script>


</head>
<BODY background="./Background-images/img46.jpg"><br><br><br>
<center><b><h1 style="color:red">WELCOME TO COURIER SYSTEM</h1></b></center>
<div class="container">
<div clas="row"><br><br><br><br>
<div class="col-sm-1">

 
</div>
 

<div class="form-group">  
<div class="col-sm-10">

    <a href="firstpage.php"><b><h2 style="text-align:left;color:red" label class="control-label col-sm-10" for="AdminLogin">*Admin Login</a></b></h2></label>
     
   <a href="admin.php"><b><h2 style="text-align:center;color:red" label class="control-label col-sm-10" for="CreateNewAdmin">*Create New Admin</a></b></h2></label>
      
    <a href="trackclient1.php"><b><h2 style="text-align:right;color:yellow"  label class="control-label col-sm-10" for="ClintArea">*Client Area</a></b></h2></label>
</div>
</div>
<div class="col-sm-1">
</div>
     

</div>
</div><br><br><br><br>

 <p align="center"><button type="button" class="btn btn-primary btn-lg" id="help">Help</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="button" class="btn btn-primary btn-lg" id="About">About</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<input type="button"  class="btn btn-primary btn-lg" id="exit" value="Exit" onClick="closeMe();"/></p>

</body>
</html>

