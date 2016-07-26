

<html>
<head>
<style rel="stylesheet" type="text/css">
/*@import url(http://fonts.googleapis.com/css?family=Open+Sans:400);*/

body {
  color: #fff;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
	background:url(/cake/index/img/login.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}



.form-wrapper {
width:300px;
height:325px;
  position: absolute;
  top: 55%;
  left: 48%;
  margin: -184px 0px 0px -155px;
  background: rgba(0,0,0,0.27);
  padding: 15px 25px;
  border-radius: 5px;
  box-shadow: 0px 1px 0px rgba(0,0,0,0.6),inset 0px 1px 0px rgba(255,255,255,0.04);
}

.form-item {
width:100%;
}


h3{
  font-size: 25px;
  font-weight: 640;
  margin-bottom: 10px;
  color: #e7e7e7;
  padding:6px;
  font-family:'sans-serif','helvetica';
}



.form-item input{
  border: none;
  background:transparent;
  color: #fff;
  margin-top:11px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  height: 49px;
  padding: 0 16px;
  width: 100%;
  padding-left: 55px;

}
input[type='password']{
	background: transparent url(/stage/img/cle.png) no-repeat;
	background-position: 10px 50%;
}
input[type='text']{
	background: transparent url(/stage/img/user.png) no-repeat;
	background-position: 10px 50%;

}

input[type='email']{
  background: transparent url(/stage/img/user.png) no-repeat;
  background-position: 10px 50%;

}

.form-item input:focus {
  outline: none;
  border:1.4px solid #cfecf0;
}

.button-panel {
  margin-bottom: 20px;
  padding-top: 10px;
  width: 100%;
}

.button-panel .button {
  background: #00b6df;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'helvetica','Open Sans', sans-serif;
  font-size: 1.2em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.6s linear;
  width: 100%;
  margin-top:10px;
}

.button:hover {
  background: #6eb7cb;
}

.form-item input, .button-panel .button {
  border-radius: 2px
}

.reminder {
  text-align: center;
}

.reminder a {
  color: #36c79e;
  text-decoration: none;
  transition: color 0.3s;
}

.reminder a:hover {
  color: #cab6bf;
}
</style>
<meta charset="utf-8">
</head>
<body>
  <?= $this->Session->flash(); ?>
<div class="form-wrapper">

  <?=  $this->fetch('content'); ?>
  
  <div class="reminder">
  <p><?= $this->Html->link("S'inscrire maintenant", array('controller' => 'Users', 'action' => 'inscription')) ?></p>
<p>
  <?= $this->Html->link("se connecter", array('controller' => 'Users', 'action' => 'login')) ?>
  </p>
  </div>
  
</div>

</body>
</html>