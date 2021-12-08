<?php

class Phototeque extends Controller{
    /**
     * Cette méthode affiche le formulaire de contact
     *
     * @return void
     */
    public function index(){
        include_once('../View/templates/head.php');
        include_once('../View/templates/header.php');
        include_once('../View/phototèque.php');
        include_once('../View/templates/footer.php');
    }
}