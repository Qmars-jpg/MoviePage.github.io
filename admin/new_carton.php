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

        <div class=" col-md-6 col-sm-12 bg-warning">
        <form name="form1" method="post" action="add_carton.php">
      <div class="col-md-6 col-sm-12">
                    <label> Isert picture of cartoon<br>
                    <input type="text" name="title" id="title">
                   </label>
                 </div>
                <div class="col-md-6 col-sm-12">
                    <label> Insert name of the cartoon <br>
                    <input type="text" name="img" id="img">
                    </label>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label> Isert video trailer of the cartoon<br>
                    <input type="text" name="video" id="video">
                   </label>
                </div>
               
                
                <div class="col-md-6 col-sm-12 mt-2">
                 <button class="btn btn-primary" type="submit">Submit form</button><br> 
  </div>

                   
                
              </form>                                             

        </div>

      
        
     
      </div>
    </div>
  </section>
              

  <?include("blocks3/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

  </body>
</html>
