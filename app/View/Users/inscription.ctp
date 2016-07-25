<script src='https://www.google.com/recaptcha/api.js'></script>
<?= $this->Form->create("User"); ?>
<?= $this->Form->input("username"); ?>
<?= $this->Form->input("password"); ?>
<?= $this->Form->input("confirmPassword",array("type"=>"password")); ?>
<?= $this->Form->input("email"); ?>
 <div class="g-recaptcha" data-sitekey="6LfJUhgTAAAAALheC6_qmZrRlKO4IeF1nXRYwicA" ></div>
<?= $this->Form->end("Valider");?>
<?= $this->Html->link("login", array('controller' => 'Users', 'action' => 'login')) ?>