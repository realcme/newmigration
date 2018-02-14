var menuBars=new Array();
var menuPtr=0;

// This is the handler for all the XML navigation, etc.

var pictures;
var numberOfPictures;
var cycleTimer;
var qtimer;

var fadeOutPicture, fadeInPicture;
var opacity;

var currHeight=10 ,currPicture=0,nMenuItems=0;
var totalHeight=currHeight;
var topSpotDone=false, spotDone=false;
var currPath, pathParts;
var depth=0;
var topNavDone=false;
var rightArrowImage=0;
var bluebarElem=0;

var lightBlueDiv;

var topImageBase64 =    "PGltZyBzcmM9IlRIRVBBVEhpbWFnZXMvRENIZWFkZXJMZWZ0LnBuZyIgdXNlbWFwPSIjZGNs" +
                        "b2dvIiBib3JkZXI9IjAiIC8+PG1hcCBuYW1lPSJkY2xvZ28iPjxhcmVhIHNoYXBlPSJwb2x5" +
                        "IiBjb29yZHM9IjMzLDAsNjYsMzMsMzMsNjYsMCwzMywzMywwIiBocmVmPSJUSEVQQVRIZGVm" +
                        "YXVsdC5odG0iIGFsdD0iIj48L2FyZWE+PC9tYXA+";

 
						
function doSearch()
{
    //window.location = imagePath+"search/search.asp?SearchField="+escape(document.getElementById('searchField').value);
			window.location = "http://search.smdc.org/search?q="+escape(document.getElementById('searchField').value)+"&site=default_collection&client=default_frontend&proxystylesheet=default_frontend&output=xml_no_dtd&x=14&y=12";

}



// base64 conversion class for Javascript.  Very fast!
// August 7, 2006 by Tony Kaiser

 var base64 = (function () 
 {
        
	var b64="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";

    function encode(instring)
    {
		//get length of string.
		var x;
		var iWord;
		var r=(instring.length % 3);
		var oStr="";
		var y;
            	
		var fourStr;
		while (r>=0) 
		{
			instring += " "; 
			r--;
		}
            
		for (x=0;x<instring.length-2;x+=3)
		{
			iWord=instring.charCodeAt(x) << 8;
			iWord=(instring.charCodeAt(x+1) | iWord) << 8;
			iWord = iWord | instring.charCodeAt(x+2);
            	
			fourStr="";
			for (y=0;y<4;y++)
			{
				fourStr = b64.charAt(iWord & 63) + fourStr;
				iWord = iWord >> 6;
			}
			oStr +=fourStr;
		}
            
		return (oStr);
	}

	function decode (instream)
	{
		var x,y;
		var iWord;
		var oStream="";
		var os3;
		for (x=0;x<instream.length-3;x+=4)
		{
			iWord=0;
			for (y=x;y<x+4;y++)				
			{
				iWord = (iWord<<6) | b64.indexOf(instream.charAt(y));
			}
			os3="";
			for (y=0;y<3;y++)
			{
				os3 = String.fromCharCode(iWord & 255) + os3;
				iWord = iWord >> 8;
			}
			oStream += os3;
		}
		return (oStream);
	}
            
	return {'encode':encode, 'decode':decode};
	})();
        

function logTransaction (nameOf, stuffArray)
{
   return(false);
}
   
// encapsulates all the functionality of ajax in a single function.
function AJAXRequest(sendData, returnFunction, url)
{
   //alert(returnFunction+"_"+url);
   var AJAXWrapper = (function ()
   {
      var rFunc; // the return function.
      var sData; // data we're sending. 
      var xhrq; // XMLHTTPRequest object.
      var xURL;
      var errorCode;
      var errorMsg;

      var readyStates = { 'uninitialized' : 0, 'loading' : 1, 'loaded' : 2, 'interactive' : 3, 'complete' : 4 } ;
      var statusCodes = { 'OK' : 200, 'Not Found' : 404 } ;
      function XMLHandler()
      {

	  //alert( xhrq.status +" _ "+xhrq.readyState+" _ "+  xhrq.responseXML+" _ "+xhrq.responseText );   
         if (xhrq.readyState == readyStates.complete)

            if (xhrq.status == statusCodes.OK )
            {
				//alert( xhrq.status +" _ "+xhrq.readyState+" _ "+  xhrq.responseXML+" _ "+xhrq.responseText );  
               rFunc(xhrq.responseXML, xhrq.responseText);
            }
            else
               logTransaction ('AJAXRequest', ['error', 'status failed'], ['status', xhrq.statusText]);
         
      }


      function init(dataToSend, returnFunc, inURL)
      {
         rFunc = returnFunc;
         if (dataToSend != null)
            sData = new String(dataToSend.xml);         // make a new copy.
         else
            sData = null;
         xURL = new String(inURL);
         errorCode = 0;
         errorMsg = "";

         // make xmlhttprequest -- branch for IE & one for other browsers.
         xhrq = false;
         if (window.XMLHttpRequest)
         {
            try
            {
              xhrq = new XMLHttpRequest();
//              xhrq.overrideMimeType('text/xml');
            }
            catch (e)
            {
               xhrq = false;
            }
         }
         else if (window.ActiveXObject)
         {
            try
            {
				xhrq = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
               xhrq = false;
            }
         }

         if (xhrq)
         {
            var sendMethod;
            if (dataToSend != null) sendMethod = "POST"; else sendMethod = "GET";
            logTransaction('AJAXRequest', ['xmlout', sData]);
            xhrq.onreadystatechange = XMLHandler;
            //alert(inURL);
            xhrq.open(sendMethod, inURL, true);
			if (dataToSend != null)
            {
               xhrq.setRequestHeader('Content-Type', 'text/xml');
               xhrq.send(dataToSend);
            }
            else
               xhrq.send(null);
         }
         else
         {
            errorCode = - 1;
            errorMsg = "No XMLHttpRequest object available in browser.";
         }
      }
	
	 return { 'init' : init, 'XMLHandler' : XMLHandler } ;
   })();
   
   this.readyStates = {'uninitialized' : 0, 'loading' : 1, 'loaded' : 2, 'interactive' : 3, 'complete' : 4 };
   this.statusCodes = { 'OK' : 200, 'Not Found' : 404 } ;
   AJAXWrapper.init(sendData, returnFunction, url);
}

//  ---------------------------------------
				
function highlightTopLeftNav(elem1)
{  
	elem1.style.color='#91d7f5';
	elem1.style.cursor='default';
	var img=elem1.childNodes[0];

	//var imageRow = document.getElementById("insideLeftNav");
	//var img=imageRow.rows[0].cells[imageIndex].childNodes[0];
	img.style.visibility='hidden';
	img=img.nextSibling;
	img.style.visibility='visible';
}


function highlightTopTopRight(elem1)
{
	elem1.style.color='#155389';
	elem1.style.fontWeight='bold';
	elem1.style.cursor='default';
}


function unhighlightTopTopRight(elem1)
{
	elem1.style.color='#ffffff';
	elem1.style.fontWeight='normal';
}

function unhighlightTopLeftNav(elem1)
{
	elem1.style.color='#ffffff';
	elem1.style.cursor='default';
	var img=elem1.childNodes[0];
	//var imageRow = document.getElementById("insideLeftNav");
	//var img=imageRow.rows[0].cells[imageIndex].childNodes[0];
	img.style.visibility='visible';
	img=img.nextSibling;
	img.style.visibility='hidden';
}

//simple 

function makeCornerDiv(radius, colorVal, width, height, elem)
{	
	var r;
	var newDiv = document.createElement("div");
	var newCorner=document.createElement("div");
	var botCorner=document.createElement("div");
	var rightArea=document.createElement("div");
	var leftSpace = document.createElement("div");
	var textArea = document.createElement("div");
	var x,y;
	if (height & 1) height++;
	if (radius & 1) radius++;
	r=radius*radius;
	
	newDiv.style.position='absolute';
	newDiv.style.width=width + 'px';
	newDiv.style.height= height + 'px';
	leftSpace.style.position='absolute';
	leftSpace.style.width= radius + 'px';
	leftSpace.style.height= (height-(2*radius))+'px';
	leftSpace.style.overflow='hidden';
	leftSpace.style.left = '1px';
	leftSpace.style.top = radius + 'px';
	leftSpace.style.backgroundColor = colorVal;
	leftSpace.setAttribute('name','leftSpace');
	rightArea.style.position='absolute';
	rightArea.style.width= (width-radius) + 'px';
	rightArea.style.height=newDiv.style.height;
	rightArea.style.left = radius + 'px';
	rightArea.style.top='0px';
	rightArea.style.backgroundColor = colorVal;
	rightArea.setAttribute('name','rightArea');
	textArea.style.position='absolute';
	textArea.style.width=((width-(radius/2))-3) + 'px';
	textArea.style.left = ((radius/2)+3) + 'px';
	textArea.style.top = (radius/2) + 'px';
	textArea.style.height = (height-radius) + 'px';
	textArea.style.textAlign = 'left';
	textArea.style.zIndex = 3;
	textArea.setAttribute('name','textArea');
	newCorner.style.position='absolute';
	newCorner.style.width= radius + 'px';
	newCorner.style.height = radius + 'px';
	newCorner.style.top='0px';
	newCorner.style.left='0px';
	newCorner.style.overflow='hidden';
	botCorner.style.position='absolute';
	botCorner.style.width= radius + 'px';
	botCorner.style.height = radius + 'px';
	botCorner.style.bottom='0px';
	botCorner.style.left='0px';
	botCorner.style.overflow='hidden';

	var topCoord;
	var nDiv;
	var bDiv;
	for (x=0;x<=radius;x++)
	{
		y = Math.floor(Math.sqrt( r - (x*x)));
		topCoord=radius-y;
		nDiv=document.createElement("div");
		bDiv=document.createElement("div");
		nDiv.style.backgroundColor=colorVal;
		nDiv.style.position='absolute';
		nDiv.style.width='1px';
		nDiv.style.height= y + 'px';
		nDiv.style.top=topCoord + 'px';
		nDiv.style.left=(radius-x) + 'px';
		bDiv.style.backgroundColor=colorVal;
		bDiv.style.position='absolute';
		bDiv.style.bottom= topCoord +'px';
		bDiv.style.left=(radius-x)+ 'px';
		bDiv.style.width='1px';
		bDiv.style.height= radius + 'px';
		newCorner.appendChild(nDiv);
		botCorner.appendChild(bDiv);
	}
	newDiv.appendChild(newCorner);
	newDiv.appendChild(botCorner);
	newDiv.appendChild(leftSpace);
	newDiv.appendChild(rightArea);
	newDiv.appendChild(textArea);
	return(elem.appendChild(newDiv));
}

