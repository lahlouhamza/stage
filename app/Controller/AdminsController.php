<?php


/**
* 
*/
class AdminsController extends AppController
{
	
	public function index(){

		debug($this->Admin->find('all'));
	}
}