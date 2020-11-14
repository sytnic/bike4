<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
// offline();
	
	begin_rowcard ();
		
        card ($title='Как сделать. PHP: Ипатов. Строки', $body='Приемы со строками на PHP.', $footer='', $href='strings/');
        card ($title='Как сделать. PHP: Ипатов. Числа.', $body='Работа с числами на PHP.', $footer='', $href='##', $disabled=true);		
		
	end_rowcard ();


	include(VIEW.'footer.php');	
?>