function getPixelProperty(elem,propertyName)
{
	var prop = elem.style[propertyName];
	prop=parseInt(prop.replace('px',''),10);
	return(prop);
}

function getTextElement(elem)
{
	var nodes = elem.childNodes;
	var idx, outputElem=false;
	for (idx=0;idx<nodes.length;idx++)
	{
		if(nodes[idx].nodeType==1)
		{
			if (nodes[idx].getAttribute('name') == 'textArea')
			{
				outputElem = nodes[idx];
				break;
			}
		}
	}
	return (outputElem);
}

function adjustHeight(elem, newHeight)
{
   var nodes = elem.childNodes;
   var idx;
   var leftSpaceNode = 0;
   var rightAreaNode = 0;
   var textNode = 0;
   var cHeight = getPixelProperty(elem, 'height');
   var sNodeName;
   if (newHeight & 1) newHeight ++ ;
   elem.style.height = newHeight + 'px';
   for (idx = 0;idx < nodes.length;idx ++ )
   {
     if(nodes[idx].nodeType==1)
     {
		sNodeName = nodes[idx].getAttribute('name');
		switch (sNodeName)
		{
			case 'leftSpace':
				leftSpaceNode = nodes[idx];
				break;
			case 'rightArea':
				rightAreaNode = nodes[idx];
				break;
			case 'textArea':
				textNode = nodes[idx];
				break;
		}
      }
       
   }
   var radius = (cHeight - getPixelProperty(leftSpaceNode, 'height')) / 2;
   leftSpaceNode.style.height = (newHeight - (2 * radius)) + 'px';
   rightAreaNode.style.height = newHeight + 'px';
   textNode.style.height = (newHeight - radius) + 'px';
   var leftObj = document.getElementById("leftNav");
   leftObj.style.height = (totalHeight + 20) + 'px';
   leftObj = document.getElementById("rightTable");
   if (leftObj) leftObj.style.height = (totalHeight + 20) + 'px';

}

// --------------------------------------------------------------------------
//   For a series of images to fade into each other, a la MSN homepage
// -------------------------------------------------------------------------- 

function init()
{
	var pictureArea = document.getElementById("pictureArea");
	var x;
	pictures=pictureArea.children;
	pictures[0].filters.item("DXImageTransform.Microsoft.Alpha").opacity = 100;
	cycleTimer=setInterval(changeImage,4500);
}


function changeImage()
{
	fadeOutPicture=pictures[currPicture];
	fadeInPicture=pictures[getNextPicture()];
	opacity=0;
	qtimer=setInterval(fadeStep,70);
}

function fadeStep()
{
	opacity+=5;
	fadeInPicture.filters.item("DXImageTransform.Microsoft.Alpha").opacity = opacity;
	fadeOutPicture.filters.item("DXImageTransform.Microsoft.Alpha").opacity = 100-opacity;
	if (opacity == 100)
	{
		clearInterval(qtimer);
		currPicture=getNextPicture();
	}
}

function getNextPicture()
{
	var next = currPicture+1;
	if (next == pictures.length) next=0;
	return(next);
}

// -------------------------------------------------------------------------

//var xmlhttp;
//var xmlhttpTopNav;

function populateTopNav()
{
	//alert(xmlhttpChangeTopNav);
	//alert(imagePath);
	//imagePath = "../";
	var ptn=new AJAXRequest(null, xmlhttpChangeTopNav, imagePath+"topNav.xml");
}

function getSpotlight(spotlighturl)
{
	var spotReq = new AJAXRequest(null,doSpotlight,spotlighturl);
}

function doSpotlight(theXML, theText)
{
	var root1=theText;
	var elem=document.getElementById("farRightTable");
	if (topSpotDone)
		elem.innerHTML += root1;
	else
		elem.innerHTML = root1;
	spotDone=true;
}

function getTopSpotlight(spotlighturl)
{
	var topSpotReq = new AJAXRequest(null,doTopSpotlight,spotlighturl);
}

function doTopSpotlight(theXML, theText)
{
	var root1=theText;
	var elem=document.getElementById("farRightTable");
	elem.innerHTML=root1;
	topSpotDone=true;
}

function addImageMap()
{
	//need to find div tag with class 'header1.'  We insert the image and the image map.

	var divArray = document.getElementsByTagName("div");
	var idx=0;
	var totalDivs = divArray.length;
	var divFound=-1;
	
	while (idx<totalDivs && divFound==-1)
	{
		if (divArray[idx].className == 'header1') 
		{
		divFound = divArray[idx];
		}
		idx++;
	}
   
	if (divFound != -1)
	{
		var nHTML = base64.decode(topImageBase64);
		nHTML = nHTML.replace('THEPATH',imagePath);
		nHTML = nHTML.replace('THEPATH',imagePath);
		
		divFound.innerHTML = nHTML;
	} 
}

function doLeftNav()
{	

	var y;
	
	var pathDepth = 2;

	currPath = new String(window.location.pathname);
	
	var pathArray = currPath.split('/');
	
	var currDirectory = new String(pathArray[pathArray.length - 2]);
	
	if (currDirectory == "childrenshospital")
	{
		document.getElementById('header1').className="";
		document.getElementById('header2').className="";
	}

	if (currPath.substr(currPath.length-1)=='/') 
		currPath+='default.htm';
		
    currPath=currPath.replace('/dc/','/');
    pathParts=currPath.split('/');
	//if (pathParts.length > 3)

	if (pathParts.length > pathDepth)
	{
		y=pathParts.length;
		//while (y>3)
		while (y>pathDepth)
		{
			imagePath += '../';
			y--;
		}
	}
    
	//set up footer string
	var footerHTML='<table cellspacing="0" cellpadding="0" border="0" width="100%"><tr><td width="30%" align="left"><a href="'+imagePath+'webprivacy/webprivacy.htm">Privacy Statement</a>&nbsp;|&nbsp;<a href="'+ imagePath+'termsofusage/termsofusage.htm">Terms of Usage</a></td><td width="70%" align="right">400 East 3rd Street, Duluth, MN 55805 &bull; 218&ndash;786&ndash;8364</td></tr></table>';
	var footerElem;
	if (footerElem = document.getElementById('footer'))
		footerElem.innerHTML = footerHTML;

	//imagePath shows where to find the image we want.
	
	var directoryName = pathParts[pathParts.length-2];

	var xmlName = directoryName.toLowerCase() + '.xml';
	if (pathParts.length <= 2) 
	{
		xmlName='smdc.xml';
	}
	addImageMap();
	//imagePath shows where to find the image we want.
	
//	var directoryName = pathParts[pathParts.length-2];
//	var xmlName = directoryName.toLowerCase() + '.xml';

	// 12/7/2007 change for Childres Hospital
	el=document.getElementById('header1');
	
	if (currDirectory == "childrenshospital") 
	{
		document.getElementById('header1').className="headerdulchild";
		document.getElementById('header2').className="header2dulchild";
	}
	
	populateTopNav();

	var elem=document.getElementById("leftNav");
	lightBlueDiv = makeCornerDiv(16,'#F8FEFE', 220, 64, elem);
	lightBlueDiv.setAttribute('id','leftNavLighterBlue');
	lightBlueDiv.style.left='10px';
	lightBlueDiv.style.top='14px';
		
	var mainAJAXReq = new AJAXRequest(null,xmlhttpChange,xmlName);
	
}

