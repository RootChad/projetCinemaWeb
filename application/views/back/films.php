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
    <title>FILMS</title>
    <?php include("part/head.php") ?>
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
                            <form class="form-header" action="<?php echo base_url()?>Back-Recherche" method="POST">
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
			<?php include("fonction.php") ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <div class="table-responsive table-responsive-data2">
                                    <table id="tableau" class="table table-data2 sortable">
                                        <thead>
                                            <tr>
                                              <th>ID</th>
                                                <th>Titre</th>
                                                <th>Note</th>
                                                <th>Durée</th>
                                                <th>Date Sortie</th>

                                                <th>Genre</th>
                                                <th>Description</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach($films as $film){ ?>
											
                                            <tr class="tr-shadow">
                                                <td><?php echo $film['idfilm'];?></td>
                                                <td><?php echo $film['titre'];?></td>
                                                <td><?php echo $film['notefilm'];?>/20</td>
                                                <td><?php echo $film['duree'];?> h</td>

                                                <td><?php echo $film['datesortie'];?></td>
                                                <td><?php echo $film['nom'];?></td>
                                                <td><?php echo $film['description'];?></td>
                                                <input type="hidden" name="idFilm" value="<?php echo $film['idfilm'];?>">
                                                <td>
                                                  <a href="<?php echo base_url()?>Back-ToModifFilm-<?php echo $film['idfilm'];?>-<?php echo verify4($film['titre']);?>-<?php echo $film['image'];?>-<?php echo $film['notefilm'];?>-<?php echo $film['duree'];?>-<?php echo verify3($film['datesortie']);?>-<?php echo $film['idgenre'];?>-<?php echo verify4($film['description']);?>">

                                                    <button class="btn btn-success btn-sm" type="button">
                                                        <i class="fa fa-magic"></i></button>
                                                 </a>
                                                </td>

                                                <td>
                                                  <a href="<?php echo base_url()?>Delete-Film-<?php echo $film['idfilm'];?>"><button class="btn btn-danger btn-sm" type="button">
                                                      <i class="fa fa-trash"></i></button>
                                                  </a>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
											
                                          <?php } ?>

                                        </tbody>



                                        <button class="btn btn-primary btn-sm" type="button"data-toggle="modal" data-target="#ajout">
                                            <i class="fa fa-plus"></i>&nbsp; Ajouter
                                          </button>

                                    </table>
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
