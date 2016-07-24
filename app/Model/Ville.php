<?php


class Ville extends AppModel
{
	

	public $useTable="villes";



	public $belongsTo="Pay";
	public $hasMany="Article";
	

	
	
}