function isChildOf(pageURL,currNode)
{	//alert(currNode.nodeType);
	if(currNode.nodeType==1)
	{
		if (currNode.getAttribute('url').toLowerCase() == pageURL) return(true);
		else
		{
			var pages=currNode.getElementsByTagName('page');
			//alert(pages.length);
			var y;
			var returnVal=false;
			for (y=0;y<pages.length;y++)
			{
				if (pages[y].getAttribute('url').toLowerCase() == pageURL)
				{
					returnVal = true;
					break;
				}
			}
			return(returnVal);
		}
	}
}

function xmlhttpChangeTopNav(xml, textString)
{  
   	var iidx,ipath;
	var root1=xml.documentElement;
	var imgs=root1.getElementsByTagName('img');
	for (iidx=0;iidx<imgs.length;iidx++)
	{
		ipath = imgs[iidx].getAttribute('src');
		ipath = imagePath + ipath;
		imgs[iidx].setAttribute('src',ipath);
	}
	var elem=document.getElementById("topNavBar");
	if (window.ActiveXObject)
	{
	    elem.innerHTML=root1.xml;
	}
	else
	{
		var serializer = new XMLSerializer();
		var xml2 = serializer.serializeToString(xml);
		elem.innerHTML=xml2;
	}
	topNavDone = true;
}


var imagePath=new String('');

