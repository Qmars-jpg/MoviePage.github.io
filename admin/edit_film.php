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





<!Doctype html>
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
 
        <div class="col-md-6 col-sm-12  bg-warning">

  <? 
 
 if(!isset($id)){    
                                $result=mysqli_query ($db,"SELECT  title,id FROM film");
                                $myrow=mysqli_fetch_array($result);
 
                 do{
                     printf("<p><a href='edit_film.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["title"]);
                  }
 
                  while($myrow=mysqli_fetch_array($result)); 
 
                  }
                  else{
 
                     $result=mysqli_query($db," SELECT * FROM film WHERE id=$id" );
                                $myrow=mysqli_fetch_array($result);
 
 
 
 

                     
 
                               
 
                                
                                                       
print <<< HERE
<div class="col-md-6 col-sm-12">
 
<form name="form1" method="post" action="update_film.php">

<div class="col-md-6 col-sm-12">
            <label> Isert name of a film <br>
            <input  value=" $myrow[title]"type="text" name="title" id="title">
           </label>
         </div>
        
        <div class="col-md-6 col-sm-12">
            <label> Insert picture of a film <br>
           
            <textarea name="img" id="img" cols="10" rows="10"> $myrow[img]</textarea>
            </label>
        </div>
        <div class="col-md-6 col-sm-12">
            <label> Insert video of a film <br>
           
            <textarea name="video" id="video" cols="10" rows="10"> $myrow[video]</textarea>
            </label>
        </div>
       
       <div>
        <input name="id" type="hidden" value=" $myrow[id]">
        </div>

        <div class="col-md-6 col-sm-12">

         <button class="btn btn-primary" type="submit"  value="Save changes" >Save changes</button><br> 
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </body>
</html>
<?php
}
?>