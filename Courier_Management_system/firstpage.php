<HTML>
<HEAD>
  
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
            $("#login").click(function () {
               
              var identity= $("#identity").val();
               var password=$("#password").val();
                if (identity=='') {
                  $("#availability").html("");
                }
             else{
                      $.ajax({
                                  url:"login.php?identity="+identity+"&password="+password
                                }).done(function(data) {
                         if(data==1)
                         {
                           $(location).attr("href","http://localhost/index1/newhome.php");
                         }
                         else
                           $("#availability").html(data);
                });   
              } 
            });
          });
       </script>
 

</HEAD>
 <BODY background="./Background-images/img6.jpg">
  
    <div class="container">&nbsp&nbsp&nbsp
      <b><h1 style="text-align:center ;color:red"> Administrator  Area</h1></b> <BR>
    <div class="row">
    
 <div class="COL-SM-8"><BR>
    <img src="Images/20160106135007.jpg" class="img-responsive" alt="Cinque Terre" width="800" height="1100">
 </div>
  <div class="COL-SM-4"><BR><BR><BR>
    <div style="border-style:solid; padding-left:10px">  
      <b><h2 style="text-align:center ;color:blue">LOGIN</h2></b> <BR><BR> 
     
       <div class="form-group"> 
        <label class="control-label col-sm-4" for="identity">ID:</label>
          <div class="col-sm-8">
           <input type="text" class="form-control" id="identity" placeholder="Enter id">
    </div><br><br><br>


  <div class="form-group">
    <label class="control-label col-sm-4" for="password">Password:</label>
     <div class="col-sm-8">
      <input type="password" class="form-control" id="password" placeholder="Enter password">
  </div><br><br><br>
    <p align="center"><input type=checkbox name=name>Remember me</br></p>
  
  <div class="form-group">
    <p align="center"><button type="Login" class="btn btn-primary btn-lg" id="login">Login</button>&nbsp&nbsp
    <button type="Cancle" class="btn btn-primary btn-lg" id="Cancle">Cancle</button></p>
   <div id="availability" align="center"><font color=red></font></div>
   </div>  
     
  </div>
      </div>
     </dIV>
    </dIV>
   </div>
  </div>
  </div>

 </BODY>
</HTML>