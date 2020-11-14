<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row  для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array(
				'first' => 'Разделы сайта:',
				CONTENT.'html/' => 'Frontend: HTML',
				CONTENT.'css/' => 'Frontend: CSS',
						'#' => 'Frontend: Javascript',
						'##' => 'Frontend: JQuery',
				CONTENT.'w3css/' => 'Фреймворки: W3.CSS',
				        '###' => 'Фреймворки: Bootstrap4',
				'####' => 'Backend: PHP',
				'#####' => 'Backend: SQL',
                                        '######' => 'Как сделать: на HTML',
                                CONTENT.'howto/php/' => 'Как сделать: на PHP',
					'#######' => 'Ещё' 
				);
		
include(VIEW.'header.php');
				
// offline();	
		
	
?>