function xmlhttpChange(theXML,theText)
{	
	//if (!window.ActiveXObject) theXML = cleanWhitespace(theXML);
	var y;
	var root;
	var pages;
	var ourPage=false;
	var currBar;
	var currNode;
	var currPage;
	var crumb=document.getElementById("crumb");
	var tabRow;
	var nCell, nLink,nURL;
	var theRules = new Array();
	if (document.styleSheets[0].cssRules)
		theRules = document.styleSheets[0].cssRules;
	else if (document.styleSheets[0].rules)
		theRules = document.styleSheets[0].rules;
	var rulesStr;
	
	for (y=0;y<theRules.length;y++)
	{
		if (theRules[y].style.backgroundImage)
		{
			rulesStr = new String(theRules[y].style.backgroundImage);
			rulesStr = rulesStr.substr(4);
			rulesStr = "url(" + imagePath + rulesStr;
		}
	}
	
	currPage = pathParts[pathParts.length-1];
	currPage=currPage.toLowerCase();

	root=theXML.documentElement;
	if (root!= null)
	{
		pages=root.getElementsByTagName('page');

		for (y=0;y<pages.length;y++)
		{
			if (pages[y].getAttribute('url').toLowerCase() == currPage)
			{
				ourPage=pages[y];
			}
		}
	}
	
	if (!ourPage)
	{
		if (currPage == 'otherspecialties.htm')
		{
			// let's look at the sitemap...

			// In this case, otherspecialties is hard-coded in.  Some of this could be taken out
			// as other code exists that does this properly (reads .xml file)
			// The unique functionality here is the drawing of the two columns where the content usually goes.

			highlightTopRightNav(1);
			addLightBlueBar('Medical Specialties','otherspecialties.htm');
			//tabRow = crumb.childNodes[0].childNodes[0].childNodes[0]; // rgs js error in firefox - Mozilla
			tabRow = crumb.getElementsByTagName("table")[0].rows[0];
			tabRow.cells[0].className='currPage';
			tabRow.cells[0].innerHTML = 'Medical Specialties';
			nCell = tabRow.insertCell(0);
			nCell.className = 'divider';
			nCell.innerHTML = '|';
			nCell = tabRow.insertCell(0);

			// rgs nlink code
			nLink = document.createElement('a');
			nLink.setAttribute('href','../default.htm');
			if(window.ActiveXObject)
			{
				nLink.innerText = 'Duluth Clinic Home';
			}
			else
			{
				var thisText= document.createTextNode('Duluth Clinic Home');
				nLink.appendChild(thisText);
			}
			nCell.appendChild(nLink);

			//insert pages as links.
			/*	var pTitle;
			var pLink;
			var nElements;
			pages = root.getElementsByTagName('page');
			nElements = pages.length;

			//turn pages into a list, so we can sort them.
							
			var div2add2 = document.getElementById("col1");
			div2add2=div2add2.childNodes[0];
			var newElem,newLink;
			for (y=0;y<pages.length;y++)
			{
				pTitle=pages[y].getAttribute('title');
				pLink = pages[y].getAttribute('url');
				if (y> (nElements/2))
				{
					div2add2=document.getElementById("col2");
					div2add2=div2add2.childNodes[0];
				}
				newElem=document.createElement('li');
				newLink=document.createElement('a');
				newLink.setAttribute('href',pLink);
				newLink.innerHTML = pTitle;
				newElem.appendChild(newLink);
				div2add2.appendChild(newElem);
			}
			*/
		}
		else if (currPage == 'specialtycenters.htm')
		{
			// let's look at the sitemap...

			// In this case, otherspecialties is hard-coded in.  Some of this could be taken out
			// as other code exists that does this properly (reads .xml file)
			// The unique functionality here is the drawing of the two columns where the content usually goes.

			highlightTopRightNav(0);
			addLightBlueBar('Specialty Centers','specialtycenters.htm');
			//tabRow = crumb.childNodes[0].childNodes[0].childNodes[0]; // rgs js error in firefox - Mozilla
			tabRow = crumb.getElementsByTagName("table")[0].rows[0];
			tabRow.cells[0].className='currPage';
			tabRow.cells[0].innerHTML = 'Specialty Centers';
			nCell = tabRow.insertCell(0);
			nCell.className = 'divider';
			nCell.innerHTML = '|';
			nCell = tabRow.insertCell(0);

			nLink = document.createElement('a');
			nLink.setAttribute('href','../default.htm');
			if(window.ActiveXObject)
			{
				nLink.innerText = 'Duluth Clinic Home';
			}
			else
			{
				var thisText= document.createTextNode('Duluth Clinic Home');
				nLink.appendChild(thisText);
			}
			nCell.appendChild(nLink);
			
			//insert pages as links.
			var pTitle;
			var pLink;
			var nElements;
			pages = root.getElementsByTagName('page');
			nElements = pages.length;
			var div2add2 = document.getElementById("col1");
			div2add2=div2add2.childNodes[0];
			var newElem, newLink;
			for (y=0; y<pages.length; y++)
			{
				pTitle=pages[y].getAttribute('title');
				pLink = pages[y].getAttribute('url');
				if (y > (nElements/2))
				{
					div2add2=document.getElementById("col2");
					div2add2=div2add2.childNodes[0];
				}
				newElem=document.createElement('li');
				newLink=document.createElement('a');

				newLink.setAttribute('href',pLink);
				newLink.innerHTML = pTitle;
				
				//rgs add new appendChild code here
				if(window.ActiveXObject)
				{
					newElem.appendChild(newLink);
					div2add2.appendChild(newElem);
				}
				else
				{
					var thisLink = document.createTextNode(pLink);
					var thisElem = document.createTextNode(pTitle);
					//div2add2.appendChild(thisLink);
					//div2add2.appendChild(newElem);
					newElem.appendChild(newLink);
					div2add2.appendChild(newElem);
				}
			}
		}
		else
			alert ("This page isn't in the sitemap XML file yet. No navigation will be displayed.");
	}
	else
	{
		currNode = ourPage;
		//alert(ourPage);
		if (currNode.getAttribute('topspotlight'))
		     getTopSpotlight(currNode.getAttribute('topspotlight'));
		if (currNode.getAttribute('spotlight'))
		{
		     getSpotlight(currNode.getAttribute('spotlight'));
		}
		// rgs js error in firefox - Mozilla
		//tabRow = crumb.childNodes[0].childNodes[0].childNodes[0];
		tabRow = crumb.getElementsByTagName("table")[0].rows[0];
		tabRow.cells[0].className='currPage';
		tabRow.cells[0].innerHTML = currNode.getAttribute('title');
		
		while (currNode.tagName != 'sitemap')
		{	
			currNode=currNode.parentNode;
			nURL = currNode.getAttribute('url');
			nCell = tabRow.insertCell(0);
			nCell.className = 'divider';
			nCell.innerHTML = '|';
			nCell = tabRow.insertCell(0);
			nLink = document.createElement('a');
			nLink.setAttribute('href',nURL);
			if(window.ActiveXObject)
			{
				if (currNode.tagName == 'sitemap') 
				{
					nLink.innerText=currNode.getAttribute('site');
				}
				else 
				{
					nLink.innerText = currNode.getAttribute('title');
				}
			}
			else
			{
				var thisText;
				if (currNode.tagName == 'sitemap') 
				{
					thisText = document.createTextNode(currNode.getAttribute('site'));
				}
				else 
				{
					thisText = document.createTextNode(currNode.getAttribute('title'));
				}
				nLink.appendChild(thisText);
			}
				nCell.appendChild(nLink);
			depth++;
		}
		
		//so currNode.tagName should be sitemap.
		
		var pathArray = currPath.split('/');
	
		var currDirectory = new String(pathArray[pathArray.length - 2]);
			
		var headline = document.getElementById("subHead");
		var parentName = currNode.getAttribute('parent');
		var siteLoc = currNode.getAttribute('site');
		
		headline.innerHTML = currNode.getAttribute('parent');
		headline = document.getElementById("mainHeadline");
		headline.innerHTML = siteLoc;
		
		var nestingLevel=1;
		var sHeadline;
		
		if (currDirectory == "childrenshospital")
		{
			var xmlroot;
			var xmlpages;
				
			//xmlroot=theXML.documentElement;
			if (root != null)
			{
				xmlpages=root.getElementsByTagName('page');

				for (y=0;y<xmlpages.length;y++)
				{
					//if (xmlpages[y].getAttribute('url').toLowerCase() == "")
					//alert("currPage = " + currPage + "; url = " +xmlpages[y].getAttribute('url').toLowerCase() );
					if (xmlpages[y].getAttribute('url').toLowerCase() == currPage)
					{
						sHeadline = xmlpages[y].getAttribute('headline');
						//alert(sHeadline);
						switch (sHeadline)
						{
							case "SMDC":
								sHeadline = "St. Mary's Children's Hospital";
								break;								
							case "DC":
								sHeadline = "Duluth Children's Clinic";
								break;								
							case "CHILD":
								sHeadline = "Duluth Children's";
								break;								
							case "MD":
								sHeadline = "Miller-Dwan Children's Healthcare";
								break;								
							case "POL":
								sHeadline = "Polinsky Children's Rehabilitation Center";
								break;								
							default:
								sHeadline = siteLoc;
								break;
						}
					}
				}
			}
			headline.innerHTML = "Duluth Children's";
			headline = document.getElementById("mainHeadline");
			//headline.innerHTML = siteLoc;
			headline.innerHTML = sHeadline;
		}
		else
		{
			headline.innerHTML = currNode.getAttribute('parent');
			headline = document.getElementById("mainHeadline");
			headline.innerHTML = siteLoc;
		}
		
		if (siteLoc =='Our Affiliates')
        	highlightTopRightNav(4);
			
        if (siteLoc == 'Billing & Insurance')
        {
            highlightTopRightNav(3);
        }
		
        if (siteLoc == 'Clinic Locations')
        {
            highlightTopRightNav(2);
		}
		
		if (depth < 3)
		{
			nCell = tabRow.insertCell(0);
			nCell.className = 'divider';
			if(window.ActiveXObject)
			{
				nCell.innerHTML = '|';
			}
			else
			{
				var divider = document.createTextNode('|');
				nCell.appendChild(divider);
			}
			
            if (parentName == 'Medical Specialties')
			{

				nCell = tabRow.insertCell(0);

				// This puts in a link to homepage and parent sitelets, if necessary.  
				// This is a simplistic solution at this point;
				// At some point this needs to be changed to look at the XML file.
				nLink = document.createElement('a');
				nLink.setAttribute('href',makeEscapePath(nestingLevel++) + 'otherSpecialties.htm');
				if(window.ActiveXObject)
				{
					nLink.innerText = 'Medical Specialties';
				}
				else
				{
					var thisText= document.createTextNode('Medical Specialties');
					nLink.appendChild(thisText);
				}
				nCell.appendChild(nLink);
				nCell = tabRow.insertCell(0);
				nCell.className = 'divider';
				if(window.ActiveXObject)
				{
					nCell.innerHTML = '|';
				}
				else
				{
					var divider = document.createTextNode('|');
					nCell.appendChild(divider);
				}
			}
			if (parentName == 'Specialty Centers')
			{

				nCell = tabRow.insertCell(0);

				// This puts in a link to homepage and parent sitelets, if necessary.  This is a simplistic solution at this point;
				// at some point this needs to be changed to look at the XML file.
				nLink = document.createElement('a');
				nLink.setAttribute('href',makeEscapePath(nestingLevel++) + 'specialtycenters.htm');
				if(window.ActiveXObject)
				{
					nLink.innerText = 'Specialty Centers';
				}
				else
				{
					var thisText= document.createTextNode('Specialty Centers');
					nLink.appendChild(thisText);
				}
				nCell.appendChild(nLink);

				nCell = tabRow.insertCell(0);
				nCell.className = 'divider';
				nCell.innerHTML = '|';
			}
            if (parentName == 'Clinic Locations')
			{

				nCell = tabRow.insertCell(0);

				// This puts in a link to homepage and parent sitelets, if necessary.  This is a simplistic solution at this point;
				// at some point this needs to be changed to look at the XML file.
				nLink = document.createElement('a');
				nLink.setAttribute('href',makeEscapePath(nestingLevel++) + 'cliniclocations.htm');
				if(window.ActiveXObject)
				{
					nLink.innerText = 'Clinic Locations';
				}
				else
				{
					var thisText= document.createTextNode('Clinic Locations');
					nLink.appendChild(thisText);
				}
				//alert(nLink);
				nCell.appendChild(nLink);
				nCell = tabRow.insertCell(0);
				nCell.className = 'divider';
				nCell.innerHTML = '|';
			}
			nCell = tabRow.insertCell(0);

			nLink = document.createElement('a');
			nLink.setAttribute('href',makeEscapePath(nestingLevel++) + 'default.htm');
			if(window.ActiveXObject)
			{
				nLink.innerText = 'Duluth Clinic Home';
			}
			else
			{
				var thisText= document.createTextNode('Duluth Clinic Home');
				nLink.appendChild(thisText);
			}
			nCell.appendChild(nLink);
		}
								
		depth++;
		var currTitle;
		var currURL;
		var origURL;
		var displayFlag;
		var p;
		var newdivFlag=false;
		var expandedFlag=false;
		var specialIndent=false;
		var nwindow;
		var DCColorFlag=false;
		var MDMCFlag=false, SMDCFlag=false, polinskyFlag=false;
		
		for (p=0; p<currNode.childNodes.length; p++)
		{
			if (currNode.childNodes[p].nodeType==1)
			{
				currTitle=new String(currNode.childNodes[p].getAttribute('title'));
				currURL = new String(currNode.childNodes[p].getAttribute('url'));
				expandedFlag = currNode.childNodes[p].getAttribute('expanded');
				expandedFlag = (expandedFlag=='true'?true:false);
				DCColorFlag=currNode.childNodes[p].getAttribute('DCColor');
			    DCColorFlag=(DCColorFlag=='true'?true:false);
			    MDMCFlag=currNode.childNodes[p].getAttribute('MDMCColor');
			    MDMCFlag=(MDMCFlag=='true'?true:false);
			    SMDCFlag=currNode.childNodes[p].getAttribute('SMDCColor');
			    SMDCFlag=(SMDCFlag=='true'?true:false);
			    polinskyFlag=currNode.childNodes[p].getAttribute('polinskyColor');
			    polinskyFlag=(polinskyFlag=='true'?true:false);
				if (currNode.childNodes[p].getAttribute('nwindow')) nwindow=true; else nwindow=false;
				displayFlag = (currNode.childNodes[p].getAttribute('display'));
				displayFlag = (displayFlag=='no' ? false:true);
				origURL = currURL;
				currURL=currURL.toLowerCase();
				
				specialIndent = (currNode.childNodes[p].getAttribute('specialindent'));
				specialIndent = (specialIndent=='true'?true:false);
				
				newdivFlag = currNode.childNodes[p].getAttribute('ndiv');
				newdivFlag = (newdivFlag =='true'?true:false);
				if (newdivFlag)
				{
					var elem2=document.getElementById("leftNav");
					lightBlueDiv = makeCornerDiv(16,'#F8FEFE', 220,64,elem2);
					lightBlueDiv.setAttribute('id','leftNavLighterBlue');
					lightBlueDiv.style.left='10px';
					currHeight+=29+6;
					totalHeight = currHeight+10;
					lightBlueDiv.style.top=currHeight+'px';
					currHeight=10;
				}
				
				if (isChildOf(currPage,currNode.childNodes[p]) || expandedFlag)
				{
					if ((expandedFlag) && !isChildOf(currPage,currNode.childNodes[p]))
						currBar = addBlueBar(currTitle, origURL, nwindow, specialIndent);						
					else
						currBar = addLightBlueBar(currTitle, origURL, nwindow, specialIndent);
				    
				    if (DCColorFlag)				    
						makeDCTab(currBar,expandedFlag);
                    if (MDMCFlag)
						makeMDMCTab(currBar,expandedFlag);
                    if (SMDCFlag)
						makeSMDCTab(currBar,expandedFlag);   
                    if (polinskyFlag)
						makePolinskyTab(currBar,expandedFlag);
                       
					if ((currNode.childNodes[p].hasChildNodes()) && depth >1)
					{
						var realLen=0;
						var nChildNodes=currNode.childNodes[p].childNodes;
						var idz;
						for (i=0;i<nChildNodes.length;i++)
						{
							if(nChildNodes[i].nodeType==1)
							{
								realLen+=1;
							}
						}
						for (idz=0;idz<nChildNodes.length;idz++)
						{
							if(nChildNodes[idz].nodeType==1)
							{
								if (nChildNodes[idz].getAttribute('display') == 'no') realLen--;
							}
						}
						if (realLen !=0)
						{
							if (isChildOf(currPage, currNode.childNodes[p]) && (!expandedFlag))
								rotateArrow(currBar);
							addLevel3(currBar,currNode.childNodes[p].childNodes,currPage);
						}
										
					}
				}
				else
				{
					if (displayFlag && (!expandedFlag)) 
						currBar=addBlueBar(currTitle, origURL, nwindow, specialIndent);
					if (DCColorFlag)				    
						makeDCTab(currBar,expandedFlag);				    
                    if (MDMCFlag)
						makeMDMCTab(currBar,expandedFlag);
                    if (SMDCFlag)
						makeSMDCTab(currBar,expandedFlag);   
                    if (polinskyFlag)
						makePolinskyTab(currBar,expandedFlag);
				}
			}
		}
	}
}
function makeDCTab(currBar,expanded)
{
	circleElem=document.createElement('img');
	//circleElem.setAttribute('src',imagePath+'Images/dcsmall.gif')
	circleElem.setAttribute('src',imagePath+'Images/bluebarleft.gif')
	if (expanded)
		circleElem.setAttribute('src',imagePath+'Images/bluebarleftsquare.gif')
	circleElem.style.zIndex='0';
	circleElem.style.left='0px';
	circleElem.style.top='0px';
	circleElem.style.height='24px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
	circleElem=document.createElement('img');
	//circleElem.setAttribute('src',imagePath+'Images/dcsmall.gif')
	circleElem.setAttribute('src',imagePath+'Images/dcsmall.gif')

	circleElem.style.zIndex='4';
	circleElem.style.left='6px';
	circleElem.style.top='3px';
	circleElem.style.height='18px';
	circleElem.style.width='18px';
	circleElem.style.position='absolute';
	        
	currBar.appendChild(circleElem);
	currBar.childNodes[6].style.left='34px';
}

