<?php



class MediasController extends AppController
{
	
	public function index(){

	
		debug($this->Media->find('all'));
		exit();
	}
}