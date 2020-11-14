<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination, begin_row() для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../../';

require_once($level.'/includes/initialize.php'); // Здесь объявляются постоянные и подключаются функции


// итемы левого сайдбара в этой папке
		$sidebar = array(
                                'first' => 'HTML-Формы:',
						'index.php' => 'Главная',
					   '1_intro.php' => 'Введение',
					 '2_editors.php' => 'Редакторы',
						'basics.php' => 'Основы',
						'nolink'=> '_______________',
						'../' => 'HTML. Все разделы.',
				 );

include_once(VIEW.'page_content_begin.php');
// реализовано в конкретном layout

?>