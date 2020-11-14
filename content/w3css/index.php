<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
// offline();
	
	begin_rowcard ();
		
        card ($title='W3.CSS - учебник', $body='Учебник по основам W3.CSS.', $footer='', $href='tutorial/');
        card ($title='W3.CSS - цвета', $body='Изучение цвета на W3.CSS.', $footer='', $href='##', $disabled=true);
		
		
	end_rowcard ();


	include(VIEW.'footer.php');	
?>