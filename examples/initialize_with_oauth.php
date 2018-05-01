<?php

/*
 * Make sure to disable the display of errors in production code!
 */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . "/../vendor/autoload.php";

/*
 * Initialize the Mollie API library with OAuth.
 *
 * See: https://www.mollie.com/en/docs/oauth/overview
 */
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setAccessToken("access_Wwvu7egPcJLLJ9Kb7J632x8wJ2zMeJ");