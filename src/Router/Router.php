<?php 

class Router{
    function redirect($url){
        switch ($url) {
            case '/':
                require_once __DIR__.'/../Controller/PATH/HomeViewController.php';
                $homeView = new HomeViewController();
                $homeView->index();
                break;
            
            default:
                require_once __DIR__.'/../Controller/PATH/ErrorViewController.php';
                $homeView = new ErrorViewController();
                $homeView->index();
                break;
        }
    }
}