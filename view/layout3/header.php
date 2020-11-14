<!DOCTYPE html>
<html lang="ru">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  
  <title>bike4 - Справочник веб-кода, перевод W3Schools | <?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Keywords" content="HTML,CSS,JavaScript,jQuery,PHP,SQL,W3CSS,Bootstrap,Веб разработка,учебники,программирование,обучение,уроки,рецепты кода,примеры кода,исходный код,цвета,демо,советы. Перевод W3Schools на русский язык.">
  <meta name="Description" content="Легкие учебники по веб-программированию и веб-дизайну с большим количеством примеров кода на HTML, CSS, JavaScript, SQL, PHP. Перевод W3Schools на русский язык.">
  <link rel="icon" href="<?php echo BASE_URL; ?>favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>css/w3.css">
  <?php if (isset($link)) {
			echo $link;
		} 
  ?>
	
  <style>
	a:hover,a:active{color:green; /*#4CAF50*/ }
	.left-tab{margin-left:225px;} /* у левого сайдбара и здесь*/
	/* span {color: black;} */
	/* от 769 и выше*/
	@media (min-width:769px){.sticky-parent{height:100%; display:table;}}
	@media (min-width:769px){.sticky-child{position:-webkit-sticky;  position:sticky; top:0;}}
  </style>
</head>

<body>

  <!-- top navbar -->  
  <nav class="w3-bar w3-top w3-dark-gray" >
   <!-- button open left sidebar-->
    <button class="w3-bar-item w3-button w3-light-gray  w3-hide-large" onclick="openLeftSidebar()">&#9776;</button> 
      <a href="<?php echo BASE_URL; ?>index.php" class="w3-bar-item w3-button w3-light-green" style="font-weight:bold;" >b i k e 4</a>
<?php 
  // класс подсветки активного поля, будет использоваться для всех навбаров и сайдбаров
  $active_fon = ' w3-blue-gray';
  // класс деактивности
  $deactive = ' w3-disabled';
  
  // строим верхний навбар в массиве
  $nav = array(BASE_URL.'frontend.php' => 'Frontend',
		'##' => 'Backend',
		BASE_URL.'cssframeworks.php' => 'CSS-Фреймворки',
		BASE_URL.'howto.php' => 'Как Сделать',
                        '#######' => 'Ещё');
  
  // выводим этот навбар в html
  foreach($nav as $link => $navitem) { 
  $output = '      <a href="'.$link.'" class="w3-bar-item w3-button w3-hide-small ';
    
    // подсвечиваем активную ссылку   
    $find_str = $_SERVER["PHP_SELF"]; // искомая строка, она короткая, т.к. содержит только относительный путь до файла
    $contain_str = $link; // строка, в которой идёт поиск (содержащая строка), она длинная, т.к. за счёт BASE_URL. содержит весь абсолютный путь
    $pos = strpos($contain_str, $find_str);
    if ($pos !== false) {
      $output.= $active_fon;  
    }

    // деактивируем неактивную ссылку
    if (preg_match("/#/", $link)) {
      $output.= $deactive;  
    }

  $output.= '">'.$navitem."</a>\n";
  echo $output;
  } 
?>   <!-- button open right menu --> 
     <button class="w3-button w3-gray  w3-right  w3-hide-medium w3-hide-large" onclick="openRightMenu()">&#9776;</button>
  </nav>

  <!-- right menu -->
  <nav id="rightMenu" class="w3-sidebar w3-bar-block w3-card w3-dark-gray w3-animate-right" style="display:none; right:0; top:38px; bottom:0px; height:auto;">
    <!-- button close right menu --> 
    <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large w3-dark-gray">Close &times;</button>   
