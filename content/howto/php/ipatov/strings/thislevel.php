<?php
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination, begin_row() для каждой страницы в этой папке

// в файлах, лежащих на этом же уровне, будет включена эта переменная
$level = '../../../../../';

require_once($level.'includes/initialize.php');


// итемы левого сайдбара в этой папке
		$sidebar = array(
                                'first'=>'Ипатов. 128 приемов на PHP. Строки',
						'index.php' => '1. Подсчитать количество символов в строке',
					   '##' => '2. Удаление символов в начале и конце строки',
					 '###' => '3. Удаление символов в строке',
						'####' => '4. Получение подстроки',
						'#####' => '5. Разбить предложение на слова',
						'nolink'=> '________________',
						'../index.php' => 'Ипатов. Все разделы книги.',
				 );



					
				 
include_once(VIEW.'page_content_begin.php'); // header.php; pagination(); 
// offline();
?>