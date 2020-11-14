<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination, begin_row() для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../../';

require_once($level.'includes/initialize.php');


// итемы левого сайдбара в этой папке
		$sidebar = array(
                            'first' => 'HTML-Учебник:',
								
						'index.php' => 'Главная',
					   'html_intro.php' => 'Введение',
					 'html_editors.php' => 'Редакторы',
						'table.php' => 'Таблицы',
						'basics.php' => 'Основы',
						
						'nolink'=> '________________',
						'../index.php' => 'HTML. Все разделы.',
				 );



					
				 
include_once(VIEW.'page_content_begin.php'); // header.php; pagination(); 
// offline();
?>