<?php



class GaleriesController extends AppController
{


  public $layout="menu";


   public function beforeFilter() {
         parent::beforeFilter();
        $this->LoadModel("Profil");
          $this->LoadModel("Galerie");
         $this->LoadModel("Media");    

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
                           if($extension=="png"||$extension=="jpg"||$extension=="gif"){
                            $type=0;
                           }else
                           {
                            $type=1;
                           }

                        
                           $this->Media->save(array(
                            "src"=>$nameFilter,
                            "extension"=>$extension,
                            "galery_id"=>$galery_id,
                            "position"=>$i,
                            "type"=>$type

                            ));

                           $this->Media->create();

                            
                          }//fin for


                         }//fin foreach

                         $this->Session->Setflash("Galeries Ajouter avec succès");

                    }//fin test

                     //fin save Media




           

          }//fin Test Article

         
        }//fin Post


  }








  public function recherche(){

  

     if($this->request->is("post")){




        $nom=$this->request->data["nom"];
        $date=$this->request->data["date"];


      



        $this->set("Galerie",$this->Galerie->find('all',array(
       'conditions'=> array('nom like'=>'%'.$nom.'%','created >'=>$date)

  )));
          


        }else{

             $data=$this->Galerie->find("all");
        $this->set("Galerie",$data);
        }
    

    


  }




       public function supprimer($id=null)

       {
         
         if($id==null){$this->redirect(array('controller' => 'Galeries', 'action' => 'recherche'));}
        $this->Galerie->delete($id);
        $this->redirect(array('controller' => 'Galeries', 'action' => 'recherche'));
         



       }



    
    public function detail($id=null){


if($id==null){$this->redirect(array('controller' => 'Galeries', 'action' => 'recherche'));}


       $data=$this->Galerie->find("first",array('conditions'=>array(
        'id'=>$id

        )));
        $this->set("Galerie",$data);

         
    }



  public function modifier($id=null){

    if($id==null){$this->redirect(array('controller' => 'Galeries', 'action' => 'recherche'));}

   if($this->request->is('post')){

       $NombreImg =0;
       foreach ($this->request->data['sortID'] as $data) {
          $NombreImg++;
       }

        

       for ($i=0; $i <$NombreImg ; $i++) { 
          $idMedia=$this->request->data["idMedia"][$i];
          $this->Media->id=$idMedia;
          $this->Media->saveField("position",$i);  
         
       }



   }
  

       $data=$this->Media->find("all",array(
        'recursive'=> -1,
        'conditions'=>array('galery_id'=>$id),
        'order'=> array('position ')

        ));
     
      $this->set("data",$data);
      
    
      


  }





  public function supprimerMedia($id=null,$idGalery=null){

 if($id==null||$idGalery==null){
      $this->redirect(array('controller' => 'Galeries', 'action' => 'recherche'));
    }
      $this->Media->delete($id);
      $this->redirect(array('controller' => 'Galeries', 'action' => 'modifier/'.$idGalery));
    
  }




    public function AddMedia(){

     
   $galery_id=$this->request->data["Media"];
   $position=$this->request->data["position"];
   
   $tmp_name=$this->request->params['form']["Media"]["tmp_name"];

   $nameFilter=str_replace(' ','-',basename($this->request->params['form']["Media"]["name"]));
   $chemin="GaleriesMedia/".$nameFilter;

    $extension = pathinfo($chemin,PATHINFO_EXTENSION);
    if($extension=="png"||$extension=="jpg"||$extension=="gif"){
          $type=0;}else {  $type=1; }
  

   


       if(move_uploaded_file($tmp_name,$chemin)){
         debug($nameFilter);


                           $this->Media->save(array(
                            "src"=>$nameFilter,
                            "extension"=>$extension,
                            "galery_id"=>$galery_id,
                            "position"=>$position,
                            "type"=>$type

                            ));
         

                            
                           }




     
    $this->redirect(array('controller' => 'Galeries', 'action' => 'modifier/'.$galery_id));
    
  }











}