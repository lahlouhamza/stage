


    
        
          <div class="page-title">
            <div class="title_left">
              <h3>  Gestion des journaux </h3>
            
            </div>

          
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>List journaux</h2>

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
                        <th>src</th>
                        <th>  Date Creation</th>
                        <th>Option</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                      <?php
                      foreach ($data as $p) {
  echo "<tr>";
   echo "<td>".$p["Journal"]["id"]."</td>";
  echo "<td> publier par:".$p["User"]["username"]."<br> extension:".$p["Journal"]["extension"]

  ."</td>";
  echo "<td>".$p["Journal"]["src"]."</td>";
  echo "<td>".$p["Journal"]["created"]."</td>";
 
  echo "<td>";
  echo  $this->Form->Create("Journal");
   echo  $this->Form->input("id",array("value"=>$p["Journal"]["id"]));
      echo  $this->Form->input("src",array("value"=>$p["Journal"]["src"],"type"=>"hidden"));

$id=$p["Journal"]["id"];

  $source=$p["Journal"]["src"];

           echo " <a href='/stage/uploads/$source' class='btn btn-success btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Telecharger Pdf &nbsp &nbsp&nbsp</a>";
           
          echo " <a href='/stage/Journals/detail/$id' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Detail &nbsp &nbsp&nbsp</a>";

            echo " <button type='sumbit' class='btn btn-danger btn-xs' style='width: 150px;'><i class='fa fa-trash-o'></i> &nbsp&nbsp Supprime &nbsp &nbsp&nbsp </button> </form>";



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



