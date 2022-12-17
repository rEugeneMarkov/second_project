<?php

// Задаем константы:
define('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS) . DS;
define('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_HOST', 'localhost:8080');
define('DB_NAME', 'php-first-mySQL');