<?php 

class HomeViewController{
    function index(){
        $url = require_once __DIR__.'/../../../app/views/Home.php';
        return $url;
    }
}