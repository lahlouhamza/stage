<?php


class Categorie extends AppModel
{
	

	public $useTable="categories";

	
	  public $hasAndBelongsToMany="Article";
	

	
	
}