function makePolinskyTab(currBar,expanded)
{
	circleElem=document.createElement('img');
	circleElem.setAttribute('src',imagePath+'Images/polinskyleft.gif')
	if (expanded)
		circleElem.setAttribute('src',imagePath+'Images/polinskyleftsquare.gif')
	circleElem.style.zIndex='0';
	circleElem.style.left='0px';
	circleElem.style.top='0px';
	circleElem.style.height='24px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
	circleElem=document.createElement('img');
	circleElem.setAttribute('src',imagePath+'Images/smdcsmall.gif')
	circleElem.style.zIndex='4';
	circleElem.style.left='6px';
	circleElem.style.top='3px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
	currBar.childNodes[6].style.left='34px';
}

function makeMDMCTab(currBar,expanded)
{
	circleElem=document.createElement('img');
	//circleElem.setAttribute('src',imagePath+'Images/dcsmall.gif')
	circleElem.setAttribute('src',imagePath+'Images/mdmcleft.gif')
	if (expanded)
		circleElem.setAttribute('src',imagePath+'Images/mdmcleftsquare.gif')
	circleElem.style.zIndex='4';
	circleElem.style.left='0px';
	circleElem.style.top='0px';
	circleElem.style.height='24px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
    circleElem=document.createElement('img');
	circleElem.setAttribute('src',imagePath+'Images/mdmcsmall.gif')
	circleElem.style.zIndex='4';
	circleElem.style.left='6px';
	circleElem.style.top='3px';
	circleElem.style.height='18px';
	circleElem.style.width='18px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
	currBar.childNodes[6].style.left='34px';
}
function makeSMDCTab(currBar,expanded)
{

	circleElem=document.createElement('img');
	//circleElem.setAttribute('src',imagePath+'Images/dcsmall.gif')
	circleElem.setAttribute('src',imagePath+'Images/smdcleft.gif')
	if (expanded)
		circleElem.setAttribute('src',imagePath+'Images/smdcleftsquare.gif')
            
	circleElem.style.zIndex='4';
	circleElem.style.left='0px';
	circleElem.style.top='0px';
	circleElem.style.height='24px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
            
	circleElem=document.createElement('img');
	circleElem.setAttribute('src',imagePath+'Images/smdcsmall.gif')
	circleElem.style.zIndex='4';
	circleElem.style.left='6px';
	circleElem.style.top='3px';
	circleElem.style.position='absolute';
	currBar.appendChild(circleElem);
	currBar.childNodes[6].style.left='34px';
}

var retryTimer=false;

function highlightTopRightNav(whichElem)
{   
// rgs alert("highlightTopRightNav: whichElem: "+whichElem);
    //need to make a slight modification here -- sometimes, the top navigation isn't done loading yet when this is called.
    if (retryTimer != false)
        clearInterval(retryTimer);
    
    if (topNavDone)
    {
       	//Takes an integer 0-based ordinal argument indicating which of specialty centers...our affiliates should be highlighted.
    	var elem=document.getElementById('topRightNav');
    	    	
		//rgs
		// original call -- elem = elem.childNodes[0].childNodes[0].childNodes[0].childNodes[whichElem*2];
	    if (window.ActiveXObject)
	    {
	        elem = elem.childNodes[0].childNodes[0].childNodes[0].childNodes[whichElem*2];
	    }
	    else
	    {
	        //firefox sees white space as a node so get by specific element
	        elem = document.getElementById("topRightNav");
	        elem = elem.getElementsByTagName("table")[0].rows[0];
	        // rgs  add one to the result to highlight the correct td  -- orig -- elem = elem.getElementsByTagName("td")[whichElem*2];
	        elem = elem.getElementsByTagName("td")[(whichElem*2)+1];
	    }
    
    	elem.className='highlightedTopRightNav';
    	elem=elem.nextSibling;
    	elem.className='highlightedTopRightNav';
	}
	else
	{
	   //we need to wait.
        retryTimer=setInterval('highlightTopRightNav('+whichElem+')',100);
    }
	
}

function makeEscapePath (nLevel)
{
	// makes a series of dot-dot-slashes to indicate nLevel parent directories.
	var returnString = new String('');
	while (nLevel--)
		returnString += '../';
	return (returnString);
}

function rotateArrow(bar)
{
	var nodes=bar.childNodes;
	var idx;
	for (idx=0;idx<nodes.length;idx++)
	{	
		if (nodes[idx].className == 'arrow')
		{
			nodes[idx].setAttribute('src',imagePath+'Images/smallDownArrowLighterBlue.gif');
			break;
		}
	}
}

