<?php
 $dateSystheme = date("Y-m-d");
 ?>
 <section>

  <form class="form-horizontal"  action="#" method="post" >

          <div class="form-group" style="margin-left:130px;">



            
            <div class="col-lg-3" >

                 <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-map-marker fa-lg"></i></span>                                    
           <input name="nom" type="text" class="input-lg form-control cc-number"  placeholder="nom"   id="autocomplete">
        </div>
            </div>



           



            
            <div class="col-lg-2">

                 <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>                                    
          <input name="date" value="<?=$dateSystheme ?>" type="date" class="input-lg form-control cc-number" required>
        </div>
            </div>




            <label class="col-lg-1 control-label" > </label>
            <div class="col-lg-1">
          <input type="submit" class="btn btn-primary input-lg  " value="   Rechercher  " style="margin-left:35px">
             </div>
      



          
          </form>
</section>
<hr>










          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>List Galeries</h2>

                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                       
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  
                  <!-- start project list -->
                  <table class="table table-striped projects">
                    <thead>
                      <tr>
                        <th style="width: 1%">#</th>
                        <th style="width: 20%"> inFormation </th>
                        <th>Media</th>
                        <th>  Date Creation</th>
                        <th>Option</th>
                        
                      </tr>
                    </thead>
                    <tbody>

                    <style type="text/css">
                      

                      .ImgMedia{

                        width: 50px;
                        height: 50px;
                        border-radius: 50%;
                        display: inline-block;
                      float: left;;
                      }
                    </style>


                  <?php
                      foreach ($Galerie as $p) {
                         echo "<tr>";
                         echo "<td>".$p["Galerie"]["id"]."</td>";
                         echo "<td> nom:".$p["Galerie"]["nom"]."</td>";
  
             

                    echo "<td>";
                   foreach ($p["Media"] as $Media) {
                   
                   if($Media){ 

                              if($Media["type"]==0){
            echo "<img src='/stage/GaleriesMedia/".$Media["src"] ."'/ class='ImgMedia'>";
       }else{
        
         $VideSrc=$Media["src"];
         echo "<img src='/stage/GaleriesMedia/Video-icon.png' class='ImgMedia'>";
       }
       

      }//fin condition  
   }
   echo "</td>";
  $dateCreation=$p["Galerie"]["created"];
   echo "<td>$dateCreation</td>";
  


  echo "<td>";
  echo  $this->Form->Create("Galerie");
   echo  $this->Form->input("id",array("value"=>$p["Galerie"]["id"]));
   

$id=$p["Galerie"]["id"];
          echo " <a href='/stage/Galeries/detail/$id' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Detail &nbsp &nbsp&nbsp</a>";



           echo " <a href='/stage/Galeries/modifier/$id' class='btn btn-success btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Modifier &nbsp &nbsp&nbsp</a>";

            echo " <a href='/stage/Galeries/supprimer/$id' class='btn btn-danger btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Supprimer &nbsp &nbsp&nbsp</a>";

           

        echo "</td>";


  echo "</tr>";
}
?>


 





                     





                     
                      
                      
                     
                    </tbody>
                  </table>
                  <!-- end project list -->

                </div>
              </div>
            </div>
          </div>
        </div>
        <style type="text/css">
        tr button{width: 80px; height: 30px; margin-top: 10px}
        .btn-xs{padding: 5px;margin-top: 10px}
        


        </style>
