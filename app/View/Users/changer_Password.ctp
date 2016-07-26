
<div class="form-item">
<?= $this->Form->create("User"); ?>
<?= $this->Form->input("password",array("label"=>"Password actuelle","autofocus")); ?>
<?= $this->Form->input("confirmPassword",array("type"=>"password")); ?>
</div>


<div class="button-panel">
		<input type="submit" class="button" title="Log In" value="Valider" >
    </div>

	

<style type="text/css">
	
	.form-wrapper{top: 55%; height: 250px; }
</style>