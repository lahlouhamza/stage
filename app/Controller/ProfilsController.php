<?php



class ProfilsController extends AppController
{
	
	public function index(){

		debug($this->Profil->find('all'));
			debug($this->Auth->user());

		
      	
	}

	 public function beforeFilter() {
        
       //parent::beforeFilter();

         }
}