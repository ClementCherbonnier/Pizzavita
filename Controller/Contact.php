<?php

class Contact extends Controller{
    /**
     * Cette méthode affiche le formulaire de contact
     *
     * @return void
     */
    public function index(){
        include_once(ROOT.'/View/templates/head.php');
        include_once(ROOT.'/View/templates/header.php');
        include_once(ROOT.'/View/formulaireContact.php');
        include_once(ROOT.'/View/templates/footer.php');

        //méthode d'envoi de mail
        include_once(ROOT.'View/send-mail.php');
    }
}