<?php
class Page {
    function __construct($footer=true, $header=true) {
        ini_set('default_charset', 'utf-8');

        require_once './assets/header.php';
        $this->header = new Header($this);
        if ($header) {
            $this->header->setHeader();
        }

        require_once './assets/footer.php';
        $this->footer = new Footer($this);
        if ($footer) {
            $this->footer->setFooter();
        }
        echo 'test';
    }
}