<?php
// Функции разметки, не зависящие от конкретного layout
// Повторяются на каждой странице с контентом

// Начало страницы с контентом Не стал здесь реализовывать, т.к. потребуется глобалить не только  массив $sidebar, но и переменные для pagination
///////////////


// Завершение страницы с контентом
function page_content_end() {
	// обычно реализуется в конкретном layout
	include(VIEW.'page_content_end.php'); // включая end_row()
}
/////////////

// Разрыв между абзацами или строками
function between_row() {
	// обычно реализуется в конкретном layout
	end_row();
	begin_row();
}
///////////////

/*
// Panel оформление
function panel_begin() {
	// обычно реализуется в конкретном layout
	include(VIEW.'panelbegin.html');
}

function panel_end() {
	// обычно реализуется в конкретном layout
	include(VIEW.'panelend.html');
}
/////////////
*/

// Code оформление
function code_begin() {
	// обычно реализуется в конкретном layout
	
	global $light_code; //htmlHigh, cssHigh, jsHigh, htmlHigh (для php)
	include(VIEW.'codehead.php');
}

function code_end() {
	// обычно реализуется в конкретном layout
	
	global $w3;
	global $jsbin;
	include(VIEW.'codefooter.php');
}
/////////////

// Конец Функций разметки, не зависящих от конкретного layout
//////////////

// Самостоятельные функции

// Last Update of page //$output.= "$filename";
function last_update() {
	$output = "\n    <!-- Обновлено -->\n";
	$output.= '    <p class="w3-small w3-right"><em>Обновлено: ';
     		$filename = $_SERVER['SCRIPT_FILENAME'];
			
     if (file_exists($filename)) {
          $output.= date ("d-M-Y", filemtime($filename));
            }
    $output.= "</em></p>\n";
    return $output;
}

// Оффлайн ли страница
// чтобы отключить контент-страницу, нужно в нее вставить offline(true); во вторую строчку после include(thislevel.php)
// чтобы отключить одну из заглавных страниц в корне, делать то же самое: после include(thislevel.php)
// чтобы отключить все контент-страницы в папке, нужно в thislevel.php вставить offline(true); в конец, после include_once(VIEW.'page_content_begin.php')
// чтобы отключить все страницы в корне, делать то же самое: offline(true); вставить в thislevel.php в конец, после include(VIEW.'header.php') и	begin_row() 
// Внешний вид, хедэр, футер и даже навигация вверху контент-страниц в этих случаях сохраняются

function offline($offline=false) {	
		if($offline) { 
			include(VIEW.'offline.php'); // реализуется в конкретном layout
			exit;
		}
}
/////////////











?>