<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
		
		begin_rowcard ();
		
		card ($title='HTML', $body='Учебники и справочники по HTML.', $footer='', $href='content/html/');
		card ($title='CSS', $body='CSS. Стилизация страниц с помощью CSS.', $footer='', $href='content/css/');
		
		end_rowcard ();
		
		
	include(VIEW.'footer.php');
?>