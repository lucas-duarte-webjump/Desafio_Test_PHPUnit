<?php

spl_autoload_register(function (string $className) 
{
    $pathClass = str_replace('APP\\Exception', 'src', $className);
    $pathClass = str_replace('\\', DIRECTORY_SEPARATOR, $pathClass);
    $pathClass .= '.php';

    if (file_exists($pathClass)) {
        require_once $pathClass;
    }
});