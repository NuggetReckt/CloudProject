<?php

class Page {
    public function __construct($header) {

        ini_set('default_charset', 'utf-8');

        require_once './static/header.php';
        $this->header = new Header($this);
        if ($header) {
            $this->header->print_header();
        }
    }

    function print_header($container_start = true, $class = "") {
        if ($container_start) {
            echo '<div class="container">';
        }
        echo "$class";
        if ($container_start) {
            echo '';
        }
    }

    function print_footer($container_end = true) {
        if ($container_end) {
            echo "</div>";
        }
        require_once './static/footer.php';
    }

}