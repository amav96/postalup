

	<div id="editProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_product" id="edit_product">
					<div class="modal-header">						
						<h4 class="modal-title">Recibir equipo</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
						<div class="form-group">
							<label><strong>Cable HDMI</strong></label>
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input"  name="edit_cable_hdmi" value="Si" checked>Si
                            <input type="radio" class="custom-control-input"  name="edit_cable_hdmi" value="No">No
                          </div>
						</div>
						<div class="form-group">
							<label><strong>Cable AV</strong></label>
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input"  name="edit_cable_av" value="Si" checked>Si
                            <input type="radio" class="custom-control-input"  name="edit_cable_av" value="No">No
                          </div>
						</div>
						
						<div class="form-group">
							<label><strong>Fuente</strong></label>
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input"  name="edit_fuente" value="Si" checked>Si
                            <input type="radio" class="custom-control-input"  name="edit_fuente" value="No">No
                          </div>
						</div>
						<div class="form-group">
							<label><strong>Control</strong></label>
							<div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input"  name="edit_control_1" value="Si" checked>Si
                            <input type="radio" class="custom-control-input"  name="edit_control_1" value="No">No
						  </div>
                          <br>
						  <div class="form-group">
							<label><strong>Otro Accesorio/Opcional</strong></label>
							
                            <input type="text" class="form-control"  name="edit_otrosaccesorios">
                            
                          </div>
						  
						</div>
						<div class="form-group">
							<label><strong>Estado</strong></label>
							<select class="form-control" name="edit_estado_rec" id="edit_estado_rec" required>
            <option value="RECUPERADO">RECUPERADO</option>
            <option value="RECHAZADA">RECHAZADA</option>
			<option value="NO-TUVO-EQUIPO">NO TUVO EQUIPO</option>
            <option value="NO-EXISTE-NUMERO">NO EXISTE NUMERO</option>
            <option value="NO-RESPONDE">NO RESPONDE</option>
            <option value="TIEMPO-ESPERA">TIEMPO LIMITE ESPERA</option>
            <option value="SE-MUDO">SE MUDO</option>
            <option value="YA-RETIRADO">YA RETIRADO</option>
            <option value="ZONA-PELIGROSA">ZONA PELIGROSA</option>
            <option value="NO-TUVO-EQUIPO">NO TUVO EQUIPO</option>
            <option value="N/TEL-EQUIVOCADO">TEL EQUIVOCADO</option>
            <option value="NO-COINCIDE-SERIE">NO COINCIDE SERIE</option>
            
			</select>
						</div>
						<label><strong>Serie</strong></label>
							<input type="text" name="edit_serie"  id="edit_serie" class="form-control" placeholder="Serie" required readonly>
							<input type="hidden" name="edit_id" id="edit_id" > <!-- id que toma para editar el equipo-->
						</div>
						
						<div class="form-group">
							<label><strong>Nro Orden</strong></label>
							<input type="text" name="edit_id_orden" id="idValueQueNecesito" class="form-control" required readonly>
						</div>
						
						<div class="form-group">
							
							<input type="hidden" class="form-control" type="text" name="horario_rec"
							 value="<?php date_default_timezone_set('America/Argentina/Buenos_Aires'); echo date("Y-m-d H:i:s");?>" readonly>
						</div>
						<div class="form-group">
							<label><strong>Recolector</strong></label>
							<input class="form-control" type="text" name="id_recolector_password" id="id_recolector_password" 
							value="<?php if(isset($_SESSION['logged_user']))
							{ echo $_SESSION['id_recolector']; } ?>" required readonly>
						</div>
						<div class="form-group">
							
							<input class="form-control" type="hidden" name="id_recolector_2" id="id_recolector_2" 
							value="<?php if(isset($_SESSION['logged_user']))
							{ echo $_SESSION['id_recolector']; } ?>" required>
						
						</div>
						
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-danger" data-dismiss="modal" value="Salir">
						<input type="submit" class="btn btn-info" value="Confirmar">
					</div>
				</form>
			</div>
	</div>
		
<script>


</script>
