<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination, begin_row() для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../../';

require_once($level.'includes/initialize.php');


// итемы левого сайдбара в этой папке
		$sidebar = array(
                                'first' => 'CSS. Учебник:',
						'index.php' => 'Главная',
					   '##' => 'Введение',
					 '###' => 'Редакторы',
						'####' => 'Таблицы',
						'#####' => 'Основы',
						'nolink'=> '________________',
						'../index.php' => 'CSS. Все разделы.',
				 );



					
				 
include_once(VIEW.'page_content_begin.php'); // header.php; pagination(); 
// offline();
?>