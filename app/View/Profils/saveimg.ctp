<?= $this->Form->create('Profil',array("enctype"=>"multipart/form-data"))?>
<?= $this->Form->input('img',array("type"=>'file'))?>
<?= $this->Form->end('valider')?>
<?= $this->Html->image($img , array('alt' => 'CakePHP')); ?>

