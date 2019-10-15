<?php require_once 'classes/DomDocumentParser.php'; ?>
<?php
    function followLinks($url)
    {
        $parser = new DomDocumentParser($url);
    }

    $startUrl = "https://getbootstrap.com";
    followLinks($startUrl);





 ?>
