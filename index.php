<?php declare(strict_types=1);

require(__DIR__ . "/vendor/autoload.php");

use Harmonious\Communication\Request;
use Harmonious\Communication\Response;

$request = new Request();
$response = new Response();

$response->contentType("json")->setData("Heyy")->send();