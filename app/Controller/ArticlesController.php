<?php



class ArticlesController extends AppController
{
	
	public function index(){

		 $this->LoadModel("Pay");

		//debug($this->Pay->find('all'));

		//$this->request->data["Article"]["pays"]=array(1,2,3,4,5);
		//debug($this->request->data["Article"]["ville"]);

		//$this->request->data["Article"]["ville"]="4";

		    $data=$this->Pay->find('all');
            $this->set("data",$data);

               $this->LoadModel("Categorie");
              $Categorie=$this->Categorie->find("all");
               $this->set("Categorie",$Categorie);

              


		

		
	}


	 public $layout="menu";


	 public function beforeFilter() {
         parent::beforeFilter();
        $this->LoadModel("Profil");
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
       $this->set("profil",$data);

         }



}