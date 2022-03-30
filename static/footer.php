<?php
class Footer {
    function __construct($page) {
        $this->page = $page;
    }

    public function getFooter () {
        $page = $this->page;
        require_once './static/footer.php';
    }
}
?>
<footer>
    <div>

    </div>
</footer>
</html>