<?php


class Galerie extends AppModel
{
	
	  public $useTable="galeries";
	  public $hasAndBelongsToMany="Article";
	  public $hasMany="Media";



	 public  $validate=array(

		'nom'=>array(
			array( 
				   'rule'=>'isUnique',
				   'message'=>"votre nom deja pris"))




		);
    
	
}