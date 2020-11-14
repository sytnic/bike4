<?php	$title = "Учебник по HTML - Главная";
		include_once('thislevel.php');
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination() для каждой страницы в этой папке
// функции, используемые на этой странице, должны быть всеобщими, т.е. не зависящими от конкретного layout
?>
			
		<h1>HTML5 Tutorial</h1>
	<hr>	
    
        <div class="<?php panel_class('info'); ?>">
          <p>С помощью HTML вы можете создать свой собственный веб-сайт.</p>
          <p>Этот учебник обучит вас всему про HTML.</p>
          <p>HTML лёгко выучить - вы будете наслаждаться им.</p>
        </div>
    <hr>
		  
        <h2>Примеры в каждой главе</h2>
		<p>Этот учебник содержит сотни примеров на HTML.</p>
		<p>С нашим онлайн HTML-редактором вы можете редактировать HTML и кликать по кнопке, чтоб посмотреть результат.</p>
		
<?php	// подсветка кода
		$light_code = 'htmlHigh';
		code_begin();	
?>		
		  &lt;!DOCTYPE html&gt;<br>
          &lt;html&gt;<br>&lt;head&gt;
		  <br>&lt;title&gt;<span>Титульный Заголовок</span>&lt;/title&gt;<br>
          &lt;/head&gt;<br>&lt;body&gt;
		  <br>
		  <br>&lt;h1&gt;<span>Это Заголовок на странице.</span>&lt;/h1&gt;
		  <br>&lt;p&gt;<span>Это параграф.</span>&lt;/p&gt;
		  <br>
		  <br>
          &lt;/body&gt;<br>&lt;/html&gt;					  
<?php	// ссылки на примеры
		$w3 = "https://www.w3schools.com/html/tryit.asp?filename=tryhtml_default";
		$jsbin = "https://jsbin.com/wihibawabu/edit?html,output";
		
        code_end();
?>    

	<p><strong>Нажмите на зеленые кнопки в примере, чтоб увидеть, как это работает.</strong></p>
	<a href="html_intro.php">Начать обучение HTML прямо сейчас!</a>
			  
    <hr>
		<h2>HTML Примеры</h2>
          <p>В конце HTML учебника вы можете найти более 200 примеров.</p>
		  <p>С помощью нашего онлайн редактора вы можете редактировать и тестировать каждый пример самостоятельно.</p>		  
	    <a href="##">[Перейти к HTML примерам!]</a>	
    <hr>
    	<h2>Ссылки по HTML</h2>
          <p>В нашей школе вы найдёте ссылки на такие темы, как теги, атрибуты, события, названия цветов, объекты, наборы символов, кодировка URL, языковые коды, HTTP-сообщения и многое другое.</p>
	    <a href="##">[Ссылки по HTML тегам]</a>	
		  
<?php   page_content_end(); ?>