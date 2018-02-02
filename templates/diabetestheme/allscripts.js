$(document).ready(function(){
	$("#biobutton1").click(function () {$("#biotext1").toggle();});
	$("#biobutton2").click(function () {$("#biotext2").toggle();});
	$("#biobutton3").click(function () {$("#biotext3").toggle();});
	$("#biobutton4").click(function () {$("#biotext4").toggle();});
	$("#biobutton5").click(function () {$("#biotext5").toggle();});
	$("#biobutton6").click(function () {$("#biotext6").toggle();});
	$("#biobutton7").click(function () {$("#biotext7").toggle();});
	$("#biobutton8").click(function () {$("#biotext8").toggle();});
	$("#biobutton9").click(function () {$("#biotext9").toggle();});
	$("#biobutton10").click(function () {$("#biotext10").toggle();});
	
	$( ".reflections.postit" ).bind( "click", function() {
		var ctx = $(this);
		$(this).toggleClass('collapsed');
		$('.teaser', ctx).toggle();
		$('.header', ctx).toggle();
		$('.notes', ctx).toggle();
	});
        $( ".form-checkbox" ).css("height", "13px");
        $( ".form-checkbox" ).parent(".option").parent(".form-item").css("margin", "0");
});
