<?php 
include("blocks/db.php");/* connection to base db */
  
?>
<?php

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    
    }
   
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
            
           
            <?$result=mysqli_query($db,"SELECT * FROM film  ");
            
          while( $myrow=mysqli_fetch_array($result)){
               
            
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
    
            
        

       
    
    


   
