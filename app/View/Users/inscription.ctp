  <script src='https://www.google.com/recaptcha/api.js'></script>

  <form action="#" method="post">
  

   <div class="form-item">
<?= $this->Form->create("User"); ?>
<?= $this->Form->input("username"); ?>
<?= $this->Form->input("password"); ?>
<?= $this->Form->input("confirmPassword",array("type"=>"password")); ?>
<?= $this->Form->input("email"); ?>
</div>
        
    
    <div class="g-recaptcha" data-sitekey="6LfJUhgTAAAAALheC6_qmZrRlKO4IeF1nXRYwicA" ></div>
    
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" value="Login"></input>
    </div>

   
  </form>


  <style type="text/css">
	

	.form-wrapper{top: 37%; height: 465px}
</style>