function addLevel3(barDiv, nodeList, pageURL)
{	
	var lines=0;
	for(i=0;i<nodeList.length;i++)
	{
		if(nodeList[i].nodeType==1)
		{
			lines+=1;
		}
	}
	var idx, currTitle, currURL;
	var nRow, nCell, nLink;
	var newNode,idy;
	var nodeList2;
	var specialIndent;
	var Lvl3;
	var nRow2, nCell2,nBr;
	var displayFlag, currLines=0, oldHeight=0, ndiv;
	//way to make 'hanging tables': if page element has 'ndiv' set to true, close current rounded box & make a new one.
	for (idx=0;idx<nodeList.length;idx++)
	{
		if(nodeList[idx].nodeType==1)
		{
			if (nodeList[idx].getAttribute('display')== 'no') lines--;
		}
	}
	if (lines!=0)
	{
		var newHTML = new String();
		var newHeight= (lines*16);
		expandBlueBar (barDiv,newHeight);

		var navbluebar;

		if (barDiv.className == 'bluebar')
		{
			navbluebar=addSubMenuDark(barDiv);
		}
		else
			navbluebar = addSubMenu(barDiv);
		
		var textSpot = getTextElement(navbluebar);
		var hr;
		if (barDiv.className == 'bluebar')
			textSpot.className = 'subNavDarkBlueText';
		else
			textSpot.className='subNavLightBlueText';
		
		for (idx=0;idx<nodeList.length;idx++)
		{	
			if(nodeList[idx].nodeType==1)
			{
				currTitle= nodeList[idx].getAttribute('title');
				currURL = nodeList[idx].getAttribute('url');
				nwindow=nodeList[idx].getAttribute('nwindow'); 
				if (nwindow=='true') 
					nwindow=true; 
				else 
					nwindow=false;															
				specialIndent=nodeList[idx].getAttribute('specialindent');
				Lvl3=nodeList[idx].getAttribute('lvl3');
				if(specialIndent=='true') 
				    // rgs 10/8/2007 convert this to boolean and add margin left to nCell
				    //specialIndent='&nbsp;&nbsp;&nbsp;&nbsp;'; 
					specialIndent=true;
				else 
				    specialIndent=false;
				hr=false;
				hr = nodeList[idx].getAttribute('hr');
				ndiv=false;
				ndiv=nodeList[idx].getAttribute('ndiv');
				displayFlag = nodeList[idx].getAttribute('display');
				displayFlag = (displayFlag=='no'?false:true);
				
				if (ndiv=='true')
				{
					adjustHeight(royalbluebar,currLines*16+10);
					if (barDiv.className == 'bluebar')
						navbluebar = addSubMenuDark(barDiv);
					else
						navbluebar = addSubMenu(barDiv);

					navbluebar.style.top = (currLines*16)+42+'px';
					oldHeight=(currLines*16)+20;
					textSpot = getTextElement(royalbluebar);
					if (barDiv.className == 'bluebar')
						textSpot.className='subNavDarkBlueText';
					else
						textSpot.className='subNavLightBlueText';
					addExpandBlueBar(barDiv,16);
					//grab barDiv height and subtract 10.   adjustHeight(royalbluebar,26);
					var bluebarheight = getPixelProperty(barDiv,'height');
					adjustHeight(navbluebar, (bluebarheight-10)-oldHeight);
				}
					
				nCell = document.createElement('span');
				nCell.style.height='9px';
				
				if (specialIndent!=false)
				{
					// rgs find out how to add padding-left to the style attribute
				    nCell.style.marginLeft='14px';
				}
					
				if (isChildOf(pageURL,nodeList[idx]))
				{
					if ((currURL.toLowerCase() == pageURL) || (hr == 'true'))
					{
						if (hr=='true') nLink=document.createElement('hr');
						else
						{
							nLink = document.createElement('span');
							nLink.style.fontWeight = 'bold';
							if(window.ActiveXObject)
							{
								nLink.innerText = currTitle;
							}
							else
							{
								var thisText= document.createTextNode(currTitle);
								nLink.appendChild(thisText);
							}
							nLink.style.color='#004477';
						}
					}
					else
					{
						nLink=document.createElement('a');
						nLink.setAttribute('href',currURL);
						if (nwindow==true)
						{
							nLink.setAttribute('rel','external');
							nLink.setAttribute('target','_blank');
						}

						if(window.ActiveXObject)
						{
							nLink.innerText = currTitle;
						}
						else
						{
							var thisText= document.createTextNode(currTitle);
							nLink.appendChild(thisText);
						}
					}
					if (displayFlag)
					{
						nCell.appendChild(nLink);
					}
					if (nodeList[idx].hasChildNodes())
					{
						nodeList2=nodeList[idx].childNodes;
						var idz;
						var nLength = 0;
						for(i=0;i<nodeList2.length;i++)
						{
							if(nodeList2[i].nodeType==1)
							{
								nLength+=1;
							}
						}
						for (idz=0;idz<nodeList2.length;idz++)
						{
							if(nodeList2[idz].nodeType==1)
							{
								if (nodeList2[idz].getAttribute('display') == 'no')
								{
									nLength--;
								}
							}
						}
						
						newHeight += (nLength*16);
						addExpandBlueBar (barDiv,nLength*16);
						adjustHeight (navbluebar,getPixelProperty(barDiv,'height')-(10+oldHeight));
						for (idy=0;idy<nodeList2.length;idy++)
						{
							if(nodeList2[idy].nodeType==1)
							{
								if (nodeList2[idy].getAttribute('display') != 'no')
								{
									currTitle=nodeList2[idy].getAttribute('title');
									currURL = nodeList2[idy].getAttribute('url').toLowerCase();
									Lvl3 = nodeList2[idy].getAttribute('lvl3');
									hr=false;
									hr=nodeList2[idy].getAttribute('hr');
									nRow2=document.createElement('br');
									nCell.appendChild(nRow2);
									currLines++;
									if ((currURL != pageURL) && (hr != 'true'))
									{
										if (nodeList2[idy].getAttribute('display') != 'no')
										{
											nLink = document.createElement('a');
											nLink.setAttribute('href',currURL);
											if (nodeList2[idy].getAttribute('nwindow')=='true')
											{
												nLink.setAttribute('rel','external');
												nLink.setAttribute('target','_blank');
											}
											nLink.style.paddingLeft='14px';
											if (Lvl3 == 'true')
												nLink.style.paddingLeft = '28px';
											//alert(currTitle);
											if(window.ActiveXObject)
											{
												nLink.innerHTML = currTitle;
											}
											else
											{
												var thisTitle = document.createTextNode(currTitle);
												nLink.appendChild(thisTitle);
											}
											nCell.appendChild(nLink);
										}
									}
									else
									{
										if (hr=='true')
										{
											nLink = document.createElement('hr');
											nLink.setAttribute('width','90%');
											nLink.style.color = '#1F6B9F';
										}
										else
										{
											nLink = document.createElement('span');
											nLink.style.fontWeight='bold';
											nLink.style.paddingLeft='14px';
											if (Lvl3 == 'true')
												nLink.style.paddingLeft = '28px';
											nLink.style.color='#004477';
											if(window.ActiveXObject)
											{
												nLink.innerHTML = currTitle;
											}
											else
											{
												var thisTitle = document.createTextNode(currTitle);
												nLink.appendChild(thisTitle);
											}
										}
										nCell.appendChild(nLink);
									}
								}
							}
						}
					}
				}
				else
				{ 
					if (displayFlag)
					{ 
						if (hr == 'true')
						{	
							nLink = document.createElement('hr');
							nLink.setAttribute('width','90%');
							nLink.style.color = '#1F6B9F';
						}
						else
						{
							nLink=document.createElement('a');
							nLink.setAttribute('href',currURL);
							if (nwindow)
							{
								nLink.setAttribute('rel','external');
								nLink.setAttribute('target','_blank');
							}

							if(window.ActiveXObject)
							{
								nLink.innerText =currTitle;
							}
							else
							{
								var thisText= document.createTextNode(currTitle);
								nLink.appendChild(thisText);
							}
						}
						nCell.appendChild(nLink);
					}
				}
				if (displayFlag)
				{	
					if (hr != 'true')
					{	
						nBr=document.createElement('br');
						nCell.appendChild(nBr);
						currLines++;
					}
					textSpot.appendChild(nCell);
				}
			}
		}
	}
}

function makeDivClass(classNameOf)
{
	var newElem = document.createElement("div");
	newElem.className = classNameOf;
	return(newElem);
}

function highlightBar(eventObj)
{ 
	var source;
	 if (window.ActiveXObject)
	 {
		source = eventObj.srcElement;
	 }
	 else
	 {
		source = eventObj.target;
	 }
	var nDepth=0;
	while ((source.className != 'bluebar') && (source.className != 'lightBluebar'))
	{
		source = source.parentNode;
		nDepth++;
	}
	if (nDepth < 3)
	{
		var nodes = source.childNodes;
		var idx;
		for (idx=0;idx<nodes.length;idx++)
		{
			if(nodes[idx].nodeType==1)
			{
				if (nodes[idx].className == 'arrow')
				{
					nodes[idx].className = 'arrowHighlight';
				}
				if (nodes[idx].className=='textArea')
				{
					nodes[idx].className = 'textAreaHighlight';
				}
			}
		}
	}
}

function unHighlightBar(eventObj)
{	
	var source;
	 if (window.ActiveXObject)
	 {
		source = eventObj.srcElement;
	 }
	 else
	 {
		source = eventObj.target;
	 }
	while ((source.className != 'bluebar') && (source.className != 'lightBluebar'))
		source = source.parentNode;
	var nodes = source.childNodes;
	var idx;
	for (idx=0;idx<nodes.length;idx++)
	{
		if(nodes[idx].nodeType==1)
		{
			if (nodes[idx].className == 'arrowHighlight')
			{
				nodes[idx].className = 'arrow';
			}
			if (nodes[idx].className=='textAreaHighlight')
			{
				nodes[idx].className = 'textArea';
			}
		}
	}
}
var retStr="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
//returns reps of string
function repStr (string,reps)
{        
    return(retStr);
}

function addBlueBar(nameOf, URL, nwindow, specialIndent)
{
	var elem;
	var bluebarElem=makeDivClass('bluebar');
	
	bluebarElem.appendChild(makeDivClass('topCorner'));
    bluebarElem.appendChild(makeDivClass('topRight'));		
	/* Let's make a 12x199 block, #108184 in color.  Attach an event to it. */
	var t = document.createElement('div');
	t.style.top='0px';
	t.style.left='11px';
	t.style.width='199px';
	t.style.backgroundColor='#216b9e';
	t.style.position='absolute';
	t.style.overflow='hidden';
	t.innerHTML= repStr('&nbsp;',300);
	
	if (window.ActiveXObject)
	{
	    t.attachEvent('onmouseover',highlightBar);
	    t.attachEvent('onclick',function(){window.location=URL;});
	}
	else
	{
	    t.addEventListener('mouseover',highlightBar,false);
	    t.addEventListener('click',function(){window.location=URL},false);
	}
	
    bluebarElem.appendChild(t);	
	elem = makeDivClass('middleExpand');
	elem.style.height='1px';
	var elem2=document.createElement("img");
	elem2.style.height='1px';
	elem2.setAttribute('src',imagePath + 'images/blueBarMiddle12by1.gif');
	
	elem.appendChild(elem2);
	bluebarElem.appendChild(elem);
	elem = makeDivClass('bottomCorner');
	elem.style.top='13px';
	bluebarElem.appendChild(elem);
	elem=makeDivClass('bottomRight');
	/*put non-breaking spaces in bottom right so event will register.*/
	elem.style.top='13px';
	elem.style.overflow='hidden';
	elem.innerHTML=repStr('&nbsp;',300);
	
	if (window.ActiveXObject)
	{
	    elem.attachEvent('onmouseover',highlightBar);
	    elem.attachEvent('onclick',function(){window.location=URL;});
	}
	else
	{
	    elem.addEventListener('mouseover',highlightBar,false);
	    elem.addEventListener('click',function(){window.location=URL},false);
	}
	elem.style.top='12px';
	bluebarElem.appendChild(elem);
	elem = makeDivClass('textArea');
	elem2= document.createElement("a");

	elem2.setAttribute('href',URL);
	if (nwindow) 
	{ 
		elem2.setAttribute('target','_blank'); 
		elem2.setAttribute('rel','external');
	}
	
	if (specialIndent == true)
	   elem2.style.marginLeft='14px';
	elem2.innerHTML = nameOf;
	
	elem.appendChild(elem2);
	bluebarElem.appendChild(elem);
	bluebarElem.style.top = currHeight + 'px';
	// rgs js error in Firefox - Mozilla
	if (window.ActiveXObject)
	{
		bluebarElem.attachEvent ('onmouseover', highlightBar);
		bluebarElem.attachEvent ('onmouseout', unHighlightBar);
	}
	else
	{
		bluebarElem.addEventListener('mouseover',highlightBar,false);
		bluebarElem.addEventListener('mouseout',unHighlightBar,false);
	}
	
	
	lightBlueDiv.appendChild(bluebarElem);
	currHeight+=29;
	totalHeight+=29;
	adjustHeight(lightBlueDiv,currHeight+6);
	if (menuAddFlag==false) menuBars[menuPtr++]=bluebarElem;
	
	return(bluebarElem);	
}

