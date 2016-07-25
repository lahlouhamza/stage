<?= $this->Form->create("User"); ?>
<?= $this->Form->input("username"); ?>
<?= $this->Form->input("password"); ?>
<?= $this->Form->end("login");?>
<?= $this->Html->link("Inscription", array('controller' => 'Users', 'action' => 'inscription')) ?>