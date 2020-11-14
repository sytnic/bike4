<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 

    begin_rowcard ();
		
        card ($title='W3.CSS', $body='Легкий css-фреймворк от команды W3Schools.com', $footer='', $href='content/w3css/');
        card ($title='Bootstrap 4', $body='CSS-фреймворк от разработчиков twitter', $footer='', $href='##', $disabled=true);		
		
	end_rowcard ();	
	
	include(VIEW.'footer.php');
?>