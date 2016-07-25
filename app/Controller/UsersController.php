<?php



class UsersController extends AppController
{






	
	public function index(){

		debug($this->User->find('all'));
	}


      public function beforeFilter() {
         //$this->Auth->allow("login");//permettre ouvrire
         //$this->Auth->deny("index");//refuser fermer par defaut tout le project et fermer deny
          $this->Auth->allow("inscription","activation");

         }





      public function login(){

       
      //	debug($this->Auth->password("hamza"));
      //	debug($this->Session->read('Auth.User.id'));
      //	debug($this->Auth->user());
      		//debug($this->Session->read());
      		

 


      	if($this->request->is("post")){

      		if($this->Auth->login()){

      		 $this->redirect(array('controller' => 'Profils', 'action' => 'index'));
      		}
      		else{ $this->Session->setFlash("incorrect username or password or compte non activer "); }
      	}


      }


      public function logout(){

      	$this->Auth->logout();
      	 $this->redirect(array('controller' => 'users', 'action' => 'login'));


      }


      public function inscription(){

      if($this->request->is('post')){


        $captch=$_POST["g-recaptcha-response"];
        $captchCle="6LfJUhgTAAAAAIGf67GL8D9JlXtXjoKTruQAEwQv";
        $urlCaptch="https://www.google.com/recaptcha/api/siteverify?secret=$captchCle&response=$captch";
        $rsp=file_get_contents($urlCaptch);
        $arry=json_decode($rsp,true);
        if($arry["success"]==true){ 

               
               
              
             
                if($this->request->data['User']['password']==$this->request->data['User']['confirmPassword']){

           $this->request->data["User"]["password"]=$this->Auth->password($this->request->data["User"]["password"]);
                             $this->request->data["User"]["active"]="0";
                             $this->request->data["User"]["role"]="user";

                         	if($this->User->save($this->request->data,true)){

                         		$this->Session->setFlash('compte ajouté avec succès merci de le valider  par email');
                         	}else{
                         		$this->Session->setFlash('Error');
                         	}
                         	

                         }else

                         {
                         	$this->Session->setFlash('password invalidate');
                         }

                }else{ $this->Session->setFlash('impossible de valider son captcha');}  


              }
		 }




function activation($id=null){

if($id==null){exit();}
 
  $this->User->id=$id;
  $activ=$this->User->Field("active");
if($activ==1){

  $this->Session->setFlash("<h1>compte Deja activer <a href='/stage/Users/login'>se connecter</a></h1>");}

      else{$this->User->saveField("active","1");
          
          $this->LoadModel("Profil");
          $this->Profil->save(array("id"=>$id,"img"=>"profil.jpg"));
           $this->Session->setFlash("<h1>compte activer avec success</h1>  <a href='/stage/Users/login'>se connecter</a>");}





  }


    





}