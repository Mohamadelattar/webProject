<?php
require 'config/config.php';
if(isset($_SESSION['nom']) )
{
    include("includes/headerClient.php");
}
else
{
    include("includes/header.php");
}
?>
 
<section class="container-fluid" id="catalog">
      
        <h2>Pc Portable</h2>
        <p><a href="Smartphone.php">Smartphone</a>/<a href="Tablette.php">Tablette</a></p>
        <div class="row">
            <div class="col-xs-12 col-lg-3" style="text-align:left; font-family: Quicksand-VariableFont_wght , sans-serif;" >
                <p>931,423 results in all product</p>
            </div>
             
             
        </div>
        <div  class="   align-content-center flex-wrap" id="catalog_items" style="margin-top:2em;">
        <?php
        
        $result = mysqli_query($con,"SELECT * FROM `article` WHERE `design` ='Pc';");
      
        $item = "item_pc";
        $increment = 1;
      while( $row =  mysqli_fetch_array($result)) 
      {
        $id = $item.$increment;   
        echo "<div class='border border-primary new_item' id='" .$id . "' >" ;
        echo "<a href='#'>";
        echo ' <img  height="auto" width="100%" src="data:image/jpg;base64,' .  base64_encode($row[5])  . '" />';
        echo "<br>"; 
        echo "<div class='titre_item'><p> ".$row[1]."</p>";
        echo "<span>".$row[3]."DH"."</span></div>";
        echo "</a></div>";
        $increment++;
      }
      ?>
        </div>
        
         
</section>
<!-- Delivrey Section -->
<section class="container-fluid" id="delivrey">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <h4>Free Delivrey</h4>
                    

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Easy Return</h4>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Wide choice</h4>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                </div>
            </div>
        </div> 
    </section>
<?php 
    include("includes/footer.php");
?>
 

 