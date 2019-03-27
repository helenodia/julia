<?php
$router->group(["prefix" => "exercises"], function ($router) {
    $router->get("","Exercises@index");
    $router->post("","Exercises@store");
    $router->get("{exercise}", "Exercises@show");
    $router->put("{exercise}", "Exercises@update");
    $router->delete("{exercise}", "Exercises@destroy");
});

$router->group(["prefix" => "categories"], function ($router) {
    $router->get("","Categories@index");
    $router->post("","Categories@store");
    $router->get("{category}", "Categories@show");
    $router->put("{category}", "Categories@update");
    $router->delete("{category}", "Categories@destroy");
});

$router->group(["prefix" => "goals"], function ($router) {
    $router->get("","Goals@index");
    $router->post("","Goals@store");
    $router->get("{goal}", "Goals@show");
    $router->put("{goal}", "Goals@update");
    $router->delete("{goal}", "Goals@destroy");
});

$router->post("workoutplans", "WorkoutPlan@create");

