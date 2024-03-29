<?php $_SESSION['asset_file_name'] = "add_form"; ?>
<div id="appCapsule">
	<div class="section mt-2">
		<div class="card">
			<div class="card-body">

				<form name="frmRegister" method="post" class="form-horizontal">

					<div class="form-group basic">
						<div class="input-wrapper">
							<div class="alert alert-success">
								<?php echo $available['userid'] ?>
								[[LABEL_AVAILABLE_SLOT_UNDER]] <?php echo $desired['userid'] ?> <br>
								[[LABEL_USER_PLACEMENT_WILLBE]] <?php
									if($side == "L") echo "[[LEFT]]";
									if($side == "R") echo "[[RIGHT]]";
									if($side == "A") echo "[[AUTO]]";
								?>
							</div>
						</div>
					</div>

					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="col-md-12 control-label" for="txtSponsorId">[[LABEL_SPONSORID]]</label>
							<div class="col-md-12">
								<input required type="text" readonly="readonly" class="form-control"
									   value="<?php echo $sponsor['userid'] ?>">
								<strong><?php echo $sponsor['f_name'] ?><?php echo $sponsor['l_name'] ?></strong>
								<p style="color:red;">[[MSG_MEMBER_PROFILE]]</p>
							</div>
						</div>
					</div>

					<input type="hidden" id="user" name="user" value="<?php echo $_SESSION['logged']['userid'] ?>">
					<input type="hidden" id="id" name="id" value="<?php echo $_SESSION['logged']['id'] ?>">
					<input type="hidden" id="sponsor_user" name="sponsor_user" value="<?php echo $sponsor['userid'] ?>">
					<input type="hidden" id="sponsor_id" name="sponsor_id" value="<?php echo $sponsor['id'] ?>">
					<input type="hidden" id="matrix_user" name="matrix_user" value="<?php echo $available['userid'] ?>">
					<input type="hidden" id="matrix_id" name="matrix_id" value="<?php echo $available['id'] ?>">
					<input type="hidden" id="matrix_side" name="matrix_side" value="<?php echo $side ?>">
					<input type="hidden" id="myEmail" name="myEmail" value="<?php echo $_SESSION['logged']['email']; ?>">
					<input type="hidden" id="myFirstName" name="myFirstName" value="<?php echo $_SESSION['logged']['f_name']; ?>">
					<input type="hidden" id="myLastName" name="myLastName" value="<?php echo $_SESSION['logged']['l_name']; ?>">
					<input type="hidden" id="myCountry" name="myCountry" value="<?php echo $_SESSION['logged']['country']; ?>">
					<input type="hidden" id="myMobile" name="myMobile" value="<?php echo $_SESSION['logged']['mobile']; ?>">

					<div class="form-group basic">
						<div class="input-wrapper">
							<label class="col-md-12 control-label">[[LABEL_DOWNLINE_TYPE]]</label>
							<div class="col-md-12">
								<input type="radio" name="downline_type" id="downline_type_0" value="0" checked="checked">
								<span class="input-mini">[[LABEL_OUTSIDER]]</span>
								<input type="radio" name="downline_type" id="downline_type_1" value="1">
								<span class="input-mini">[[LABEL_OWNSELF]]</span>
							</div>
						</div>
					</div>

					<div class="main_account_area">
						<div class="form-group basic">
							<div class="input-wrapper">
								<div class="col-md-12">
									<h3>[[NEW_MEMBER_INFO_BELOW]]</h3>
								</div>
							</div>
						</div>
						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="col-md-12 control-label d-none" for="txtEmail">[[LABEL_EMAIL]]</label>
								<div class="col-md-12">
									<input required placeholder="[[LABEL_EMAIL]]" required type="email" class="form-control" name="email" id="txtEmail" value="">
								</div>
							</div>
						</div>

						<div class="form-group basic">
							<div class="input-wrapper">
								<label class=" d-none col-md-12 control-label" for="txtFirstName">[[LABEL_FIRST_NAME]]</label>
								<div class="col-md-12">
									<input required placeholder="[[LABEL_FIRST_NAME]]" type="text" class="form-control" name="f_name" id="txtFirstName" value="">
								</div>
							</div>
						</div>


						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="d-none col-md-12 control-label" for="txtLastName">[[LABEL_LAST_NAME]]</label>
								<div class="col-md-12">
									<input required type="text" class="form-control" name="l_name" id="txtLastName" value="" placeholder="[[LABEL_LAST_NAME]]">
								</div>
							</div>
						</div>


						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="col-md-12 control-label d-none" for="selCountry">[[LABEL_COUNTRY]]</label>
								<div class="col-md-12">
									<select required name="country" id="selCountry" class="form-control" style="padding-left: 10px !important;">
										<?php foreach ($countries as $country) { ?>
											<option data-code="<?php echo $country['id']; ?>" <?php echo $country['id'] == 194 ? "selected" : ""; ?> value="<?php echo $country['id'] ?>">
												<?php echo $country['full_name'] ?>
											</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group basic">
							<div class="input-wrapper">
								<label class="d-none control-label col-md-12" for="txtMobileNo">[[LABEL_MOBILE]]\</label>
								<div class="col-md-12">
									<table width="100%">
										<tbody>
										<tr>
											<td style="width: 40px"><span class="input-group-addon my_cc">65</span>
											</td>
											<td>
												<input required type="text" placeholder="[[LABEL_MOBILE]]" class="form-control" name="mobile" id="txtMobileNo" value="">
											</td>
										</tr>
										</tbody>
									</table>
									<p style="color:red;">[[MBM_MOBILE_MSG]]</p>
								</div>
							</div>
						</div>

					</div>
					<div class="form-group basic">
						<div class="input-wrapper">
							<div class="col-md-12">
								<input type="submit" class="btn btn-lg btn-success btn-block" value="Submit">
							</div>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>
