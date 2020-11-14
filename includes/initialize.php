<?php
// По факту, /includes/initialize.php и /index.php - два главных файла: их местоположение никогда не меняется. Следует стремиться, чтобы все настройки сайта определялись в одном файле, например, здесь.

//Сначала определяем разделитель папок
// ВНИМАНИЕ!! От разделителя папок DS я отказался !!! Т.к. излишне, php сейчас сам всё определяет.
// DIRECTORY_SEPARATOR - это предопределенная переменная в PHP, "знающая", какой знак разделения папок используется в данный момент (В Windows\ и Unix/ - это разные слэши)
// defined('DS') спрашивает: определена переменная DS? Если да, то ничего делать не надо: null.
// defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

// Идентификация местоположения файлов и URL-ссылки на сайт
// Определяем путь до сайта
// Без BASE_URI возможны сбои в отображении файлов, вложенных во внутренние папки. Однако же, ее значение всегда нужно менять при переносе на другой хостинг или openserver.
defined('BASE_URI') ? null : 
	define('BASE_URI', "D:/OSPanel/7.2/domains/bike4/");
	
	// For Windows D:/OSpanel/domains/webcode/   C:/openserver/domains/webcode/
	// For Linux and Xampp: /opt/lampp/htdocs/webcode /
	
	// На сайте может быть '/storage/ssd4/107/4108107/public_html/' - это обычно "Домашний каталог" + Папка для загрузки файлов "public_html"
	
define('BASE_URL', 'http://bike4/'); 
// В онлайне лучше использовать www.webcode.ru, т.к. некоторые страницы могут использовать https вместо http
// For Windows http://webcode
// For Linux and Xampp: http://localhost/webcode

// Определяем абсолютный путь к папке includes	
defined('LIB_PATH') ? null : define('LIB_PATH', BASE_URI.'includes/');
// При уходе c общего хостинга достаточно обозначить BASE_URI.DS.'../includes' (вместо BASE_URI.DS.'includes') с переносом туда (в папку includes на уровне вверху) всех конфиг. файлов, кроме самого /includes/initialize.php. Всё будет работать. Этот файл ('includes/initialize.php') всегда остаётся на этом месте. Только после его объявления становится возможным использовать константы (они заданы здесь и ниже в config.php) и функции (functions.php).



// Порядок подключения файлов важен
// Вместо загрузки конфиг файла, где прописаны константы путей, определяем константы прямо здесь.
// Вместо require_once(LIB_PATH.DS.'config.php');

// Константы путей
define('VIEW', BASE_URI.'view/layout3/');
define('CONTENT', BASE_URL.'content/');
define('IMG', BASE_URL.'images/');

// Загрузка основных функций
require(LIB_PATH.'functions.php');

// Загрузка функций разметки макета
require_once(VIEW.'functions_layout.php');



// ВНИМАНИЕ!! От разделителя папок DS я отказался !!!

// Загрузка объектов ядра (ключевых объектов)
// require_once(LIB_PATH.DS.'session.php');
// require_once(LIB_PATH.DS.'database.php');
// require_once(LIB_PATH.DS.'database_object.php');
// require_once(LIB_PATH.DS.'pagination.php');

// Загрузка библиотек

// Загрузка классов, связанных с базой данных
// require_once(LIB_PATH.DS.'user.php');
// require_once(LIB_PATH.DS.'photograph.php');
// require_once(LIB_PATH.DS.'comment.php');





?>