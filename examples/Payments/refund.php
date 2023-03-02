<?php

/**
 * Checkout.com 2010 - 2018.
 * Authorised and regulated as an electronic money institution by the UK Financial Conduct Authority (FCA) under number 900816.
 *
 * Example: Refund a payment.
 */


/**
 * Include SDK
 */
require_once "../../checkout.php";


/**
 * Use namespaces.
 */
use perfectpanel\Checkout\CheckoutApi;
use perfectpanel\Checkout\Models\Payments\Refund;

/**
 * Create new instance of Checkout
 */
$checkout = new CheckoutApi('secret_key_goes_here');


/**
 * Refund.
 */
$details = $checkout->payments()->refund(new Refund('payment_id_goes_here'));

var_dump($details);
