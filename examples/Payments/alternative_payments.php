<?php

/**
 * Checkout.com 2010 - 2018.
 * Authorised and regulated as an electronic money institution by the UK Financial Conduct Authority (FCA) under number 900816.
 *
 * Example: Get payment actions.
 */


/**
 * Include SDK
 */
require_once "../../checkout.php";

/**
 * Use namespaces.
 */

use perfectpanel\Checkout\CheckoutApi;
use perfectpanel\Checkout\Models\Payments\AlipaySource;
use perfectpanel\Checkout\Models\Payments\BancontactSource;
use perfectpanel\Checkout\Models\Payments\BoletoSource;
use perfectpanel\Checkout\Models\Payments\EpsSource;
use perfectpanel\Checkout\Models\Payments\FawrySource;
use perfectpanel\Checkout\Models\Payments\GiropaySource;
use perfectpanel\Checkout\Models\Payments\IdealSource;
use perfectpanel\Checkout\Models\Payments\KnetSource;
use perfectpanel\Checkout\Models\Payments\Payment;
use perfectpanel\Checkout\Models\Payments\PoliSource;
use perfectpanel\Checkout\Models\Payments\QpaySource;
use perfectpanel\Checkout\Models\Payments\SofortSource;
use perfectpanel\Checkout\Models\Product;

/**
 * Create new instance of Checkout
 */
$checkout = new CheckoutApi('secret_key_id_goes_here');



// Giropay
$giropay = new Payment(new GiropaySource('purpose', 'bic'), 'EUR');
$giropay->capture = false;
$giropay->amount = 999;
$payment = $checkout->payments()->request($giropay);



// iDEAL
$ideal = new Payment(new IdealSource('bic', 'description'), 'EUR');
$ideal->capture = false;
$ideal->amount = 999;
$payment = $checkout->payments()->request($ideal);



// Boleto
$boleto = new Payment(new BoletoSource('customer_name', 'year-month-day', 'cpf'), 'BRL');
$boleto->amount = 999;
$payment = $checkout->payments()->request($boleto);



// Poli
$poli = new Payment(new PoliSource(), 'AUD');
$poli->amount = 999;
$payment = $checkout->payments()->request($poli);



// Alipay
$alipay = new Payment(new AlipaySource(), 'USD');
$alipay->amount = 999;
$payment = $checkout->payments()->request($alipay);



// Sofort
$sofort = new Payment(new SofortSource(), 'EUR');
$sofort->amount = 999;
$payment = $checkout->payments()->request($sofort);



// EPS
$eps = new Payment(new EpsSource(), 'EUR');
$eps->amount = 999;
$payment = $checkout->payments()->request($eps);



// Fawry
$product = new Product();
$product->product_id = 'id';
$product->quantity = 1;
$product->price = 999;
$product->description = 'description';
$fawry = new Payment(new FawrySource('customer_email', 'customer_mobile', 'description', array($product)), 'EGP');
$fawry->amount = 999;
$payment = $checkout->payments()->request($fawry);



// Bancontact
$bancontact = new Payment(new BancontactSource('account_holder_name', 'payment_country'), 'EUR');
$bancontact->amount = 999;
$payment = $checkout->payments()->request($bancontact);



// KNet
$knet = new Payment(new KnetSource('en'), 'KWD');
$knet->amount = 999;
$payment = $checkout->payments()->request($knet);


// QPay
$qpay = new Payment(new QpaySource('description'), 'KWD');
$qpay->amount = 999;
$payment = $checkout->payments()->request($qpay);
