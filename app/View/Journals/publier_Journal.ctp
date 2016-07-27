<!DOCTYPE html>
<html>
<body>

<div class="row">
<section class="col-md-2"></section>
<section class="col-md-8" >
<?= $this->Form->create("Journal",array('enctype' => 'multipart/form-data')); ?>
   
    <?= $this->Form->input("nom",array("class"=>"form-control")); ?>
  
 <br>

   <label> Sélectionnez pdf à télécharger:</label>
    <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
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

<style type="text/css">
	
	object{margin-left: 10%}
</style>

<?php 

	if($this->request->is("post")){

	  $src=basename($_FILES["fileToUpload"]["name"]);
       echo "<object data='/stage/uploads/$src' type='application/pdf' width='900' height='300'>
	  lie alternatif : <a href='test.pdf'>test.pdf</a>
	</object>";
}

 ?>


</body>
</html>