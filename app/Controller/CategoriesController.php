<?php



class CategoriesController extends AppController
{
	public $layout="menu";


	
	 public function beforeFilter() {
         parent::beforeFilter();
        $this->LoadModel("Profil");
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
       $this->set("profil",$data);
        $this->LoadModel("Categorie");

         }


	public function index(){
      

      if($this->request->is("post")){

       
        $this->Categorie->delete($this->request->data["Categorie"]["id"]);
        $this->Session->setflash("Categorie supprimée avec succès");
      }
      $data=$this->Categorie->find("all");
     $this->set("data",$data);

          
	}





	public function add(){

          
		  

            if($this->request->is("post")){

                 if($this->Categorie->save($this->request->data,true)){
                 $this->Session->setflash("Categorie ajouté avec succès");
             }

            }

	}



}