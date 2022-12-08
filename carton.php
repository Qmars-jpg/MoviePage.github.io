

<?php 
include("blocks/db.php");/* connection to base db */
  
?>

<?include("blocks/header.php"); ?>


<header>
<div class="container">
        <div class="row bg-warning  text-center">
        <div class="col-12">
         <h1>X-Area</h1> 
           
             </div>
            </div>
    </div>
        
</header>
    <section class="about"
    >
       <div class="container">
        <div class="row">
          <div class=" col-12 color2" >
            <h2 class="text-center upper-case"
            >Mainpage</h2>
            <p class="text-centeer color2">Movies
              Movies move us like nothing else can, whether theyre scary, funny, dramatic, romantic or anywhere in-between. So many titles, so much to experience. </p>
          </div>
         
         
      

    
            <!--video 1 -->
            
           
            <?$result=mysqli_query($db,"SELECT * FROM carton ");
            
          while( $myrow=mysqli_fetch_assoc($result)){
               
            
          ?> 
            <div class=" col-xl-4 col-md-6 col-sm-12 color2">

            <div class="kartinka"> <?echo($myrow['img']);?></div>
          <h5 class="text-center ct mt-1">  <?echo($myrow['title']);?> </h5>
           <div class="text-center" width="50px" height="50px"> <?echo($myrow['video']);?></div>
          
            </div>
        
            

            
     <?
  }
?> 
 
</div>
      </div>
</section>
    
       
        
      
<div class="container" >
          <div class="col-12">
          
      <div class="row bg-warning  justify-content-center"> 
         
  <ul class="pagination justify-content-center">
    
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item"><a class="page-link" href="carton.php">2</a></li>
    <li class="page-item"><a class="page-link" href="about.php">3</a></li>
    
  </ul>

</div>  
      </div>
    
</div>
    





































































      <?include("blocks/footer.php"); ?>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


   
   
 

   </body>
  </html>

