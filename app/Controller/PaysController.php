<?php



class PaysController extends AppController
{

 public $layout="menu";


	 public function beforeFilter() {
        // parent::beforeFilter();
        $this->LoadModel("Profil");
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
       $this->set("profil",$data);

         }
	
	public function index(){


          
		
    $data=$this->Pay->find('all');
    $this->set("data",$data);
	}


  public function ajax($id){

  $this->LoadModel("Ville");
  $this->layout=null;
  
   
    $data=$this->Ville->find('all',array(
       'conditions'=> array('pay_id'=> $id)

  ));





    echo "<label for='ArticleTitre'>Villes</label> <select name='villes' class='form-control'>";
    foreach ($data as $p) {
      $id=$p["Ville"]["id"];
      $nomPay=$p["Ville"]["nom"];
      echo "<option value='$id'> $nomPay</option>";

    }
    echo "<select>";



  }
}