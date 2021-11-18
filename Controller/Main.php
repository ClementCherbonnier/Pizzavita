<?php

class Main extends Controller{
    /**
     * Cette méthode affiche la page d'accueil
     *
     * @return void
     */
    public function index(){
        include_once(ROOT.'/View/templates/head.php');
        include_once(ROOT.'/View/templates/header.php');
        include_once(ROOT.'/View/index.php');
        include_once(ROOT.'/View/templates/footer.php');

    }
}