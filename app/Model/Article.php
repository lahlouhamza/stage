<?php


class Article extends AppModel
{
	

	public $useTable="articles";

	//public $belongsTo="User";

	public $belongsTo=array("User","Ville");
	public $hasMany="Description";


	  public $hasAndBelongsToMany=array("Galerie","Categorie");

	

	
	
}