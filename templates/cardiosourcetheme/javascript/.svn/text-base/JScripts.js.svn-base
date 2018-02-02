//browser detection
var detect = navigator.userAgent.toLowerCase();
var OS,browser,total,thestring;
var version = 0;

if (checkIt('safari')) browser = "safari"
else if (checkIt('firefox')) browser = "firefox"
else if (checkIt('msie')) browser = "Internet Explorer"
else if (!checkIt('compatible'))
{
	browser = "Netscape Navigator"
	version = detect.charAt(8);
}
else browser = "An unknown browser";

if (!version) version = detect.charAt(place + thestring.length);

if (!OS) {
	if (checkIt('linux')) OS = "Linux";
	else if (checkIt('x11')) OS = "Unix";
	else if (checkIt('mac')) OS = "Mac";
	else if (checkIt('win')) OS = "Windows";
	else OS = "an unknown operating system";
}

function checkIt(string) {
	place = detect.indexOf(string) + 1;
	thestring = string;
	return place;
}

//writes stylesheet name, depending on browser
function getStylesheet() {
	document.write('<link rel="stylesheet" type="text/css" href="/cms/sites/all/themes/zen/cardiosourcetheme/css/general.css" />');
	if (OS == 'Mac') {
		if (browser == 'Internet Explorer') {
			document.write('<link rel="stylesheet" type="text/css" href="/cms/sites/all/themes/zen/cardiosourcetheme/includes/mac_ie.css" />');
		}
		else {
			document.write('<link rel="stylesheet" type="text/css" href="/cms/sites/all/themes/zen/cardiosourcetheme/css/safari.css" />');
		}
	}
	else {
		if (browser == 'firefox') {
			document.write('<link rel="stylesheet" type="text/css" href="/cms/sites/all/themes/zen/cardiosourcetheme/css/firefox.css" />');
		}
	}
}

//preloads images
function preloadImages(){
	var siteImages=new Array()
	for (i=0;i<preloadImages.arguments.length;i++) {
		siteImages[i]=new Image();
		siteImages[i].src=preloadImages.arguments[i];
	}
}

//opens new window
function openAuthor(link) {
	authorWindow = window.open(link, "authorWindow", "width=650,height=480,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes");
	authorWindow.focus();
}

function openDetails(link) {
	authorWindow = window.open(link, "detailsWindow", "width=650,height=480,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes");
	authorWindow.focus();
}
	
function openLGWinBars(link) {
	linkWindow = window.open(link, "pop", "width=730,height=550,innerWidth=730,innerHeight=550,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes,menubar=yes,toolbar=yes,location=yes");
	linkWindow.focus();
}

function openLGWin(link) {
	linkWindow = window.open(link, "lrgPop", "width=730,height=550,innerWidth=730,innerHeight=550,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes")
	linkWindow.focus()
}

function openLGerWin(link) {
	linkWindow = window.open(link, "lrgPop", "width=770,height=630,innerWidth=770,innerHeight=620,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes")
	linkWindow.focus()
}

function openWin(link) {
	linkWindow = window.open(link, "Payment_cardio", "width=650,height=500,innerWidth=650,innerHeight=500,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes");
	linkWindow.focus();
}

function openCaseStudySub(link) {
	CaseStudySubWindow = window.open(link, "CaseStudySubWindow", "width=700,height=520,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes");
	CaseStudySubWindow.focus();
}

