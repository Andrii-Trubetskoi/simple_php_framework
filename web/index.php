<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::create('/index.php?number=5');

// retrieve GET and POST variables respectively
$number = $request->query->get('number', 1); //GET
//$request->request->get('bar', 'default value if bar does not exist'); //POST

// retrieve SERVER variables
//$request->server->get('HTTP_HOST');

// retrieves an instance of UploadedFile identified by foo
//$request->files->get('foo');

// retrieve a COOKIE value
//$request->cookies->get('PHPSESSID');

// retrieve an HTTP request header, with normalized, lowercase keys
//$request->headers->get('host');
//$request->headers->get('content_type');

//$request->getMethod();    // GET, POST, PUT, DELETE, HEAD
//$request->getLanguages(); // an array of languages the client accepts

//$input = $request->get('name', 'World'); get POST or GET

$response = new Response();
$response->setContent($number * 2);
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

// configure the HTTP cache headers
$response->setMaxAge(10);

$response->send();
