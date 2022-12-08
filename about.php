<?include("blocks/header.php");
 include("blocks/db.php");

?>
<header>
<header>
    <div class="container">
        <div class="row bg-warning  text-center">
        <div class="col-12">
         <h1>X-Area</h1> 
           
             </div>
            </div>
    </div>
        
</header>
        
</header>
    <section class="about"
    >
       <div class="container">
        <div class="row">
          <div class=" col-12 color2" >
            <h2 class="text-center upper-case"
            >Mainpage</h2>
          <?  $result=mysqli_query($db,"SELECT text FROM about");
$myrow=mysqli_fetch_array($result);?>







            <?php echo $myrow['text'];?>
      

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

