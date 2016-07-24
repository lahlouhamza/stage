<?php



class PaysController extends AppController
{
	
	public function index(){

		debug($this->Pay->find('all'));
	}
}