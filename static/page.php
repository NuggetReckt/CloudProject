<?php
class Page {
    function __construct($page, $footer=true, $header=true) {
        $this->page = $page;
        ini_set('default_charset', 'utf-8');

        require_once './static/header.php';
        $this->header = new Header($this);
        if ($header) {
            $this->header->getHeader();
        }

        require_once './static/footer.php';
        $this->footer = new Footer($this);
        if ($footer) {
            $this->footer->getFooter();
        }
        echo 'test';
    }
}