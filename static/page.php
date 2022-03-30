<?php
class Page {
    function __construct($page) {
        $this->page = $page;
        ini_set('default_charset', 'utf-8');
    }

    function getHeader() {
        require_once './static/header.php';
        $this->Header = new Header($this);
    }

    function getFooter() {
        require_once './static/footer.php';
        $this->Footer = new Footer($this);
    }

}