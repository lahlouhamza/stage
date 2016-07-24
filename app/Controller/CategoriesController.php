<?php



class CategoriesController extends AppController
{
	
	public function index(){

            $this->LoadModel("Categorie");
		debug($this->Categorie->find('all'));
	}
}