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
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url();?>assets/js/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url();?>assets/css/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url();?>assets/css/perfect-scrollbar.css" rel="stylesheet" media="all">

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
									<a href="<?php echo base_url();?>index.php/FactureControl/facturedetail/<?php echo $session;?>">
									<i class="fas fa-table"></i>ListeFacture</a>
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
                  
                       
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Resultat</h3>
                               
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                               
                                                <th>Nom</th>
                                                <th>ndrpassager</th>
                                                <th>small</th>
                                                <th>large</th>
                                                <th>transition</th>
                                                <th>consommation</th>
                                                <th>nbrPorte</th>
                                                <th>prix</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($vehicule as $v){ ?>
                                            <tr class="tr-shadow">
                                                
                                                <td><?php echo $v['nom'];?></td>
                                                
                                               
                                                <td><?php echo $v['ndrpassager'];?></td>
                                                <td><?php echo $v['small'];?></td>
                                                <td><?php echo $v['large'];?></td>
                                                <td><?php echo $v['transition'];?></td>
                                                <td><?php echo $v['consommation'];?></td>
                                                <td><?php echo $v['nbrPorte'];?></td>
                                                <td><?php echo $v['prix'];?></td>
                                               
                                               
                                                
                                            </tr>
                                            <tr class="spacer"></tr>
                                        <?php }  ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url();?>assets/js/slick.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/animsition.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url();?>assets/js/circle-progress.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url();?>assets/js/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>
<!-- end document-->
