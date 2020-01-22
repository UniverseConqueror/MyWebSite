<?php

class MainController {

    private $router;

    public function __construct($router) {

        $this->router = $router;
    }

    public function show($viewName) {

        $router = $this->router;

        include __DIR__.'/../Views/header.tpl.php';
        include __DIR__.'/../Views/'.$viewName.'.tpl.php';
        include __DIR__.'/../Views/footer.tpl.php';
    }

    public function homePage() {

        $this->show('home');
    }

    public function formationsPage() {

        $this->show('formations');

    }

    public function competencesPage() {

        $this->show('competences');

    }

    public function diplomesPage() {

        $this->show('diplomes');

    }

    public function portfolioPage() {

        $this->show('portfolio');

    }

    public function contactPage() {

        $this->show('contact');

    }

    public function mailPage() {

        $this->show('mail');
    }
    
}