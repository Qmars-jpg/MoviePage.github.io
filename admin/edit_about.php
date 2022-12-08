<?php
session_start();
if(!isset($_SESSION["sess_user"])){
 header("Location: index.php");
}
else
{
?>




<?php
include("blocks3/db.php");
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    
    }
   
?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet"type="text/css" href="style3.css"  >
    <title>Bootstrap demo</title>
  </head>
  <body>
  <? include("blocks3/header.php");?>
  
  <section class="forwhom">
    <div class="container">
     
      <div class="row bg-warning">
        <div class="col-md-6 col-sm-12">

        <? include("blocks3/leftbr.php");?>

        </div>
 
        <div class="col-md-6 col-sm-12 bg-warning">

  <? 
 
 if(!isset($id)){    
                                $result=mysqli_query ($db,"SELECT title,id FROM about");
                                $myrow=mysqli_fetch_array($result);
 
                 do{
                     printf("<p><a href='edit_about.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
                  }
 
                  while($myrow=mysqli_fetch_array($result)); 
 
                  }
                  else{
 
                     $result=mysqli_query($db,"SELECT * FROM about WHERE id=$id" );
                                $myrow=mysqli_fetch_array($result);
 
 
 
 

                     
 
 
                                
                                                       
 print <<< HERE
 
 <div class="col-md-6 col-sm-12">
 
 <form name="form1" method="post" action="update_about.php">

<div class="col-md-6 col-sm-12">
             <label> Isert title of contacts<br>
             <input  value=" $myrow[title]"type="text" name="title" id="title">
            </label>
          </div>
         
         <div class="col-md-6 col-sm-12">
             <label> Insert text of the contacts <br>
            
             <textarea name="text" id="text" cols="30" rows="20"> $myrow[text]</textarea>
             </label>
         </div>
        
        <div>
         <input name="id" type="hidden" value=" $myrow[id]">
         </div>

         <div class="col-md-6 col-sm-12">

          <button class="btn btn-primary" type="submit">Save changes</button><br> 
        </div>

       
         
       </form>    
                                             
        
     </div>
       
              
HERE; 
}    
 

?>

        </div>      

</div>
</div>
</section>
       

<?include("blocks3/footer.php"); ?>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </body>
</html>
<?php
}
?>