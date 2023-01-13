<style>
	a {
		transition: .2s all;
		color: #D73A31 !important;
		outline: 0 !important;
		font-size: 14px !important;
	}

	.card .card-title {
		color: #27173E !important;
		font-size: 17px !important;
		font-weight: 500 !important;
	}

	h2 {
		font-size: 20px !important;
		font-weight: 700 !important;
	}

	#appCapsule {
		padding: 56px 0 !important;
		margin-bottom: env(safe-area-inset-bottom) !important;
	}

	.form-control {
		display: block;
		width: 100%;
		height: calc(1.5em + .75rem + 2px);
		padding: .375rem .75rem;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ced4da;
		border-radius: .25rem;
		transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	}

	.form-group .form-control, .form-group .custom-select {
		background: transparent;
		border: none;
		border-bottom: 1px solid #DCDCE9;
		padding: 0 30px 0 0;
		border-radius: 0;
		height: 40px;
		color: #27173E;
		font-size: 15px;
	}

	.form-group .form-control:focus, .form-group .custom-select:focus {
		border-bottom-color: #D73A31;
		box-shadow: inset 0 -1px 0 0 #D73A31;
	}
</style>
<div id="appCapsule" style="height: 100vh; margin-bottom: 40px">
	<div class="section mt-2 text-center">
		<img class="login-logo" src="<?php echo assets_url("img/logo.png"); ?>" alt="lng-image"
			 style="width: 160px !important;">
	</div>
	<div class="section p-3">
		<div class="card" style="border-radius: 10px !important;">
			<div class="card-body pb-1">
				<div class="card-title d-flex justify-content-around align-items-center">
					<div>
						<h2 class="text-center m-0">[[LABEL_REGISTER]]</h2>
					</div>
					<?php if (isset ($_SESSION['REGISTER_SUCCESS'])) { ?>
						<div>
							<div class="alert alert-success">[[LABEL_REGISTER_SUCCESS]]</div>
						</div>
					<?php } ?>
					<div>
						<div class="row">
							<?php $this->load->view('partials/language_changer'); ?>
						</div>
					</div>
				</div>

				<?php
				if (isset($_SESSION['SD']['sponsor']['userid'])) {
					?>
					<form name="frmRegister" method="post" class="form-horizontal" action="<?php echo BASE_URL ?>signup/confirm">

						<div class="form-group" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_SPONSORID]]</label>
							<div class="col-md-12">
								<input type="text" readonly="readonly" class="form-control" name="sponsor"
									   id="sponsor"
									   value="<?php echo isset($_SESSION['SD']['sponsor']['userid']) ? $_SESSION['SD']['sponsor']['userid'] : ""; ?>"/>
								<strong id="spon_name"><?php echo isset($sponsor['id']) ? $sponsor['f_name'] . ' ' . $sponsor['l_name'] : ''; ?></strong>
								<p style="color:red; font-size: 13px">[[MSG_MEMBER_PROFILE]]</p>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="form-group input-prepend">
							<label class="control-label col-md-12" for="mobile">
								[[LABEL_MOBILE]]
							</label>
							<div class="col-md-12">
								<div class="input-group">
                                    <span class="input-group-addon" style="line-height: 37px !important;">
                                        <?php echo isset($country['id']) ? $country['code'] : '65'; ?>
                                    </span>
									<input style="margin-left: 10px" type="text" class="form-control" name="mobile"
										   id="mobile" placeholder="[[LABEL_MOBILE]]"
										   value="<?php echo isset($_SESSION['SD']['mobile']) ? $_SESSION['SD']['mobile'] : (isset($_SESSION['signup']['mobile']) ? $_SESSION['signup']['mobile'] : ""); ?>"/>
								</div>
								<p id="verification_message" style="font-size: 13px">[[MBM_MOBILE_MSG]]</p>
							</div>
						</div>

						<div class="form-group code_verified">
							<div class="col-md-12">
								<input type="button" value="[[LABEL_GET_CODE]]" id="get_sms_code"
									   class="btn btn-sm btn-success">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="[[LABEL_ENTER_CODE]]" id="validate_code"
									   class="form-control">
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label"
								   for="username">[[LABEL_USERNAME]]</label>
							<div class="col-md-12">
								<input required type="text" class="form-control alphanum" name="username" id="username"
									   value="<?php echo isset($_SESSION['SD']['username']) ? $_SESSION['SD']['username'] : ""; ?>"/>
								<span style="font-size: 13px">[[LABEL_USERNAME_MESSAGE]]</span><br>
								<span id="username_available" style="font-size: 13px"></span>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label"
								   for="f_name">[[LABEL_FULL_NAME]]</label>
							<div class="col-md-12">
								<input required type="text" class="form-control" name="f_name" id="f_name"
									   value="<?php echo isset($_SESSION['SD']['f_name']) ? $_SESSION['SD']['f_name'] : ''; ?>"/>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="password">[[LABEL_PASSWORD]]</label>
							<div class="col-md-12">
								<input required type="password" class="form-control" name="password" id="password"
									   value="<?php echo isset($_SESSION['SD']['password']) ? $_SESSION['SD']['password'] : ""; ?>"/>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="password">[[LABEL_CONFIRM_PASSWORD]]</label>
							<div class="col-md-12">
								<input required type="password" class="form-control" name="c_password" id="c_password"
									   value="<?php echo isset($_SESSION['SD']['c_password']) ? $_SESSION['SD']['c_password'] : ""; ?>"/>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="product">[[LABEL_PRODUCT]]</label>
							<div class="col-md-12">
								<select required class="form-control" name="product" id="product">
									<option value="">[[LABEL_SELECT]]</option>
									<?php foreach ($packages as $package){ ?>
										<option value="<?php echo $package['id'] ?>"><?php echo $package['name'] ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_ZIP]]</label>
							<div class="col-md-12">
								<input id="zip" name="zip" type="text" class="form-control" placeholder="Zipcode" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_ADDRESS1]]</label>
							<div class="col-md-12">
								<input id="address1" name="address1" type="text" class="form-control" placeholder="Address1" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_ADDRESS2]]</label>
							<div class="col-md-12">
								<input id="address2" name="address2" type="text" class="form-control" placeholder="Address2" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_CITY]]</label>
							<div class="col-md-12">
								<input id="city" name="city" type="text" class="form-control" placeholder="Address2" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_COUNTRY]]</label>
							<div class="col-md-12">
								<input id="country" name="country" type="text" class="form-control" placeholder="Address2" />
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="product">[[LABEL_PAYMENT_METHOD]]</label>
							<div class="col-md-12">
								<select required class="form-control" name="payment_mode" id="payment_mode">
									<option value="">[[LABEL_SELECT]]</option>
									<option value="HITPAY">[[LABEL_HITPAY]]</option>
									<option value="AIRWALLEX">[[LABEL_AIRWALLEX]]</option>
								</select>
							</div>
						</div>

						<div class="clearfix"></div>
						<br>
						<div class="form-group d-none form_complete">
							<div class="col-md-12">
								<button type="submit" name="btnLogin" id="btnLogin"
										class="btn btn-success btn-block btn-lg me-1"
										style="border-radius: 10px !important;">
									[[DEF_MAKE_PAYMENT]]
								</button>
							</div>
						</div>
					</form>
				<?php } else { ?>
					<div class="form-group after_mobile">
						<div class="col-md-12">
							[[LABEL_INVALID_LINK]]
						</div>
					</div>
					<?php
				} ?>

			</div>
		</div>

		<div class="section mb-5 p-3">
			<div class="form-group ">
				<div class="col-md-12">
					<div class="form-links">
						<div><a href="member_login" class="text-white">[[DEF_BACK_TO_LOGIN]]</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<input type="hidden" value="" id="hidden_code">


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places"></script>

