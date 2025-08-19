<?php declare(strict_types=1);

require(__DIR__ . "/vendor/autoload.php");

use Harmony\Communication\Request;
use Harmony\Communication\Response;

$request = new Request();
$response = new Response();

$response->contentType("json")->setData("Heyy")->send();