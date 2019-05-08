<!DOCTYPE html>
<html lang="en">

<head> 
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Tables</title>

   <!-- Fontfaces CSS-->
    <link href="<?php echo base_url();?>assets/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url();?>assets/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
    
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url();?>assets/images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
             <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                       
                     
                        <li class="active">
                            <a href="<?php echo base_url();?>index.php/ListeController">
                                <i class="fas fa-table"></i>Liste</a>
                        </li>
                         
                     <li class="active">
                            <a href="<?php echo base_url();?>index.php/Recherche">
                                <i class="fas fa-table"></i>Recherche</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url();?>index.php/PanierControl/panier/<?php echo $session;?>">
                                <i class="fas fa-table"></i>Panier</a>
                        </li>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Facture</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="active">
									<a href="<?php echo base_url();?>index.php/FactureControl/facturedetail/<?php echo $session;?>">
									<i class="fas fa-table"></i>Facture</a>
								</li>
								 <li class="active">
									<a href="<?php echo base_url();?>index.php/ListefactureControl/">
									<i class="fas fa-table"></i>ListeFacture</a>
								</li> 
<li class="active">
                            <a href="<?php echo base_url();?>index.php/DashController">
                                <i class="fas fa-table"></i>DashBoard</a>
                        </li>                                
                            </ul>
                        </li>						
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                             <form class="form-header" action="<?php echo base_url()?>index.php/Recherche/find" method="POST">
                                <input class="au-input au-input--xl" type="text" name="req" placeholder="Rechercher" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="<?php echo base_url();?>assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Admin</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="<?php echo base_url();?>assets/images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                  
                       
                     
                                    <div class="card-header">
                                        <strong>Recherche</strong> 
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="<?php echo base_url();?>index.php/Recherche/find"method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nom</label>
                                                </div>
                                               <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="nom" placeholder="Text" class="form-control">
                                                    
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="categorie" class=" form-control-label">Marque</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="marque" id="marque" class="form-control" onChange="createSelect(categorie,sous)">
                                                    
                                                    <?php foreach($marque as $m){?>
                                                        <option value="<?php echo $m['idmarque']?>"><?php echo $m['nom']?></option>
                                                     <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="categorie" class=" form-control-label">Categorie</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="categorie" id="categorie" class="form-control" onChange="createSelect(categorie,sous)">
                                                    
                                                    <?php foreach($categorie as $c){?>
                                                        <option value="<?php echo $c['idcategorie']?>"><?php echo $c['nom']?></option>
                                                     <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="sous" class=" form-control-label">SousCategorie</label>
                                                </div>
                                                <div name="sous" id="sous"class="col-12 col-md-9">
                                                   
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Prix</label>
                                                </div>
                                               <div class="col-4 col-md-4">
                                                    <input type="text" id="text-input" name="prixMin" placeholder="prixMin" class="form-control">
                                                    
                                                </div>
                                                <p>à</p>
                                                 <div class="col-4 col-md-4">
                                                    <input type="text" id="text-input" name="prixMax" placeholder="prixMax" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Rechercher
                                        </button>
                                       </form>
                                    </div>
                                </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
 <!-- Jquery JS-->
    <script src="<?php echo base_url();?>assets/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>assets/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
<script type="text/javascript">

function createSelect(id, selectName){
        console.log($(id).val());
      $.ajax({
         type: "POST",
         url: "<?php echo base_url();?>index.php/Recherche/getSOUSCAT",
         data: {categorie: $(id).val()},
         dataType: "json",
         cache:false,
         success:
          function(data){
            var sous_categories =  data;
            console.log("taille"+sous_categories.length);
            if(sous_categories.length === 0)
              return;
            var cat = document.getElementById("sous");
            var element = document.getElementById(selectName);
            if(element != null)
              element.parentNode.removeChild(element);
            var selectList = document.createElement("select");
            selectList.classList.add("form-control");
            selectList.id = selectName.id;
            selectList.name = selectName.id;
            if(document.getElementById(selectList.name)!=null)
                 cat.appendChild(selectList);
           
            var def = document.createElement("option");
            def.value =0;
            def.text = "TOUS";
            selectList.appendChild(def);
            for (var i = 0; i < sous_categories.length; i++) {
              var option = document.createElement("option");
              option.value = sous_categories[i].idsouscategorie;
              option.text = sous_categories[i].nom;
              selectList.appendChild(option);
            }
          }
      });
    }
</script>
</body>

</html>
<!-- end document-->
