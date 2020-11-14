<?php	$title = "Учебник по HTML - Введение";
		include_once('thislevel.php'); 
?>
		
      <h1>HTML Введение</h1>
	  
	<hr>
          <h2>Что такое HTML?</h2>
		  
		  <p>HTML является стандартным языком разметки для создания веб-страниц.</p>
		  		            		  
          <ul>
		    <li>HTML расшифровывается как Гипертекстовый язык разметки (Hyper Text Markup Language)</li>
		    <li>HTML определяет структуру веб-страниц, используя разметку</li>
			<li>HTML-элементы являются строительными блоками HTML-страниц</li>
			<li>HTML-элементы представлены тегами</li>
			<li>HTML-теги обозначают фрагменты содержимого, такие как «заголовок», «абзац», «таблица» и т. д.</li>
			<li>Браузеры не отображают теги HTML, но используют их для отображения содержимого страницы</li>
		  </ul>

	<hr>
				
      <h2>Простой HTML-документ</h2>
        
<?php	// подсветка кода
		$light_code = 'htmlHigh';
		code_begin();	
?>		
		  &lt;!DOCTYPE html&gt;<br>
          &lt;html&gt;<br>&lt;head&gt;
		  <br>&lt;title&gt;<span>Титульный Заголовок</span>&lt;/title&gt;<br>
          &lt;/head&gt;<br>&lt;body&gt;
		  <br>
		  <br>&lt;h1&gt;<span>Мой первый заголовок</span>&lt;/h1&gt;
		  <br>&lt;p&gt;<span>Мой первый параграф.</span>&lt;/p&gt;
		  <br>
		  <br>
          &lt;/body&gt;<br>&lt;/html&gt;					  
<?php	// ссылки на примеры
		$w3 = "https://www.w3schools.com/html/tryit.asp?filename=tryhtml_intro";
		$jsbin = "https://jsbin.com/fomocomeyu/edit?html,output";
		
        code_end();
?>

      <h3>Пояснения к примеру</h3>
		<ul>
		    <li>Объявление 
				<code class="w3-codespan">&lt;!DOCTYPE html&gt;</code> 
				определяет этот документ как HTML5</li>
		    <li>Элемент 
				<code class="w3-codespan">&lt;html&gt;</code> 
				является корневым элементом HTML-страницы</li>
			<li>Элемент 
				<code class="w3-codespan">&lt;head&gt;</code> 
				содержит метаинформацию о документе</li>
			<li>Элемент 
				<code class="w3-codespan">&lt;title&gt;</code> 
				определяет заголовок документа</li>
			<li>Элемент 
				<code class="w3-codespan">&lt;body&gt;</code>
				содержит видимое содержимое страницы</li>
			<li>Элемент 
				<code class="w3-codespan">&lt;h1&gt;</code>
				определяет большой заголовок</li>
			<li>Элемент 
				<code class="w3-codespan">&lt;p&gt;</code>
				определяет абзац (параграф)</li>
		</ul>
	<hr>
	
	  <h1>HTML теги</h1>
		<p>HTML-теги - это имена элементов, заключенные в угловые скобки:</p>
		<div class="w3-panel w3-light-grey w3-border">
		  <p class="w3-xlarge">&lt;тег&gt; содержимое...&lt;/тег&gt;</p>
        </div>
		
	    <ul>
          <li>HTML теги обычно идут <b>парами</b> как 
			<code class="w3-codespan">&lt;p&gt;</code> и <code class="w3-codespan">&lt;/p&gt;</code></li>
          <li>Первый тег в паре - это <b> начальный тег, </b> второй тег - это <b> конечный тег </b></li>
          <li>Конечный тег пишется как начальный тег, но перед именем тега вставляется <strong>косая черта</strong></li>
        </ul>
		
		<div class="<?php panel_class('note'); ?>">
		  <p><strong> Примечание: </strong> Начальный тег также называется <b> открывающим тегом </b>, а конечный тег - <b> закрывающим тегом </b>.</p>
		</div>
		
    <hr>
		
	  <h2>Веб-браузеры</h2>
	    <p>Целью веб-браузера (Chrome, IE, Firefox, Safari) является чтение документов HTML и их отображение. </p>
		<p> Браузер не отображает теги HTML, но использует их для определения способа отображения документа: </p>
		<p><img alt="View in Browser" src="<?php echo IMG.'html/'?>img_chrome.png" class="w3-image"></p>
	  
	<hr>

      <h2>Структура HTML-страницы</h2>
        <p> Ниже приведена визуализация структуры HTML-страницы: </p>
		
  <div style="width:99%;border:1px solid grey;padding:3px;margin:0;background-color:#ddd">&lt;html&gt;
      <div style="width:90%;border:1px solid grey;padding:3px;margin:20px">&lt;head&gt;
        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;title&gt;Title страницы&lt;/title&gt;
        </div>
           &lt;/head&gt;
      </div>
    <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#ddd">&lt;body&gt;
      <div style="width:90%;border:1px solid grey;padding:3px;margin:20px;background-color:#fff">
        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;h1&gt;Это заголовок&lt;/h1&gt;</div>
        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;Это абзац (параграф).&lt;/p&gt;</div>
        <div style="width:90%;border:1px solid grey;padding:5px;margin:20px">&lt;p&gt;Это другой абзац (параграф).&lt;/p&gt;</div>
      </div>
        &lt;/body&gt;
    </div>
       &lt;/html&gt;
  </div>
  
        <div class="<?php panel_class('note'); ?>">
		  <p><strong> Примечание: </strong> Только содержимое внутри раздела &lt;body&gt; (белая область выше) отображается в браузере.</p>
		</div>
	
    <hr>
	
      <h2>Объявление &lt;!DOCTYPE&gt;</h2>
        <p> Объявление <code class = "w3-codespan">&lt;!DOCTYPE&gt;</code> представляет тип документа и помогает браузерам корректно отображать веб-страницы. </p>
		<p> Он должен появляться только один раз, вверху страницы (перед любыми тегами HTML). </p>
		<p> Объявление <code class = "w3-codespan">&lt;!DOCTYPE&gt;</code> не чувствительно к регистру. </p>
		<p> <code class = "w3-codespan"> &lt;!DOCTYPE&gt; </code> для HTML5 выглядит так: </p>

      <div class="w3-card-2">        
        <div class="w3-container w3-light-grey">		
            <div class="w3-code htmlHigh">					
		  &lt;!DOCTYPE html&gt;<br>          					  
		    </div>			
        </div>        
      </div>
	  
    <hr>
	
	<h2>HTML версии</h2>
	
	<p> С первых дней существования Интернета было много версий HTML: </p>
	
	<table class="w3-table-all notranslate">
	  <tbody><tr>
		<th>Версия</th>
		<th>Год</th>
	  </tr>
	  <tr>
		<td>HTML</td>
		<td>1991</td>
	  </tr>
	  <tr>
		<td>HTML 2.0</td>
		<td>1995</td>
	  </tr>
	  <tr>
		<td>HTML 3.2</td>
		<td>1997</td>
	  </tr>
	  <tr>
		<td>HTML 4.01</td>
		<td>1999</td>
	  </tr>
	  <tr>
		<td>XHTML</td>
		<td>2000</td>
	  </tr>
	  <tr>
		<td>HTML5</td>
		<td>2014</td>
	  </tr>
	</tbody></table>
	
    <br>	

<?php   page_content_end(); ?>