
<?php 
include("blocks/db.php");/* connection to base db */
  
?>



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
            
           
            <?$result=mysqli_query($db,"SELECT * FROM film ");
            
          while( $myrow=mysqli_fetch_array($result)){
               
            
          ?> 
            <div class=" col-xl-4 col-md-6 col-sm-12 color2">


            <?echo($myrow['img']);?>
           <h5 class="text-center ct">  <?echo($myrow['title']);?> </h5>
           
<button type="submit" data-bs-toggle="modal" data-bs-target="#video"> watch </button>



</div>

<div class="modal fade" id="video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="embeded-container"> <?echo($myrow['video']);?> </div>
      
      </div>
      
    </div>
  </div>
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
    
            
        

       
    
    


   
