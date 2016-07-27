








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
                        <th style="width: 20%"> nom </th>
                        
                        <th>  Date Creation</th>
                        <th>Option</th>
                        
                      </tr>
                    </thead>
                    <tbody>


                      <?php
                      foreach ($data as $p) {
  echo "<tr>";

  echo "<td>".$p["Categorie"]["id"]."</td>";

  echo "<td>".$p["Categorie"]["nom"]."</td>";
   echo "<td>".$p["Categorie"]["created"]."</td>";

$id=$p["Categorie"]["id"];

    echo $this->form->create('Categorie');
    echo $this->form->input('id',array("value"=>$id));


            echo " <td><button type='sumbit' class='btn btn-danger btn-xs' style='width: 150px;'><i class='fa fa-trash-o'></i> &nbsp&nbsp Supprime &nbsp &nbsp&nbsp </button> </form></td>

            ";


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
