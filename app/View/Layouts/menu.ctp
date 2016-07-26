<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>  </title>

  <!-- Bootstrap core CSS -->

  <link href="/cake/index/css/bootstrap.min.css" rel="stylesheet">

  <link href="/cake/index/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="/cake/index/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="/cake/index/css/custom.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/cake/index/css/maps/jquery-jvectormap-2.0.3.css" />
  <link href="/cake/index/css/icheck/flat/green.css" rel="stylesheet" />
  <link href="/cake/index/css/floatexamples.css" rel="stylesheet" type="text/css" />

  <script src="/cake/index/js/jquery.min.js"></script>
  <script src="/cake/index/js/nprogress.js"></script>



</head>




<body class="nav-md">

  <div class="container body">



    <div class="main_container">


      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">


          <div class="navbar nav_title" style="border: 0;">
            <a href="../home/index.html" class="site_title"><i class="fa fa-car"></i> <span>DINI M3AK!</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="/cake/index/imges/<?=$this->Session->read('img'); ?>" alt="..." class="img-circle profile_img" width="70px"  height="60px"   >
            </div>
            <div class="profile_info">
              <span>Bienvenue </span>
              <h2> <?=$this->Session->read('name'); ?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="../home/index.html">  Acceil </a>
                    <li><a href="index.php">Comment ça marche</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Profil <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    
                    <li><a href="profil.php">Afficher les Données profil</a>
                    </li>
                    <li><a href="profil.php?form=form1">Editer Mon profil</a>
                    </li>
                    <li><a href="profil.php?form=form2">Editer Photo de  profil</a>
                    </li>
                    <li><a href="profil.php?form=preferences">Editer Mes preferences</a>
                    </li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Gestion Trajet <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">

                    <li><a href="ajouterTrajet.php">Ajouter un Trajet</a>
                    </li>
                    <li><a href="AfficherMesAnnonces.php">Modifier & Supprimer  Trajet</a>
                    </li>
                   
                   
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Gestion Annonces <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="recharche.php">Afficher tout les Annonces</a>
                    </li>
                    <li><a href="recharche.php?id=*">Recherche Une Annonce </a>
                    </li>
                    <li><a href="AfficherAnonnce.php?id=3">Afficher détail annonces</a>
                    </li>
                  </ul>
                </li>



                 <li><a><i class="fa fa-bug"></i> Gestion Reservation<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">

                    <li><a href="AfficherMesReservation.php">Afficher Mes Reservation</a>
                     <li><a href="AfficherMessagePriver.php">Afficher Mes Messages Prives
</a>
                    </li>
                    
                    
                  </ul>
                </li>

                <li><a><i class="fa fa-bar-chart-o"></i> Gestion Compte <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">

                    <li><a href="../changerPasse.php">Changer Passe</a>
                    </li>
                    <li><a href="../changEmail.php">Changer Email</a>
                    </li>
                    <li><a href="../Deconnection.php">Deconnection</a>
                    </li>
                    
                  </ul>
                </li>

                  



              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">

                
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    <li><a href="page_500.html">500 Error</a>
                    </li>
                    

                  </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav" >

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right" id="menu">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="/cake/index/imges/<?=$this->Session->read('img');?>" alt="">

                  <?=$this->Session->read('name');?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="profil.php">  Profile</a>
                  </li>
                  <li>
                    <a href="AfficherMesAnnonces.php">
                      <span class="badge bg-red pull-right">New</span>
                      <span>Trajet</span>
                    </a>
                  </li>

                  
                  <li><a href="../Deconnection.php"><i class="fa fa-sign-out pull-right"></i> Deconnection</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  




                 
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">


                  <li>
                    <a>
                      <span class="image">
                                        <img src="/cake/index/img/profil.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John   Admin</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                       bienvenue sur Dini M3ak <br>
                                       N hésitez pas a appelez nous service professionnelle 
                                    </span>
                    </a>
                  </li>



                
                 





<li>
                    <a href='AfficherMessagePriver.php?id=$data2->IdMessage'>
                      <span  >
                                        <img  style='border-radius:50%'  src='/cake/index/img/profil.jpg' alt='Profile Image' width=30px height=30px />
                                    </span>
                      <span>
                                        <span> $data2->nom $data2->Prenom</span>
                      <span class='time'>3 mins ago</span>
                      </span>
                      <span class='message'>
                                        
                                        $data2->Message
                                    </span>
                    </a>
                  </li>
       
       
                 <li>
                    <div class="text-center">
                      <a href="AfficherMessagePriver.php">
                        <strong>Voir toutes les Message</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <style type="text/css">
  .site_title i{    border: 2px solid #EAEAEA}
</style>

      

  <div class="right_col" role="main">
   <?php 
 
 if($message=$this->Session->flash()){
   echo "<div class='alert alert-info alert-dismissable'>
<a class='panel-close close' data-dismiss='alert'>×</a> <h2>$message</h2></div>";}



    ?>

  <?=  $this->fetch('content'); ?>
  </div>





<!-- footer content -->

        <footer>
          <div class="copyright-info">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
      <!-- /page content -->

    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="/cake/index/js/bootstrap.min.js"></script>

  <!-- gauge js -->
  
  <!-- bootstrap progress js -->
  <script src="/cake/index/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="/cake/index/js/nicescroll/jquery.nicescroll.min.js"></script>



  <script type="text/javascript" src="/cake/index/js/moment/moment.min.js"></script>
  <script type="text/javascript" src="/cake/index/js/datepicker/daterangepicker.js"></script>
  <!-- chart js -->
  <script src="/cake/index/js/chartjs/chart.min.js"></script>

  <script src="/cake/index/js/custom.js"></script>

 
  



  <script src="/cake/index/js/pace/pace.min.js"></script>
  
  <!-- skycons -->
  <script src="/cake/index/js/skycons/skycons.min.js"></script>
 
  <script>
    NProgress.done();
  </script>


  <!-- /datepicker -->
  <!-- /footer content -->
</body>

</html>










 
      
