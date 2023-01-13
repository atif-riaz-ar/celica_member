<?php $_SESSION['asset_file_name'] = "password"; ?>
<div id="content" class="at_set_form">
	<div class="jarviswidget jarviswidget-color-darken">
		<div class="widget-body">
			<div class="col-xs-12">
				<form name="frmSetSecPass" method="post" class="form-horizontal">
					<?php echo (isset($msg)) ? $msg : ''; ?>
					<?php if ($_SESSION['logged']['secondary_salt'] != "") { ?>
						<div class="form-group basic">
							<div class="col-md-12">
								<label class="col-sm-5 control-label"
									   for="old_secondary_password">[[LABEL_OLD_SECONDARY_PASSWORD]]</label>
								<input type="password" class="form-control" name="old_secondary_password"
									   id="old_secondary_password" value=""/>
							</div>
						</div>
					<?php } ?>

					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-sm-5 control-label" for="txtSecondPassword">[[LABEL_SECONDARY_PASSWORD]]</label>
							<input type="password" class="form-control" name="sec_password" id="sec_password" value=""/>
						</div>
						<div class="input-info">[[Password at least 8 numbers]]</div>
					</div>

					<div class="form-group basic">
						<div class="col-md-12">
							<label class="col-sm-5 control-label" for="txtConfirmSecondPassword">[[LABEL_CONFIRM_PASSWORD]]</label>
							<input type="password" class="form-control" name="conf_sec_password" id="conf_sec_password"
								   value=""/>
						</div>
					</div>

					<div class="form-group basic">
						<div class="col-md-12">
							<button type="submit" class="btn btn-success btn-lg btn-block" name="btnSave">
								[[DEF_UPDATE]]
							</button>
						</div>
					</div>

					<div class="form-group basic">
						<div class="col-md-12">
							<button type="button" class="btn btn-success btn-lg btn-block" onclick="mnc()">
								[[DEF_RESET_SECURITY_PASSWORD]]
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
