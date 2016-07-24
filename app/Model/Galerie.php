<?php


class Galerie extends AppModel
{
	
	  public $useTable="galeries";
	  public $hasAndBelongsToMany="Article";
    
	
}