<?php



class GaleriesController extends AppController
{
	
	public function index(){


         $this->LoadModel("Galerie");
         debug($this->Galerie->find('all'));
		//debug($this->Galery->find('all'));
	}
}