<?php	include_once('thislevel.php'); ?>
	
     <!-- Cards -->
      <div class=""> 
      
        <!-- row 2 cards -->
        <div class="w3-row">

        <!-- card -->  
        <div class="w3-card w3-col m5 l5 w3-hover-shadow" style="margin: 14px;" >     
            <header class="w3-container w3-light-gray">
              <h2>Frontend</h2>
            </header>  
          
          <a href="frontend.php">     
            <div class="w3-container">
          <br>
              <p>Справочник по технологиям фронтенда: HTML, CSS, Javascript, Jquery.</p>
            </div>
          </a>

            <footer class="w3-container w3-light-gray">
              <p class="w3-small w3-opacity"></p>
            </footer>
        </div>

        <!-- card -->
        <div class="w3-disabled w3-card w3-col m5 l5 w3-hover-shadow  " style="margin: 14px;" >
          
	          <header class="w3-container w3-light-gray">
              <h2>Backend</h2>
            </header>

          <a href="##" class="w3-disabled">  
            <div class="w3-container ">
          <br>
              <p>Спровочник по основным технологиям бэкенда: PHP, SQL</p>
          <br>
            </div>
          </a>  

            <footer class="w3-container w3-light-gray">
              <p class="w3-small w3-opacity"></p>
            </footer>
        </div>
        </div> <!-- /row 2 cards -->

        <!-- row 2 cards -->
        <div class="w3-row">

        <!-- card -->  
        <div class="w3-card w3-col m5 l5 w3-hover-shadow" style="margin: 14px;" >
          
            <header class="w3-container w3-light-gray">
              <h2>CSS-фреймворки</h2>
            </header>

          <a href="cssframeworks.php">
            <div class="w3-container">
            <br>
              <p>CSS-фреймворки от различных команд: w3schools (w3.css), twitter (bootstrap 4)</p>
            <br>
            </div>
          </a>  

            <footer class="w3-container w3-light-gray">
              <p class="w3-small w3-opacity"></p>
            </footer>    
        </div>

        <!-- card -->
        <div class="w3-card w3-col m5 l5 w3-hover-shadow" style="margin: 14px;" >
          
            <header class="w3-container w3-light-gray">
              <h2>Как сделать</h2>
            </header>

          <a href="howto.php">  
            <div class="w3-container">
          <br>
              <p>Различные простые приемы на фронтенд технологиях и php.</p>
          <br>
            </div>
          </a>

            <footer class="w3-container w3-light-gray">
              <p class="w3-small w3-opacity"></p>
            </footer>
        </div>
		
        </div> <!-- /row 2 cards-->
      </div> <!-- /Cards -->
    
<?php
	include(VIEW.'footer.php');
?>