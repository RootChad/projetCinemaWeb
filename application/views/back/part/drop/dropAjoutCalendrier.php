<div class="modal fade" id="ajout" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="mediumModalLabel">Ajout CALENDRIER</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<div class="card">
               <div class="card-header">Ajout de CALENDRIER</div>
               <div class="card-body">

                   <hr>
                   <form action="<?php echo base_url()?>Back-AddCalendrier" method="post" novalidate="novalidate">
                       <div class="form-group">
                           <label for="prix" class="control-label mb-1">Prix</label>
                           <input id="prix" name="prix" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" required>
                       </div>
                       <div class="form-group has-success">
                           <label for="idfilm" class="control-label mb-1">idFilm</label>
								<select name="idfilm" id="idfilm" class="form-control">														
                                                        <option value="0">Please select</option>
														<?php  foreach($films as $f){ ?>
															<option value="<?php echo $f['idfilm']; ?>"><?php echo $f['titre']; ?></option>
														<?php } ?>
                                </select> 
						</div>
                       <div class="form-group has-success">
                           <label for="date" class="control-label mb-1">Jour</label>
								<select name="date" id="date" class="form-control">														
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
                           <input id="heure" name="heure" type="time" class="form-control cc-number identified visa" value="" required>
                           <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
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
