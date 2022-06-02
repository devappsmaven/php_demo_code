<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Stripe;

class StripeController extends Controller
{
	public function index()
	{
		$stripe_key = 'pk_test_51HI7L2CxGdwtG3G5rZBle6bDpUBcKuzj0SqxAMdji19zfV3piog3I2bd8BefTl4BmolhVWyNNLUJZsjsNUwcel3h00B2iU9Va0';
		$stripe_secret = 'sk_test_51HI7L2CxGdwtG3G5qHquPasArvyUK1gIFzPHwt2D77niXhplXhHGPiD2YUZ7UFfcEPo9DrKvrwIwNsxcEGxDSjl400ZZunVG1t';


	}
}