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
    <title>Modfication Film</title>
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
                                               <div class="card-header">Modification de CALENDRIER</div>
                                               <div class="card-body">

                                                   <hr>
                                                   <form action="<?php echo base_url()?>Back-ModifCalendrier" method="post" novalidate="novalidate">
                                                       <div class="form-group">
                                                           <label for="prix" class="control-label mb-1">Prix</label>
                                                           <input id="prix" name="prix" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $prix?>" required>
                                                       </div>
                                                      <div class="form-group has-success">
														   <label for="idfilm" class="control-label mb-1">Film</label>
																<select name="idfilm" id="idfilm" class="form-control">		
																						<?php  foreach($cal as $c){ ?>
																						<option value="<?php echo $c['idfilm'] ?>"><?php echo $c['titre'] ?></option>
																						<?php } ?>
																						<?php  foreach($films as $f){ ?>
																							<option value="<?php echo $f['idfilm']; ?>"><?php echo $f['titre']; ?></option>
																						<?php } ?>
																</select> 
														</div>
                                                       <div class="form-group has-success">
														   <label for="date" class="control-label mb-1">Jour</label>
																<select name="date" id="date" class="form-control">														
																		<option value="<?php echo $date?>"><?php echo $date?></option>
																		<option value="lundi">Lundi</option>
																		<option value="mardi">Mardi</option>
																		<option value="mercredi">Mercredi</option>
																		<option value="jeudi">Jeudi</option>
																		<option value="vendredi">Vendredi</option>
																		<option value="samedi">Samedi</option>
																			
																</select> 
														</div>
                                                       <div class="form-group">
                                                           <label for="heure" class="control-label mb-1">Heure</label>
                                                           <input id="heure" name="heure" type="text" class="form-control cc-number identified visa" value="<?php echo $heure?>" required>
                                                           <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                       </div>

                                                       <input type="hidden" name="id" value="<?php echo $id ?>">
                                                       <div class="modal-footer">
                                                      <a href="<?php echo base_url()?>/index.php/BackControl/toFilms">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                      </a>
                                                       <button type="submit" class="btn btn-primary">Confirm</button>
                                                       </div>
                                                   </form>
                                               </div>
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
