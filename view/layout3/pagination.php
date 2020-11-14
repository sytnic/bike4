<?php	
// $numeric_leftsidebar - это массив, в котором первым идут ключи-числа, 
// а вторым - значения, равные названию ссылок (ключей) массива sidebar
		$key = array_search($curr_light_key, $numeric_leftsidebar);
                
?>

	<!-- Pagination -->
    <nav class="w3-padding-16 w3-bar">
	    <!-- w3-container дает паддинг слева-права, w3-padding-16 дает паддинг сверху-снизу. -->      
		<?php 	if ($key > 0) { // "предыдущее" выводится только если ключ не на нулевой позиции в массиве
					$prev = $numeric_leftsidebar[$key - 1];
					echo '<a href="'.$prev.'" class="w3-button">&laquo; Предыдущее</a>';
				}
			// до тех пор пока число ключ+1 не сравняется с полным числом элементов в массиве, выводим "следующее"	
			/*	if (($key+1)!=(count($numeric_leftsidebar))) { 
					$next = $numeric_leftsidebar[$key + 1];					
					echo '<a href='.$next.' class="w3-button">Следующее &raquo;</a>';
				}
                         * 
                         */
            // пагинация используется только для страниц со статьями, а там мы всегда применяем как предпоследнее   
            // безсылочную черту (ключ nolink в массиве sidebar) и затем надзаголовок (следующий и последний элемент в sidebar)
            // поэтому здесь можно сделать так: 
            // если следующий ключ по значению выдаёт не "nolink", то выводим "следующее"
            // а если "nolink" ничего не выводим.
            // 
                           if ($numeric_leftsidebar[$key + 1] != 'nolink') { 
					$next = $numeric_leftsidebar[$key + 1];					
					echo '<a href="'.$next.'" class="w3-button">Следующее &raquo;</a>';
				}
		?>      
    </nav>
