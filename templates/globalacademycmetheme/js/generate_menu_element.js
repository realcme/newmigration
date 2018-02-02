function showMenuItems(clickedItem){
	//alert(clickedItem);
	
	$("#menu_"+clickedItem).css("color","#E7F2F9");
	$("#menu_"+clickedItem+"_desc").css("color","#E7F2F9");
	if(clickedItem == 'conference'){
		var menuElement = conference();
		
	}else if(clickedItem == 'specialityfocus'){
		var menuElement = specialityfocus();
	}else if(clickedItem == 'clickforcredit'){
		var menuElement = clickforcredit();
		//window.location.href = "http://www.anticoagulationhub.com/clinical-reviews.html";

	}else if(clickedItem == 'cmelibrary'){
		var menuElement = cmelibrary();
		//window.location.href = "http://www.anticoagulationhub.com/news/conference-news.html";		
	}else if(clickedItem == 'aboutus'){
		var menuElement = aboutus();
		//window.location.href = "http://www.anticoagulationhub.com/news/conference-news.html";		
	}
	
	var prev_menu_id = $("#current_menu_id").val(clickedItem);
	
	if(prev_menu_id != clickedItem){
		$('#menu_items').html("");
		//alert(menuElement);
		$('#menu_items').html(menuElement);
		$('#menu_item_wrapper').css("margin-top","0px");
		$('#menu_item_wrapper').css("margin-bottom","5px");
		$('#menu_items').append('<div class="spacer" style="clear: both;"></div><div id="menu_items_close_div" onclick="hideMenuItems()"><img src="http://www.globalacademycme.com/fileadmin/images/umbrella/close_arrow.gif" /></div>');
		$('#menu_item_wrapper').slideDown(700, function() {
	
		});
	}else{
		hideMenuItems();
	}
}

function hideMenuItems(){
	$('#menu_item_wrapper').slideUp(700, function() {
	    // get the menu elements for clicked Item
	  });
	$(".menu_element_title_div").css("color","#FFF");
	$(".menu_element_desc_div").css("color","#FFF");
	$('#menu_items').html("");
	$("#current_menu_id").val("")
}

/*
$(document).mouseup(function (e){
	if ($(this).parents('#menus').length == 0){
		var container = $("#menu_item_wrapper");
	    if (container.has(e.target).length === 0){
	    	hideMenuItems();
	    }
	}
});
*/

/*
$('body').bind( "touchstart",function (event){
	$(event.target).trigger('mouseup');
});
*/

function conference(){

	var menuReturn = '<div class=\'menu_div\' id=\'menu_id_0\'><div class=\'row row_2\' id=\'row_0\' ><div class=\'col col_2\' id=\'col_0\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/conferences/sdef-hawaii-dermatology-seminar-2014/conference-overview.html\'>38th Hawaii Dermatology Seminar</a></div><div class=\'col col_2\' id=\'col_1\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/conferences/summit-in-aesthetic-medicine/conference-overview.html\'>Summit in Aesthetic Medicine 2014</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_2\' id=\'row_2\' ><div class=\'col col_2\' id=\'col_2\' ><a href=\'http://www.globalacademycme.com/topics/rheumatology/conferences/7th-annual-perspectives-in-rheumatic-diseases/conference-overview.html\'>7th Annual Perspectives in Rheumatic Diseases</a></div><div class=\'col col_2\' id=\'col_3\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/conferences/presented-by-skin-disease-education-foundation/conference-overview.html\'>Women\'s and Pediatric Dermatology Seminar 2014</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_2\' id=\'row_4\' ><div class=\'col col_2\' id=\'col_4\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/conferences/sdef-las-vegas-dermatology-seminar-2014/conference-overview-las-vegas-dermatology-seminar.html\'>15th Las Vegas Dermatology Seminar featuring 11th Annual Psoriasis Forum</a></div><div class=\'col col_2\' id=\'col_5\' ><a href=\'http://www.globalacademycme.com/conferences-archive.html\'>Conferences Archive</a></div></div><div sytle=\'clear:both\'></div></div>';
	return menuReturn;

}

function specialityfocus(){

	var menuReturn = '<div class=\'menu_div\' id=\'menu_id_1\'><div class=\'row row_3\' id=\'row_0\' ><div class=\'col col_3\' id=\'col_0\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/skin-disease-education-foundation-dermatology.html\'>Skin Disease Education Foundation & Dermatology</a></div><div class=\'col col_3\' id=\'col_1\' ><a href=\'http://www.globalacademycme.com/topics/endocrinology/endocrinology.html\'>Endocrinology</a></div><div class=\'col col_3\' id=\'col_2\' ><a href=\'http://www.globalacademycme.com/topics/internal-medicine-family-practice/internal-medicine-family-practice.html\'>Internal Medicine & Family Practice</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_3\' id=\'row_3\' ><div class=\'col col_3\' id=\'col_3\' ><a href=\'http://www.globalacademycme.com/topics/obgyn/ob-gyn.html\'>OB.Gyn</a></div><div class=\'col col_3\' id=\'col_4\' ><a href=\'http://www.globalacademycme.com/topics/oncology/oncology.html\'>Oncology</a></div><div class=\'col col_3\' id=\'col_5\' ><a href=\'http://www.globalacademycme.com/topics/pediatrics/pediatrics.html\'>Pediatrics</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_3\' id=\'row_6\' ><div class=\'col col_3\' id=\'col_6\' ><a href=\'http://www.globalacademycme.com/topics/plastic-surgery/plastic-surgery.html\'>Plastic Surgery</a></div><div class=\'col col_3\' id=\'col_7\' ><a href=\'http://www.globalacademycme.com/topics/rheumatology/rheumatology.html\'>Rheumatology</a></div></div><div sytle=\'clear:both\'></div></div>';
	return menuReturn;

}

