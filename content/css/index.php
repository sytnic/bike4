<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
// offline();
	
	begin_rowcard ();
		
        card ($title='CSS - учебник', $body='Учебник по основам CSS.', $footer='', $href='tutorial/');
        card ($title='CSS - сетка', $body='Построение сетки на CSS.', $footer='', $href='##', $disabled=true);
		
		
	end_rowcard ();


	include(VIEW.'footer.php');	
?>