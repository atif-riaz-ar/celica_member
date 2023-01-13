<div id="content" class="at_set_form">
	<div class="row">
		<div class="card">
			<div class="jarviswidget jarviswidget-color-darken"  >
				<form name="frmAdminGroup" method="post" class="form-horizontal">
					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-md-12">[[LABEL_NAME]]</label>
							<input type="text" class="form-control" id="disabledInput" disabled
								   placeholder="<?php echo $mem['f_name'] . ' ' . $mem['l_name']; ?>">
						</div>
					</div>
					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-md-12">[[LABEL_USERNAME]]</label>
							<input type="text" class="form-control" id="disabledInput" disabled
								   placeholder="<?php echo $mem['username']; ?>">
						</div>
					</div>

					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-md-12">[[LABEL_ADDRESS]]</label>
							<input type="text" class="form-control" id="disabledInput"
								   placeholder="<?php echo $mem['address']; ?>" disabled>
						</div>
					</div>
					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-md-12"
								   for="selCountry">[[LABEL_COUNTRY]]</label>
						</div>
						<div class="col-md-12">
							<input type="text" class="form-control" name="country" id="txtEmail" disabled
								   value="<?php echo $mem['full_name']; ?> "/>
						</div>
					</div>


					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-md-12" for="txtEmail">[[LABEL_EMAIL]]</label>
							<input type="text" class="form-control" name="email" id="txtEmail" disabled
								   value="<?php echo $mem['email']; ?> "/>
						</div>
					</div>


					<div class="form-group basic">
						<div class="col-md-12 mobile_span">
							<label class="col-md-12" for="txtMobileNo">
								[[LABEL_MOBILE]]
							</label>
							+<?php echo $mem['code']; ?>
							<input type="text" class="form-control mobile_input" disabled
								   value="<?php echo $mem['mobile']; ?>"/>
						</div>
					</div>
					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-md-12">[[LABEL_DATE_JOINED]]</label>
							<input type="text" class="form-control" id="disabledInput"
								   placeholder="<?php echo $mem['join_date']; ?>" disabled>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