<script>
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize() {
		var input = document.getElementById('zip');
		var options = {
			componentRestrictions: {
				country: ['sg']
			}
		};
		var autocomplete = new google.maps.places.Autocomplete(input, options);
		autocomplete.addListener('place_changed', function() {
			var place = autocomplete.getPlace();

			let postcode;
			for (let i = 0; i < place.address_components.length; i++) {
				let types = place.address_components[i].types;
				for (let type of types) {
					if (type === "postal_code") {
						postcode = place.address_components[i].long_name;
					}
				}
			}
			if (!postcode) {
				postcode = place.formatted_address;
			}
			$('#zip').val(postcode);
		});
	}
</script>



<script>
	$("#get_sms_code").click(function () {
		var phone_number = $("#mobile").val();
		if (phone_number.length == 8) {
			$.ajax({
				type: 'POST',
				url: '<?php echo BASE_URL; ?>signup/get_sms_code',
				data: {phone_number: phone_number},
				success: function (data) {
					$("#hidden_code").val(data.replace(/^\s+|\s+$/gm, ''));
					$("#get_sms_code").val("[[LABEL_CODE_SENT]]");
				}
			});
		} else {
			alert("[[LABEL_INVALID_NUMBER]]");
		}
	});
	$("#validate_code").keyup(function () {
		var entered_code = $("#validate_code").val();
		var target_code = $("#hidden_code").val();
		if (entered_code.length == 4) {
			if (target_code == entered_code) {
				$("#mobile").attr("readonly", true);
				$(".code_verified").slideUp();
				$("#verification_message").html("[[LABEL_NUMBER_VERIFIED]]");
				$(".after_mobile").removeClass("d-none");
			} else {
				$("#validate_code").val("");
				alert("[[LABEL_INVALID_CODE]]");
			}
		}
	});
	$("#username").keyup(function () {
		$(".form_complete").addClass("d-none");
		var username = $("#username").val();
		if (username.length < 4) {
			$("#username_available").html("");
			return false;
		}
		$.ajax({
			type: 'POST',
			url: '<?php echo BASE_URL; ?>signup/validate_username',
			data: {username: username},
			success: function (data) {
				var vdata = data.replace(/^\s+|\s+$/gm, '');
				if (vdata == 'available') {
					$(".form_complete").removeClass("d-none");
					$("#username_available").html("[[LABEL_IS_AVAILABLE]]");
				} else {
					$(".form_complete").addClass("d-none");
					$("#username_available").html("[[LABEL_NOT_AVAILABLE]]");
				}
			}
		});
	});
