<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
		
	begin_rowcard ();
		
	card ($title='PHP', $body='PHP - учебник. Учебник и справочник по основам PHP.', $footer='', $href='##', $disabled=true);
	card ($title='SQL', $body='Структурированный язык запросов к базе данных.', $footer='', $href='###', $disabled=true);
		
	end_rowcard ();

		
		
	include(VIEW.'footer.php');
?>