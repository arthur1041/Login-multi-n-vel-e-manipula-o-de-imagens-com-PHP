<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app){
    $app->get("/home", function (Request $request, Response $response, $parameters){
        $title = "Projeto flyers";

        return view($response, "auth.home", [
            "title" => $title
        ]);
    });

    $app->get("/", function(Request $request, Response $response, $parameters){
        $response->getBody()->write("Hello, World!");
    
        return $response;
    });
};