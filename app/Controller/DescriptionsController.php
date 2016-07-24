<?php



class DescriptionsController extends AppController
{
	
	public function index(){

		debug($this->Description->find('all'));
	}
}