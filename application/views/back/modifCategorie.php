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
    <title>Modfication Categorie</title>
    <?php include("/part/head.php") ?>
</head>

<body class="animsition">

    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
            <?php include("part/menu.php") ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="<?php echo base_url()?>index.php/BackControl/find" method="POST">
                                <input class="au-input au-input--xl" type="text" name="req" placeholder="Rechercher" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                              <?php include("part/accountAdmin.php") ?>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
            <?php include("part/drop/dropAjoutFilms.php") ?>
            <?php include("part/drop/dropModifFilms.php") ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="card">
                                               <div class="card-header">Modification de Categorie</div>
                                               <div class="card-body">

                                                   <hr>
                                                   <form action="<?php echo base_url()?>Back-ModifCategorie" method="post" novalidate="novalidate">
                                                       <div class="form-group">
                                                           <label for="nom" class="control-label mb-1">nom</label>
                                                           <input id="nom" name="nom" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $nom ?>" required>
                                                       </div>

                                                       <input type="hidden" name="id" value="<?php echo $id ?>">
                                                       <div class="modal-footer">
                                                      <a href="<?php echo base_url()?>Back-Categories">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      </a>
                                                       <button type="submit" class="btn btn-primary">Confirm</button>
                                                       </div>
                                                   </form>
                                               </div>
                                           </div>






                               <!-- END DATA TABLE -->
                   <div class="main-content">

                 <!-- FOOTER -->
                 <?php include("part/menu.php") ?>
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
      <script src="<?php echo base_url();?>assets/js/sorttable.js"></script>
</body>

</html>
<!-- end document-->