<?php     
  // строим правое меню в массиве
  // здесь, в отличие от главного меню, применено немного другое построение массива с использованием BASE_URL в цикле, а не в массиве, а также, из-за этого, другое исполнение подсветки пунктов меню (REQUEST_URI вместо PHP_SELF)
  $nav = array('frontend.php' => 'Frontend',
				'##/' => 'Backend',
                'cssframeworks.php' => 'CSS-Фреймворки',
                'howto.php' => 'Как Сделать',
                '#####/' => 'Ещё'
			);
        
  // выводим в html
  foreach($nav as $link => $navitem) { 
  $output = '      <a href="'.BASE_URL.$link.'" class="w3-bar-item w3-button ';
    // подсвечиваем активную ссылку
    if($_SERVER["REQUEST_URI"] == '/'.$link){
      $output.= $active_fon;
    } 
  $output.= '">'.$navitem."</a>\n";
  echo $output;
  }       
?>
	  <br>
  </nav>

  <!-- left sidebar -->
  <nav id="leftSidebar" class="w3-sidebar w3-collapse w3-bar-block w3-card w3-light-gray w3-animate-left " style="width:220px; top:38.5px; bottom:0px; height:auto;">
    <!-- button close left sidebar--> 
    <button class="w3-bar-item w3-button w3-hide-large" onclick="closeLeftSidebar()">Close &times;</button>
<?php
    
  // выводим левый сайдбар в html, в каждом файле в начале создан массив sidebar (файл thislevel на каждом уровне)
  
  // выдёргиваем первый элемент массива, чтобы красиво разместить в самом вверху (как заглавие для данного раздела)
  $first = array_shift($sidebar);
  echo '    <div class="w3-bar-item w3-padding-small"><em>'.$first."</em></div>\n";
  
      
  foreach($sidebar as $link => $navitem) { 
  
  // это специальное оформление для элемента $navitem, где используется ключ 'nolink'
  if ($link == 'nolink') {
	  echo '    <div class="w3-bar-item w3-padding-small">'.$navitem."</div>\n";
  } else {
  // во всех остальных случаях оформляем всё как обычно и однообразно
  
  $output = "      <a href=\"{$link}\" class=\"w3-bar-item w3-button w3-padding-small ";
    
	// По ходу дела:
	// 1) подсвечиваем текущую выбранную активную ссылку   
    $contain_str = $_SERVER["PHP_SELF"]; // $_SERVER["PHP_SELF"] здесь длинное, потому что содержит весь путь с папками, кроме корня
    $find_str = $link;  // искомая строка, $link в каждом цикле в каждом файле thislevel содержит лишь короткое название, служащее относительным путём
    $pos = strpos($contain_str, $find_str);
    if ($pos !== false) {
      $output.= $active_fon;
        
      $curr_light_key = $link; // текущий ключ - подсвеченный ключ
      $curr_light_val = $navitem; // текущий итем - подсвеченное значение
  
    } 
        
    // 2) или деактивируем неактивную ссылку (заглушку)
    if (preg_match("/#/", $link)) {
      $output.= $deactive;  
    }
	
    $output.= '">'.$navitem."</a>\n";
    echo $output;
  }  
    // создаем отдельно числовой массив на основе имеющихся ключей, исключая уже выдернутый первый элемент.
    $numeric_leftsidebar[] = $link; 
// $numeric_leftsidebar - это массив, в котором первым идут ключи-числа, 
// а вторым - значения, равные названию ссылок (ключей) массива sidebar
  
  }

  
?>    <br>
  </nav>


<!-- main page -->

<main class="w3-main w3-container left-tab" style="margin-top:72px; height:100%; display:table;">
<!-- height:100%; display:table; необходимы для прилипания 5 блока -->

    <aside class="w3-twothird w3-center w3-padding w3-hide-small">       
        <img src="<?php echo BASE_URL;?>images/450x75.jpg" alt="реклама" rel="nofollow">
    </aside>
   
<!-- column 1 of main-->
  <section class="w3-twothird" style="height: auto;">
  <!-- height:auto необходим для прилипания 5 блока -->
    <div class="w3-panel">
    <!-- необходим для работы прилипания в хроме   -->	
    
<!-- /header -->
	