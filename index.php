<?php

require_once "controllers/tours.controller.php";
$tourscontrolller = new tourscontroller;

if (empty($_GET['page'])) {
    $admin  = new admin;
    $sql = $admin->showtours();
    require "views/tours.view.php";
} else {
    $page = rtrim($_GET['page'], '/');
    $URL = explode("/", filter_var($page), FILTER_SANITIZE_URL);

    switch ($URL[0]) {
        case "dashboard":
            if (empty($URL[1])) {
                $tourscontrolller->showtours();
            } else if ($URL[1] === "add") {
                $tourscontrolller->addform();
            } else if ($URL[1] === "addtour") {
                $tourscontrolller->addtours();
            } else if ($URL[1] === "update") {
                $id = $URL[2];
                if (filter_var($id, FILTER_VALIDATE_INT) === false) {
                    require "views/404.view.php";
                } else {
                    $tourscontrolller->updateform($id);
                }
            } else if ($URL[1] === "updatetour") {
                $id = $URL[2];
                $tourscontrolller->editetour($id);
            } else if ($URL[1] === "delete") {
                $id = $URL[2];
                $tourscontrolller->delete($id);
            } else {
                require "views/404.view.php";
            }
            break;
        case "home":
            require "views/home.view.php";
            break;
        case "contact":
            require "views/contact.view.php";
            break;
        case "about":
            require "views/about.view.php";
            break;
        case "tours":
            $admin  = new admin;
            $sql = $admin->showtours();
            require "views/tours.view.php";
            break;
        case "checklogin":
            $tourscontrolller->checklogin();
            break;
        default:
            require "views/404.view.php";
            break;
    }
}