</script><style>
	a {
		transition: .2s all;
		color: #D73A31 !important;
		outline: 0 !important;
		font-size: 14px !important;
	}

	.card .card-title {
		color: #27173E !important;
		font-size: 17px !important;
		font-weight: 500 !important;
	}

	h2 {
		font-size: 20px !important;
		font-weight: 700 !important;
	}

	#appCapsule {
		padding: 56px 0 !important;
		margin-bottom: env(safe-area-inset-bottom) !important;
	}

	.form-control {
		display: block;
		width: 100%;
		height: calc(1.5em + .75rem + 2px);
		padding: .375rem .75rem;
		font-size: 1rem;
		font-weight: 400;
		line-height: 1.5;
		color: #495057;
		background-color: #fff;
		background-clip: padding-box;
		border: 1px solid #ced4da;
		border-radius: .25rem;
		transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	}

	.form-group .form-control, .form-group .custom-select {
		background: transparent;
		border: none;
		border-bottom: 1px solid #DCDCE9;
		padding: 0 30px 0 0;
		border-radius: 0;
		height: 40px;
		color: #27173E;
		font-size: 15px;
	}

	.form-group .form-control:focus, .form-group .custom-select:focus {
		border-bottom-color: #D73A31;
		box-shadow: inset 0 -1px 0 0 #D73A31;
	}
