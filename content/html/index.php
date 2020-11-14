<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
// offline();
	
	begin_rowcard ();
		
            card ($title='HTML - учебник', $body='Учебник по основам HTML.', $footer='', $href='tutorial/');
            card ($title='HTML - формы', $body='Построение форм на HTML.', $footer='', $href='##', $disabled=true);
		
		
	end_rowcard ();


	include(VIEW.'footer.php');	
?>