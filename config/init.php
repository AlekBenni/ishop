<?php

// Константа указывающая в каком режиме запущено приложение
define("DEBUG", 1);
// Константа указывающая на корневую папку сайта - ishop
define("ROOT", dirname(__DIR__));
// Константа указывающая на публичную папку public
define("WWW", ROOT . '/public');
// Константа которая ведёт к папке app приложения
define("APP", ROOT . "/app");
// Константа ведущая к ядру приложение core
define("CORE", ROOT . "/vendor/ishop/core");
// Константа ведущая к библиотекам приложения
define("LIBS", ROOT . "/vendor/ishop/core/libs");
// Константа ведущая к кэшу
define("CACHE", ROOT . "/tmp/cache");
// Константа ведущая к файлам конфигурации
define("CONF", ROOT . "/config");
//  Константа ведущая к шаблону сайта по умолчанию
define("LAYOUT", 'default');

// Получения Url адреса главной страницы 

// http://ishop/public/index.php
$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}";

// http://ishop/public/
$app_path = preg_replace("#[^/]+$#", '', $app_path);

// http://ishop
$app_path = str_replace('/public/', '', $app_path);

    // Можно не ебать мозг и воспользоваться следующим кодом:
    // $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    // $need_url = mb_substr($url, 0, -1);

// Константа Url главной страницы
define("PATH", $app_path);

// Константа Url админской страницы
define("ADMIN", PATH . '/admin');

// Подключаем автозагрузчик:
require_once ROOT . '/vendor/autoload.php';