</style>
<div id="appCapsule" style="height: 100vh; margin-bottom: 40px">
	<div class="section text-center">
		<?php $this->load->view('partials/guest_logo'); ?>
	</div>
	<div class="section p-3">
		<div class="card" style="border-radius: 10px !important;">
			<div class="card-body pb-1">
				<div class="card-title d-flex justify-content-around align-items-center">
					<div>
						<h2 class="text-center m-0">[[LABEL_REGISTER]]</h2>
					</div>
					<?php if (isset ($_SESSION['REGISTER_SUCCESS'])) { ?>
						<div>
							<div class="alert alert-success">[[LABEL_REGISTER_SUCCESS]]</div>
						</div>
					<?php } ?>
					<div>

						<div class="row">
							<?php $this->load->view('partials/language_changer'); ?>
						</div>
					</div>
				</div>

				<?php
				if (isset($_SESSION['SD']['sponsor']['userid'])) {
					?>
					<form name="frmRegister" method="post" class="form-horizontal" action="<?php echo BASE_URL ?>signup/confirm">

						<div class="form-group" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_SPONSORID]]</label>
							<div class="col-md-12">
								<input type="text" readonly="readonly" class="form-control" name="sponsor"
									   id="sponsor"
									   value=""/>
								<strong id="spon_name"></strong>
								<p style="color:red; font-size: 13px">[[MSG_MEMBER_PROFILE]]</p>
							</div>
						</div>

						<div class="clearfix"></div>
						<div class="form-group input-prepend">
							<label class="control-label col-md-12" for="mobile">
								[[LABEL_MOBILE]]
							</label>
							<div class="col-md-12">
								<div class="input-group">
                                    <span class="input-group-addon" style="line-height: 37px !important;">

                                    </span>
									<input style="margin-left: 10px" type="text" class="form-control" name="mobile"
										   id="mobile" placeholder="[[LABEL_MOBILE]]"
										   value=""/>
								</div>
								<p id="verification_message" style="font-size: 13px">[[MBM_MOBILE_MSG]]</p>
							</div>
						</div>

						<div class="form-group code_verified">
							<div class="col-md-12">
								<input type="button" value="[[LABEL_GET_CODE]]" id="get_sms_code"
									   class="btn btn-sm btn-success">
							</div>
							<div class="col-md-12">
								<input type="text" placeholder="[[LABEL_ENTER_CODE]]" id="validate_code"
									   class="form-control">
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label"
								   for="username">[[LABEL_USERNAME]]</label>
							<div class="col-md-12">
								<input required type="text" class="form-control alphanum" name="username" id="username"
									   value=""/>
								<span style="font-size: 13px">[[LABEL_USERNAME_MESSAGE]]</span><br>
								<span id="username_available" style="font-size: 13px"></span>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label"
								   for="f_name">[[LABEL_FULL_NAME]]</label>
							<div class="col-md-12">
								<input required type="text" class="form-control" name="f_name" id="f_name"
									   value=""/>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="password">[[LABEL_PASSWORD]]</label>
							<div class="col-md-12">
								<input required type="password" class="form-control" name="password" id="password"
									   value=""/>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="password">[[LABEL_CONFIRM_PASSWORD]]</label>
							<div class="col-md-12">
								<input required type="password" class="form-control" name="c_password" id="c_password"
									   value=""/>
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="product">[[LABEL_PRODUCT]]</label>
							<div class="col-md-12">
								<select required class="form-control" name="product" id="product">
									<option value="">[[LABEL_SELECT]]</option>

								</select>
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_ZIP]]</label>
							<div class="col-md-12">
								<input id="zip" name="zip" type="text" class="form-control" placeholder="Zipcode" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_ADDRESS1]]</label>
							<div class="col-md-12">
								<input id="address1" name="address1" type="text" class="form-control" placeholder="Address1" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_ADDRESS2]]</label>
							<div class="col-md-12">
								<input id="address2" name="address2" type="text" class="form-control" placeholder="Address2" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_CITY]]</label>
							<div class="col-md-12">
								<input id="city" name="city" type="text" class="form-control" placeholder="Address2" />
							</div>
						</div>

						<div class="form-group d-none after_mobile" style="margin-top: 20px">
							<label class="col-md-12 control-label" for="sponsor">[[LABEL_COUNTRY]]</label>
							<div class="col-md-12">
								<input id="country" name="country" type="text" class="form-control" placeholder="Address2" />
							</div>
						</div>

						<div class="form-group d-none after_mobile">
							<label class="col-md-12 control-label" for="product">[[LABEL_PAYMENT_METHOD]]</label>
							<div class="col-md-12">
								<select required class="form-control" name="payment_mode" id="payment_mode">
									<option value="">[[LABEL_SELECT]]</option>
									<option value="HITPAY">[[LABEL_HITPAY]]</option>
									<option value="AIRWALLEX">[[LABEL_AIRWALLEX]]</option>
								</select>
							</div>
						</div>

						<div class="clearfix"></div>
						<br>
						<div class="form-group d-none form_complete">
							<div class="col-md-12">
								<button type="submit" name="btnLogin" id="btnLogin"
										class="btn btn-success btn-block btn-lg me-1"
										style="border-radius: 10px !important;">
									[[DEF_MAKE_PAYMENT]]
								</button>
							</div>
						</div>
					</form>
				<?php } else { ?>
					<div class="form-group after_mobile">
						<div class="col-md-12">
							[[LABEL_INVALID_LINK]]
						</div>
					</div>
					<?php
				} ?>
			</div>
		</div>

		<div class="section mb-5 p-3">
			<div class="form-group ">
				<div class="col-md-12">
					<div class="form-links">
						<div><a href="member_login" class="text-white">[[DEF_BACK_TO_LOGIN]]</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<input type="hidden" value="" id="hidden_code">


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&libraries=places"></script>

