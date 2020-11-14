<?php	include_once('thislevel.php');
// уровень вложенности этого уровня, initialize, итемы левого сайдбара, header, pagination(), ads_array(), begin_row() для каждой страницы в этой папке
?>
		<h1>HTML Геолокация</h1>
          
		<h2>Простейший пример вычисления геолокации</h2>
		  
<?php	// подсветка кода
		$light_code = 'htmlHigh';
		code_begin(); ?>
		
&lt;script&gt;

<pre>
var x = document.getElementById("demo"); 
function getLocation() { 
  if (navigator.geolocation) { 
    navigator.geolocation.getCurrentPosition(showPosition); 
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser."; 
  } 
} 

function showPosition(position) { 
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "Longitude: " + position.coords.longitude; 
}
</pre> 	
&lt;/script&gt;

<?php	// ссылки на примеры
		$w3 = "https://www.w3schools.com/html/tryit.asp?filename=tryhtml5_geolocation";
		$jsbin = "###";
		
        code_end(); ?>    
		
	<h2>Как это выглядит</h2>	
		
<div class="w3-card-2">        
        <div class="w3-container w3-light-grey">		
            <div class="w3-code htmlHigh">					
		 		
<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo">здесь</p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>       					  
		    </div>			
        </div>        
      </div>

  		

<?php   page_content_end(); ?>