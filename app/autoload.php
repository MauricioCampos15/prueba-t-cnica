<?php
spl_autoload_register(function ($class) 
{
    $replaced = 'App';
    $source = __DIR__ . '/../src/';

    if (strpos($class, 'Main\\') === 0) {
        $source = __DIR__ . '/Main/';
        $replaced = 'Main';
    }

    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = str_replace($replaced . DIRECTORY_SEPARATOR, '', $path);

    $file = $source . $path . '.php';
    if (file_exists($file)) {
        require $file;
    }
});