function openDecSupWindow(link) {
	DecSupWindow = window.open(link, "DecSupWindowWindow", "width=700,height=520,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
	DecSupWindow.focus()
}  

function openSMWin(link) {
	linkWindow = window.open(link, "smPop", "width=450,height=330,innerWidth=450,innerHeight=330,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes")
	linkWindow.focus()
}

function openImage(link) {
	imageWindow = window.open(link, "imageWindow", "width=650,height=480,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
	imageWindow.focus()
}

function openZoomImage(link) {
	imageZoomWindow = window.open(link, "imageZoomWindow", "width=730,height=550,innerWidth=730,innerHeight=550,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
	imageZoomWindow.focus()
}

function openKeyTerm(link) {
	QualityKeyTermWindow = window.open(link, "KeyTermWindow", "width=400,height=300,innerWidth=400,innerHeight=300,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
	QualityKeyTermWindow.focus()
}

function openResource(link) {
	ResourceWindow = window.open(link, "ResourceWindow", "width=730,height=550,innerWidth=730,innerHeight=550,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes,menubar=yes,toolbar=yes,location=yes");
	ResourceWindow.focus();
}

function popFullPlayer(url){
	window.open(url, "CVN_Popup", "width=850,height=400,resizable=no,scrollbars=no,menubar=no,toolbar=no,directories=no,location=no,status=no,left=20,top=20");
}

//legacy window openers from old site
	function openGuideline(link) {
		guidelineWindow = window.open(link, "guidelineWindow", "width=650,height=480,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
		guidelineWindow.focus()
	}
	function openTrial(link) {
		trialWindow = window.open(link, "trialWindow", "width=650,height=480,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
		trialWindow.focus()
	}
	function openQualityCommunity(link) {
		QualityCommunityWindow = window.open(link, "QualityCommunityWindow", "width=650,height=480,innerWidth=650,innerHeight=480,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
		QualityCommunityWindow.focus()
	}
	function openCPDMods(link) {
		CPDModsWindow = window.open(link, "CPDMods", "width=730,height=550,innerWidth=730,innerHeight=550,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes,menubar=yes,toolbar=yes,location=yes")
		CPDModsWindow.focus()
	}	
	function openSponsorWin(link) {
		SponsorWindow = window.open(link, "Sponsor", "width=730,height=550,innerWidth=730,innerHeight=550,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes,menubar=yes,toolbar=yes,location=yes")
		SponsorWindow.focus()
	}
 	function openDecSupWinSmall(link) {
		DecSupWinSmall = window.open(link, "DecSupWindowWinSmall", "width=500,height=320,innerWidth=450,innerHeight=420,top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,toolbar=yes,menubar=yes,dependent=yes")
		DecSupWinSmall.focus()
	} 	
	var maxw = 640;
	var maxh = 480;
	if (window.screen) {
	  maxw = window.screen.availWidth - 10;
	  maxh = window.screen.availHeight - 100;
	}
	function openFullWin(link) {
		linkWindow = window.open(link, "fullwin", "width=" + maxw + ",height=" + maxh + ",top=0,left=0,screenX=0,screenY=0,resizable=yes,scrollbars=yes,dependent=yes,menubar=yes,toolbar=yes,location=yes")
		linkWindow.focus()
	}	
//end legacy window openers

//rollover function
function swap(iname,swapGfc) {
	document.images[iname].src = swapGfc;
}

//check all/uncheck all functionality for the search forms
function ChangeCheckBoxes(formname, fieldname, newstate) {
	var field=eval('document.'+formname+'.'+fieldname);
	//must be array
	if (typeof(field.length)=='number') {
		for(var c=0;c<field.length;c++) {
			if(field[c].type=='checkbox') {
				field[c].checked=newstate;
			}
		}
	}
	//only one checkbox
	else {
		field.checked=newstate;
	}
}

//disable form after submit
function disableForm(theform, newClass) {
	if (document.all || document.getElementById) {
		for (i = 0; i < theform.length; i++) {
			var tempobj = theform.elements[i];
			if (tempobj.type.toLowerCase() == "submit")
				tempobj.className = newClass;
				tempobj.disabled = true;
			}
		}
	return true;
}

function confirmSubmit(msg,link) {
	
	  if (confirm(msg)) {
	  	window.location=link;
	  	return true;
	  } else {
	  	return false;
	  }
	}
	
//function to confirm deletion of data
function verifyDelete(strContent) {
	strConfirmation = "Are sure that you want to permanently delete this " + strContent + "? You will not be able to retrieve it after it is deleted.";
	if (confirm(strConfirmation)) {
		return true;
	}
    return false;
}

function pdapopup() { 
 newWnd = window.open("http://www.skyscape.com/acc/RequestSN.aspx"); 
 newWnd.focus(); 

} 
