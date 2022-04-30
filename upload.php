<?php
require_once "./assets/page.php";
require_once "./assets/requests.php";

$request = new Requests("", "", "", "");

//A DECOMMENTER QUAND FINI
/*if (!$request->isLogged()) {
    header("Location: login.php");
}*/

$page = new Page("Upload", "CloudProject");

$page->setHeader();
$page->setTitle();
?>

<div>
    <div class="upload-navbar">
        <ul>
            <li>Lien 1</li>
            <li>Lien 2</li>
            <li>Lien 3</li>
            <li>Lien 4</li>
        </ul>
    </div>

    <form action="upload.php">
        <label for="">Upload
            <input type="file" placeholder="Choose a File or Folder">
        </label>
    </form>
</div>

<?php
$page->setFooter();
?>
