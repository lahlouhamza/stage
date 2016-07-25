<?php


class User extends AppModel
{
	
	//public $hasMany="Journal";

	public $hasMany=array("Article","Journal");
	


	public  $validate=array(
		'username'=>array(
			array( 'rule'=>'alphanumeric',
				   'required'=>'true',
				   'message'=>"votre login n'est pas valide"),array('rule'=>'isUnique','message'=>" login deja pris")),

		'password'=>array(
			array( 'rule'=>'alphanumeric',
				   'required'=>'true',
				   'message'=>"votre passe n'est pas valide")),

		'confirmPassword'=>array(
			array( 'rule'=>'alphanumeric',
				   'required'=>'true',
				   'message'=>"votre passe n'est pas valide")),



		'email'=>array(
			array( 'required'=>'true',
				   'rule'=>'isUnique',
				   'message'=>"votre email deja pris"))







		);
	
}