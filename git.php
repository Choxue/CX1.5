<?php

define('PRIVATE_KEY', 'XXXXXXXXXXXXXXXXxxx');

echo shell_exec("git pull");

if ($_SERVER['REQUEST_METHOD'] === 'POST'
        && $_REQUEST['thing'] === PRIVATE_KEY)
{
    echo shell_exec("git pull");
}

?>