<script>
	google.maps.event.addDomListener(window, 'load', initialize);

	function initialize() {
		var input = document.getElementById('zip');
		var options = {
			componentRestrictions: {
				country: ['sg']
			}
		};
		var autocomplete = new google.maps.places.Autocomplete(input, options);
		autocomplete.addListener('place_changed', function() {
			var place = autocomplete.getPlace();

			let postcode;
			for (let i = 0; i < place.address_components.length; i++) {
				let types = place.address_components[i].types;
				for (let type of types) {
					if (type === "postal_code") {
						postcode = place.address_components[i].long_name;
					}
				}
			}
			if (!postcode) {
				postcode = place.formatted_address;
			}
			$('#zip').val(postcode);
		});
	}
</script>



<script>
	$("#get_sms_code").click(function () {
		var phone_number = $("#mobile").val();
		if (phone_number.length == 8) {
			$.ajax({
				type: 'POST',
				url: '<?php echo BASE_URL; ?>signup/get_sms_code',
				data: {phone_number: phone_number},
				success: function (data) {
					$("#hidden_code").val(data.replace(/^\s+|\s+$/gm, ''));
					$("#get_sms_code").val("[[LABEL_CODE_SENT]]");
				}
			});
		} else {
			alert("[[LABEL_INVALID_NUMBER]]");
		}
	});
	$("#validate_code").keyup(function () {
		var entered_code = $("#validate_code").val();
		var target_code = $("#hidden_code").val();
		if (entered_code.length == 4) {
			if (target_code == entered_code) {
				$("#mobile").attr("readonly", true);
				$(".code_verified").slideUp();
				$("#verification_message").html("[[LABEL_NUMBER_VERIFIED]]");
				$(".after_mobile").removeClass("d-none");
			} else {
				$("#validate_code").val("");
				alert("[[LABEL_INVALID_CODE]]");
			}
		}
	});
	$("#username").keyup(function () {
		$(".form_complete").addClass("d-none");
		var username = $("#username").val();
		if (username.length < 4) {
			$("#username_available").html("");
			return false;
		}
		$.ajax({
			type: 'POST',
			url: '<?php echo BASE_URL; ?>signup/validate_username',
			data: {username: username},
			success: function (data) {
				var vdata = data.replace(/^\s+|\s+$/gm, '');
				if (vdata == 'available') {
					$(".form_complete").removeClass("d-none");
					$("#username_available").html("[[LABEL_IS_AVAILABLE]]");
				} else {
					$(".form_complete").addClass("d-none");
					$("#username_available").html("[[LABEL_NOT_AVAILABLE]]");
				}
			}
		});
	});
</script>
