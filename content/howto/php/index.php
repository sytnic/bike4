<?php	
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, begin_row() для каждой страницы в этой папке
	include_once('thislevel.php'); 
// offline();

    begin_rowcard ();
		
        card ($title='Как сделать: на PHP', $body='Конспект книги Ипатова Е. 128 рецептов PHP.', $footer='(c) Оригинал: www.vk-book.ru/kniga-128-receptov-php/', $href='ipatov/');
        card ($title='Как сделать: на PHP.', $body='Конспект книги Кристиан Венца.', $footer='', $href='##', $disabled=true);		
		
	end_rowcard ();

	include(VIEW.'footer.php');	
?>