function clickforcredit(){

	var menuReturn = '<div class=\'menu_div\' id=\'menu_id_2\'><div class=\'row row_3\' id=\'row_0\' ><div class=\'col col_3\' id=\'col_0\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/click-for-credit.html\'>Dermatology</a></div><div class=\'col col_3\' id=\'col_1\' ><a href=\'http://www.globalacademycme.com/topics/endocrinology/click-for-credit.html\'>Endocrinology</a></div><div class=\'col col_3\' id=\'col_2\' ><a href=\'http://www.globalacademycme.com/topics/internal-medicine-family-practice/click-for-credit.html\'>Internal Medicine & Family Practice</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_3\' id=\'row_3\' ><div class=\'col col_3\' id=\'col_3\' ><a href=\'http://www.globalacademycme.com/topics/obgyn/click-for-credit.html\'>Ob/Gyn</a></div><div class=\'col col_3\' id=\'col_4\' ><a href=\'http://www.globalacademycme.com/topics/oncology/click-for-credit.html\'>Oncology</a></div><div class=\'col col_3\' id=\'col_5\' ><a href=\'http://www.globalacademycme.com/topics/pediatrics/click-for-credit.html\'>Pediatrics</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_3\' id=\'row_6\' ><div class=\'col col_3\' id=\'col_6\' ><a href=\'http://www.globalacademycme.com/topics/plastic-surgery/click-for-credit.html\'>Plastic Surgery</a></div><div class=\'col col_3\' id=\'col_7\' ><a href=\'http://www.globalacademycme.com/topics/rheumatology/click-for-credit.html\'>Rheumatology</a></div></div><div sytle=\'clear:both\'></div></div>';
	return menuReturn;

}

function cmelibrary(){

	var menuReturn = '<div class=\'menu_div\' id=\'menu_id_3\'><div class=\'row row_3\' id=\'row_0\' ><div class=\'col col_3\' id=\'col_0\' ><a href=\'http://www.globalacademycme.com/topics/skin-disease-education-foundation-dermatology/cme-library.html\'>Dermatology</a></div><div class=\'col col_3\' id=\'col_1\' ><a href=\'http://www.globalacademycme.com/topics/endocrinology/cme-library.html\'>Endocrinology</a></div><div class=\'col col_3\' id=\'col_2\' ><a href=\'http://www.globalacademycme.com/topics/internal-medicine-family-practice/cme-library.html\'>Internal Medicine & Family Practice</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_3\' id=\'row_3\' ><div class=\'col col_3\' id=\'col_3\' ><a href=\'http://www.globalacademycme.com/topics/obgyn/cme-library.html\'>OB/Gyn</a></div><div class=\'col col_3\' id=\'col_4\' ><a href=\'http://www.globalacademycme.com/topics/oncology/cme-library.html\'>Oncology</a></div><div class=\'col col_3\' id=\'col_5\' ><a href=\'http://www.globalacademycme.com/topics/pediatrics/cme-library.html\'>Pediatrics</a></div></div><div sytle=\'clear:both\'></div><div class=\'row row_3\' id=\'row_6\' ><div class=\'col col_3\' id=\'col_6\' ><a href=\'http://www.globalacademycme.com/topics/plastic-surgery/cme-library.html\'>Plastic Surgery</a></div><div class=\'col col_3\' id=\'col_7\' ><a href=\'http://www.globalacademycme.com/topics/rheumatology/cme-library.html\'>Rheumatology</a></div></div><div sytle=\'clear:both\'></div></div>';
	return menuReturn;

}

function aboutus(){

	var menuReturn = '<div class=\'menu_div\' id=\'menu_id_4\'><div class=\'row row_4\' id=\'row_0\' ><div class=\'col col_4\' id=\'col_0\' ><a href=\'http://www.globalacademycme.com/about-us/who-we-are.html\'>Who We Are</a></div><div class=\'col col_4\' id=\'col_1\' ><a href=\'http://www.globalacademycme.com/about-us/contact-us.html\'>Contact Us</a></div><div class=\'col col_4\' id=\'col_2\' ><a href=\'http://www.globalacademycme.com/about-us/copyright-and-disclaimers.html\'>Copyright and Disclaimers</a></div><div class=\'col col_4\' id=\'col_3\' ><a href=\'http://www.globalacademycme.com/about-us/privacy-policy.html\'>Privacy Policy</a></div></div><div sytle=\'clear:both\'></div></div>';
	return menuReturn;

}

