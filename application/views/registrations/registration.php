<!-- <?php 
	require_once APPPATH."controllers/Token.php";
?>
 -->
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Wunder_test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/styles/style.css">

    <!-- JS -->
    <script src="<?php echo base_url(); ?>assets/js/js.cookie.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container register">
	    <div class="row">
	        <div class="col-md-3 register-left">
	            <img src="<?php echo base_url(); ?>assets/images/logo_white.png" alt="">
	            <h3>WUNDER</h3>
	            <p>Registration Test</p>
	        </div>
	        <div class="col-md-9 register-right">
	            <div class="tab-content" id="myTabContent">
	                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
	                    <h3 class="register-heading">Registration</h3>
	                    <form onsubmit="return clearCookies();" action="<?php echo base_url(); ?>registration_validation" method="POST" class="registrationForm" id="registrationForm">
		                    <div class="row register-form formStep1">
		                        <div class="col align-self-center">
		                            <div class="form-group row">
				                        <div class="col-md-4"><h6>Step 1</h6></div>
				                        <div class="col-md-4" style="text-align: center;"><small>Step 2</small></div>
				                        <div class="col-md-4" style="text-align: right;"><small>Step 3</small></div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control firstname" placeholder="First Name *" value="" name="firstname">
		                                	<span class="firstname_error" style="color: red">Required First Name</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control lastname" placeholder="Last Name *" value="" name="lastname">
		                                	<span class="lastname_error" style="color: red">Required Last Name</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control telephone" placeholder="Telephone *" value="" name="telephone">
		                                	<span class="telephone_error" style="color: red">Required Telephone</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
				                        </div>
				                        <div class="col-md-3">
		                            		<input type="button" class="btnRegister nextStep1" value="Next">
				                        </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="row register-form formStep2">
		                        <div class="col align-self-center">
		                            <div class="form-group row">
				                        <div class="col-md-4"><small>Step 1</small></div>
				                        <div class="col-md-4" style="text-align: center;"><h6>Step 2</h6></div>
				                        <div class="col-md-4" style="text-align: right;"><small>Step 3</small></div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control address" placeholder="Address Street" value="" name="address">
		                                	<span class="address_error" style="color: red">Required Address</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control house" placeholder="House Number" value="" name="house">
		                                	<span class="house_error" style="color: red">Required House Number</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control city" placeholder="City" value="" name="city">
		                                	<span class="city_error" style="color: red">Required City</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control zipcode" placeholder="Zip Code" value="" name="zipcode">
		                                	<span class="zipcode_error" style="color: red">Required Zip Code</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
		                            		<input type="button" class="btnRegister backStep2" value="Back">
				                        </div>
				                        <div class="col-md-6">
				                        </div>
				                        <div class="col-md-3">
		                            		<input type="button" class="btnRegister nextStep2" value="Next">
				                        </div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="row register-form formStep3">
		                        <div class="col align-self-center">
		                            <div class="form-group row">
				                        <div class="col-md-4"><small>Step 1</small></div>
				                        <div class="col-md-4" style="text-align: center;"><small>Step 2</small></div>
				                        <div class="col-md-4" style="text-align: right;"><h6>Step 3</h6></div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control account" placeholder="Account Owner" value="" name="account">
		                                	<span class="account_error" style="color: red">Required Account Owner</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
				                        </div>
				                        <div class="col-md-6">
		                                	<input type="text" class="form-control iban" placeholder="IBAN" value="" name="iban">
		                                	<span class="iban_error" style="color: red">Required IBAN</span>
				                        </div>
		                            </div>
		                            <div class="form-group row">
				                        <div class="col-md-3">
		                            		<input type="button" class="btnRegister backStep3" value="Back">
				                        </div>
				                        <div class="col-md-6">
				                        </div>
				                        <div class="col-md-3">
		                            		<input type="submit" class="btnRegister formSubmit" value="Submit" id="submit">
				                        </div>
		                            </div>
		                        </div>
		                    </div>
		                    <input type="hidden" name="<?php echo $name;?>" value="<?php echo $hash;?>" />
	                	</form>
	                </div>
	            </div>
        	</div>
	    </div>
	</div>	

	<script type="text/javascript">
		$(document).ready(function(){
			
			$('.firstname').val(Cookies.get("firstname"));
			$('.lastname').val(Cookies.get("lastname"));
			$('.telephone').val(Cookies.get("telephone"));
			$('.address').val(Cookies.get("address"));
			$('.house').val(Cookies.get("house"));
			$('.city').val(Cookies.get("city"));
			$('.zipcode').val(Cookies.get("zipcode"));
			$('.account').val(Cookies.get("account"));
			$('.iban').val(Cookies.get("iban"));

			$('.firstname_error').hide();
			$('.lastname_error').hide();
			$('.telephone_error').hide();
			$('.address_error').hide();
			$('.house_error').hide();
			$('.city_error').hide();
			$('.zipcode_error').hide();
			$('.account_error').hide();
			$('.iban_error').hide();
			
			if ($('.firstname').val() == '' || $('.lastname').val() == '' || $('.telephone').val() == '') {
				$('.formStep2').hide();
				$('.formStep3').hide();
			}
			else if ($('.address').val() == '' || $('.house').val() == '' || $('.city').val() == '' || $('.zipcode').val() == '') {
				$('.formStep1').hide();
				$('.formStep3').hide();
			}
			else {
				$('.formStep1').hide();
				$('.formStep2').hide();
			}

			$('.firstname').change(function() {
				Cookies.set("firstname", $('.firstname').val());
			});
			$('.lastname').change(function() {
				Cookies.set("lastname", $('.lastname').val());
			});
			$('.telephone').change(function() {
				Cookies.set("telephone", $('.telephone').val());
			});
			$('.address').change(function() {
				Cookies.set("address", $('.address').val());
			});
			$('.house').change(function() {
				Cookies.set("house", $('.house').val());
			});
			$('.city').change(function() {
				Cookies.set("city", $('.city').val());
			});
			$('.zipcode').change(function() {
				Cookies.set("zipcode", $('.zipcode').val());
			});
			$('.account').change(function() {
				Cookies.set("account", $('.account').val());
			});
			$('.iban').change(function() {
				Cookies.set("iban", $('.iban').val());
			});

			$('.nextStep1').click(function(){
				var val = true;
				$('.firstname_error').hide();
				$('.lastname_error').hide();
				$('.telephone_error').hide();
				if ($('.firstname').val() == '') {
					val = false;
					$('.firstname_error').show();
				}
				if ($('.lastname').val() == '') {
					val = false;
					$('.lastname_error').show();
				}
				if ($('.telephone').val() == '') {
					val = false;
					$('.telephone_error').show();
				}
				if (val) {
					$('.formStep1').hide();
					$('.formStep2').show();				
				}
			});

			$('.nextStep2').click(function(){
				var val = true;
				$('.address_error').hide();
				$('.house_error').hide();
				$('.city_error').hide();
				$('.zipcode_error').hide();
				if ($('.address').val() == '') {
					val = false;
					$('.address_error').show();
				}
				if ($('.house').val() == '') {
					val = false;
					$('.house_error').show();
				}
				if ($('.city').val() == '') {
					val = false;
					$('.city_error').show();
				}
				if ($('.zipcode').val() == '') {
					val = false;
					$('.zipcode_error').show();
				}
				if (val) {
					$('.formStep2').hide();
					$('.formStep3').show();	
				}			
			});

			$('.backStep2').click(function(){
				$('.formStep2').hide();
				$('.formStep1').show();				
			});

			$('.backStep3').click(function(){
				$('.formStep3').hide();
				$('.formStep2').show();		
			});


			function clearCookies() {
				var val = true;
				alert('Iam here');
				$('.account_error').hide();
				$('.iban_error').hide();
				if ($('.account').val() == '') {
					val = false;
					$('.account_error').show();
				}
				if ($('.iban').val() == '') {
					val = false;
					$('.iban_error').show();
				}
				if (val) {
					Cookies.remove('firstname');
					Cookies.remove('lastname');
					Cookies.remove('telephone');
					Cookies.remove('address');
					Cookies.remove('house');
					Cookies.remove('city');
					Cookies.remove('zipcode');
					Cookies.remove('account');
					Cookies.remove('iban');
					return true;
				}
				return false;
			}
		});
	</script>

</body>
</html>