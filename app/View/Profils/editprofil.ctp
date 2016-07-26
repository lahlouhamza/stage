
<div class="container">
    <h1><a href="../accueil.php">Edit Profile</a></h1>
    <hr>
  <div class="row" >
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
           <?= $this->Html->image($profil["Profil"]["img"] , array('alt' => 'CakePHP','class'=>"img-circle profile_img img")); ?>
          <style type="text/css">
            .img{ width: 200px;height: 200px;}

          </style>
          
          
          
          
          <!-- ana zatou-->
          <div class="form-group" >

            <div class="input-group " >
  <span class="input-group-addon glyphicon glyphicon-screenshot " ></span>
   <a href="/stage/Profils/"> <input type="text" class="form-control"  readonly="" value="Profile information" ></div></a>


<div class="input-group "  >
  <span class="input-group-addon glyphicon glyphicon-edit" ></span>
  <a href="/stage/Profils/editprofil"> 
  <input type="text" class="form-control"  readonly="" value="Editer le profil" >
</a>
  </div>


<div class="input-group " >
  <span class="input-group-addon glyphicon glyphicon-picture" ></span>
    <a href="/stage/Profils/saveimg"> 
  <input type="text" class="form-control"  readonly="" value="Photo du profil" >
</a>
  </div>

 

            
          </div>

            

        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info" id="tel">
        
        <h3>Informations personnelles</h3>
        <br>

        
        <div class="form-horizontal" >
          <?= $this->Form->create("Profil"); ?>

          <div class="form-group">
            <label class="col-lg-3 control-label">Nom :</label>
            <div class="col-lg-8">
               <?= $this->Form->input("nom",array("label"=>"")); ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Prenom :</label>
            <div class="col-lg-8">
              <?= $this->Form->input("prenom",array("label"=>"")); ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Sexe :</label>
            <div class="col-lg-8">
              <?= $this->Form->input("sexe",array("label"=>"")); ?>
            </div>
          </div>
         
      

          <div class="form-group">
            <label class="col-md-3 control-label">Telephone :</label>
            <div class="col-md-8">
              <?= $this->Form->input("telephone",array("label"=>"")); ?>
          </div>  


          
          <div class="form-group text-center" >
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes" >
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
            <?= $this->Form->input("id"); ?>
        </form>
      </div>
  </div>
</div>
<hr>











