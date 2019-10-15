<?php
    /**
     *
     */
    class DOMDocumentParser
    {

        function __construct($url)
        {
            // echo "URL: $url";

            $options = ['http' => ['method' => 'GET', 'header' => 'User-Agent: GoogleBot/0.1\n']];
            $context = stream_context_create($options);

            $doc = new DOMDocument();
            $doc->loadHTML(file_get_contents($url, false, $context));
        }
    }




 ?>
