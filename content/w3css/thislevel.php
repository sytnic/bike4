<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row  для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array(
                                'first' => 'W3.CSS. Все разделы:',
				'tutorial/index.php' => 'Учебник',
				'####' => 'Расширенные средства',
				'#' => 'Цвета',
                                'nolink' => '_______________',
                                BASE_URL.'cssframeworks.php' => 'CSS-фреймворки. Все разделы.'
				
				);
		
include(VIEW.'header.php');
		
		
		
// offline();	
		
	
?>