<?php



class UsersController extends AppController
{
	
	public function index(){

		debug($this->User->find('all'));
	}
}