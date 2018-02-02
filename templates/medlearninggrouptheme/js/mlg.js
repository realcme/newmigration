//Global killswitch
if (Drupal.jsEnabled) {
  $(document).ready(function(){
    $( "#item-77" ).hover(
      function() {
    	$( ".drop" ).show();
      }, 
      function() {
      	$( ".drop" ).hide();
      }
    );
  });
}