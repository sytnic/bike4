<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row  для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array(
                                'first' => 'CSS. Все разделы:',
				'tutorial/index.php' => 'Учебник',
				'####' => 'Расширенные средства',
				'#' => 'Адаптивность',
				'##' => 'CSS-сетка',
				
                                'nolink'=> '_______________',
                                BASE_URL.'frontend.php' => 'Фронтенд. Все разделы.',
                    
				);
		
include(VIEW.'header.php');
		
		
		
// offline();	
		
	
?>