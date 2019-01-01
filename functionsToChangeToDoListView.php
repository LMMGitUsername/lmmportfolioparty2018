<!doctype html>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
		
      $("#toggleDoneVisibility").click(function(){
          $(".success").toggle();
      });
	  
      $("#toggleInProgressVisibility").click(function(){
          $(".active").toggle();
      });
	  
	  $("#toggleNotStartedVisibility").click(function(){
	      $(".danger").toggle();
	  });
	  
	  $("#toggleDateVisbility").click(function(){
		  $("th").toggle();
      });
    });
  </script>
  
  <body>
    <button id="toggleDoneVisibility" style="color:green;background-color:rgb(222,240,216)">Toggle Done Task Visibility</button>
	<button id="toggleInProgressVisibility" style="color:green;background-color:white">Toggle In Progress Task Visibility</button>
	<button id="toggleNotStartedVisibility" style="color:green;background-color:rgb(242,222,223)">Toggle Not Yet Started Task Visibility</button>
	<button id="toggleDateVisbility" style="color:green;background-color:rgb(255,187,255)">Toggle Date Visibility</button>
  </body>
</html>