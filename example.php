<?php

// load autoload composer and library
require_once __DIR__. '/vendor/autoload.php';
require_once 'CreatioIntegrationPHP.php';

// setup url, username, and password to access creatio
$config = array(
    'url' => 'http://localhost:8082',
    'username' => 'Supervisor',
    'password' => 'Supervisor'
);

// init library
$creatio = new CreatioIntegration($config['url'], $config['username'], $config['password']);

// make RESTFull request
$request = $creatio->rest('POST', [
    'service' => 'PeriodicalEditionWebService',
    'method' => 'GetTotalPlannedIssues'
], array(
    'Code' => '123'
), false);

// doing somthing or anything with the response
echo '<pre>';
var_dump($request);
echo '</pre>';