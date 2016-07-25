<?php



class ArticlesController extends AppController
{
	
	public function index(){

		debug($this->Article->find('all'));
		
	}


	 public function beforeFilter() {
      
       //parent::beforeFilter();

         }



}