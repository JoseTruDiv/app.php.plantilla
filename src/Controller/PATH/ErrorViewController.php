<?php 

class ErrorViewController{
    function index(){
        $url = require_once __DIR__.'/../../../app/views/404/404.php';
        return $url;
    }
}