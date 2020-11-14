<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php');

	begin_rowcard ();
		
        card ($title='Как сделать: на HTML', $body='Простые приёмы работы на HTML, CSS, JS.', $footer='', $href='##', $disabled=true);
        card ($title='Как сделать: на PHP', $body='Простые приёмы работы на PHP.', $footer='', $href='content/howto/php/');		
		
	end_rowcard ();
		
	include(VIEW.'footer.php');
?>