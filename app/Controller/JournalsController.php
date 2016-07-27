<?php



class JournalsController extends AppController
{

	public $layout="menu";


	 public function beforeFilter() {
         parent::beforeFilter();
        $this->LoadModel("Profil");
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
       $this->set("profil",$data);

         }
	
	public function index(){


		
     


        if($this->request->is("post")){


        	
        	$this->Journal->delete($this->request->data["Journal"]["id"]);
        	$this->Session->Setflash("journal supprimé avec succès");
        	//je supprimer pdf
        	unlink("uploads/".$this->request->data["Journal"]["src"]);


        }
    

         $data=$this->Journal->find("all");
        $this->set("data",$data);







/*
		$this->LoadModel("Categorie");
			$this->LoadModel("Pay");
			$this->LoadModel("Ville");
			$this->LoadModel("User");
			$this->LoadModel("Galerie");
			$this->LoadModel("Article");
			$this->LoadModel("Ville");
			$this->LoadModel("Description");
			$this->LoadModel("Categorie");
			

debug($this->Article->find('all'));
debug($this->Categorie->find('all'));


debug($this->Galerie->find('all'));
debug($this->Ville->find('all'));
debug($this->Description->find('all'));

debug($this->Galerie->find('all'));

		
debug($this->Pay->find('all'));
		
debug($this->Ville->find('all'));

		

		debug($this->Journal->find('all'));
		debug($this->User->find('all'));
		*/

	

		
		
		
		
	}


	public function  publierJournal(){


		if($this->request->is("post")){


			
	$chemin=str_replace(' ','-',basename($_FILES["fileToUpload"]["name"]));
		

$target_dir = "uploads/";
$target_file = $target_dir . $chemin;
$uploadOk = 1;
$message="";
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

 if ($_FILES['fileToUpload']['type'] != "application/pdf") { 

    $message= "error type invalide";
    $uploadOk = 0; 
}





// Vérifiez si le fichier existe déjà
if (file_exists($target_file)) {
    $message=$message."<br>" ."Désolé, le fichier existe déjà.";
    $uploadOk = 0;
}
// Vérifiez la taille du fichier max 1 mo
if ($_FILES["fileToUpload"]["size"] > 1063320) {
    $message=$message."<br>" . "Désolé, votre fichier est trop volumineux. max 1mo";
    $uploadOk = 0;
}


//Vérifiez si $ upload est mis à 0 par une erreur
if ($uploadOk == 0) {
    $message=$message."<br>" . "Désolé, votre fichier n'a pas été téléchargé.";

     debug($message);
// si tout est ok, essayez de télécharger le fichier
} else {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


        $this->request->data["Journal"]["src"]=$chemin;
        $this->request->data["Journal"]["extension"]=basename($_FILES["fileToUpload"]["type"]);
        $this->request->data["Journal"]["user_id"]=$this->Auth->user('id');
        $this->Journal->save($this->request->data);
        $this->Session->Setflash("pdf ajouté avec succès");


         





    } else {
        dabug("Désolé, une erreur Télécharger le fichier.");
    }
}

}

		
	}



  public function detail($id=null){

  	if($id==null){
  		$this->redirect(array('controller' => 'Journals', 'action' => 'index'));
  	}



  	$data=$this->Journal->find('first',array(
       'conditions'=> array('Journal`.`id'=>$id)

	));

	$this->set("data",$data);


  }



     public function recherche(){


 

     	 if($this->request->is("post")){




        $nom=$this->request->data["nom"];
        $date=$this->request->data["date"];


      



        $this->set("data",$this->Journal->find('all',array(
       'conditions'=> array('nom like'=>'%'.$nom.'%','`Journal`.`created` >'=>$date)

	)));
        	


        }else{

        	   $data=$this->Journal->find("all");
        $this->set("data",$data);
        }
    

         





     }





}