<?php
// Routes

$app->post('/', function (\Slim\Http\Request $request, \Slim\Http\Response $response, $args) {
    $post = $request->getParsedBody();
    $this->logger->info(serialize($post));
});
