<br>
<div>
	<div class="panel panel-info">
		<div class="panel-heading">Parcourir les concerts à venir</div>
		<div class="panel-body">
			<form class="form-inline" role="form">
			<input type="hidden" id="_token" name="_token" value="<?php echo csrf_token(); ?>">
				<div class="form-group">
					Filter les recherches
				</div>
				<div class="form-group">
				
					<select class="form-control" id="ville">
						<option>Ville</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" id="tags">
						<option>Tags</option>
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" id="prix">
						<option>Prix</option>
					</select>
				</div>

				<div class="form-group">
					<label>Entre le</label>
					<select class="form-control" id="date_from">
						<option>Date</option>
					</select>
				</div>
				<div class="form-group">
					<label>Et le</label>
					<select class="form-control" id="date_to">
						<option>Date</option>
					</select>
				</div>
			</form>
			<!-- {!! Form::select('Ville', array)() !!} -->
		</div>
	</div>
</div>
<br>