<?php

$route->map('GET', '/', function ($request, $response, array $args) {
	$twig = \Library\Utils::getTwig();
	$content = $twig->render('hello-world.twig');
    $response->getBody()->write($content);

    return $response;
});
$route->map('GET', '/hello/{template}', function ($request, $response, array $args) {
	$twig = \Library\Utils::getTwig();
	$content = $twig->render($args['template'] . '.twig', $args);
    $response->getBody()->write($content);

    return $response;
});