var menuAddFlag=false;

function addLightBlueBar(nameOf, URL, nwindow)
{
	var elem;
	var bluebarElem=makeDivClass('lightBluebar');
	bluebarElem.style.height='25px';
	
	bluebarElem.appendChild(makeDivClass('topCorner'));


	bluebarElem.appendChild(makeDivClass('topRight'));
	//create a rectangle of color #a7e7b3 (that was old color, new color is aee3c0)
	var t=document.createElement('div');
    t.style.top='0px';
	t.style.left='11px';
	t.style.width='199px';
	t.style.backgroundColor='#7fcddd';
	t.style.position='absolute';
	t.style.overflow='hidden';
	t.innerHTML= repStr('&nbsp;',300);
	if (window.ActiveXObject)
	{
	    t.attachEvent('onmouseover',highlightBar);
	    t.attachEvent('onclick',function(){window.location=URL;});
	}
	else
	{
	    t.addEventListener('mouseover',highlightBar,false);
	    t.addEventListener('click',function(){window.location=URL},false);
	}
    bluebarElem.appendChild(t); 
	
	elem = makeDivClass('middleExpand');
	elem.style.height='1px';
	var elem2=document.createElement("img");
	elem2.style.height='1px';
	elem2.setAttribute('src',imagePath + 'Images/lightBlueBarMiddle12by1.gif');
	elem.appendChild(elem2);
	bluebarElem.appendChild(elem);
	elem = makeDivClass('bottomCorner');
	elem.style.top = '13px';
	bluebarElem.appendChild(elem);
	elem = makeDivClass('bottomRight');
	elem.style.top='13px';
	elem.style.overflow='hidden';
    elem.innerHTML=repStr('&nbsp;',300);
    if (window.ActiveXObject)
	{
	    elem.attachEvent('onmouseover',highlightBar);
	    elem.attachEvent('onclick',function(){window.location=URL;});
	}
	else
	{
	    elem.addEventListener('mouseover',highlightBar,false);
	    elem.addEventListener('click',function(){window.location=URL},false);
	}
	elem.style.top = '13px';
	bluebarElem.appendChild(elem);
	elem = makeDivClass('textArea');
	elem2= document.createElement("a");
	elem2.setAttribute('href',URL);
	if (nwindow) { elem2.setAttribute('target','_blank'); elem2.setAttribute('rel','external');}
	elem2.innerHTML = nameOf;
	elem.appendChild(elem2);
	bluebarElem.appendChild(elem);
	bluebarElem.style.top = currHeight + 'px';
	// rgs js error in Firefox - Mozilla
	if (window.ActiveXObject)
	{
		bluebarElem.attachEvent ('onmouseover', highlightBar);
		bluebarElem.attachEvent ('onmouseout', unHighlightBar);
	}
	else
	{ //fix for non IE swt
		bluebarElem.addEventListener('mouseover',highlightBar,false);
		bluebarElem.addEventListener('mouseout',unHighlightBar,false);
	}
	
	lightBlueDiv.appendChild(bluebarElem);
	currHeight+=29;
	totalHeight+=29;
	adjustHeight(lightBlueDiv,currHeight+6);
	if (menuAddFlag==false) menuBars[menuPtr++]=bluebarElem;
	return (bluebarElem);
}

function expandBlueBar(elem,newHeight)
{
	var idx;
	var expandDiv=false;
	var expandImg=false;
	var bottomRightDiv=false;
	var bottomCornerDiv=false;
	var newBottom;
	newHeight+=24;
	if (newHeight & 1) newHeight++;
	elem.style.height = newHeight + 'px';
	for (idx=0;idx<elem.childNodes.length;idx++)
	{
		if(elem.childNodes[idx].nodeType==1)
		{
			if (elem.childNodes[idx].className == 'middleExpand')
			{
				expandDiv = elem.childNodes[idx];
			}
			if (elem.childNodes[idx].className == 'bottomRight')
			{
				bottomRightDiv = elem.childNodes[idx];
			}
			if (elem.childNodes[idx].className == 'bottomCorner')
			{
				bottomCornerDiv = elem.childNodes[idx];
			}
		}
	}
	if (expandDiv)
	{
		expandDiv.style.height=newHeight+'px';
		expandImg = expandDiv.childNodes[0];
		expandImg.style.height = newHeight + 'px';
		newBottom = getPixelProperty(bottomRightDiv,'top');
		newBottom += (newHeight-1);
		newBottom += 'px';
		bottomRightDiv.style.top=newBottom;
		bottomCornerDiv.style.top=newBottom;
		currHeight+=newHeight;
		totalHeight+=newHeight;
		adjustHeight(lightBlueDiv,currHeight);
	}
}

function addExpandBlueBar(elem,newHeight)
{
	var idx;
	var expandDiv=false;
	var expandImg=false;
	var bottomRightDiv=false;
	var bottomCornerDiv=false;
	var newBottom;
	var delta = newHeight;
	newHeight += getPixelProperty(elem,'height');
	if (newHeight & 1) newHeight++;
	elem.style.height = newHeight + 'px';
	for (idx=0;idx<elem.childNodes.length;idx++)
	{
		if(elem.childNodes[idx].nodeType==1)
		{
			if (elem.childNodes[idx].className == 'middleExpand')
			{
				expandDiv = elem.childNodes[idx];
			}
			if (elem.childNodes[idx].className == 'bottomRight')
			{
				bottomRightDiv = elem.childNodes[idx];
			}
			if (elem.childNodes[idx].className == 'bottomCorner')
			{
				bottomCornerDiv = elem.childNodes[idx];
			}
		}
	}
	if (expandDiv)
	{
		expandDiv.style.height=newHeight+'px';
		expandImg = expandDiv.childNodes[0];
		expandImg.style.height = newHeight + 'px';
		newBottom = getPixelProperty(bottomRightDiv,'top');
		newBottom += (delta);
		newBottom += 'px';
		bottomRightDiv.style.top=newBottom;
		bottomCornerDiv.style.top=newBottom;
		currHeight+=delta;
		totalHeight+=delta;
		adjustHeight(lightBlueDiv,currHeight);
	}
}

function addSubMenu(parentElem)
{
    var rightArrowImage = document.createElement("img");
	rightArrowImage.setAttribute('src',imagePath +'Images/smallRightArrowLighterBlue.gif');
	rightArrowImage.className = 'arrow';
	var currMenuPtr;            //need to declare this in here, too, so it will go out of scope.
	currMenuPtr = menuPtr-1;
	if (window.ActiveXObject)
	{
	    rightArrowImage.attachEvent('onclick',function(){closeAccordion(currMenuPtr);});       
	    //   rightArrowImage.addEventListener('click',function(){closeAccordion(currMenuPtr);},false);
	}
	else
	{
	    rightArrowImage.addEventListener('click',function(){closeAccordion(currMenuPtr);},false);
	}
	
	if (parentElem.childNodes.length<9)
    {
		parentElem.appendChild(rightArrowImage);
	}
	accordionClosed[currMenuPtr]=false;
	accordionClosing[currMenuPtr]=false;
	var newHeight = getPixelProperty(parentElem,'height');
	if (newHeight & 1) newHeight++;
	newHeight-=10;
	var newMenu = makeCornerDiv(12, '#a6dce7',200,newHeight,parentElem);
	newMenu.style.right='0px';
	newMenu.style.top='22px';
	if (parentElem.childNodes.length==10)
	    newMenu.style.top='24px';

	return(newMenu);
}

