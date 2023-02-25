# PHP1Recuperation

form.php
<?php
//var_dump($_SERVER);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    var_dump($_POST);
    die(); }
?>


var_dump($_SERVER) :

/Users/johanalavigne/Code/WCS/PHP/08.Formulaire/PHP2Securisation/public/form.php:3:
array (size=26)
'DOCUMENT_ROOT' => string '/Users/johanalavigne/Code/WCS/PHP/08.Formulaire/PHP2Securisation/public' (length=71)
'REMOTE_ADDR' => string '::1' (length=3)
'REMOTE_PORT' => string '59218' (length=5)
'SERVER_SOFTWARE' => string 'PHP 8.2.2 Development Server' (length=28)
'SERVER_PROTOCOL' => string 'HTTP/1.1' (length=8)
'SERVER_NAME' => string 'localhost' (length=9)
'SERVER_PORT' => string '8000' (length=4)
'REQUEST_URI' => string '/form.php' (length=9)
'REQUEST_METHOD' => string 'GET' (length=3)
'SCRIPT_NAME' => string '/form.php' (length=9)
'SCRIPT_FILENAME' => string '/Users/johanalavigne/Code/WCS/PHP/08.Formulaire/PHP2Securisation/public/form.php' (length=80)
'PHP_SELF' => string '/form.php' (length=9)
'HTTP_HOST' => string 'localhost:8000' (length=14)
'HTTP_USER_AGENT' => string 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:109.0) Gecko/20100101 Firefox/109.0' (length=84)
'HTTP_ACCEPT' => string 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8' (length=85)
'HTTP_ACCEPT_LANGUAGE' => string 'fr-FR,en-US;q=0.7,en;q=0.3' (length=26)
'HTTP_ACCEPT_ENCODING' => string 'gzip, deflate, br' (length=17)
'HTTP_CONNECTION' => string 'keep-alive' (length=10)
'HTTP_COOKIE' => string 'Phpstorm-5aed96b1=0bad028b-a37f-4e2c-b1b6-0eea57b05555' (length=54)
'HTTP_UPGRADE_INSECURE_REQUESTS' => string '1' (length=1)
'HTTP_SEC_FETCH_DEST' => string 'document' (length=8)
'HTTP_SEC_FETCH_MODE' => string 'navigate' (length=8)
'HTTP_SEC_FETCH_SITE' => string 'none' (length=4)
'HTTP_SEC_FETCH_USER' => string '?1' (length=2)
'REQUEST_TIME_FLOAT' => float 1677330282.4569
'REQUEST_TIME' => int 1677330282