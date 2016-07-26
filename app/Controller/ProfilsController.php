<?php



class ProfilsController extends AppController
{

	public $layout="menu";
	
	public function index(){


          $id=$this->Auth->user("id");
          $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
		  $this->request->data=$data;


        
	}

	 public function beforeFilter() {
        
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
       $this->set("profil",$data);

         }


         public function editprofil(){

         	

		  if($this->request->is('put')){

              $this->Profil->save($this->request->data);
              $this->Session->setFlash("compte ajouter avec sucssé");

           

		  }

		  $id=$this->Auth->user("id");
          $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
		  $this->request->data=$data;
           


    

         }





           public function saveimg(){

   

   
       if($this->request->is('post')){
       //debug($this->request->data);

        $tmp_name=$this->request->data['Profil']['img']['tmp_name'];

          $check = getimagesize($tmp_name);
           if($check !== false) {$uploadOk = 1;}else{  $this->Session->setFlash("Le fichier est pas une image");
                                                                                               $uploadOk = 0; }


            if ($uploadOk == 1) { 
               $src= rand(0,13248575858).$this->request->data['Profil']['img']['name'];
              if(move_uploaded_file($tmp_name,"img/".$src))
                    {
                     
            $id=$this->Auth->user("id");
            $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
            $id=$data["Profil"]["id"];
                
                if($data["Profil"]["img"]!="profil.jpg"){
                 unlink("img/".$data["Profil"]["img"]);//je supprimer img
               }

                 $this->Profil->id=$id;
                  $this->Profil->saveField("img",$src);
                  $this->Session->setFlash("img ajouer ");
                  $this->redirect(array('controller' => 'Profils', 'action' => 'saveimg'));


                  
                  } }  }//fin post
            

            
            $id=$this->Auth->user("id");
            $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
            $this->set('img', $data["Profil"]["img"]);
             

           


       

  }








}