<?php	include_once('thislevel.php');
		// offline();
		
            //    var_dump($title);
            // Errors Not configured: 
            // error_reporting = E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT
?>
		
		<h1>HTML Редакторы Editors</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Писать по-русски. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Писать по-русски. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<!--		  
		  <a class="jsbin-embed" href="https://jsbin.com/neyemibifo/edit?html,output" target="_blank">JS Bin on jsbin.com</a>
-->		  
        <div class="
            <?php panel_class('info'); ?>
             ">
          <p>With HTML you can create your own Website.</p>
          <p>This tutorial teaches you everything about HTML.</p>
          <p>HTML is easy to learn - You will enjoy it.</p>
        </div>
	  		            		  
<?php //  between_row(); ?>

		<hr>
        <h2>Examples in Every Chapter</h2>
        <p>This HTML tutorial contains hundreds of HTML examples.</p>
        <p>With our online HTML editor, you can edit the HTML, and click on a button to 
        view the result.</p>
		
<?php	// подсветка кода
		$light_code = 'htmlHigh';
		code_begin(); 
?>

&lt;!DOCTYPE html&gt; <br>
&lt;html&gt; <br>
&lt;head&gt; <br>
&lt;title&gt;<span> Титульный Заголовок </span>&lt;/title&gt; <br>
&lt;/head&gt; <br>
&lt;body&gt;  <br>
&lt;h1&gt; <span> Это Заголовок Страницы. </span> &lt;/h1&gt; <br>
&lt;p&gt; <span> Это параграф. </span>&lt;/p&gt; <br>
&lt;/body&gt; <br>
&lt;/html&gt; <br>

<?php	// ссылки на примеры
		$w3 = "##";
		$jsbin = "###";
		
        code_end();
?>    
     
<?php   page_content_end(); ?>