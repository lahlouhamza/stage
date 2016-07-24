<?php


class User extends AppModel
{
	
	//public $hasMany="Journal";

	public $hasMany=array("Article","Journal");
	
}