<?php
    spl_autoload_register(function ($class) {
        $prefix = 'Controller\\';
        $len = strlen($prefix);
      
        if (strncmp($prefix, $class, $len) !== 0)
         return;
      
        $relative_class = substr($class, $len);
        
        $base_dir = __DIR__ . '/src/Controller/'; 
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        
        if (file_exists($file)) {
         require $file;
        }
    });
      
    spl_autoload_register(function ($class) {
        $prefix = 'Model\\';
        $base_dir = __DIR__ . '/src/Model/';
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
         return;
        }
        $relative_class = substr($class, $len);
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
        if (file_exists($file)) {
         require $file;
        }
    });
?>