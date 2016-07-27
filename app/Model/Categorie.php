<?php


class Categorie extends AppModel
{
	

	public $useTable="categories";

	
	  public $hasAndBelongsToMany="Article";
	



	public  $validate=array(

		'nom'=>array(
			array( 'required'=>'true',
				   'rule'=>'isUnique',
				   'message'=>"votre nom deja pris"))




		);

	
	
}