<?= $this->Form->create("User"); ?>
<?= $this->Form->input("username"); ?>
<?= $this->Form->input("password"); ?>
<?= $this->Form->input("confirmPassword",array("type"=>"password")); ?>
<?= $this->Form->input("email"); ?>

<?= $this->Form->end("Valider");?>
<?= $this->Html->link("login", array('controller' => 'Users', 'action' => 'login')) ?>