

 <footer class="row">
        <div class="large-12 columns">
         <hr/>
          
          <div class="row">
            <div class="large-5 columns">
              <p>Otthonodért Társasházkezelő Kft.</p>
            </div>
            <div class="large-7 columns">
              <ul class="inline-list right">
                <li><a href="fooldal.html">Kezdőlap</a></li>
                <li><a href="rolunk.html">Rólunk</a></li>
                <li><a href="szolgaltatasaink.html">Szolgáltatásaink</a></li>
                <li><a href="#">Referenciáink</a></li>
                <li><a href="elerhetosegeink.html" onclick="">Elérhetőségeink</a></li>
                
              </ul>
            </div>
          </div>

          <br/>
          <br/>

        </div> 
      </footer>



   	<!-- foundation -->
    <script src="js/vendor/jquery.js"></script>    
    <script src="js/foundation.min.js"></script>

    <script>
      $(document).foundation();
    </script>

    
   
    <script type="text/javascript">	
    	/* googlemap */
		function initialize() {
			var myLatlng = new google.maps.LatLng(47.5046105,19.0839046,17);
			var mapOptions = {
				zoom: 16,
				center: myLatlng,
				disableDefaultUI: true,
				scrollwheel: false,
				navigationControl: false,
				mapTypeControl: false,
				scaleControl: false,
				draggable: true
			};
			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map
			});
		}

		$(document).ready(function(){	

			// When the page has loaded //cssbe body{display:none;}
	  		$("body").show();			
		
			/* animate */
			//$('#mainMenu').addClass('animated fadeInDown');			
			//$('#slider').addClass('animated fadeInDownBig');			
			
			/* googlemap */
			google.maps.event.addDomListener(window, 'load', initialize);

			
	  		/* flexslider */		     
	        $('#slider').flexslider({
		        animation: "fade",
				directionNav: true,
		        controlNav: true,
				pauseOnAction: false,
		        animationLoop: true,
		        slideshow: true,
				slideshowSpeed: 8000,	      
		        start: function(slider){
		          $('body').removeClass('loading');
		        }
	        });
			
		});		
	</script>


  </body>
</html>
