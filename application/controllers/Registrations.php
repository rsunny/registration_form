<?php
	class Registrations extends CI_Controller {
		public function index () {
			if (!file_exists(APPPATH.'views/registrations/registration.php')) {
				show_404 ();
			}
			$csrf = array(
		        'name' => $this->security->get_csrf_token_name(),
		        'hash' => $this->security->get_csrf_hash()
			);
			return $this->load->view('registrations/registration', $csrf);
		}

		public function registration_validation() {
			$firstname = $this->security->xss_clean($_POST['firstname']);
			$lastname = $this->security->xss_clean($_POST['lastname']);
			$telephone = $this->security->xss_clean($_POST['telephone']);
			$address = $this->security->xss_clean($_POST['address']);
			$house = $this->security->xss_clean($_POST['house']);
			$city = $this->security->xss_clean($_POST['city']);
			$zipcode = $this->security->xss_clean($_POST['zipcode']);
			$account = $this->security->xss_clean($_POST['account']);
			$iban = $this->security->xss_clean($_POST['iban']);

			$url = "https://37f32cl571.execute-api.eu-central-1.amazonaws.com/default/wunderfleet-recruiting-backend-dev-save-payment-data";

			if ($this->registration_model->get_registrations_count(array('iban' => $iban)) != 0) {
				return $this->load->view('registrations/registration_already_registered');
			}

			$slug = generateRandomString(10);
			while ($this->registration_model->get_registrations_count(array('slug' => $slug)) != 0) {
				$slug = generateRandomString(10);
			}

			$data = new \stdClass();
			$data->customerId =  $slug;
			$data->iban = $iban;
			$data->owner = $account;
			$data = json_encode($data);

			$paymentDataId = json_decode(CallAPI($url, $data));

			if (array_key_exists('paymentDataId', $paymentDataId)) {
				$data = new \stdClass();
				$data->slug = $slug;
				$data->firstName = $firstname;
				$data->lastName = $lastname;
				$data->telephone = $telephone;
				$data->address = $address;
				$data->houseNumber = $house;
				$data->city = $city;
				$data->zipCode = $zipcode;
				$data->accountOwner = $account;
				$data->iban = $iban;
				$data->paymentDataId = $paymentDataId->paymentDataId;

				$result = $this->registration_model->insert_data($data);

				if ($result != NULL) {
					return $this->load->view('registrations/registration_success', $paymentDataId);
				}
			}
			return $this->load->view('registrations/registration_error');
		}
	}

	function CallAPI($url, $data = false) {
	    $curl = curl_init();
	            curl_setopt($curl, CURLOPT_POST, 1);

        if ($data)
            curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

	    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
	    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

	    curl_setopt($curl, CURLOPT_URL, $url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

	    $result = curl_exec($curl);

	    curl_close($curl);

	    return $result;
	}

	function generateRandomString($length = 10) {
	    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
	}

?>