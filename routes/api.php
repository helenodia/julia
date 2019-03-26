<?php

$router->get("exercises","Exercises@index");
$router->post("exercises","Exercises@store");
$router->put("exercises", "Exercises@update");
$touer->delete("exercises", "Exercises@delete")