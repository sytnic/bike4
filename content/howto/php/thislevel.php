<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row  для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../../';

require_once($level.'includes/initialize.php');

// итемы левого сайдбара в этой папке
		$sidebar = array(
                                'first' => 'Как сделать. На PHP:',
				'ipatov/index.php' => 'Ипатов. 128 рецептов.',
				'####' => 'Wenz',
                                'nolink' => '_______________',
				BASE_URL.'howto.php' => 'Как сделать. Все разделы.',
				);
		
include(VIEW.'header.php');
		
		
		
// offline();	
		
	
?>