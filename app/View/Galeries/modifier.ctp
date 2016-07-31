

<form method="post" action="#">
  <table id="sortableTable" cellspacing="0" cellpadding="3" border="1">
    <thead>
      <tr>
        <td width="2%">Position</td>
        <td width="10%">Medias</td>
        <td width="20%">Information</td>
        <td width="15%">Option</td>
        <td width="5%">New Position</td>
      </tr>
    </thead>
    <tbody>
    
   

          <?php 
                

         foreach ($data as $Media) {

         $galery_id=$Media["Media"]["galery_id"];
          
          if($Media['Media']["type"]==0){
             $position=$Media['Media']["position"];
             $ImgSrc=$Media['Media']["src"];
             $idMedia=$Media['Media']["id"];
             $type="img";

             
            echo "<tr>";
            echo "<td> $position </td>";
            echo "<td><img src='/stage/GaleriesMedia/$ImgSrc' class='imagSlid'/> </td>";
            echo "<td> chemin: $ImgSrc <br> type:$type</td>";
            
            echo " <td><a href='/stage/GaleriesMedia/$ImgSrc' class='btn btn-success btn-xs zoombox zgallery1'><i class='fa fa-pencil'></i>&nbsp&nbsp Affichier &nbsp &nbsp&nbsp</a>";



            echo " <a href='/stage/Galeries/supprimerMedia/$idMedia/$galery_id' class='btn btn-danger btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Supprimer &nbsp &nbsp&nbsp</a></td>";



            echo "<td> <span> $position </span></td>";
            echo '<input class="sortID" type="hidden" name="sortID[]" value="" />';
            echo "<input class='projectID' type='hidden' name='projectID[]' value='$position' />";
            echo "<input  type='hidden' name='idMedia[]' value='$idMedia' />";
            echo "</tr>";
           

            }else{
               $position=$Media['Media']["position"];
               $videoSrc=$Media['Media']["src"];
               $idMedia=$Media['Media']["id"];

               $type="video";
              echo "<tr>";
              echo "<td> $position </td>";
              echo "<td><video width='90' controls>
              <source src='/stage/GaleriesMedia/$videoSrc' ></video></td>";
              echo "<td> chemin: $videoSrc <br> type.$type</td>";

             echo " <td><a href='/stage/GaleriesMedia/$videoSrc' class='btn btn-success btn-xs zoombox zgallery1'><i class='fa fa-pencil'></i>&nbsp&nbsp Affichier &nbsp &nbsp&nbsp</a>";

             echo " <a href='/stage/Galeries/supprimerMedia/$idMedia/$galery_id' class='btn btn-danger btn-xs'><i class='fa fa-pencil'></i>&nbsp&nbsp Supprimer &nbsp &nbsp&nbsp</a></td>";

              echo "<td> <span> $position </span></td>";
              echo '<input class="sortID" type="hidden" name="sortID[]" value="" />';
              echo "<input class='projectID' type='hidden' name='projectID[]' value='$position' />";
              echo "<input  type='hidden' name='idMedia[]' value='$idMedia' />";
              echo "</tr>";
            }

               }//fin boucle





               ?>
                
               <style type="text/css">
                 .imagSlid{
                  width: 100px;
                  height: 100px;
                  border-radius: 50%;
                 }
               </style>





    </tbody>
  </table>
  <input type="submit"  value="Save Position" onclick="SavaPosition()" id="save" style="display:none"
   class="btn btn-info btn-xs">
</form>


<span class="successfully-saved"><i class="fa fa-thumbs-up"></i> Saved!</span>
    
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

        

    
    
    
  </body>
</html>

<script type="text/javascript">
  


  var sortArray = []; //Create variable to store sorting array

//Sortable rows, helps maintain column widths a little better
var fixHelperModified = function(e, tr) {

  var $originals = tr.children();
  var $helper = tr.clone();
  $helper.children().each(function(index)
                          {
                            $(this).width($originals.eq(index).width());
                          });

  return $helper;
};

function updateSort(table) {

  $(table + ' tbody tr').each(function(){
    var row_index = $(this).index(); //Start with 1, not zero
    var projectID = $(this).find('.projectID').val();

   
    $(this).find('span').text( row_index );
    $(this).find('.sortID').val( row_index );

    sortArray[projectID] = $(this).find('.sortID').val();
  });
  return sortArray;
}

$(function(){
  
  //Initiate jQuery UI `sortable` widget on parent of sortable elements
  $("#sortableTable tbody").sortable({
    helper: fixHelperModified, //Add helper that maintains nicer column widths
    update: function( event, ui ) { //Triggers once sorting has finished and DOM position has changed
      updateSort('#sortableTable');
       document.getElementById("save").style.display = "inline-block";
      
     //console.log(sortArray);
      
    }
  })
  .disableSelection(); //Necessary to keep table row content from being selectable

});



function SavaPosition(){



      
     console.log(sortArray);
   
}
</script>

<style type="text/css">

#sortableTable {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 100%;
}
#sortableTable thead {
  background-color: #444;
  color: #FFF;
  text-align: center;
}
#sortableTable tbody tr {
  margin: 0 3px 3px 3px;
  padding: 0.4em;
  padding-left: 1.5em;
  font-size: 1.5em;
  height: 18px;
  cursor: pointer;
}
#sortableTable .ui-sortable-placeholder {
  background-color: #C00;
}

.successfully-saved {
  display: none;
  color: #1B7C18;
  border-radius: 5px;
  border: 2px solid #1B7C18;
  padding: .5em .75em;
  background: #D6F8DD;
  width: 50%;
  margin-top: 20px;
}

</style>


<button id="button_voir" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal12" id="public">Ajouter Media</button>

<!-- Form Message-->
<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style=" margin-top: 20%;margin-left:5%">


      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel" style="color:black">Ajouter Media </h4>
      </div>

     <form method="post" action="../AddMedia" enctype="multipart/form-data">
      <div class="modal-body">
        <input type="file" name="Media" >
        <input type="hidden" name="Media" value="<?=$galery_id?>" >
        <input type="hidden" name="position" value="<?=$position+1?>" >

          
         
        
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
        <button type="submit" class="btn btn-primary">Valider</button>
        
        </form>
      </div>

    </div>
  </div>
</div>
<!-- fin From Message-->









  
   <link rel="stylesheet" type="text/css" href="/stage/Zoombox/zoombox.css" /> 


  </script> 
  
    <script type="text/javascript" src="/stage/Zoombox/zoombox.js"></script> 
    <script type="text/javascript"> 
//<![CDATA[
    $(function(){
        $('a.zoombox').zoombox();
    });
//]]>
</script> 