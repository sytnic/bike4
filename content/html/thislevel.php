<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row  для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array(
                'first' => 'Разделы по HTML:',
				'tutorial/index.php' => 'HTML-Учебник',
				'form/index.php' => 'HTML-Формы',
				'#' => 'HTML-Графика',
				'##' => 'HTML-HTML5',
				'api/index.php' => 'HTML-API',
                    
                'nolink' => '_______________',
                BASE_URL.'frontend.php' => 'Frontend. Все разделы.',
				
				);
		
include(VIEW.'header.php');
		
		
		
// offline();	
		
	
?>