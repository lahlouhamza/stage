<?php



class ProfilsController extends AppController
{

	public $layout="menu";
	
	public function index(){

		//debug($this->Profil->find('all'));
			//debug($this->Auth->user());






		
      	
	}

	 public function beforeFilter() {
        
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('id '=>$id)));
       $this->set("profil",$data);

         }
}