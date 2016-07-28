<!DOCTYPE html>
<html>
<body>

<div class="row">
<section class="col-md-2">
  
<h2>Publier Acticle</h2>

</section>
<section class="col-md-8" >
<?= $this->Form->create("Article",array('enctype' => 'multipart/form-data')); ?>
   
    <?= $this->Form->input("titre",array("class"=>"form-control")); ?>
    <?= $this->Form->input("contenu",array("class"=>"form-control")); ?>

   <label for="ArticleTitre">pays</label>
      <?php  echo "<select  onchange='ajax(this.value)' class='form-control' name='pays' id='pays'>";
                 foreach ($data as $p) {
                                         $id=$p["Pay"]["id"];
                                         $nomPay=$p["Pay"]["nom"];
                                         echo "<option value='$id'> $nomPay</option>";  }
           echo "<select>";?>




<span id="container"> liste villes</span>

     

   <span id="Listegalerie"> </span>
  
    
     <input type="button" class="btn btn-primary" value="Ajouter galerie" onclick="ajaxgalerie()">
<br>



<span id="ListeCategories"> </span>



<input type="button" class="btn btn-primary" value="Ajouter Categories" onclick="AjaxListeCategories()">
  
 <br>


  

    <div class="form-group text-center">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Valider">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
</form>
</section>
</div>

<script type="text/javascript">
  
    function ajax(value) {
    console.log(value);

    event.preventDefault(); 
    $chemin="/stage/Pays/ajax/"+value;
    console.log($chemin);

       $.get($chemin, {}, function(data){ 
       $('#container').empty().append(data); 
}); 


  }


$( document ).ready(function() {
  var x=document.getElementById("pays").value;
  ajax(x);
AjaxListeCategories();
 ajaxgalerie();
});



function AjaxListeCategories(){

    event.preventDefault(); 
    $chemin="/stage/Articles/ajaxcategorie";
    console.log($chemin);

       $.get($chemin, {}, function(data){ 
       $('#ListeCategories').append(data); 
}); 

}



function ajaxgalerie(){

    event.preventDefault(); 
    $chemin="/stage/Articles/ajaxgalerie";
    console.log($chemin);

       $.get($chemin, {}, function(data){ 
       $('#Listegalerie').append(data); 
}); 

}








</script>





</body>
</html>