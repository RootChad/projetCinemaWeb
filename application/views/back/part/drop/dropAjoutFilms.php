<div class="modal fade" id="ajout" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="mediumModalLabel">Ajout Film</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="card">
               <div class="card-header">Ajout de Film</div>
               <div class="card-body">

                   <hr>
                   <form action="<?php echo base_url()?>Back-AddFilm" method="post" novalidate="novalidate" enctype="multipart/form-data">
                       <div class="form-group">
                           <label for="titre" class="control-label mb-1">TITRE</label>
                           <input id="titre" name="titre" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                       </div>
                       <div class="form-group has-success">
                           <label for="note" class="control-label mb-1">NOTE</label>
                           <input id="note" name="note" type="number" class="form-control cc-name valid" data-val="true" required>
                           <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                       </div>
                       <div class="form-group has-success">
                           <label for="durée" class="control-label mb-1">Duree</label>
                           <input id="durée" name="durée" type="number" class="form-control cc-name valid" data-val="true" required>
                           <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                       </div>
                       <div class="form-group">
                           <label for="date" class="control-label mb-1">Date Sortie</label>
                           <input id="date" name="date" type="date" class="form-control cc-number identified visa" value="" required>
                           <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                       </div>
                       <div class="row">
                           <div class="col-6">
                               <div class="form-group">
                                   <label for="image" class="control-label mb-1">Image</label>
                                   <input id="image" name="upload" type="file" class="form-control cc-exp" value="" required>
                                   <span class="help-block" data-valmsg-for="image" data-valmsg-replace="true"></span>
                               </div>
                           </div>
                           <div class="col-6">
                               <label for="genre" class="control-label mb-1">Genre</label>
                               <div class="col-12 col-md-9">
                                                    <select name="idgenre" id="select" class="form-control">														
                                                        <option value="0">Please select</option>
														<?php  foreach($categories as $cat){ ?>
															<option value="<?php echo $cat['idcategorie']; ?>"><?php echo $cat['nom']; ?></option>
														<?php } ?>
                                                    </select>
                                </div>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="description" class="control-label mb-1">Description</label>
                           <input id="description" name="description" type="text" class="form-control"  value="" required>
                       </div>
                       <div class="modal-footer">
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                       <button type="submit" class="btn btn-primary">Confirm</button>
                       </div>
                   </form>
               </div>
           </div>
</div>

</div>
</div>
</div>
