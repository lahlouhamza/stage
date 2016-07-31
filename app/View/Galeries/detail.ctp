<div class="row" style="margin-left:20%;margin-top:10%;">
<?php

echo "<h2>nom:". $Galerie["Galerie"]["nom"]."</h2>";
echo "<h2>Date Creation:".$Galerie["Galerie"]["created"]."</h2>";
$id=$Galerie["Galerie"]["id"];

   echo " <a href='/stage/Galeries/modifier/$id' class='btn btn-success btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Modifier &nbsp &nbsp&nbsp</a>";

            echo " <a href='/stage/Galeries/supprimer/$id' class='btn btn-danger btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Supprimer &nbsp &nbsp&nbsp</a>";

    echo " <a href='/stage/Galeries/recherche' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Recherche &nbsp &nbsp&nbsp</a>";
?>

<style type="text/css">
  
  .imagSlid{ width: 600px}
</style>


        <section class="row">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" style="    width:600px;
           height: 300px;     overflow: hidden;">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                

               <?php 
                 
                 $active="active";

               foreach ($Galerie["Media"] as $Media) {
          if($Media["type"]==0){
            echo "<div class='item $active'>";
            echo "<img src='/stage/GaleriesMedia/". $Media["src"]."' class='imagSlid' />";
            echo "</div>";
            $active="";

            }//fin condition 
            else{

                 $videoSrc=$Media["src"];
              echo "<div class='item $active'>";
            
             
               echo "<video width='400px'   controls style='margin-left:100px'  >
              <source src='/stage/GaleriesMedia/$videoSrc' ></video>";
              
            
            echo "</div>";


            }




               }//fin boucle
               ?>

               
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
            </section>

</div>