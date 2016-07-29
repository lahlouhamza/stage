<?php



class GaleriesController extends AppController
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


         $this->LoadModel("Galerie");
         $this->LoadModel("Media");    

             

    //debug($this->Galery->find('all'));
        if($this->request->is("post")){
         $error=0;
         $count=0;

            $dataMedia=$this->request->params["form"];
            //debug($dataMedia);

             if($this->Galerie->save($this->request->data,true))

          { 
          
            foreach ($dataMedia as $Medias) {

              
                 foreach ($Medias["name"] as $data) {

              $nameFilter=str_replace(' ','-',basename($data));
              $chemin="GaleriesMedia/".$nameFilter;
                    //debug($nameFilter); 
                    //debug($chemin);  
                    $count++;

                    if (file_exists($chemin)) {
                    // echo "file existe deja"; 
                    //$error=1;
                    }

                  }


                  foreach ($Medias["type"] as $data) {
                    //debug($data);         
                  }


                   foreach ($Medias["tmp_name"] as $data) {
                    //debug($data);         
                  }


                   foreach ($Medias["size"] as $data) {
          
                    if ($data > 110000000) {
                           echo "Désolé, votre fichier est trop volumineux";
                           $error = 1;}


                  }

               
               
            }//fin boucle 


             //partie uplode
                    if($error==0){

                       foreach ($dataMedia as $data) {
                          
                          for ($i=0; $i <$count ; $i++) { 
                          

                           $nameFilter=str_replace(' ','-',basename($data['name'][$i]));
                           $chemin="GaleriesMedia/".$nameFilter;


                          if(move_uploaded_file($data['tmp_name'][$i],$chemin)){
                            
                           }else{

                             debug('Désolé, il y avait une erreur de télécharger votre fichier.');
                             exit();
                           }


                            
                          }//fin for


                         }//fin foreach

                    }//fin test

                     //fin uplode




                    //partie save Media
                    if($error==0){

                        $galery_id=$this->Galerie->find('first',array('fields'=> array('id'),
                                                'recursive'=> -1,'order'=> array('id desc')));

                        $galery_id=$galery_id["Galerie"]["id"];

        

                       foreach ($dataMedia as $data) {
                          
                          for ($i=0; $i <$count ; $i++) { 
                          

                           $nameFilter=str_replace(' ','-',basename($data['name'][$i]));
                           $chemin="GaleriesMedia/".$nameFilter;

                           $extension = pathinfo($chemin,PATHINFO_EXTENSION);
                           $this->Media->save(array(
                            "src"=>$nameFilter,
                            "extension"=>$extension,
                            "galery_id"=>$galery_id

                            ));

                           $this->Media->create();

                            
                          }//fin for


                         }//fin foreach

                    }//fin test

                     //fin save Media




           

          }//fin Test Article

         
        }//fin Post


  }
}