function addSubMenuDark(parentElem)
{
    //here's where we add handler for open accordion.

var rightArrowImage = document.createElement("img");
	rightArrowImage.setAttribute('src',imagePath+'images/smallrightarrow.gif');
	rightArrowImage.className = 'arrow';	   

var currMenuPtr;            //need to declare this in here, too, so it will go out of scope.
	currMenuPtr = menuPtr-1;


if (window.ActiveXObject)
	{
	    rightArrowImage.attachEvent('onclick',function(){closeAccordion(currMenuPtr);});       
	}
	else
	{
	    rightArrowImage.addEventListener('click',function(){closeAccordion(currMenuPtr);},false);
	    
	}	    
    
    
    if (parentElem.childNodes.length<9)
	parentElem.appendChild(rightArrowImage);
	
	accordionClosed[currMenuPtr]=false;
	accordionClosing[currMenuPtr]=false;
	

	var newHeight = getPixelProperty(parentElem,'height');
	if (newHeight & 1) newHeight++;

	newHeight-=10;
	var newMenu = makeCornerDiv(12, '#6397bb',200,newHeight,parentElem);
	newMenu.style.right='0px';
	newMenu.style.top='22px';
	if (parentElem.childNodes.length==10)
	    newMenu.style.top='24px';
	return(newMenu);
	
}

function doContactUs()
{
    window.location = imagePath+"contactus/contactus.asp";
}


var isInSubDiv=new Array();
var accordionClosing=new Array();
var accordionClosed=new Array();
var barMoveStep=new Array();var levelThreeMoveStep=new Array();var middleMoveStep=new Array();
var textAreaMoveStep=0;
var originalBarPositions,origBarHeight=new Array(),origTextHeight=new Array(),origMiddleHeight=new Array(),origBottomCornerTop=new Array(),origBottomRightTop=new Array(),origLevelThreeHeight=new Array();
var iorigLnavBottomLeft,iorigLnavLbarHeight=new Array(),iorigLnavMainBarHeight=new Array(),iLightBlueTop=new Array();
var activeAccordion=0;
var origTextHeight=0;
var origBarPtr=0;

var moveSteps=20;       //this needs to be an integral factor of totalTime
var totalTime=500;      //500 milliseconds, or 1/2 second.
var stepsLeft;
var accordionInterval;
var currSteps;
var lnav;

function openAccordion(whichAccordion)
{
    if (!accordionClosing[whichAccordion])
    {
    accordionClosing[whichAccordion]=true;
    activeAccordion=whichAccordion;
    stepsLeft=moveSteps; currSteps=moveSteps;
    //use setTimeout 'cause it's safer (we do a lot of processing in closingAccordion)
    accordionInterval=setTimeout('openingAccordion()',totalTime/moveSteps);
    }
}

function openingAccordion()
{
    /*
    1. 
    */
    
    stepsLeft--;currSteps--;
    var top;
    for (var ix=activeAccordion+1;ix<menuPtr;ix++)
    {
        //get pixel top.
        top = parseInt(menuBars[ix].style.top.replace('px',''));
        menuBars[ix].style.top = (originalBarPositions[activeAccordion][ix] +Math.floor(currSteps* barMoveStep[activeAccordion]))+'px';
    //    menuBars[ix].style.height= (originalBarPositions[ix]+Math.floor(currSteps*barMoveStep))+'px';
    }
    
    menuBars[activeAccordion].childNodes[3].style.height=(origMiddleHeight[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    menuBars[activeAccordion].lastChild.style.height=(origLevelThreeHeight[activeAccordion]+Math.floor(currSteps*levelThreeMoveStep[activeAccordion]))+'px';
    menuBars[activeAccordion].childNodes[5].style.top=(origBottomCornerTop[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    menuBars[activeAccordion].childNodes[4].style.top=(origBottomCornerTop[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    menuBars[activeAccordion].childNodes[2].style.height=(origLevelThreeHeight[activeAccordion]+Math.floor(currSteps*levelThreeMoveStep[activeAccordion]))+'px';
    lnav.childNodes[3].style.height=(iorigLnavMainBarHeight[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    lnav.childNodes[2].style.height=(iorigLnavLbarHeight[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    lnav.childNodes[1].style.top=((iorigLnavMainBarHeight[activeAccordion]-16)+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    if (stepsLeft)
        accordionInterval=setTimeout('openingAccordion()',totalTime/moveSteps);
    else
    {
        accordionClosed[activeAccordion]=false;
        menuBars[activeAccordion].lastChild.style.visibility='visible';
        accordionClosing[activeAccordion]=false;
        menuBars[activeAccordion].lastChild.childNodes[1].style.top=menuBars[activeAccordion].lastChild.offsetHeight+'px';
    }
}
var originalBarPositions=new Array();
function closeAccordion(whichAccordion)
{
    /*
   	1. set accordionClosing to true
3. save original bar positions so we can restore them later
   4. calculate amount to move text area per timer interval
   5. save its height so we can restore it later
   6. disable arrow event handler
   7. start timer   
   */
    var currAccordion=whichAccordion;
    if (accordionClosed[currAccordion]) openAccordion(whichAccordion);
    if ((!accordionClosing[currAccordion]) && (!accordionClosed[currAccordion]))
    {
    	accordionClosing[currAccordion]=true;
    	originalBarPositions[currAccordion]=new Array();
    	activeAccordion=whichAccordion;
    	origBarHeight = menuBars[whichAccordion].offsetHeight;
    	var newHeight=0, delta=newHeight-origBarHeight;
        
    	origLevelThreeHeight[whichAccordion]=menuBars[whichAccordion].lastChild.lastChild.offsetHeight;
    	var newLevelThreeHeight=4,deltaLevelThree=newLevelThreeHeight-origLevelThreeHeight[whichAccordion];    
    
    	origMiddleHeight[whichAccordion]=menuBars[whichAccordion].childNodes[3].offsetHeight;
    	var newMiddleHeight=0,deltaMiddleHeight=newMiddleHeight-origMiddleHeight[whichAccordion];
    	origBottomCornerTop[whichAccordion]=parseInt(menuBars[whichAccordion].childNodes[5].style.top.replace('px',''));
    
 		//origBottomRightTop = parseInt(menuBars[whichAccordion].childNodes[6].style.top.replace('px',''));
    
    	barMoveStep[whichAccordion]=delta/moveSteps; levelThreeMoveStep[whichAccordion]=deltaLevelThree/moveSteps;
    	/* to find distance to move bottom corner and bottom right, just use delta. */
    
    	menuBars[whichAccordion].lastChild.style.visibility='hidden';
    	stepsLeft=moveSteps; currSteps=0;
    	//use setTimeout 'cause it's safer (we do a lot of processing in closingAccordion)
    	accordionInterval=setTimeout('closingAccordion()',totalTime/moveSteps);
    	menuBars[whichAccordion].childNodes[3].style.overflow='hidden';
    
    	if (!originalBarPositions[whichAccordion]) originalBarPositions[whichAccordion]=new Array();
    	for (var ix=0;ix<menuPtr;ix++)    
        	originalBarPositions[whichAccordion][ix]=parseInt(menuBars[ix].style.top.replace('px',''));
    
    	lnav=menuBars[activeAccordion].parentNode;
    
    	iorigLnavBottomLeft=parseInt(lnav.childNodes[1].style.top.replace('px',''));
    
    	iorigLnavLbarHeight[activeAccordion]=parseInt(lnav.childNodes[2].style.height.replace('px',''));
    	iorigLnavMainBarHeight[activeAccordion]=parseInt(lnav.childNodes[3].style.height.replace('px',''));
    	iorigLnavBottomLeft=iorigLnavMainBarHeight-16;
  		//  iLightBlueTop[activeAccordion]=parseInt(lightBlueDiv.style.top.replace('px',''));
	}
}

function closingAccordion()
{
    /*
    1. 
    */
    
    stepsLeft--;currSteps++;
    var top;
    for (var ix=activeAccordion+1;ix<menuPtr;ix++)
    {
        //get pixel top.
        top = parseInt(menuBars[ix].style.top.replace('px',''));
        menuBars[ix].style.top = (originalBarPositions[activeAccordion][ix] +Math.floor(currSteps* barMoveStep[activeAccordion]))+'px';
    //    menuBars[ix].style.height= (originalBarPositions[ix]+Math.floor(currSteps*barMoveStep))+'px';
    }
    
    menuBars[activeAccordion].childNodes[3].style.height=(origMiddleHeight[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
 //   menuBars[activeAccordion].lastChild.style.height=(origLevelThreeHeight+Math.floor(currSteps*levelThreeMoveStep))+'px';
    menuBars[activeAccordion].childNodes[5].style.top=(origBottomCornerTop[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    menuBars[activeAccordion].childNodes[4].style.top=(origBottomCornerTop[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    menuBars[activeAccordion].childNodes[2].style.height=(origLevelThreeHeight[activeAccordion]+Math.floor(currSteps*levelThreeMoveStep[activeAccordion]))+'px';
   lnav.childNodes[3].style.height=(iorigLnavMainBarHeight[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    lnav.childNodes[2].style.height=(iorigLnavLbarHeight[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
    lnav.childNodes[1].style.top=((iorigLnavMainBarHeight[activeAccordion]-16)+Math.floor(currSteps*barMoveStep[activeAccordion]))+'px';
   // lightBlueDiv.style.top=iLightBlueTop[activeAccordion]+Math.floor(currSteps*barMoveStep[activeAccordion])+'px';
    if (stepsLeft)
        accordionInterval=setTimeout('closingAccordion()',totalTime/moveSteps);
    else
        {
        accordionClosed[activeAccordion]=true;
        accordionClosing[activeAccordion]=false;
        }
}
