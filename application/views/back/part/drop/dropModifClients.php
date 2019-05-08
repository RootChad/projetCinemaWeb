<div class="modal fade" id="ajout" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="mediumModalLabel">Modification Client</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="card">
               <div class="card-header">Modification de Client</div>
               <div class="card-body">

                   <hr>
                   <form action="<?php echo base_url()?>/index.php/BackControl/modifierClient" method="get" novalidate="novalidate">
                       <div class="form-group">
                           <label for="nom" class="control-label mb-1">nom</label>
                           <input id="nom" name="nom" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                       </div>
                       <div class="form-group has-success">
                           <label for="login" class="control-label mb-1">login</label>
                           <input id="login" name="login" type="number" class="form-control cc-name valid" data-val="true" required>
                           <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                       </div>
                       <div class="form-group has-success">
                           <label for="password" class="control-label mb-1">MotDePasse</label>
                           <input id="password" name="password" type="password" class="form-control cc-name valid" data-val="true" required>
                           <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
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
