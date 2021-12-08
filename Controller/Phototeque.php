<?php

class Phototeque extends Controller{
    /**
     * Cette méthode affiche le formulaire de contact
     *
     * @return void
     */
    public function index(){
        include_once(ROOT.'/View/templates/head.php');
        include_once(ROOT.'/View/templates/header.php');
        include_once(ROOT.'/View/phototèque.php');
        include_once(ROOT.'/View/templates/footer.php');
    }
}