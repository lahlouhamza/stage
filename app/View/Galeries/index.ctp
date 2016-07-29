<!DOCTYPE html>
<html>
<body>

<div class="row">
<section class="col-md-2">
  
<h2>Publier Acticle</h2>

</section>
<section class="col-md-8" >
<?= $this->Form->create("Galerie",array('enctype' => 'multipart/form-data')); ?>
   
    <?= $this->Form->input("nom",array("class"=>"form-control")); ?>
  






   <span id="Listegalerie"> </span>
  
    
     <input type="button" class="btn btn-primary" value="Ajouter Media" onclick="AjouterMedia()">
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



$( document ).ready(function() {

 AjouterMedia();
});





function AjouterMedia(){

   

      

      $data="<input type='file' name='Media[]' class='form-control' accept='image/*,video/*' required></input>";
       $('#Listegalerie').append($data);  

}








</script>





</body>
</html>