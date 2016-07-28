<?php



class ArticlesController extends AppController
{
	
	public function index(){

		 $this->LoadModel("Pay");


		    $data=$this->Pay->find('all');
            $this->set("data",$data);

               $this->LoadModel("Categorie");
               $Categorie=$this->Categorie->find("all");
               $this->set("Categorie",$Categorie);



             if($this->request->is('post')){

            
           
              
             	$this->request->data["Article"]["user_id"]=$this->Auth->user('id');
             	$this->request->data["Article"]["ville_id"]=$this->request->data["villes"];
             	$this->Article->save($this->request->data);
             	$this->Session->setflash("Article ajouté avec succès");
             	

             $Article=$this->Article->find('first',array('order'=> array('Article.id desc')));
             $id=$Article["Article"]["id"];

              

              
             
            
             $this->LoadModel("articles_categories");
             
            foreach ($this->request->data["categorie"] as $category_id) {

            $this->articles_categories->save(array("article_id"=>$id,"category_id"=>$category_id));
             $this->articles_categories->create();

               } 




            
               $this->LoadModel("articles_galeries"); 

            foreach ($this->request->data["galeries"] as $galery_id) {

            $this->articles_galeries->save(array("article_id"=>$id,"galery_id"=>$galery_id));
             $this->articles_galeries->create();

               }


             

               debug($this->Article->find('first',array('order'=> array('Article.id desc')))); 






                
             }


		

		
	}


	 public $layout="menu";


	 public function beforeFilter() {
         parent::beforeFilter();
        $this->LoadModel("Profil");
        $id=$this->Auth->user("id");
       $data=$this->Profil->find('first',array('conditions'=> array('user_id'=>$id)));
       $this->set("profil",$data);

         }




         public function ajaxcategorie(){

         $this->layout=null;
         $this->LoadModel("Categorie");
         $Categorie=$this->Categorie->find("all");
             

       $ListCategorie="<label for='ArticleTitre' id='categorie'>Categorie</label>";
       $ListCategorie.="<select   class='form-control' name='categorie[]' >";
              
              foreach ($Categorie as $p) {
                                         $id=$p["Categorie"]["id"];
                                         $nomPay=$p["Categorie"]["nom"];
                                         $ListCategorie.= "<option value='$id'> $nomPay</option>";  }
            $ListCategorie.= "<select>";

            ;


             
             echo $ListCategorie;
           
         


         }



          public function ajaxgalerie(){

         $this->layout=null;
         $this->LoadModel("Galerie");
         $Galerie=$this->Galerie->find("all");
            

       $ListGalerie="<label for='ArticleTitre' id='Galerie'>Galerie</label>";
       $ListGalerie.="<select   class='form-control' name='galeries[]' >";
              
              foreach ($Galerie as $p) {
                                         $id=$p["Galerie"]["id"];
                                         $nomGalerie=$p["Galerie"]["nom"];
                                         $ListGalerie.= "<option value='$id'> $nomGalerie</option>";  }
            $ListGalerie.= "<select>";

            ;


             
             echo $ListGalerie;
           
         


         }


        function Afficher(){

        	debug($this->Article->find("all"));

        	
        }



}