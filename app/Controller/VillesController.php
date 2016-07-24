<?php



class VillesController extends AppController
{
	
	public function index(){

		debug($this->Ville->find('all'));
	}
}