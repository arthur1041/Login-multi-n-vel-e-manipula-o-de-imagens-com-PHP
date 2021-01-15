<?php

use Slim\App;
use App\Http\Controllers\WelcomeController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app){
    $app->get("/home/{name}", function (Request $request, Response $response, $parameters){
        $title = "Projeto flyers";

        return view($response, "auth.home", [
            "title" => $title
        ]);
    });

    $app->get("/", [WelcomeController::class, "index"]);
    $app->get("/{name}/{id}", [WelcomeController::class, "show"]);
};