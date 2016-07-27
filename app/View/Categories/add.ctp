<!DOCTYPE html>
  <html>
  <body>

  <div class="row">
  <section class="col-md-2"></section>
  <section class="col-md-8" >
  <?= $this->Form->create("Categorie"); ?>
     
      <?= $this->Form->input("nom",array("class"=>"form-control",'required' => true)); ?>
    
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

  


  </body>
  </html>     