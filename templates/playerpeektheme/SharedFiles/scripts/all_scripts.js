//rcmlms.js
function initPage(pages, currentPage, title, subtitle, progress, firstPageSuspendScoid, allQuestions, defaultPreviousNav, defaultNextNav) {
    var isFirstPage = (currentPage == 0);

    /*
    if (isFirstPage) {
      Initialize();
      if ((firstPageSuspendScoid != null) && (firstPageSuspendScoid)) {
    	  suspendScoid();
      }
      if (pages.length > 1) {
        checkGoTo(pages, allQuestions);
      }
    }
    
    if (pages.length == 1) {
      // Unload sco only on single page scoes - otherwise it breaks the back navigation
      $(window).unload( function () { UnloadSco(); } );
    }
    if (title.length > 0 || subtitle.length > 0) {
      recordBarTitle(title, subtitle);
    }
    if (progress > 0) {
    	recordProgress(progress);
    }
    */
    checkMultiMedia();
    
    // Add default navigation
    if ((defaultPreviousNav == null) || (defaultPreviousNav)) {
        var previousPage = isFirstPage? '' : pages[currentPage-1];
        $("#nav-bottom").append(getPreviousNavigation(previousPage));
    }
    if ((defaultNextNav == null) || (defaultNextNav)) {
        var isLastPage = (currentPage == (pages.length -1));
        var nextPage = isLastPage? '' : pages[currentPage+1];
        $("#nav-bottom").append(getNextNavigation(nextPage));
    }
}

function rcmGetLMSPreviousFormName() {
	return 'rcm_lms_previous_form';
}
function rcmGetLMSNextFormName() {
	return 'rcm_lms_next_form';
}
function rcmLMSHasPrevious(){
    return true;
}
function rcmLMSHasNext(){
    return true;
}
function rcmLMSGoPrevious() {
	var x = window.parent.document.getElementById(rcmGetLMSPreviousFormName());
	if (x) {
		x.submit();
	} else {
		// nothing
	}
}
function rcmLMSGoNext() {
	var x = window.parent.document.getElementById(rcmGetLMSNextFormName());
	if (x) {
		x.submit();
	} else {
		// nothing
	}
}


function checkMultiMedia() {
  var baseurl = getScormPackageBaseURL();

  var i = 1;
  $('.author-lightbox').each( function() {
	var legend = '';
	$('p', this).each( function() {
	  legend += $(this).html();
	});
                        
    var group = 'group' + i;
    var text = "<p>\n&nbsp;<em>Click on image to enlarge</em><br>\n"; 
    var count = 0;
    $('img', this).each( function() {
      var src = $(this).attr('src');
      var title = $(this).attr('title');
      //var pos = src.lastIndexOf('.');
      //var th_src = src.substr(0, pos) + '_th' + src.substr(pos);
      var th_src = src; // do not generate the thumbnails on preview
      text += "<a href='" + baseurl + src + "' rel='lytebox[" + group + "]' title='" + title + "'><img class='slideshow' height='100px' src='" + th_src + "' alt='" + title + "'/></a>\n";
      count++;
    });
    if (count > 0) {
	    if (legend.length > 0) {
	   	  text += "<br>" + legend + "<br>";
	    }
	    text += "</p>\n";
	    $(this).html(text);
    }
    i++;
  });

  // Video
  $('.author-video')
  	.attr('title', 'Video non active in preview mode')
	.wrap("<div class='left rcmvideo'>")
	.wrap("<div class='rcmvideocontainer'>")
	.wrap("<div class='rcmvideobox'>");
  // Audio
  $('.author-audio')
	.attr('title', 'Audio clip non active in preview mode')
	.wrap("<div class='left rcmvideo'>")
	.wrap("<div class='rcmvideocontainer'>")
	.wrap("<div class='rcmaudiobox'>");

}


function getScormPackageBaseURL() {
	return "";
}

function getURLParameter( name )
{
  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
  var regexS = "[\\?&]"+name+"=([^&#]*)";
  var regex = new RegExp( regexS );
  var results = regex.exec( window.location.href );
  if( results == null )
    return "";
  else
    return results[1];
}

function parseQueryString( qs, param )
{
	// Turn <plus> back to <space>
	// See: http://www.w3.org/TR/REC-html40/interact/forms.html#h-17.13.4.1
	qs = qs.replace(/\+/g, ' ')
	var args = qs.split('&');
	
	var value = null;
	// find name-value pair
	for (var i=0;i<args.length;i++) {
		var pair = args[i].split('=')
		var name = unescape(pair[0]);
		if (name == param) {
			value = unescape(pair[1]);
			break;
		}
	}	
	return value;
}

function checkGoLast( url ) {
	if (getURLParameter('last') == 'true') {
		window.location = url;
	}
}	

function checkGoTo( pages, allQuestions ) {
	if (getURLParameter('last') == 'true') {
		window.location = pages[pages.length-1];
	} else {
		var pn = getURLParameter('pn');
		if ((pn > 0) && (pn < pages.length)) {
			window.location = pages[pn];
		} else if (allQuestions != null) {
			var qid = getURLParameter('qid');
			var p = '';
			if (qid.length > 0) {
				// check if any question is referenced
				for (var i=0;i<allQuestions.length;i++) {
					var q = allQuestions[i];
					if (q.id == qid) {
						p = q.reviewPage;
						break;
					}
				}
			}
			if ((p != null) && (p.length > 0)) {
				window.location = p;
			}
		}
 	}
}		

/**
 * Updates the progress bar displayed by the LMS.
 * 
 * @param {Object} progress
 */
function recordProgress( progress ) {
} 

function recordBarTitle(title, subtitle) {
}

function recordBarImage(filename, title) {
}

function resize_container() {
}
function scroll_container() {
}

function getPreviousNavigation(page) {
  var nav = '';
  nav += '<form id="rcm_sco_previous_form" action="" method="post" onSubmit="return false;">';
  nav += '<input id="prev" type="image" src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/btn-prev.gif" border="0" alt="Previous"">';
  nav += '</form>';
  return nav;
}

function checkGoPrevious(page) {
  intraSco = ((page != null) && (page.length > 0));
  if (intraSco) {
   $("#rcm_sco_previous_form").attr('action', page);
    prepareGoToPage();
    return true;
  } else {
    Previous(); // invoque extra sco navigation
    return false;
  }
}

function getSubmitQuestionNavigation() {
  var nav = '';
  nav += '<form id="rcm_sco_next_form" action="" method="post" onSubmit="return false;">';
  nav += '<input id="next" type="image" src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/btn-next.gif" border="0" alt="Next"">';
  nav += '</form>';
  return nav;
}

function getNextNavigation(page) {
  var nav = '';
  nav += '<form id="rcm_sco_next_form" action="" method="post" onSubmit="return false;">';
  nav += '<input id="next" type="image" src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/btn-next.gif" border="0" alt="Next"">';
  nav += '</form>';
  return nav;
}

function hasUnansweredSurveys() {
// check if there are any unanswered form
  var count = $("input.surveybutton").length;
  //alert('Found ' + count + ' survey buttons');
  return (count > 0);
}

function checkGoNext(page) {
  intraSco = ((page != null) && (page.length > 0));
  if (hasUnansweredSurveys()) {
    alert("Please answer the survey.");
    return false;
  } else {
    if (intraSco) {
     $("#rcm_sco_next_form").attr('action', page);
      prepareGoToPage();
      return true;
    } else {
      Continue(); // invoque extra sco navigation
      return false;
    }
  }
}

/**
 * Same as getNextNavigation but does not bind any submit function
 * Used in the post-test - after first failure.
 */
function getBasicNextNavigation(page) {
  var nav = '';
  if ((page != null) && (page.length > 0)) {
    // Intra sco
    nav += '<form id="rcm_sco_next_form" action="' + page + '" method="post">';
    nav += '<input id="next" type="image" src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/btn-next.gif" border="0" alt="Next"">';
    nav += '</form>';
  } else {
    // Next sco
    nav += '<form id="nextBtn" style="visibility: hidden" action="" onSubmit="return false;">';
    nav += '<input id="next" type="image" src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/btn-next.gif" border="0" alt="Next" onClick="javascript:Continue();">';
    nav += '</form>';
  }
  return nav;
}

function disableNextNavigation() {
  $("#rcm_sco_next_form").attr('action', '');
  $("#rcm_sco_next_form").submit(function () {return false;});
  $("#next").attr('src', '/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/btn-next-disabled.gif');
  $("#next").click(function () {return false;});
}


/*******************************************************************************
**
** This function is used before going to another page of a multi-page SCO,
** when goToPage() cannot be invoked;
**
**
**
*******************************************************************************/
function prepareGoToPage()
{
	
}

/**
 * Resize the forum frame
 */
function resize_forumframe() {
	var height;
	var browser=navigator.appName;
	var version=navigator.appVersion;
	var x=document.getElementById('forumframe');
	if (x) {
		if (browser == 'Microsoft Internet Explorer') {
			height = x.contentWindow.document.body.scrollHeight;//IE
		} else if ((version.indexOf('Safari') >=0) || (version.indexOf('KHTML') >=0)) {
			height=x.contentWindow.document.body.offsetHeight;
		} else {
			height = x.contentDocument.height;
		}  
		x.style.height=parseInt(height+50)+'px';
	}
	resize_container();
}

function get_default_forumframe_size() {
	var height;
	var browser=navigator.appName;
	if (browser=='Microsoft Internet Explorer') {
		height=document.body.clientHeight;//IE
	} else {
		height = window.innerHeight;
	} 
	var hint = parseInt(height);
	if (hint < 500) { hint = 500; } 
	return hint +'px';
}

function populate_forum(fid) {
}

/*
 * **************************************************
 * CME Companion
 * ************************************************** 
 */

function openRecommend() {
  return false;
}

function openMasteryReport() {
  return false;
}

function openConsult() {
  return false;
}

function openNextSeries() {
  return false;
}

function openCertificate() {
  return false;
}

function openAboutNetwork() {
  return false;
}

function openUserProfilePopup(args) {
  return false;
}

/*
* **********************************************
* Google Tracker Call
* **********************************************
*/
function postGoogleTrack() {
}

/*
 * **********************************************
 * GLOBAL Variables
 * **********************************************
 */

var rcmlms_list_chart_notes_url = '/cms/cmechartnotes/list/pamela';
var rcmlms_add_chart_notes_url = '/cms/cmechartnotes/post/pamela';
var rcmlms_get_survey_results_url = '/cms/cmemastery/getsurveyresults';
var rcmlms_get_review_results_url = '/cms/cmemastery/getreviewresults';
var rcmlms_get_ig_results_url = '/cms/cmemastery/getigresults';
var rcmlms_get_curriculum_score_url = '/cms/cmemastery/getcurriculumscore';
var rcmlms_get_forum_id_url = '/cms/mdl/get-forum-id';
var rcmlms_show_forum_url = '/cms/mdl/forum';
var rcmlms_get_topic_id_url = '/cms/mdl/get-forum-topic-id';
var rcmlms_get_topic_index_url = '/cms/mdl/get-forum-topic-index';
var rcmlms_show_topic_url = '/cms/node';
var rcmlms_get_user_profile_info_url = '/cms/cmebase/user-profile-url';
var rcmlms_record_credit_url = '/cms/cmetracker/recordcmecredit';
var rcmlms_check_certificate_url = '/cms/cmetracker/checkcertificate';
var rcmlms_check_claimed_credit_url = '/cms/cmetracker/checkclaimedcredit';
var rcmlms_record_claimed_credit_url = '/cms/cmetracker/recordclaimedcredit';
var rcmlms_post_claimed_credit_url = '/cms/cmetracker/postclaimedcredit';
var rcmlms_record_curriculum_question_url = '/cms/mdl/record_curriculum_question';
var rcmlms_retreive_curriculum_question_url = '/cms/mdl/retreive_curriculum_question';
var rcmlms_current_visit = 1;


//dmceFunctions.js"></script>
// JavaScript Document
function Trim(s)
{
  // Remove leading spaces and carriage returns

  while ((s.substring(0,1) == ' ') || (s.substring(0,1) == '\n') || (s.substring(0,1) == '\r'))
  {
    s = s.substring(1,s.length);
  }

  // Remove trailing spaces and carriage returns

  while ((s.substring(s.length-1,s.length) == ' ') || (s.substring(s.length-1,s.length) == '\n') || (s.substring(s.length-1,s.length) == '\r'))
  {
    s = s.substring(0,s.length-1);
  }
  return s;
}

// Global variables

var useRcmScoNavigation = true; // true while navigation to next/previous SCO not implemented in Moodle

/*******************************************************************************
**
** This function is used to go to another page of a multi-page SCO
**
** Inputs:  page - the location that we're bookmarking
**
**
*******************************************************************************/
function GoToPage( page )
{

	// replace the current page with the page specified
	window.location.replace( page );
}

/*******************************************************************************
**
** This function asks the LMS if there exists a previous SCO or Asset to go to.
** If a SCO or Asset exists, then the previous button is displayed.
**
** Inputs:  None
**
** Return:  String - "true" if the previous button should be displayed
**                   "false" if failed.
**
*******************************************************************************/
function renderPreviousButton(){
	if (useRcmScoNavigation) {
		if (rcmLMSHasPrevious()) {
			return 'true';
		}
		else {
			return 'false';
		}
	} else {
		var value = retrieveDataValue("adl.nav.request_valid.previous");
		return value;
	}
}

/*******************************************************************************
**
** This function asks the LMS if there exists a next SCO or Asset to continue
** to.  If a SCO or Asset exists, then the continue button is displayed.
**
** Inputs:  None
**
** Return:  String - "true" if the continue button should be displayed
**                   "false" if failed.
**
*******************************************************************************/
function renderContinueButton()
{
	if (useRcmScoNavigation) {
		if (rcmLMSHasNext()) {
			return 'true';
		} else {
			return 'false';
		}		
	} else {
   		var value = retrieveDataValue( "adl.nav.request_valid.continue" );
   		return value;		
	}
}


/*******************************************************************************
**
** This function is used to go to a previous SCO
**
*******************************************************************************/
function Previous()
{
	if (useRcmScoNavigation) {
		// we terminate this SCO's communication with the LMS
        rcm_unloaded = "true";
		terminateCommunication();

		// move to previous
		rcmLMSGoPrevious();				
	} else {
		// we request the previous SCO from the LMS
		storeDataValue("adl.nav.request", "previous");

		// we terminate this SCO's communication with the LMS
		terminateCommunication();
	}
}

/*******************************************************************************
**
** This function is used to go to a next SCO
**
*******************************************************************************/
function Continue()
{
	if (useRcmScoNavigation) {

		// we terminate this SCO's communication with the LMS
        rcm_unloaded = "true";
		Terminate();		

		// move to next
		rcmLMSGoNext();				
	} else {
		// we request the next SCO from the LMS
		storeDataValue ("adl.nav.request", "continue");

		// we terminate this SCO's communication with the LMS
		terminateCommunication();				
	}
}


/*******************************************************************************
**
** This function is used to tell the LMS to set a bookmark
**
** Inputs:  value - the location that we're bookmarking
**
** Return:  None
**
*******************************************************************************/
function onUnexpectedExit( value )
{
	// set a bookmark
	storeDataValue( "cmi.location", value );

}


/*******************************************************************************
**
** This function is used to tell the LMS to initiate the communication session
** using the APIWrapper.js file as a pass through.
**
** Inputs:  showNext - "false" (optional parameter)
**
** Return:  String - "true" if the initialization was successful, or
**          "false" if the initialization failed.
**
*******************************************************************************/
function Initialize(showNext)
{
	if ( !(entryStatus == "resume") )
	{
   		initializeCommunication();
	}
	// if there is somewhere to go next and previous enable the buttons
	if ( renderContinueButton() == "true")
    {
		if (showNext != "false") {
			var x = document.getElementById("nextBtn");
			if (x) x.style.visibility = "visible";
		}
	}


	if ( renderPreviousButton() == "true" )
	{
		var x = document.getElementById("prevBtn"); 
		if (x) x.style.visibility = "visible";
	}


	// we need to determine if this is a new "learner attempt" or a
   	// suspended "learner attempt
   	var entryStatus = retrieveDataValue( "cmi.entry" );


	// check to see if this a resumption of a suspended learner attempt
	/***********************************************************
	** Currently NOT needed (keep for future use/reminder)
	************************************************************
	if ( entryStatus == "resume" )
	{
		var location = retrieveDataValue( "cmi.location" );

		// jump to the location we just retrieved

			//find the path name of the current SCO
			var path = getSCOLocation(currentSCO);  //Need to recreate getSCOLocation function with method you decided to use
			var newLocation = path+location+".html";
			window.location.replace( newLocation );
	}
	*************************************************/
}

/*******************************************************************************
**
** On unloading the page, terminate only if not already done
** This is because the next/previous buttons at the button may already have called a termination
**
** Inputs:  None
**
** Return:  None
**
*******************************************************************************/
function UnloadSco()
{
  //alert('Unloading - rcm_unloaded = ' + rcm_unloaded + "\n" + window.location.href);
  if (rcm_unloaded == "false") {
    Terminate();
  }
}


/*******************************************************************************
**
** Makes the appropriate calls for a normal exit calling Terminate and
** setting some data model elements for a normal exit
**
** Inputs:  None
**
** Return:  None
**
*******************************************************************************/
function Terminate()
{
  recordCompletion();

  storeDataValue( "cmi.exit", "" );

  terminateCommunication();
}

/*******************************************************************************
**
** Marks completion of a SCO
**
** Inputs:  None
**
** Return:  None
**
*******************************************************************************/
function recordCompletion()
{
}

/********************************************************************************
** This function pops opens up a new window while the first one remains visible
**
** Inputs: String - The name/location of the page that will appear in the new window
**
** Return: A new window is open with the page specified
**
********************************************************************************/
function popup(pageName)
{
	window.open(pageName, "newWindow", "resizable=yes,scrollbars=yes,width=800,height=600");
}


function disableSubmit()
{
	document.getElementById('submit').disabled = true;
	document.getElementById('reset').disabled = true;
}

function enableSubmit()
{
	document.getElementById( "submit" ).disabled = false;
	document.getElementById( "reset" ).disabled = false;
}

//-- BEGIN ASSESSMENT VALIDATION and FEEDBACK FUNCTIONS

//initalize global variables
var correct = "Correct. ";
var incorrect = "Incorrect. ";
var alreadyAnswered = "You have already answered the question.  Please click Next.";
var answerResult = "";


/*******************************************************************************
**
** This function validates any forms with radio button (i.e. true/false, multiple choice).
** It checks to see if the user selected an answer and prompts otherwies.  Then it checks to see
** if the answer selected is the correct answer and sets the appropriate variables.
**
** Inputs: 	formId - string - the id of the form
**			correctAnswer - string - the corret answer to the question
**			index - the question index. Question is recorded if index is nonnegative
**
** Return: IsOK - Boolean, states whether an answer was selected true=yes, false=no
**
*******************************************************************************/
function radio_validate(formId, correctAnswer, index)
{
	//initalize variables used in the function
	var isOK = false;
	var answer = "";
    var result = incorrect;
	
	var formObj = window.document.getElementById(formId);
	if (formObj) {
		//finds each radio button and if it checked sets the answer as that element
		for (var i = 0; i < (formObj.elements.length - 1); i++) {
			currElem = formObj.elements[i];
			if (currElem.type == "radio" && currElem.checked) {
				isOK = true;
				answer = currElem.value;
				break;
			}
		}
	}
   if ( !isOK )
	{
		alert( "Please select an answer." );
	}
	else
	{
        if (index >= 0) {
    		// store the answer
    		storeDataValue("cmi.interactions."+index+".learner_response", answer);
    
    		//check to see if user's answer is correct
    		if (correctAnswer == null) {
    			// do not record result as correct/incorrect
    		} 
    		else if( answer == correctAnswer )
    		{
    			result = correct;
    
    			// store the result, since we only are storing that they got this question correct
    			storeDataValue("cmi.interactions."+index+".result", "correct");
    		}
    		else
    		{
    			// store the result as incorrect			
    			storeDataValue("cmi.interactions."+index+".result", "incorrect");
    		}
        }
	}
    return isOK;
}


function checkbox_validate(formName, index, dme, InteractionObject)
{
	numRight = 0;
	numWrong = 0;

	var learnerResponse = "";
	var totalOptions = formName.elements.length - 2
	var i;
	var numChecked = 0;

	//loop to see how many are checked
	for (var i = 0; i < totalOptions; i++ )
	{
		currElem = formName.elements[i];
        	if ( currElem.type == "checkbox" && currElem.checked )
		{
			numChecked++;
       		}
    	}

	//loop to create the learner's response
	if(numChecked > 0)
	{
		var numAdded = 0;
		for (var  i = 0; i < totalOptions; i++ )
		{
			currElem = formName.elements[i];

			if ( currElem.type == "checkbox" && currElem.checked )
			{
				learnerResponse += formName.elements[i].value;
				numAdded++;
				if (numAdded < numChecked)
				{
					learnerResponse += "[,]";

				}
		   }
		}

		// Set the Interaction ID
		storeDataValue("cmi.interactions."+index+".id", InteractionObject.id);

		// Set the Interaction type for this "interaction"
		storeDataValue("cmi.interactions."+index+".type", InteractionObject.type);

		// set the Interaction's correct response to "correctAnswer"
		storeDataValue("cmi.interactions."+index+".correct_responses.0.pattern", InteractionObject.correctAnswer);

		// to describe this Interaction, we'r using the actual test question
		storeDataValue("cmi.interactions."+index+".description", InteractionObject.description );

		// since we are demonstrating Score in this example, we are weighting questions differently
		// The weight will be used to calculate the scaled score on the results page.
		storeDataValue("cmi.interactions."+index+".weighting", InteractionObject.weighting );

		// store the answer
		storeDataValue("cmi.interactions."+index+".learner_response", learnerResponse );

		//check to see if the answers are correct.
		correctPattern = retrieveDataValue( "cmi.interactions."+index+".correct_responses.0.pattern" );

		//check to see if they selected all of the right answers
		if( learnerResponse ==  correctPattern )
		{
			// store the result, since we only are storing that they got this question correct
			storeDataValue("cmi.interactions."+index+".result", "correct");
		}
		else
		{
			// store the result, since we only are storing that they got this question correct
			storeDataValue("cmi.interactions."+index+".result", "incorrect");
		}

		//go to the feedback page
		feedbackPage = dme+'_cca_question_fb.html';
		GoToPage( feedbackPage );
	}
	else
	{
		alert ( "Please select an answer." );
	}
}//end function


/*******************************************************************************
**
** This function validates any forms that need to check a text input box.  It checks to
** see if the user entered any text and then checks if the user's answer is correct.
** It then calls displayFeedback() and outputs the result to the user.
**
**
** Inputs:  formName - string - the id of the form to check
**			answerOptions - array - holds all possible correct answers
**			feedback - string - the text to be displayed on screen
**			index - integer
**
** Return:  isOK - Boolean
**
*******************************************************************************/

function text_validate(formName, answerOptions, index, dme, InteractionObject)
{
	var result = incorrect;
	var answer = formName.answer.value;

	//check to see if the user entered an answer
	if( Trim(answer) == "" || answer == null)
	{
		alert( "Please input an answer." );
	}
	else
	{
		// Set the Interaction ID
		storeDataValue("cmi.interactions."+index+".id", InteractionObject.id);

		// Set the Interaction type for this "interaction"
		storeDataValue("cmi.interactions."+index+".type", InteractionObject.type);

		// set the Interaction's correct response to "correctAnswer"
		var t = InteractionObject.correctAnswer.length;

		for ( var i = 0; i < t; i++ )
		{
			storeDataValue("cmi.interactions."+index+".correct_responses." + i + ".pattern", InteractionObject.correctAnswer[i] );
		}
		// to describe this Interaction, we'r using the actual test question
		storeDataValue("cmi.interactions."+index+".description", InteractionObject.description );

		// since we are demonstrating Score in this example, we are weighting questions differently
		// The weight will be used to calculate the scaled score on the results page.
		storeDataValue("cmi.interactions."+index+".weighting", InteractionObject.weighting );

		// store the answer
		storeDataValue("cmi.interactions."+index+".learner_response", answer);

		answer = Trim( answer.toLowerCase() );

		//loop through the possible
		for( i=0; i < answerOptions.length; i++ )
		{
			if( answer == answerOptions[i] )
			{
				result = correct;
				// store the result, since we only are storing that they got this question correct
				storeDataValue( "cmi.interactions."+index+".result", "correct" );
				break;
			}
		}
		if( result == incorrect )
		{
			// store the result, since we only are storing that they got this question correct
			storeDataValue( "cmi.interactions."+index+".result", "incorrect" );
		}

		//go to the feedback page
		feedbackPage = dme+'_cca_question_fb.html';
		GoToPage( feedbackPage );
	}
}//end function


/*******************************************************************************
**
** This function checks matching question answers. It checks to
** see if the user matched a term to every definition and prompts otherwies.  Then checks to see
** if the answers are correct. it calls displayFeedback to output results to the user.
**
** Inputs:  formName - string
**			dme - string - the name of the data model element being tested. (all lower case)
**			index
**
** Return:  isDone - Boolean
**
*******************************************************************************/
function checkMatching( formName, index, dme )
{
	numRight = 0;
	numWrong = 0;
	numDefs = formName.elements.length-2;
	var badData = false;

	var learnerResponse = "";

	//check to see if user typed an answer for every definition
	var i;

	for( i = 0; i < numDefs; i++ )
	{
		var learnerAnswer = formName.elements[i].value;
		if(learnerAnswer == "")
		{
			badData = true;
			break;
		}
		else
		{
			learnerResponse += formName.elements[i].name + "[.]" + learnerAnswer;

			if( i < numDefs-1 )
			{
				learnerResponse += "[,]";
			}

			//check to see if answers are correct.  The name and value attributes must be equal to be right
			if( formName.elements[i].name == formName.elements[i].value.toLowerCase() )
			{
				numRight++;
			}
			else
			{
				numWrong++;
			}
		}
	}

	if( badData == false)
	{
		// store the answer
		storeDataValue("cmi.interactions."+index+".learner_response", learnerResponse );

	}

	//check to see if they got all right
	if( numRight == numDefs )
	{
		isCorrect = true;

		// store the result, since we only are storing that they got this question correct
		storeDataValue("cmi.interactions."+index+".result", "correct");
	}
	else
	{
		// store the result, since we only are storing that they got this question correct
		storeDataValue("cmi.interactions."+index+".result", "incorrect");

	}
	feedbackPage = dme+'_cca_question_fb.html';
	GoToPage( feedbackPage );
}//end function


/*******************************************************************************
**
** Finds the element with with id "feedback" and writes text between the appropriate tags
**
** Inputs:	result - string
**			feedback - string
**
** Return:  Displays the appropriate feedback at the specified location
**
*******************************************************************************/
function displayFeedback(result, feedback)
{
	//document.getElementById('feedback').innerText=result+feedback;

	if( result == correct ){
		document.getElementById('right').style.color = "teal";
	}
	if( result == incorrect ){
		document.getElementById('wrong').style.color = "orange";
	}
}

//--------------------------------------------------------------------------------


//END functions to check answers

function storeLearnersCode( feedbackPage, startingIndex )
{
		if (startingIndex == null)
		{
			var index = retrieveDataValue("cmi.interactions._count");
		}
		else
		{
			index = startingIndex;
		}

		var numExercises = applicationExercise.elements.length - 1;
		var appID = "";
		var currentIndex = index;
		var lastIndexNumber = index + (numExercises - 1);
		for (var  i = 0; i < ( numExercises ); i++ )
		{
			if(i != 0)
			{
				currentIndex++;
			}

			appID = "app_ex_"+currentIndex;

			// Set the Interaction ID
			storeDataValue("cmi.interactions."+currentIndex+".id", appID);

			storeDataValue("cmi.interactions."+currentIndex+".type", "fill-in");

			currElem = applicationExercise.elements[i];
			answer = currElem.value;

			// store the answer
			storeDataValue("cmi.interactions." + currentIndex + ".learner_response", answer);
		}
		GoToPage( feedbackPage );
}

/*******************************************************************************
**
** This function returns the answer checked fronm any forms with radio button (i.e. true/false, multiple choice).
**
** Inputs: 	formId - string - the id of the form
**
** Return: the selected answer.
**
*******************************************************************************/
function get_radio_answer(formId)
{
	//initalize variables used in the function
	var answer = "";
	
	var formObj = window.document.getElementById(formId);
	if (formObj) {
		//finds each radio button and if it checked sets the answer as that element
		for (var i = 0; i < (formObj.elements.length - 1); i++) {
			currElem = formObj.elements[i];
			if (currElem.type == "radio" && currElem.checked) {
				answer = currElem.value;
				break;
			}
		}
	}

    return answer;
}

/*******************************************************************************
**
** This function disables the radio buttons of a form and marks as selected the 
** button corresponding to the given answer.

** Inputs: 	formId - string - the id of the form
**			answer - string - the entered answer
**			markChecked - boolean - If true, radio button corresponding to answer is marked as selected
**			disableAll - boolean - If true, disable all radio buttons. Other disable only the checked one.
**			newClass - String - if specified, class of disabled element
** Return: the selected answer.
**
*******************************************************************************/
function disable_radio_form(formId, answer, markChecked, disableAll, disabledClass)
{
	var formObj = window.document.getElementById(formId);
	if (formObj) {
		//finds each radio button and if it checked sets the answer as that element
		for (var i = 0; i < (formObj.elements.length - 1); i++) {
			currElem = formObj.elements[i];
			if (currElem.type == "radio") {
				isSelected = (currElem.value == answer);
				if (isSelected) {
					currElem.disabled = true;
					if (disabledClass.length > 0) {
						currElem.parentNode.parentNode.setAttribute("class", disabledClass); //For Most Browsers
						currElem.parentNode.parentNode.setAttribute("className", disabledClass); //For IE; harmless to other browsers.						
					}
					if (markChecked) {
						currElem.checked = true;					
					}					
				} else if (disableAll) {
					currElem.disabled = true;
					if (disabledClass.length > 0) {
						currElem.parentNode.parentNode.setAttribute("class", disabledClass); //For Most Browsers
						currElem.parentNode.parentNode.setAttribute("className", disabledClass); //For IE; harmless to other browsers.						
					}
				}
			}
		}
	}
}

/*******************************************************************************
**
** This function returns the value stored in the suspend data.
** Returns null if no propvalue stored yet.
**
** Inputs: 	formId - string - the id of the form
**			propname - string - the entered answer
** Return: the selected answer.
**
*******************************************************************************/
function get_suspended_value(propname)
{
	if (propname == 'ptstatus') {
		return 'passed';
	} else if (propname == 'ptscore') {
		return 'xxx';
	} else {
		return '';
	}
}

/*******************************************************************************
**
** This function stores the answer in the suspend data.
** Returns null if no answer given yet.
**
** Inputs: 	questionID - string - the id of the question
**			propname - string - the property name to store in the suspend data
**			propvalue - string - the property value to store in the suspend data
**
*******************************************************************************/
function set_suspended_value(propname, propvalue)
{
}

function remove_suspended_value(propname)
{
	}		

function update_suspend_data(suspend_data, propname, propvalue) {
}

function update_suspend_data(suspend_data, propname, propvalue) {
	return '';
}

function remove_suspend_data(suspend_data, propname) {
	return '';
}


function getQuestionIndex(qid) {
	var index = -1;
	var ci = retrieveDataValue( "cmi.interactions._count" );
	var i=0;
	for (var i=0;i<ci;i++) {
		var id = retrieveDataValue( "cmi.interactions."+i+".id" );
		if (id == qid) {
			index = i;
			break;
		}
	}
	return index;
}

function submitQuestionForm() {
	var formButton = window.document.getElementById('qformbutton');
	if (formButton) {
		formButton.click();
	}
	// always return false so that the navigation is handled by the submitted form.
	return false;
}

/*******************************************************************************
**
** This function checks to see if the user has already submitted an answer to the question.
** If it is the first time an answer has been submitted the "radio_validate" function is called.
** 
** If the question has been answered then the user is notified.
**
** Inputs:  formID - String - the id of the form to check
**			cmiIndex - int - the index in the cmi interactions
**			questionDescription - String - the question description
**			questionID - String - the question identifier
**			questionType - String - the question type
**			correctAnswer - String - the correct answer //should be the same as radio button "value" attribute
**							if null, correct answer and status won;t be recorded.
**			objectives - array - the objectives associated with the question
** Return:  None
**
** Assumption: global variable qSubmitted is assumed
*******************************************************************************/
function checkRadioQuestion(formID, cmiIndex, questionDescription, questionID, questionType, correctAnswer, objectives)
{
	var isOK = true;
	// You can't count on any one index remaining static, so for each new interaction, 
	// check to see where we are in the cmi.interactions array
	//var index = retrieveDataValue("cmi.interactions._count");

    // COULD NOT make it work with retrieveDataValue
    var index = cmiIndex;
	
    if (cmiIndex >= 0) {
        // store the question
  	
    	// Set the Interaction ID
    	storeDataValue("cmi.interactions."+index+".id", questionID);
  	
    	// Set the Interaction type for this "interaction"
    	storeDataValue("cmi.interactions."+index+".type", questionType);
  
    	// setting the correct answer for our validation on the page (not SCORM-related)
    	// NOTE:  You might want to obfuscate the access to this so the answer isn't easily viewable
    	//var correctAnswer = "true"; //should be the same as radio button "value" attribute
  	
    	// since we're using "correctAnswer" as a variable for the correct response, we set the 
    	// Interaction's correct response to "correctAnswer"
    	if (correctAnswer != null) {
    		storeDataValue("cmi.interactions."+index+".correct_responses.0.pattern", correctAnswer);		
    	}
  
    	// to describe this Interaction, we'r using the actual test question
    	var desc = questionDescription;
    	if (desc.length > 250) {
    	   // Moodle does not store descriptions longer than 250
    	   desc = desc.substr(0, 240) + '(...)';
    	}
    	storeDataValue("cmi.interactions."+index+".description", desc);         
  	
    	// Store the objectives
    	if (objectives != null) {
    		for (var j = 0; j < objectives.length; j++) {
    			storeDataValue("cmi.interactions." + index + ".objectives." + j + ".id", objectives[j]);
    		}		
    	}	
    }
    
	//check to see if the question has been submitted
	if( !qSubmitted ) 
	{
		// (not SCORM-related)
		// radio_validate returns a boolean: true = the user answered the question, 
		//									 false = the user did not answer the question 
		isOK = radio_validate( formID, correctAnswer, index ); 
	}
	else
	{
		//alreadyAnswered is a global variable defined in "score_scripts.js"
		alert(alreadyAnswered);
	}
	if (isOK) {
		prepareGoToPage();
	}
	return isOK;
}// end function



/**********************************************************************
 **  Function: get_params()
 **  Description: This function is used to get the parameters from the
 **               query string
 **********************************************************************/
function get_params()
{
      var strSearch = window.location.search;
      var idx = strSearch.indexOf('?');
      if (idx != -1)
      {
         var pairs = strSearch.substring(idx+1, strSearch.length).split('&');
         alert("testing");
		 for (var i=0; i<pairs.length; i++)
         {
            nameVal = pairs[i].split('=');
            g_params[nameVal[0]] = nameVal[1];
			alert(nameVal[0]+"and"+nameVal[1]);
         }
	  }

}

//APIWrapper.js
/*******************************************************************************
**
** Advanced Distributed Learning Co-Laboratory (ADL Co-Lab) grants you
** ("Licensee") a non-exclusive, royalty free, license to use and redistribute
** this software in source and binary code form, provided that i) this copyright
** notice and license appear on all copies of the software; and ii) Licensee
** does not utilize the software in a manner which is disparaging to ADL Co-Lab.
**
** This software is provided "AS IS," without a warranty of any kind.  ALL
** EXPRESS OR IMPLIED CONDITIONS, REPRESENTATIONS AND WARRANTIES, INCLUDING ANY
** IMPLIED WARRANTY OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR
** NON-INFRINGEMENT, ARE HEREBY EXCLUDED.  ADL Co-Lab AND ITS LICENSORS SHALL
** NOT BE LIABLE FOR ANY DAMAGES SUFFERED BY LICENSEE AS A RESULT OF USING,
** MODIFYING OR DISTRIBUTING THE SOFTWARE OR ITS DERIVATIVES.  IN NO EVENT WILL
** ADL Co-Lab OR ITS LICENSORS BE LIABLE FOR ANY LOST REVENUE, PROFIT OR DATA,
** OR FOR DIRECT, INDIRECT, SPECIAL, CONSEQUENTIAL, INCIDENTAL OR PUNITIVE
** DAMAGES, HOWEVER CAUSED AND REGARDLESS OF THE THEORY OF LIABILITY, ARISING
** OUT OF THE USE OF OR INABILITY TO USE SOFTWARE, EVEN IF ADL Co-Lab HAS BEEN
** ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
**
*******************************************************************************/

/*******************************************************************************
**
** This file is being presented to Content Developers, Content Programmers and
** Instructional Designers to demonstrate one way to abstract API calls from the
** actual content to allow for uniformity and reuse of content fragments.
**
** The purpose in wrapping the calls to the API is to (1) provide a
** consistent means of finding the LMS API adapter within the window
** hierarchy, (2) to ensure that the method calls are called correctly by the
** SCO and (3) to make possible changes to the actual API Specifications and
** Standards easier to implement/change quickly.
**
** This is just one possible example for implementing the API guidelines for
** runtime communication between an LMS and executable content components.
** There are many other possible implementations.
**
*******************************************************************************/

// local variable definitions used for finding the API
var apiHandle = null;
var findAPITries = 0;
var noAPIFound = "false";

// local variable used to keep from calling Terminate() more than once
var terminated = "false";
var rcm_unloaded = "false";

// local variable used by the content developer to debug
// This should be set to true during development to find errors.  However,
// This should be set to false prior to deployment.
var _debug = false;

/*******************************************************************************
**
** This function looks for an object named API in parent and opener windows
**
** Inputs:  Object - The Window Object
**
** Return:  Object - If the API object is found, it's returned, otherwise null
**          is returned
**
*******************************************************************************/
function findAPI( win )
{
   while ( (win.API_1484_11 == null) &&
           (win.parent != null) &&
           (win.parent != win) )
   {
      findAPITries++;

      if ( findAPITries > 500 )
      {
         alert( "Error finding API -- too deeply nested." );
         return null;
      }

      win = win.parent;
   }

   return win.API_1484_11;
}

/*******************************************************************************
**
** This function looks for an object named API, first in the current window's
** frame hierarchy and then, if necessary, in the current window's opener window
** hierarchy (if there is an opener window).
**
** Inputs:  none
**
** Return:  Object - If the API object is found, it's returned, otherwise null
**                   is returned
**
*******************************************************************************/
function getAPI()
{
   var theAPI = findAPI( window );

   if ( (theAPI == null) &&
        (window.opener != null) &&
        (typeof(window.opener) != "undefined") )
   {
      theAPI = findAPI( window.opener );
   }

   if (theAPI == null)
   {
      alert( "Unable to locate the LMS's API Implementation.\n" +
             "Communication with the LMS will not occur." );

      noAPIFound = "true";
   }

   return theAPI
}

/*******************************************************************************
**
** Returns the handle to API object if it was previously set, otherwise it
** returns null
**
** Inputs:  None
**
** Return:  Object - The value contained by the apiHandle variable.
**
*******************************************************************************/
function getAPIHandle()
{
   if ( apiHandle == null )
   {
      if ( noAPIFound == "false" )
      {
         apiHandle = getAPI();
      }
   }

   return apiHandle;
}

/*******************************************************************************
**
** This function is used to tell the LMS to initiate the communication session.
**
** Inputs:  None
**
** Return:  String - "true" if the initialization was successful, or
**          "false" if the initialization failed.
**
*******************************************************************************/
function initializeCommunication()
{
   var api = getAPIHandle();

   if ( api == null )
   {
      return "false";
   }
   else
   {
      var result = api.Initialize("");

      if ( result != "true" )
      {
         var errCode = retrieveLastErrorCode();

         displayErrorInfo( errCode );

         // may want to do some error handling
      }
   }

   return result;
}

/*******************************************************************************
**
** This function is used to tell the LMS to terminate the communication session
**
** Inputs:  None
**
** Return:  String - "true" if successful or
**                   "false" if failed.
**
*******************************************************************************/
function terminateCommunication()
{
   var api = getAPIHandle();

   if ( api == null )
   {
      return "false";
   }
   else
   {
      // call Terminate only if it was not previously called
      if ( terminated != "true" )
      {
         // call the Terminate function that should be implemented by
         // the API
         var result = api.Terminate("");

         if ( result != "true" )
         {
            var errCode = retrieveLastErrorCode();

            displayErrorInfo( errCode );

            // may want to do some error handling
         }
         else  // terminate was successful
         {
            terminated = "true";
         }
      }
   }

   return result;
}

/*******************************************************************************
**
** This function requests information from the LMS.
**
** Inputs:  String - Name of the data model defined category or element
**                   (e.g. cmi.core.learner_id)
**
** Return:  String - The value presently assigned to the specified data model
**                   element.
**
*******************************************************************************/
function retrieveDataValue( name )
{
   // do not call a set after finish was called
   if ( terminated != "true" )
   {
      var api = getAPIHandle();

      if ( api == null )
      {
         return "";
      }
      else
      {
         var value = api.GetValue( name );

         var errCode = api.GetLastError();

         if ( errCode != "0" )
         {
            var errCode = retrieveLastErrorCode();

            displayErrorInfo( errCode );
         }
         else
         {
            return value;
         }
      }
   }

   return;
}

/*******************************************************************************
**
** This function is used to tell the LMS to assign the value to the named data
** model element.
**
** Inputs:  String - Name of the data model defined category or element value
**
**          String - The value that the named element or category will be
**                   assigned
**
** Return:  String - "true" if successful or
**                   "false" if failed.
**
*******************************************************************************/
function storeDataValue( name, value )
{
   // do not call a set after finish was called
   if ( terminated != "true" )
   {
      var api = getAPIHandle();

      if ( api == null )
      {
         return;
      }
      else
      {
         var result = api.SetValue( name, value );

         if ( result != "true" )
         {
            var errCode = retrieveLastErrorCode();

            displayErrorInfo( errCode );

            // may want to do some error handling
         }
      }
   }

   return;
}

/*******************************************************************************
**
** This function requests the error code for the current error state from the
** LMS.
**
** Inputs:  None
**
** Return:  String - The last error code.
**
*******************************************************************************/
function retrieveLastErrorCode()
{
   // It is permitted to call GetLastError() after Terminate()

   var api = getAPIHandle();

   if ( api == null )
   {
      return "";
   }
   else
   {
      return api.GetLastError();
   }
}

/*******************************************************************************
**
** This function requests a textual description of the current error state from
** the LMS
**
** Inputs:  String - The error code.
**
** Return:  String - Textual description of the given error state.
**
*******************************************************************************/
function retrieveErrorInfo( errCode )
{
   // It is permitted to call GetLastError() after Terminate()

   var api = getAPIHandle();

   if ( api == null )
   {
      return "";
   }
   else
   {

      return api.GetErrorString( errCode );
   }
}

/*******************************************************************************
**
** This function requests additional diagnostic information about the given
** error code.  This information is LMS specific, but can help a developer find
** errors in the SCO.
**
** Inputs:  String - The error code.
**
** Return:  String - Additional diagnostic information about the given error
**                   code
**
*******************************************************************************/
function retrieveDiagnosticInfo( error )
{
   // It is permitted to call GetLastError() after Terminate()

   var api = getAPIHandle();

   if ( api == null )
   {
      return "";
   }
   else
   {
      return api.GetDiagnostic( error );
   }
}

/*******************************************************************************
**
** This function requests that the LMS persist all data to this point in the
** session.
**
** Inputs:  None
**
** Return:  None
**
*******************************************************************************/
function persistData()
{
   // do not call a set after Terminate() was called
   if ( terminated != "true" )
   {
      var api = getAPIHandle();

      if ( api == null )
      {
         return "";
      }
      else
      {
	  	// RealCME: added empty parameter otherwise LMS would not persist any data
         return api.Commit("");
      }
   }
   else
   {
      return "";
   }
}

/*******************************************************************************
**
** Display the last error code, error description and diagnostic information.
**
** Inputs:  String - The error code
**
** Return:  None
**
*******************************************************************************/
function displayErrorInfo( errCode )
{
   if ( _debug )
   {
      var errString = retrieveErrorInfo( errCode );
      var errDiagnostic = retrieveDiagnosticInfo( errCode );
	
      alert( "ERROR: " + errCode + " - " + errString + "\n" +
             "DIAGNOSTIC: " + errDiagnostic );
   }
}


/*
 * jQuery 1.2.6 - New Wave Javascript
 *
 * Copyright (c) 2008 John Resig (jquery.com)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * $Date: 2010-07-23 15:01:50 $
 * $Rev: 5685 $
 */
(function(){var _jQuery=window.jQuery,_$=window.$;var jQuery=window.jQuery=window.$=function(selector,context){return new jQuery.fn.init(selector,context);};var quickExpr=/^[^<]*(<(.|\s)+>)[^>]*$|^#(\w+)$/,isSimple=/^.[^:#\[\.]*$/,undefined;jQuery.fn=jQuery.prototype={init:function(selector,context){selector=selector||document;if(selector.nodeType){this[0]=selector;this.length=1;return this;}if(typeof selector=="string"){var match=quickExpr.exec(selector);if(match&&(match[1]||!context)){if(match[1])selector=jQuery.clean([match[1]],context);else{var elem=document.getElementById(match[3]);if(elem){if(elem.id!=match[3])return jQuery().find(selector);return jQuery(elem);}selector=[];}}else
return jQuery(context).find(selector);}else if(jQuery.isFunction(selector))return jQuery(document)[jQuery.fn.ready?"ready":"load"](selector);return this.setArray(jQuery.makeArray(selector));},jquery:"1.2.6",size:function(){return this.length;},length:0,get:function(num){return num==undefined?jQuery.makeArray(this):this[num];},pushStack:function(elems){var ret=jQuery(elems);ret.prevObject=this;return ret;},setArray:function(elems){this.length=0;Array.prototype.push.apply(this,elems);return this;},each:function(callback,args){return jQuery.each(this,callback,args);},index:function(elem){var ret=-1;return jQuery.inArray(elem&&elem.jquery?elem[0]:elem,this);},attr:function(name,value,type){var options=name;if(name.constructor==String)if(value===undefined)return this[0]&&jQuery[type||"attr"](this[0],name);else{options={};options[name]=value;}return this.each(function(i){for(name in options)jQuery.attr(type?this.style:this,name,jQuery.prop(this,options[name],type,i,name));});},css:function(key,value){if((key=='width'||key=='height')&&parseFloat(value)<0)value=undefined;return this.attr(key,value,"curCSS");},text:function(text){if(typeof text!="object"&&text!=null)return this.empty().append((this[0]&&this[0].ownerDocument||document).createTextNode(text));var ret="";jQuery.each(text||this,function(){jQuery.each(this.childNodes,function(){if(this.nodeType!=8)ret+=this.nodeType!=1?this.nodeValue:jQuery.fn.text([this]);});});return ret;},wrapAll:function(html){if(this[0])jQuery(html,this[0].ownerDocument).clone().insertBefore(this[0]).map(function(){var elem=this;while(elem.firstChild)elem=elem.firstChild;return elem;}).append(this);return this;},wrapInner:function(html){return this.each(function(){jQuery(this).contents().wrapAll(html);});},wrap:function(html){return this.each(function(){jQuery(this).wrapAll(html);});},append:function(){return this.domManip(arguments,true,false,function(elem){if(this.nodeType==1)this.appendChild(elem);});},prepend:function(){return this.domManip(arguments,true,true,function(elem){if(this.nodeType==1)this.insertBefore(elem,this.firstChild);});},before:function(){return this.domManip(arguments,false,false,function(elem){this.parentNode.insertBefore(elem,this);});},after:function(){return this.domManip(arguments,false,true,function(elem){this.parentNode.insertBefore(elem,this.nextSibling);});},end:function(){return this.prevObject||jQuery([]);},find:function(selector){var elems=jQuery.map(this,function(elem){return jQuery.find(selector,elem);});return this.pushStack(/[^+>] [^+>]/.test(selector)||selector.indexOf("..")>-1?jQuery.unique(elems):elems);},clone:function(events){var ret=this.map(function(){if(jQuery.browser.msie&&!jQuery.isXMLDoc(this)){var clone=this.cloneNode(true),container=document.createElement("div");container.appendChild(clone);return jQuery.clean([container.innerHTML])[0];}else
return this.cloneNode(true);});var clone=ret.find("*").andSelf().each(function(){if(this[expando]!=undefined)this[expando]=null;});if(events===true)this.find("*").andSelf().each(function(i){if(this.nodeType==3)return;var events=jQuery.data(this,"events");for(var type in events)for(var handler in events[type])jQuery.event.add(clone[i],type,events[type][handler],events[type][handler].data);});return ret;},filter:function(selector){return this.pushStack(jQuery.isFunction(selector)&&jQuery.grep(this,function(elem,i){return selector.call(elem,i);})||jQuery.multiFilter(selector,this));},not:function(selector){if(selector.constructor==String)if(isSimple.test(selector))return this.pushStack(jQuery.multiFilter(selector,this,true));else
selector=jQuery.multiFilter(selector,this);var isArrayLike=selector.length&&selector[selector.length-1]!==undefined&&!selector.nodeType;return this.filter(function(){return isArrayLike?jQuery.inArray(this,selector)<0:this!=selector;});},add:function(selector){return this.pushStack(jQuery.unique(jQuery.merge(this.get(),typeof selector=='string'?jQuery(selector):jQuery.makeArray(selector))));},is:function(selector){return!!selector&&jQuery.multiFilter(selector,this).length>0;},hasClass:function(selector){return this.is("."+selector);},val:function(value){if(value==undefined){if(this.length){var elem=this[0];if(jQuery.nodeName(elem,"select")){var index=elem.selectedIndex,values=[],options=elem.options,one=elem.type=="select-one";if(index<0)return null;for(var i=one?index:0,max=one?index+1:options.length;i<max;i++){var option=options[i];if(option.selected){value=jQuery.browser.msie&&!option.attributes.value.specified?option.text:option.value;if(one)return value;values.push(value);}}return values;}else
return(this[0].value||"").replace(/\r/g,"");}return undefined;}if(value.constructor==Number)value+='';return this.each(function(){if(this.nodeType!=1)return;if(value.constructor==Array&&/radio|checkbox/.test(this.type))this.checked=(jQuery.inArray(this.value,value)>=0||jQuery.inArray(this.name,value)>=0);else if(jQuery.nodeName(this,"select")){var values=jQuery.makeArray(value);jQuery("option",this).each(function(){this.selected=(jQuery.inArray(this.value,values)>=0||jQuery.inArray(this.text,values)>=0);});if(!values.length)this.selectedIndex=-1;}else
this.value=value;});},html:function(value){return value==undefined?(this[0]?this[0].innerHTML:null):this.empty().append(value);},replaceWith:function(value){return this.after(value).remove();},eq:function(i){return this.slice(i,i+1);},slice:function(){return this.pushStack(Array.prototype.slice.apply(this,arguments));},map:function(callback){return this.pushStack(jQuery.map(this,function(elem,i){return callback.call(elem,i,elem);}));},andSelf:function(){return this.add(this.prevObject);},data:function(key,value){var parts=key.split(".");parts[1]=parts[1]?"."+parts[1]:"";if(value===undefined){var data=this.triggerHandler("getData"+parts[1]+"!",[parts[0]]);if(data===undefined&&this.length)data=jQuery.data(this[0],key);return data===undefined&&parts[1]?this.data(parts[0]):data;}else
return this.trigger("setData"+parts[1]+"!",[parts[0],value]).each(function(){jQuery.data(this,key,value);});},removeData:function(key){return this.each(function(){jQuery.removeData(this,key);});},domManip:function(args,table,reverse,callback){var clone=this.length>1,elems;return this.each(function(){if(!elems){elems=jQuery.clean(args,this.ownerDocument);if(reverse)elems.reverse();}var obj=this;if(table&&jQuery.nodeName(this,"table")&&jQuery.nodeName(elems[0],"tr"))obj=this.getElementsByTagName("tbody")[0]||this.appendChild(this.ownerDocument.createElement("tbody"));var scripts=jQuery([]);jQuery.each(elems,function(){var elem=clone?jQuery(this).clone(true)[0]:this;if(jQuery.nodeName(elem,"script"))scripts=scripts.add(elem);else{if(elem.nodeType==1)scripts=scripts.add(jQuery("script",elem).remove());callback.call(obj,elem);}});scripts.each(evalScript);});}};jQuery.fn.init.prototype=jQuery.fn;function evalScript(i,elem){if(elem.src)jQuery.ajax({url:elem.src,async:false,dataType:"script"});else
jQuery.globalEval(elem.text||elem.textContent||elem.innerHTML||"");if(elem.parentNode)elem.parentNode.removeChild(elem);}function now(){return+new Date;}jQuery.extend=jQuery.fn.extend=function(){var target=arguments[0]||{},i=1,length=arguments.length,deep=false,options;if(target.constructor==Boolean){deep=target;target=arguments[1]||{};i=2;}if(typeof target!="object"&&typeof target!="function")target={};if(length==i){target=this;--i;}for(;i<length;i++)if((options=arguments[i])!=null)for(var name in options){var src=target[name],copy=options[name];if(target===copy)continue;if(deep&&copy&&typeof copy=="object"&&!copy.nodeType)target[name]=jQuery.extend(deep,src||(copy.length!=null?[]:{}),copy);else if(copy!==undefined)target[name]=copy;}return target;};var expando="jQuery"+now(),uuid=0,windowData={},exclude=/z-?index|font-?weight|opacity|zoom|line-?height/i,defaultView=document.defaultView||{};jQuery.extend({noConflict:function(deep){window.$=_$;if(deep)window.jQuery=_jQuery;return jQuery;},isFunction:function(fn){return!!fn&&typeof fn!="string"&&!fn.nodeName&&fn.constructor!=Array&&/^[\s[]?function/.test(fn+"");},isXMLDoc:function(elem){return elem.documentElement&&!elem.body||elem.tagName&&elem.ownerDocument&&!elem.ownerDocument.body;},globalEval:function(data){data=jQuery.trim(data);if(data){var head=document.getElementsByTagName("head")[0]||document.documentElement,script=document.createElement("script");script.type="text/javascript";if(jQuery.browser.msie)script.text=data;else
script.appendChild(document.createTextNode(data));head.insertBefore(script,head.firstChild);head.removeChild(script);}},nodeName:function(elem,name){return elem.nodeName&&elem.nodeName.toUpperCase()==name.toUpperCase();},cache:{},data:function(elem,name,data){elem=elem==window?windowData:elem;var id=elem[expando];if(!id)id=elem[expando]=++uuid;if(name&&!jQuery.cache[id])jQuery.cache[id]={};if(data!==undefined)jQuery.cache[id][name]=data;return name?jQuery.cache[id][name]:id;},removeData:function(elem,name){elem=elem==window?windowData:elem;var id=elem[expando];if(name){if(jQuery.cache[id]){delete jQuery.cache[id][name];name="";for(name in jQuery.cache[id])break;if(!name)jQuery.removeData(elem);}}else{try{delete elem[expando];}catch(e){if(elem.removeAttribute)elem.removeAttribute(expando);}delete jQuery.cache[id];}},each:function(object,callback,args){var name,i=0,length=object.length;if(args){if(length==undefined){for(name in object)if(callback.apply(object[name],args)===false)break;}else
for(;i<length;)if(callback.apply(object[i++],args)===false)break;}else{if(length==undefined){for(name in object)if(callback.call(object[name],name,object[name])===false)break;}else
for(var value=object[0];i<length&&callback.call(value,i,value)!==false;value=object[++i]){}}return object;},prop:function(elem,value,type,i,name){if(jQuery.isFunction(value))value=value.call(elem,i);return value&&value.constructor==Number&&type=="curCSS"&&!exclude.test(name)?value+"px":value;},className:{add:function(elem,classNames){jQuery.each((classNames||"").split(/\s+/),function(i,className){if(elem.nodeType==1&&!jQuery.className.has(elem.className,className))elem.className+=(elem.className?" ":"")+className;});},remove:function(elem,classNames){if(elem.nodeType==1)elem.className=classNames!=undefined?jQuery.grep(elem.className.split(/\s+/),function(className){return!jQuery.className.has(classNames,className);}).join(" "):"";},has:function(elem,className){return jQuery.inArray(className,(elem.className||elem).toString().split(/\s+/))>-1;}},swap:function(elem,options,callback){var old={};for(var name in options){old[name]=elem.style[name];elem.style[name]=options[name];}callback.call(elem);for(var name in options)elem.style[name]=old[name];},css:function(elem,name,force){if(name=="width"||name=="height"){var val,props={position:"absolute",visibility:"hidden",display:"block"},which=name=="width"?["Left","Right"]:["Top","Bottom"];function getWH(){val=name=="width"?elem.offsetWidth:elem.offsetHeight;var padding=0,border=0;jQuery.each(which,function(){padding+=parseFloat(jQuery.curCSS(elem,"padding"+this,true))||0;border+=parseFloat(jQuery.curCSS(elem,"border"+this+"Width",true))||0;});val-=Math.round(padding+border);}if(jQuery(elem).is(":visible"))getWH();else
jQuery.swap(elem,props,getWH);return Math.max(0,val);}return jQuery.curCSS(elem,name,force);},curCSS:function(elem,name,force){var ret,style=elem.style;function color(elem){if(!jQuery.browser.safari)return false;var ret=defaultView.getComputedStyle(elem,null);return!ret||ret.getPropertyValue("color")=="";}if(name=="opacity"&&jQuery.browser.msie){ret=jQuery.attr(style,"opacity");return ret==""?"1":ret;}if(jQuery.browser.opera&&name=="display"){var save=style.outline;style.outline="0 solid black";style.outline=save;}if(name.match(/float/i))name=styleFloat;if(!force&&style&&style[name])ret=style[name];else if(defaultView.getComputedStyle){if(name.match(/float/i))name="float";name=name.replace(/([A-Z])/g,"-$1").toLowerCase();var computedStyle=defaultView.getComputedStyle(elem,null);if(computedStyle&&!color(elem))ret=computedStyle.getPropertyValue(name);else{var swap=[],stack=[],a=elem,i=0;for(;a&&color(a);a=a.parentNode)stack.unshift(a);for(;i<stack.length;i++)if(color(stack[i])){swap[i]=stack[i].style.display;stack[i].style.display="block";}ret=name=="display"&&swap[stack.length-1]!=null?"none":(computedStyle&&computedStyle.getPropertyValue(name))||"";for(i=0;i<swap.length;i++)if(swap[i]!=null)stack[i].style.display=swap[i];}if(name=="opacity"&&ret=="")ret="1";}else if(elem.currentStyle){var camelCase=name.replace(/\-(\w)/g,function(all,letter){return letter.toUpperCase();});ret=elem.currentStyle[name]||elem.currentStyle[camelCase];if(!/^\d+(px)?$/i.test(ret)&&/^\d/.test(ret)){var left=style.left,rsLeft=elem.runtimeStyle.left;elem.runtimeStyle.left=elem.currentStyle.left;style.left=ret||0;ret=style.pixelLeft+"px";style.left=left;elem.runtimeStyle.left=rsLeft;}}return ret;},clean:function(elems,context){var ret=[];context=context||document;if(typeof context.createElement=='undefined')context=context.ownerDocument||context[0]&&context[0].ownerDocument||document;jQuery.each(elems,function(i,elem){if(!elem)return;if(elem.constructor==Number)elem+='';if(typeof elem=="string"){elem=elem.replace(/(<(\w+)[^>]*?)\/>/g,function(all,front,tag){return tag.match(/^(abbr|br|col|img|input|link|meta|param|hr|area|embed)$/i)?all:front+"></"+tag+">";});var tags=jQuery.trim(elem).toLowerCase(),div=context.createElement("div");var wrap=!tags.indexOf("<opt")&&[1,"<select multiple='multiple'>","</select>"]||!tags.indexOf("<leg")&&[1,"<fieldset>","</fieldset>"]||tags.match(/^<(thead|tbody|tfoot|colg|cap)/)&&[1,"<table>","</table>"]||!tags.indexOf("<tr")&&[2,"<table><tbody>","</tbody></table>"]||(!tags.indexOf("<td")||!tags.indexOf("<th"))&&[3,"<table><tbody><tr>","</tr></tbody></table>"]||!tags.indexOf("<col")&&[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"]||jQuery.browser.msie&&[1,"div<div>","</div>"]||[0,"",""];div.innerHTML=wrap[1]+elem+wrap[2];while(wrap[0]--)div=div.lastChild;if(jQuery.browser.msie){var tbody=!tags.indexOf("<table")&&tags.indexOf("<tbody")<0?div.firstChild&&div.firstChild.childNodes:wrap[1]=="<table>"&&tags.indexOf("<tbody")<0?div.childNodes:[];for(var j=tbody.length-1;j>=0;--j)if(jQuery.nodeName(tbody[j],"tbody")&&!tbody[j].childNodes.length)tbody[j].parentNode.removeChild(tbody[j]);if(/^\s/.test(elem))div.insertBefore(context.createTextNode(elem.match(/^\s*/)[0]),div.firstChild);}elem=jQuery.makeArray(div.childNodes);}if(elem.length===0&&(!jQuery.nodeName(elem,"form")&&!jQuery.nodeName(elem,"select")))return;if(elem[0]==undefined||jQuery.nodeName(elem,"form")||elem.options)ret.push(elem);else
ret=jQuery.merge(ret,elem);});return ret;},attr:function(elem,name,value){if(!elem||elem.nodeType==3||elem.nodeType==8)return undefined;var notxml=!jQuery.isXMLDoc(elem),set=value!==undefined,msie=jQuery.browser.msie;name=notxml&&jQuery.props[name]||name;if(elem.tagName){var special=/href|src|style/.test(name);if(name=="selected"&&jQuery.browser.safari)elem.parentNode.selectedIndex;if(name in elem&&notxml&&!special){if(set){if(name=="type"&&jQuery.nodeName(elem,"input")&&elem.parentNode)throw"type property can't be changed";elem[name]=value;}if(jQuery.nodeName(elem,"form")&&elem.getAttributeNode(name))return elem.getAttributeNode(name).nodeValue;return elem[name];}if(msie&&notxml&&name=="style")return jQuery.attr(elem.style,"cssText",value);if(set)elem.setAttribute(name,""+value);var attr=msie&&notxml&&special?elem.getAttribute(name,2):elem.getAttribute(name);return attr===null?undefined:attr;}if(msie&&name=="opacity"){if(set){elem.zoom=1;elem.filter=(elem.filter||"").replace(/alpha\([^)]*\)/,"")+(parseInt(value)+''=="NaN"?"":"alpha(opacity="+value*100+")");}return elem.filter&&elem.filter.indexOf("opacity=")>=0?(parseFloat(elem.filter.match(/opacity=([^)]*)/)[1])/100)+'':"";}name=name.replace(/-([a-z])/ig,function(all,letter){return letter.toUpperCase();});if(set)elem[name]=value;return elem[name];},trim:function(text){return(text||"").replace(/^\s+|\s+$/g,"");},makeArray:function(array){var ret=[];if(array!=null){var i=array.length;if(i==null||array.split||array.setInterval||array.call)ret[0]=array;else
while(i)ret[--i]=array[i];}return ret;},inArray:function(elem,array){for(var i=0,length=array.length;i<length;i++)if(array[i]===elem)return i;return-1;},merge:function(first,second){var i=0,elem,pos=first.length;if(jQuery.browser.msie){while(elem=second[i++])if(elem.nodeType!=8)first[pos++]=elem;}else
while(elem=second[i++])first[pos++]=elem;return first;},unique:function(array){var ret=[],done={};try{for(var i=0,length=array.length;i<length;i++){var id=jQuery.data(array[i]);if(!done[id]){done[id]=true;ret.push(array[i]);}}}catch(e){ret=array;}return ret;},grep:function(elems,callback,inv){var ret=[];for(var i=0,length=elems.length;i<length;i++)if(!inv!=!callback(elems[i],i))ret.push(elems[i]);return ret;},map:function(elems,callback){var ret=[];for(var i=0,length=elems.length;i<length;i++){var value=callback(elems[i],i);if(value!=null)ret[ret.length]=value;}return ret.concat.apply([],ret);}});var userAgent=navigator.userAgent.toLowerCase();jQuery.browser={version:(userAgent.match(/.+(?:rv|it|ra|ie)[\/: ]([\d.]+)/)||[])[1],safari:/webkit/.test(userAgent),opera:/opera/.test(userAgent),msie:/msie/.test(userAgent)&&!/opera/.test(userAgent),mozilla:/mozilla/.test(userAgent)&&!/(compatible|webkit)/.test(userAgent)};var styleFloat=jQuery.browser.msie?"styleFloat":"cssFloat";jQuery.extend({boxModel:!jQuery.browser.msie||document.compatMode=="CSS1Compat",props:{"for":"htmlFor","class":"className","float":styleFloat,cssFloat:styleFloat,styleFloat:styleFloat,readonly:"readOnly",maxlength:"maxLength",cellspacing:"cellSpacing"}});jQuery.each({parent:function(elem){return elem.parentNode;},parents:function(elem){return jQuery.dir(elem,"parentNode");},next:function(elem){return jQuery.nth(elem,2,"nextSibling");},prev:function(elem){return jQuery.nth(elem,2,"previousSibling");},nextAll:function(elem){return jQuery.dir(elem,"nextSibling");},prevAll:function(elem){return jQuery.dir(elem,"previousSibling");},siblings:function(elem){return jQuery.sibling(elem.parentNode.firstChild,elem);},children:function(elem){return jQuery.sibling(elem.firstChild);},contents:function(elem){return jQuery.nodeName(elem,"iframe")?elem.contentDocument||elem.contentWindow.document:jQuery.makeArray(elem.childNodes);}},function(name,fn){jQuery.fn[name]=function(selector){var ret=jQuery.map(this,fn);if(selector&&typeof selector=="string")ret=jQuery.multiFilter(selector,ret);return this.pushStack(jQuery.unique(ret));};});jQuery.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(name,original){jQuery.fn[name]=function(){var args=arguments;return this.each(function(){for(var i=0,length=args.length;i<length;i++)jQuery(args[i])[original](this);});};});jQuery.each({removeAttr:function(name){jQuery.attr(this,name,"");if(this.nodeType==1)this.removeAttribute(name);},addClass:function(classNames){jQuery.className.add(this,classNames);},removeClass:function(classNames){jQuery.className.remove(this,classNames);},toggleClass:function(classNames){jQuery.className[jQuery.className.has(this,classNames)?"remove":"add"](this,classNames);},remove:function(selector){if(!selector||jQuery.filter(selector,[this]).r.length){jQuery("*",this).add(this).each(function(){jQuery.event.remove(this);jQuery.removeData(this);});if(this.parentNode)this.parentNode.removeChild(this);}},empty:function(){jQuery(">*",this).remove();while(this.firstChild)this.removeChild(this.firstChild);}},function(name,fn){jQuery.fn[name]=function(){return this.each(fn,arguments);};});jQuery.each(["Height","Width"],function(i,name){var type=name.toLowerCase();jQuery.fn[type]=function(size){return this[0]==window?jQuery.browser.opera&&document.body["client"+name]||jQuery.browser.safari&&window["inner"+name]||document.compatMode=="CSS1Compat"&&document.documentElement["client"+name]||document.body["client"+name]:this[0]==document?Math.max(Math.max(document.body["scroll"+name],document.documentElement["scroll"+name]),Math.max(document.body["offset"+name],document.documentElement["offset"+name])):size==undefined?(this.length?jQuery.css(this[0],type):null):this.css(type,size.constructor==String?size:size+"px");};});function num(elem,prop){return elem[0]&&parseInt(jQuery.curCSS(elem[0],prop,true),10)||0;}var chars=jQuery.browser.safari&&parseInt(jQuery.browser.version)<417?"(?:[\\w*_-]|\\\\.)":"(?:[\\w\u0128-\uFFFF*_-]|\\\\.)",quickChild=new RegExp("^>\\s*("+chars+"+)"),quickID=new RegExp("^("+chars+"+)(#)("+chars+"+)"),quickClass=new RegExp("^([#.]?)("+chars+"*)");jQuery.extend({expr:{"":function(a,i,m){return m[2]=="*"||jQuery.nodeName(a,m[2]);},"#":function(a,i,m){return a.getAttribute("id")==m[2];},":":{lt:function(a,i,m){return i<m[3]-0;},gt:function(a,i,m){return i>m[3]-0;},nth:function(a,i,m){return m[3]-0==i;},eq:function(a,i,m){return m[3]-0==i;},first:function(a,i){return i==0;},last:function(a,i,m,r){return i==r.length-1;},even:function(a,i){return i%2==0;},odd:function(a,i){return i%2;},"first-child":function(a){return a.parentNode.getElementsByTagName("*")[0]==a;},"last-child":function(a){return jQuery.nth(a.parentNode.lastChild,1,"previousSibling")==a;},"only-child":function(a){return!jQuery.nth(a.parentNode.lastChild,2,"previousSibling");},parent:function(a){return a.firstChild;},empty:function(a){return!a.firstChild;},contains:function(a,i,m){return(a.textContent||a.innerText||jQuery(a).text()||"").indexOf(m[3])>=0;},visible:function(a){return"hidden"!=a.type&&jQuery.css(a,"display")!="none"&&jQuery.css(a,"visibility")!="hidden";},hidden:function(a){return"hidden"==a.type||jQuery.css(a,"display")=="none"||jQuery.css(a,"visibility")=="hidden";},enabled:function(a){return!a.disabled;},disabled:function(a){return a.disabled;},checked:function(a){return a.checked;},selected:function(a){return a.selected||jQuery.attr(a,"selected");},text:function(a){return"text"==a.type;},radio:function(a){return"radio"==a.type;},checkbox:function(a){return"checkbox"==a.type;},file:function(a){return"file"==a.type;},password:function(a){return"password"==a.type;},submit:function(a){return"submit"==a.type;},image:function(a){return"image"==a.type;},reset:function(a){return"reset"==a.type;},button:function(a){return"button"==a.type||jQuery.nodeName(a,"button");},input:function(a){return/input|select|textarea|button/i.test(a.nodeName);},has:function(a,i,m){return jQuery.find(m[3],a).length;},header:function(a){return/h\d/i.test(a.nodeName);},animated:function(a){return jQuery.grep(jQuery.timers,function(fn){return a==fn.elem;}).length;}}},parse:[/^(\[) *@?([\w-]+) *([!*$^~=]*) *('?"?)(.*?)\4 *\]/,/^(:)([\w-]+)\("?'?(.*?(\(.*?\))?[^(]*?)"?'?\)/,new RegExp("^([:.#]*)("+chars+"+)")],multiFilter:function(expr,elems,not){var old,cur=[];while(expr&&expr!=old){old=expr;var f=jQuery.filter(expr,elems,not);expr=f.t.replace(/^\s*,\s*/,"");cur=not?elems=f.r:jQuery.merge(cur,f.r);}return cur;},find:function(t,context){if(typeof t!="string")return[t];if(context&&context.nodeType!=1&&context.nodeType!=9)return[];context=context||document;var ret=[context],done=[],last,nodeName;while(t&&last!=t){var r=[];last=t;t=jQuery.trim(t);var foundToken=false,re=quickChild,m=re.exec(t);if(m){nodeName=m[1].toUpperCase();for(var i=0;ret[i];i++)for(var c=ret[i].firstChild;c;c=c.nextSibling)if(c.nodeType==1&&(nodeName=="*"||c.nodeName.toUpperCase()==nodeName))r.push(c);ret=r;t=t.replace(re,"");if(t.indexOf(" ")==0)continue;foundToken=true;}else{re=/^([>+~])\s*(\w*)/i;if((m=re.exec(t))!=null){r=[];var merge={};nodeName=m[2].toUpperCase();m=m[1];for(var j=0,rl=ret.length;j<rl;j++){var n=m=="~"||m=="+"?ret[j].nextSibling:ret[j].firstChild;for(;n;n=n.nextSibling)if(n.nodeType==1){var id=jQuery.data(n);if(m=="~"&&merge[id])break;if(!nodeName||n.nodeName.toUpperCase()==nodeName){if(m=="~")merge[id]=true;r.push(n);}if(m=="+")break;}}ret=r;t=jQuery.trim(t.replace(re,""));foundToken=true;}}if(t&&!foundToken){if(!t.indexOf(",")){if(context==ret[0])ret.shift();done=jQuery.merge(done,ret);r=ret=[context];t=" "+t.substr(1,t.length);}else{var re2=quickID;var m=re2.exec(t);if(m){m=[0,m[2],m[3],m[1]];}else{re2=quickClass;m=re2.exec(t);}m[2]=m[2].replace(/\\/g,"");var elem=ret[ret.length-1];if(m[1]=="#"&&elem&&elem.getElementById&&!jQuery.isXMLDoc(elem)){var oid=elem.getElementById(m[2]);if((jQuery.browser.msie||jQuery.browser.opera)&&oid&&typeof oid.id=="string"&&oid.id!=m[2])oid=jQuery('[@id="'+m[2]+'"]',elem)[0];ret=r=oid&&(!m[3]||jQuery.nodeName(oid,m[3]))?[oid]:[];}else{for(var i=0;ret[i];i++){var tag=m[1]=="#"&&m[3]?m[3]:m[1]!=""||m[0]==""?"*":m[2];if(tag=="*"&&ret[i].nodeName.toLowerCase()=="object")tag="param";r=jQuery.merge(r,ret[i].getElementsByTagName(tag));}if(m[1]==".")r=jQuery.classFilter(r,m[2]);if(m[1]=="#"){var tmp=[];for(var i=0;r[i];i++)if(r[i].getAttribute("id")==m[2]){tmp=[r[i]];break;}r=tmp;}ret=r;}t=t.replace(re2,"");}}if(t){var val=jQuery.filter(t,r);ret=r=val.r;t=jQuery.trim(val.t);}}if(t)ret=[];if(ret&&context==ret[0])ret.shift();done=jQuery.merge(done,ret);return done;},classFilter:function(r,m,not){m=" "+m+" ";var tmp=[];for(var i=0;r[i];i++){var pass=(" "+r[i].className+" ").indexOf(m)>=0;if(!not&&pass||not&&!pass)tmp.push(r[i]);}return tmp;},filter:function(t,r,not){var last;while(t&&t!=last){last=t;var p=jQuery.parse,m;for(var i=0;p[i];i++){m=p[i].exec(t);if(m){t=t.substring(m[0].length);m[2]=m[2].replace(/\\/g,"");break;}}if(!m)break;if(m[1]==":"&&m[2]=="not")r=isSimple.test(m[3])?jQuery.filter(m[3],r,true).r:jQuery(r).not(m[3]);else if(m[1]==".")r=jQuery.classFilter(r,m[2],not);else if(m[1]=="["){var tmp=[],type=m[3];for(var i=0,rl=r.length;i<rl;i++){var a=r[i],z=a[jQuery.props[m[2]]||m[2]];if(z==null||/href|src|selected/.test(m[2]))z=jQuery.attr(a,m[2])||'';if((type==""&&!!z||type=="="&&z==m[5]||type=="!="&&z!=m[5]||type=="^="&&z&&!z.indexOf(m[5])||type=="$="&&z.substr(z.length-m[5].length)==m[5]||(type=="*="||type=="~=")&&z.indexOf(m[5])>=0)^not)tmp.push(a);}r=tmp;}else if(m[1]==":"&&m[2]=="nth-child"){var merge={},tmp=[],test=/(-?)(\d*)n((?:\+|-)?\d*)/.exec(m[3]=="even"&&"2n"||m[3]=="odd"&&"2n+1"||!/\D/.test(m[3])&&"0n+"+m[3]||m[3]),first=(test[1]+(test[2]||1))-0,last=test[3]-0;for(var i=0,rl=r.length;i<rl;i++){var node=r[i],parentNode=node.parentNode,id=jQuery.data(parentNode);if(!merge[id]){var c=1;for(var n=parentNode.firstChild;n;n=n.nextSibling)if(n.nodeType==1)n.nodeIndex=c++;merge[id]=true;}var add=false;if(first==0){if(node.nodeIndex==last)add=true;}else if((node.nodeIndex-last)%first==0&&(node.nodeIndex-last)/first>=0)add=true;if(add^not)tmp.push(node);}r=tmp;}else{var fn=jQuery.expr[m[1]];if(typeof fn=="object")fn=fn[m[2]];if(typeof fn=="string")fn=eval("false||function(a,i){return "+fn+";}");r=jQuery.grep(r,function(elem,i){return fn(elem,i,m,r);},not);}}return{r:r,t:t};},dir:function(elem,dir){var matched=[],cur=elem[dir];while(cur&&cur!=document){if(cur.nodeType==1)matched.push(cur);cur=cur[dir];}return matched;},nth:function(cur,result,dir,elem){result=result||1;var num=0;for(;cur;cur=cur[dir])if(cur.nodeType==1&&++num==result)break;return cur;},sibling:function(n,elem){var r=[];for(;n;n=n.nextSibling){if(n.nodeType==1&&n!=elem)r.push(n);}return r;}});jQuery.event={add:function(elem,types,handler,data){if(elem.nodeType==3||elem.nodeType==8)return;if(jQuery.browser.msie&&elem.setInterval)elem=window;if(!handler.guid)handler.guid=this.guid++;if(data!=undefined){var fn=handler;handler=this.proxy(fn,function(){return fn.apply(this,arguments);});handler.data=data;}var events=jQuery.data(elem,"events")||jQuery.data(elem,"events",{}),handle=jQuery.data(elem,"handle")||jQuery.data(elem,"handle",function(){if(typeof jQuery!="undefined"&&!jQuery.event.triggered)return jQuery.event.handle.apply(arguments.callee.elem,arguments);});handle.elem=elem;jQuery.each(types.split(/\s+/),function(index,type){var parts=type.split(".");type=parts[0];handler.type=parts[1];var handlers=events[type];if(!handlers){handlers=events[type]={};if(!jQuery.event.special[type]||jQuery.event.special[type].setup.call(elem)===false){if(elem.addEventListener)elem.addEventListener(type,handle,false);else if(elem.attachEvent)elem.attachEvent("on"+type,handle);}}handlers[handler.guid]=handler;jQuery.event.global[type]=true;});elem=null;},guid:1,global:{},remove:function(elem,types,handler){if(elem.nodeType==3||elem.nodeType==8)return;var events=jQuery.data(elem,"events"),ret,index;if(events){if(types==undefined||(typeof types=="string"&&types.charAt(0)=="."))for(var type in events)this.remove(elem,type+(types||""));else{if(types.type){handler=types.handler;types=types.type;}jQuery.each(types.split(/\s+/),function(index,type){var parts=type.split(".");type=parts[0];if(events[type]){if(handler)delete events[type][handler.guid];else
for(handler in events[type])if(!parts[1]||events[type][handler].type==parts[1])delete events[type][handler];for(ret in events[type])break;if(!ret){if(!jQuery.event.special[type]||jQuery.event.special[type].teardown.call(elem)===false){if(elem.removeEventListener)elem.removeEventListener(type,jQuery.data(elem,"handle"),false);else if(elem.detachEvent)elem.detachEvent("on"+type,jQuery.data(elem,"handle"));}ret=null;delete events[type];}}});}for(ret in events)break;if(!ret){var handle=jQuery.data(elem,"handle");if(handle)handle.elem=null;jQuery.removeData(elem,"events");jQuery.removeData(elem,"handle");}}},trigger:function(type,data,elem,donative,extra){data=jQuery.makeArray(data);if(type.indexOf("!")>=0){type=type.slice(0,-1);var exclusive=true;}if(!elem){if(this.global[type])jQuery("*").add([window,document]).trigger(type,data);}else{if(elem.nodeType==3||elem.nodeType==8)return undefined;var val,ret,fn=jQuery.isFunction(elem[type]||null),event=!data[0]||!data[0].preventDefault;if(event){data.unshift({type:type,target:elem,preventDefault:function(){},stopPropagation:function(){},timeStamp:now()});data[0][expando]=true;}data[0].type=type;if(exclusive)data[0].exclusive=true;var handle=jQuery.data(elem,"handle");if(handle)val=handle.apply(elem,data);if((!fn||(jQuery.nodeName(elem,'a')&&type=="click"))&&elem["on"+type]&&elem["on"+type].apply(elem,data)===false)val=false;if(event)data.shift();if(extra&&jQuery.isFunction(extra)){ret=extra.apply(elem,val==null?data:data.concat(val));if(ret!==undefined)val=ret;}if(fn&&donative!==false&&val!==false&&!(jQuery.nodeName(elem,'a')&&type=="click")){this.triggered=true;try{elem[type]();}catch(e){}}this.triggered=false;}return val;},handle:function(event){var val,ret,namespace,all,handlers;event=arguments[0]=jQuery.event.fix(event||window.event);namespace=event.type.split(".");event.type=namespace[0];namespace=namespace[1];all=!namespace&&!event.exclusive;handlers=(jQuery.data(this,"events")||{})[event.type];for(var j in handlers){var handler=handlers[j];if(all||handler.type==namespace){event.handler=handler;event.data=handler.data;ret=handler.apply(this,arguments);if(val!==false)val=ret;if(ret===false){event.preventDefault();event.stopPropagation();}}}return val;},fix:function(event){if(event[expando]==true)return event;var originalEvent=event;event={originalEvent:originalEvent};var props="altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode metaKey newValue originalTarget pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target timeStamp toElement type view wheelDelta which".split(" ");for(var i=props.length;i;i--)event[props[i]]=originalEvent[props[i]];event[expando]=true;event.preventDefault=function(){if(originalEvent.preventDefault)originalEvent.preventDefault();originalEvent.returnValue=false;};event.stopPropagation=function(){if(originalEvent.stopPropagation)originalEvent.stopPropagation();originalEvent.cancelBubble=true;};event.timeStamp=event.timeStamp||now();if(!event.target)event.target=event.srcElement||document;if(event.target.nodeType==3)event.target=event.target.parentNode;if(!event.relatedTarget&&event.fromElement)event.relatedTarget=event.fromElement==event.target?event.toElement:event.fromElement;if(event.pageX==null&&event.clientX!=null){var doc=document.documentElement,body=document.body;event.pageX=event.clientX+(doc&&doc.scrollLeft||body&&body.scrollLeft||0)-(doc.clientLeft||0);event.pageY=event.clientY+(doc&&doc.scrollTop||body&&body.scrollTop||0)-(doc.clientTop||0);}if(!event.which&&((event.charCode||event.charCode===0)?event.charCode:event.keyCode))event.which=event.charCode||event.keyCode;if(!event.metaKey&&event.ctrlKey)event.metaKey=event.ctrlKey;if(!event.which&&event.button)event.which=(event.button&1?1:(event.button&2?3:(event.button&4?2:0)));return event;},proxy:function(fn,proxy){proxy.guid=fn.guid=fn.guid||proxy.guid||this.guid++;return proxy;},special:{ready:{setup:function(){bindReady();return;},teardown:function(){return;}},mouseenter:{setup:function(){if(jQuery.browser.msie)return false;jQuery(this).bind("mouseover",jQuery.event.special.mouseenter.handler);return true;},teardown:function(){if(jQuery.browser.msie)return false;jQuery(this).unbind("mouseover",jQuery.event.special.mouseenter.handler);return true;},handler:function(event){if(withinElement(event,this))return true;event.type="mouseenter";return jQuery.event.handle.apply(this,arguments);}},mouseleave:{setup:function(){if(jQuery.browser.msie)return false;jQuery(this).bind("mouseout",jQuery.event.special.mouseleave.handler);return true;},teardown:function(){if(jQuery.browser.msie)return false;jQuery(this).unbind("mouseout",jQuery.event.special.mouseleave.handler);return true;},handler:function(event){if(withinElement(event,this))return true;event.type="mouseleave";return jQuery.event.handle.apply(this,arguments);}}}};jQuery.fn.extend({bind:function(type,data,fn){return type=="unload"?this.one(type,data,fn):this.each(function(){jQuery.event.add(this,type,fn||data,fn&&data);});},one:function(type,data,fn){var one=jQuery.event.proxy(fn||data,function(event){jQuery(this).unbind(event,one);return(fn||data).apply(this,arguments);});return this.each(function(){jQuery.event.add(this,type,one,fn&&data);});},unbind:function(type,fn){return this.each(function(){jQuery.event.remove(this,type,fn);});},trigger:function(type,data,fn){return this.each(function(){jQuery.event.trigger(type,data,this,true,fn);});},triggerHandler:function(type,data,fn){return this[0]&&jQuery.event.trigger(type,data,this[0],false,fn);},toggle:function(fn){var args=arguments,i=1;while(i<args.length)jQuery.event.proxy(fn,args[i++]);return this.click(jQuery.event.proxy(fn,function(event){this.lastToggle=(this.lastToggle||0)%i;event.preventDefault();return args[this.lastToggle++].apply(this,arguments)||false;}));},hover:function(fnOver,fnOut){return this.bind('mouseenter',fnOver).bind('mouseleave',fnOut);},ready:function(fn){bindReady();if(jQuery.isReady)fn.call(document,jQuery);else
jQuery.readyList.push(function(){return fn.call(this,jQuery);});return this;}});jQuery.extend({isReady:false,readyList:[],ready:function(){if(!jQuery.isReady){jQuery.isReady=true;if(jQuery.readyList){jQuery.each(jQuery.readyList,function(){this.call(document);});jQuery.readyList=null;}jQuery(document).triggerHandler("ready");}}});var readyBound=false;function bindReady(){if(readyBound)return;readyBound=true;if(document.addEventListener&&!jQuery.browser.opera)document.addEventListener("DOMContentLoaded",jQuery.ready,false);if(jQuery.browser.msie&&window==top)(function(){if(jQuery.isReady)return;try{document.documentElement.doScroll("left");}catch(error){setTimeout(arguments.callee,0);return;}jQuery.ready();})();if(jQuery.browser.opera)document.addEventListener("DOMContentLoaded",function(){if(jQuery.isReady)return;for(var i=0;i<document.styleSheets.length;i++)if(document.styleSheets[i].disabled){setTimeout(arguments.callee,0);return;}jQuery.ready();},false);if(jQuery.browser.safari){var numStyles;(function(){if(jQuery.isReady)return;if(document.readyState!="loaded"&&document.readyState!="complete"){setTimeout(arguments.callee,0);return;}if(numStyles===undefined)numStyles=jQuery("style, link[rel=stylesheet]").length;if(document.styleSheets.length!=numStyles){setTimeout(arguments.callee,0);return;}jQuery.ready();})();}jQuery.event.add(window,"load",jQuery.ready);}jQuery.each(("blur,focus,load,resize,scroll,unload,click,dblclick,"+"mousedown,mouseup,mousemove,mouseover,mouseout,change,select,"+"submit,keydown,keypress,keyup,error").split(","),function(i,name){jQuery.fn[name]=function(fn){return fn?this.bind(name,fn):this.trigger(name);};});var withinElement=function(event,elem){var parent=event.relatedTarget;while(parent&&parent!=elem)try{parent=parent.parentNode;}catch(error){parent=elem;}return parent==elem;};jQuery(window).bind("unload",function(){jQuery("*").add(document).unbind();});jQuery.fn.extend({_load:jQuery.fn.load,load:function(url,params,callback){if(typeof url!='string')return this._load(url);var off=url.indexOf(" ");if(off>=0){var selector=url.slice(off,url.length);url=url.slice(0,off);}callback=callback||function(){};var type="GET";if(params)if(jQuery.isFunction(params)){callback=params;params=null;}else{params=jQuery.param(params);type="POST";}var self=this;jQuery.ajax({url:url,type:type,dataType:"html",data:params,complete:function(res,status){if(status=="success"||status=="notmodified")self.html(selector?jQuery("<div/>").append(res.responseText.replace(/<script(.|\s)*?\/script>/g,"")).find(selector):res.responseText);self.each(callback,[res.responseText,status,res]);}});return this;},serialize:function(){return jQuery.param(this.serializeArray());},serializeArray:function(){return this.map(function(){return jQuery.nodeName(this,"form")?jQuery.makeArray(this.elements):this;}).filter(function(){return this.name&&!this.disabled&&(this.checked||/select|textarea/i.test(this.nodeName)||/text|hidden|password/i.test(this.type));}).map(function(i,elem){var val=jQuery(this).val();return val==null?null:val.constructor==Array?jQuery.map(val,function(val,i){return{name:elem.name,value:val};}):{name:elem.name,value:val};}).get();}});jQuery.each("ajaxStart,ajaxStop,ajaxComplete,ajaxError,ajaxSuccess,ajaxSend".split(","),function(i,o){jQuery.fn[o]=function(f){return this.bind(o,f);};});var jsc=now();jQuery.extend({get:function(url,data,callback,type){if(jQuery.isFunction(data)){callback=data;data=null;}return jQuery.ajax({type:"GET",url:url,data:data,success:callback,dataType:type});},getScript:function(url,callback){return jQuery.get(url,null,callback,"script");},getJSON:function(url,data,callback){return jQuery.get(url,data,callback,"json");},post:function(url,data,callback,type){if(jQuery.isFunction(data)){callback=data;data={};}return jQuery.ajax({type:"POST",url:url,data:data,success:callback,dataType:type});},ajaxSetup:function(settings){jQuery.extend(jQuery.ajaxSettings,settings);},ajaxSettings:{url:location.href,global:true,type:"GET",timeout:0,contentType:"application/x-www-form-urlencoded",processData:true,async:true,data:null,username:null,password:null,accepts:{xml:"application/xml, text/xml",html:"text/html",script:"text/javascript, application/javascript",json:"application/json, text/javascript",text:"text/plain",_default:"*/*"}},lastModified:{},ajax:function(s){s=jQuery.extend(true,s,jQuery.extend(true,{},jQuery.ajaxSettings,s));var jsonp,jsre=/=\?(&|$)/g,status,data,type=s.type.toUpperCase();if(s.data&&s.processData&&typeof s.data!="string")s.data=jQuery.param(s.data);if(s.dataType=="jsonp"){if(type=="GET"){if(!s.url.match(jsre))s.url+=(s.url.match(/\?/)?"&":"?")+(s.jsonp||"callback")+"=?";}else if(!s.data||!s.data.match(jsre))s.data=(s.data?s.data+"&":"")+(s.jsonp||"callback")+"=?";s.dataType="json";}if(s.dataType=="json"&&(s.data&&s.data.match(jsre)||s.url.match(jsre))){jsonp="jsonp"+jsc++;if(s.data)s.data=(s.data+"").replace(jsre,"="+jsonp+"$1");s.url=s.url.replace(jsre,"="+jsonp+"$1");s.dataType="script";window[jsonp]=function(tmp){data=tmp;success();complete();window[jsonp]=undefined;try{delete window[jsonp];}catch(e){}if(head)head.removeChild(script);};}if(s.dataType=="script"&&s.cache==null)s.cache=false;if(s.cache===false&&type=="GET"){var ts=now();var ret=s.url.replace(/(\?|&)_=.*?(&|$)/,"$1_="+ts+"$2");s.url=ret+((ret==s.url)?(s.url.match(/\?/)?"&":"?")+"_="+ts:"");}if(s.data&&type=="GET"){s.url+=(s.url.match(/\?/)?"&":"?")+s.data;s.data=null;}if(s.global&&!jQuery.active++)jQuery.event.trigger("ajaxStart");var remote=/^(?:\w+:)?\/\/([^\/?#]+)/;if(s.dataType=="script"&&type=="GET"&&remote.test(s.url)&&remote.exec(s.url)[1]!=location.host){var head=document.getElementsByTagName("head")[0];var script=document.createElement("script");script.src=s.url;if(s.scriptCharset)script.charset=s.scriptCharset;if(!jsonp){var done=false;script.onload=script.onreadystatechange=function(){if(!done&&(!this.readyState||this.readyState=="loaded"||this.readyState=="complete")){done=true;success();complete();head.removeChild(script);}};}head.appendChild(script);return undefined;}var requestDone=false;var xhr=window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();if(s.username)xhr.open(type,s.url,s.async,s.username,s.password);else
xhr.open(type,s.url,s.async);try{if(s.data)xhr.setRequestHeader("Content-Type",s.contentType);if(s.ifModified)xhr.setRequestHeader("If-Modified-Since",jQuery.lastModified[s.url]||"Thu, 01 Jan 1970 00:00:00 GMT");xhr.setRequestHeader("X-Requested-With","XMLHttpRequest");xhr.setRequestHeader("Accept",s.dataType&&s.accepts[s.dataType]?s.accepts[s.dataType]+", */*":s.accepts._default);}catch(e){}if(s.beforeSend&&s.beforeSend(xhr,s)===false){s.global&&jQuery.active--;xhr.abort();return false;}if(s.global)jQuery.event.trigger("ajaxSend",[xhr,s]);var onreadystatechange=function(isTimeout){if(!requestDone&&xhr&&(xhr.readyState==4||isTimeout=="timeout")){requestDone=true;if(ival){clearInterval(ival);ival=null;}status=isTimeout=="timeout"&&"timeout"||!jQuery.httpSuccess(xhr)&&"error"||s.ifModified&&jQuery.httpNotModified(xhr,s.url)&&"notmodified"||"success";if(status=="success"){try{data=jQuery.httpData(xhr,s.dataType,s.dataFilter);}catch(e){status="parsererror";}}if(status=="success"){var modRes;try{modRes=xhr.getResponseHeader("Last-Modified");}catch(e){}if(s.ifModified&&modRes)jQuery.lastModified[s.url]=modRes;if(!jsonp)success();}else
jQuery.handleError(s,xhr,status);complete();if(s.async)xhr=null;}};if(s.async){var ival=setInterval(onreadystatechange,13);if(s.timeout>0)setTimeout(function(){if(xhr){xhr.abort();if(!requestDone)onreadystatechange("timeout");}},s.timeout);}try{xhr.send(s.data);}catch(e){jQuery.handleError(s,xhr,null,e);}if(!s.async)onreadystatechange();function success(){if(s.success)s.success(data,status);if(s.global)jQuery.event.trigger("ajaxSuccess",[xhr,s]);}function complete(){if(s.complete)s.complete(xhr,status);if(s.global)jQuery.event.trigger("ajaxComplete",[xhr,s]);if(s.global&&!--jQuery.active)jQuery.event.trigger("ajaxStop");}return xhr;},handleError:function(s,xhr,status,e){if(s.error)s.error(xhr,status,e);if(s.global)jQuery.event.trigger("ajaxError",[xhr,s,e]);},active:0,httpSuccess:function(xhr){try{return!xhr.status&&location.protocol=="file:"||(xhr.status>=200&&xhr.status<300)||xhr.status==304||xhr.status==1223||jQuery.browser.safari&&xhr.status==undefined;}catch(e){}return false;},httpNotModified:function(xhr,url){try{var xhrRes=xhr.getResponseHeader("Last-Modified");return xhr.status==304||xhrRes==jQuery.lastModified[url]||jQuery.browser.safari&&xhr.status==undefined;}catch(e){}return false;},httpData:function(xhr,type,filter){var ct=xhr.getResponseHeader("content-type"),xml=type=="xml"||!type&&ct&&ct.indexOf("xml")>=0,data=xml?xhr.responseXML:xhr.responseText;if(xml&&data.documentElement.tagName=="parsererror")throw"parsererror";if(filter)data=filter(data,type);if(type=="script")jQuery.globalEval(data);if(type=="json")data=eval("("+data+")");return data;},param:function(a){var s=[];if(a.constructor==Array||a.jquery)jQuery.each(a,function(){s.push(encodeURIComponent(this.name)+"="+encodeURIComponent(this.value));});else
for(var j in a)if(a[j]&&a[j].constructor==Array)jQuery.each(a[j],function(){s.push(encodeURIComponent(j)+"="+encodeURIComponent(this));});else
s.push(encodeURIComponent(j)+"="+encodeURIComponent(jQuery.isFunction(a[j])?a[j]():a[j]));return s.join("&").replace(/%20/g,"+");}});jQuery.fn.extend({show:function(speed,callback){return speed?this.animate({height:"show",width:"show",opacity:"show"},speed,callback):this.filter(":hidden").each(function(){this.style.display=this.oldblock||"";if(jQuery.css(this,"display")=="none"){var elem=jQuery("<"+this.tagName+" />").appendTo("body");this.style.display=elem.css("display");if(this.style.display=="none")this.style.display="block";elem.remove();}}).end();},hide:function(speed,callback){return speed?this.animate({height:"hide",width:"hide",opacity:"hide"},speed,callback):this.filter(":visible").each(function(){this.oldblock=this.oldblock||jQuery.css(this,"display");this.style.display="none";}).end();},_toggle:jQuery.fn.toggle,toggle:function(fn,fn2){return jQuery.isFunction(fn)&&jQuery.isFunction(fn2)?this._toggle.apply(this,arguments):fn?this.animate({height:"toggle",width:"toggle",opacity:"toggle"},fn,fn2):this.each(function(){jQuery(this)[jQuery(this).is(":hidden")?"show":"hide"]();});},slideDown:function(speed,callback){return this.animate({height:"show"},speed,callback);},slideUp:function(speed,callback){return this.animate({height:"hide"},speed,callback);},slideToggle:function(speed,callback){return this.animate({height:"toggle"},speed,callback);},fadeIn:function(speed,callback){return this.animate({opacity:"show"},speed,callback);},fadeOut:function(speed,callback){return this.animate({opacity:"hide"},speed,callback);},fadeTo:function(speed,to,callback){return this.animate({opacity:to},speed,callback);},animate:function(prop,speed,easing,callback){var optall=jQuery.speed(speed,easing,callback);return this[optall.queue===false?"each":"queue"](function(){if(this.nodeType!=1)return false;var opt=jQuery.extend({},optall),p,hidden=jQuery(this).is(":hidden"),self=this;for(p in prop){if(prop[p]=="hide"&&hidden||prop[p]=="show"&&!hidden)return opt.complete.call(this);if(p=="height"||p=="width"){opt.display=jQuery.css(this,"display");opt.overflow=this.style.overflow;}}if(opt.overflow!=null)this.style.overflow="hidden";opt.curAnim=jQuery.extend({},prop);jQuery.each(prop,function(name,val){var e=new jQuery.fx(self,opt,name);if(/toggle|show|hide/.test(val))e[val=="toggle"?hidden?"show":"hide":val](prop);else{var parts=val.toString().match(/^([+-]=)?([\d+-.]+)(.*)$/),start=e.cur(true)||0;if(parts){var end=parseFloat(parts[2]),unit=parts[3]||"px";if(unit!="px"){self.style[name]=(end||1)+unit;start=((end||1)/e.cur(true))*start;self.style[name]=start+unit;}if(parts[1])end=((parts[1]=="-="?-1:1)*end)+start;e.custom(start,end,unit);}else
e.custom(start,val,"");}});return true;});},queue:function(type,fn){if(jQuery.isFunction(type)||(type&&type.constructor==Array)){fn=type;type="fx";}if(!type||(typeof type=="string"&&!fn))return queue(this[0],type);return this.each(function(){if(fn.constructor==Array)queue(this,type,fn);else{queue(this,type).push(fn);if(queue(this,type).length==1)fn.call(this);}});},stop:function(clearQueue,gotoEnd){var timers=jQuery.timers;if(clearQueue)this.queue([]);this.each(function(){for(var i=timers.length-1;i>=0;i--)if(timers[i].elem==this){if(gotoEnd)timers[i](true);timers.splice(i,1);}});if(!gotoEnd)this.dequeue();return this;}});var queue=function(elem,type,array){if(elem){type=type||"fx";var q=jQuery.data(elem,type+"queue");if(!q||array)q=jQuery.data(elem,type+"queue",jQuery.makeArray(array));}return q;};jQuery.fn.dequeue=function(type){type=type||"fx";return this.each(function(){var q=queue(this,type);q.shift();if(q.length)q[0].call(this);});};jQuery.extend({speed:function(speed,easing,fn){var opt=speed&&speed.constructor==Object?speed:{complete:fn||!fn&&easing||jQuery.isFunction(speed)&&speed,duration:speed,easing:fn&&easing||easing&&easing.constructor!=Function&&easing};opt.duration=(opt.duration&&opt.duration.constructor==Number?opt.duration:jQuery.fx.speeds[opt.duration])||jQuery.fx.speeds.def;opt.old=opt.complete;opt.complete=function(){if(opt.queue!==false)jQuery(this).dequeue();if(jQuery.isFunction(opt.old))opt.old.call(this);};return opt;},easing:{linear:function(p,n,firstNum,diff){return firstNum+diff*p;},swing:function(p,n,firstNum,diff){return((-Math.cos(p*Math.PI)/2)+0.5)*diff+firstNum;}},timers:[],timerId:null,fx:function(elem,options,prop){this.options=options;this.elem=elem;this.prop=prop;if(!options.orig)options.orig={};}});jQuery.fx.prototype={update:function(){if(this.options.step)this.options.step.call(this.elem,this.now,this);(jQuery.fx.step[this.prop]||jQuery.fx.step._default)(this);if(this.prop=="height"||this.prop=="width")this.elem.style.display="block";},cur:function(force){if(this.elem[this.prop]!=null&&this.elem.style[this.prop]==null)return this.elem[this.prop];var r=parseFloat(jQuery.css(this.elem,this.prop,force));return r&&r>-10000?r:parseFloat(jQuery.curCSS(this.elem,this.prop))||0;},custom:function(from,to,unit){this.startTime=now();this.start=from;this.end=to;this.unit=unit||this.unit||"px";this.now=this.start;this.pos=this.state=0;this.update();var self=this;function t(gotoEnd){return self.step(gotoEnd);}t.elem=this.elem;jQuery.timers.push(t);if(jQuery.timerId==null){jQuery.timerId=setInterval(function(){var timers=jQuery.timers;for(var i=0;i<timers.length;i++)if(!timers[i]())timers.splice(i--,1);if(!timers.length){clearInterval(jQuery.timerId);jQuery.timerId=null;}},13);}},show:function(){this.options.orig[this.prop]=jQuery.attr(this.elem.style,this.prop);this.options.show=true;this.custom(0,this.cur());if(this.prop=="width"||this.prop=="height")this.elem.style[this.prop]="1px";jQuery(this.elem).show();},hide:function(){this.options.orig[this.prop]=jQuery.attr(this.elem.style,this.prop);this.options.hide=true;this.custom(this.cur(),0);},step:function(gotoEnd){var t=now();if(gotoEnd||t>this.options.duration+this.startTime){this.now=this.end;this.pos=this.state=1;this.update();this.options.curAnim[this.prop]=true;var done=true;for(var i in this.options.curAnim)if(this.options.curAnim[i]!==true)done=false;if(done){if(this.options.display!=null){this.elem.style.overflow=this.options.overflow;this.elem.style.display=this.options.display;if(jQuery.css(this.elem,"display")=="none")this.elem.style.display="block";}if(this.options.hide)this.elem.style.display="none";if(this.options.hide||this.options.show)for(var p in this.options.curAnim)jQuery.attr(this.elem.style,p,this.options.orig[p]);}if(done)this.options.complete.call(this.elem);return false;}else{var n=t-this.startTime;this.state=n/this.options.duration;this.pos=jQuery.easing[this.options.easing||(jQuery.easing.swing?"swing":"linear")](this.state,n,0,1,this.options.duration);this.now=this.start+((this.end-this.start)*this.pos);this.update();}return true;}};jQuery.extend(jQuery.fx,{speeds:{slow:600,fast:200,def:400},step:{scrollLeft:function(fx){fx.elem.scrollLeft=fx.now;},scrollTop:function(fx){fx.elem.scrollTop=fx.now;},opacity:function(fx){jQuery.attr(fx.elem.style,"opacity",fx.now);},_default:function(fx){fx.elem.style[fx.prop]=fx.now+fx.unit;}}});jQuery.fn.offset=function(){var left=0,top=0,elem=this[0],results;if(elem)with(jQuery.browser){var parent=elem.parentNode,offsetChild=elem,offsetParent=elem.offsetParent,doc=elem.ownerDocument,safari2=safari&&parseInt(version)<522&&!/adobeair/i.test(userAgent),css=jQuery.curCSS,fixed=css(elem,"position")=="fixed";if(elem.getBoundingClientRect){var box=elem.getBoundingClientRect();add(box.left+Math.max(doc.documentElement.scrollLeft,doc.body.scrollLeft),box.top+Math.max(doc.documentElement.scrollTop,doc.body.scrollTop));add(-doc.documentElement.clientLeft,-doc.documentElement.clientTop);}else{add(elem.offsetLeft,elem.offsetTop);while(offsetParent){add(offsetParent.offsetLeft,offsetParent.offsetTop);if(mozilla&&!/^t(able|d|h)$/i.test(offsetParent.tagName)||safari&&!safari2)border(offsetParent);if(!fixed&&css(offsetParent,"position")=="fixed")fixed=true;offsetChild=/^body$/i.test(offsetParent.tagName)?offsetChild:offsetParent;offsetParent=offsetParent.offsetParent;}while(parent&&parent.tagName&&!/^body|html$/i.test(parent.tagName)){if(!/^inline|table.*$/i.test(css(parent,"display")))add(-parent.scrollLeft,-parent.scrollTop);if(mozilla&&css(parent,"overflow")!="visible")border(parent);parent=parent.parentNode;}if((safari2&&(fixed||css(offsetChild,"position")=="absolute"))||(mozilla&&css(offsetChild,"position")!="absolute"))add(-doc.body.offsetLeft,-doc.body.offsetTop);if(fixed)add(Math.max(doc.documentElement.scrollLeft,doc.body.scrollLeft),Math.max(doc.documentElement.scrollTop,doc.body.scrollTop));}results={top:top,left:left};}function border(elem){add(jQuery.curCSS(elem,"borderLeftWidth",true),jQuery.curCSS(elem,"borderTopWidth",true));}function add(l,t){left+=parseInt(l,10)||0;top+=parseInt(t,10)||0;}return results;};jQuery.fn.extend({position:function(){var left=0,top=0,results;if(this[0]){var offsetParent=this.offsetParent(),offset=this.offset(),parentOffset=/^body|html$/i.test(offsetParent[0].tagName)?{top:0,left:0}:offsetParent.offset();offset.top-=num(this,'marginTop');offset.left-=num(this,'marginLeft');parentOffset.top+=num(offsetParent,'borderTopWidth');parentOffset.left+=num(offsetParent,'borderLeftWidth');results={top:offset.top-parentOffset.top,left:offset.left-parentOffset.left};}return results;},offsetParent:function(){var offsetParent=this[0].offsetParent;while(offsetParent&&(!/^body|html$/i.test(offsetParent.tagName)&&jQuery.css(offsetParent,'position')=='static'))offsetParent=offsetParent.offsetParent;return jQuery(offsetParent);}});jQuery.each(['Left','Top'],function(i,name){var method='scroll'+name;jQuery.fn[method]=function(val){if(!this[0])return;return val!=undefined?this.each(function(){this==window||this==document?window.scrollTo(!i?val:jQuery(window).scrollLeft(),i?val:jQuery(window).scrollTop()):this[method]=val;}):this[0]==window||this[0]==document?self[i?'pageYOffset':'pageXOffset']||jQuery.boxModel&&document.documentElement[method]||document.body[method]:this[0][method];};});jQuery.each(["Height","Width"],function(i,name){var tl=i?"Left":"Top",br=i?"Right":"Bottom";jQuery.fn["inner"+name]=function(){return this[name.toLowerCase()]()+num(this,"padding"+tl)+num(this,"padding"+br);};jQuery.fn["outer"+name]=function(margin){return this["inner"+name]()+num(this,"border"+tl+"Width")+num(this,"border"+br+"Width")+(margin?num(this,"margin"+tl)+num(this,"margin"+br):0);};});})();

/*
 * jQuery UI 1.6
 *
 * Copyright (c) 2008 AUTHORS.txt (http://ui.jquery.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI
 */
(function(C){var I=C.fn.remove,D=C.browser.mozilla&&(parseFloat(C.browser.version)<1.9);C.ui={version:"1.6",plugin:{add:function(K,L,N){var M=C.ui[K].prototype;for(var J in N){M.plugins[J]=M.plugins[J]||[];M.plugins[J].push([L,N[J]])}},call:function(J,L,K){var N=J.plugins[L];if(!N){return }for(var M=0;M<N.length;M++){if(J.options[N[M][0]]){N[M][1].apply(J.element,K)}}}},contains:function(L,K){var J=C.browser.safari&&C.browser.version<522;if(L.contains&&!J){return L.contains(K)}if(L.compareDocumentPosition){return !!(L.compareDocumentPosition(K)&16)}while(K=K.parentNode){if(K==L){return true}}return false},cssCache:{},css:function(J){if(C.ui.cssCache[J]){return C.ui.cssCache[J]}var K=C('<div class="ui-gen">').addClass(J).css({position:"absolute",top:"-5000px",left:"-5000px",display:"block"}).appendTo("body");C.ui.cssCache[J]=!!((!(/auto|default/).test(K.css("cursor"))||(/^[1-9]/).test(K.css("height"))||(/^[1-9]/).test(K.css("width"))||!(/none/).test(K.css("backgroundImage"))||!(/transparent|rgba\(0, 0, 0, 0\)/).test(K.css("backgroundColor"))));try{C("body").get(0).removeChild(K.get(0))}catch(L){}return C.ui.cssCache[J]},hasScroll:function(M,K){if(C(M).css("overflow")=="hidden"){return false}var J=(K&&K=="left")?"scrollLeft":"scrollTop",L=false;if(M[J]>0){return true}M[J]=1;L=(M[J]>0);M[J]=0;return L},isOverAxis:function(K,J,L){return(K>J)&&(K<(J+L))},isOver:function(O,K,N,M,J,L){return C.ui.isOverAxis(O,N,J)&&C.ui.isOverAxis(K,M,L)},keyCode:{BACKSPACE:8,CAPS_LOCK:20,COMMA:188,CONTROL:17,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,INSERT:45,LEFT:37,NUMPAD_ADD:107,NUMPAD_DECIMAL:110,NUMPAD_DIVIDE:111,NUMPAD_ENTER:108,NUMPAD_MULTIPLY:106,NUMPAD_SUBTRACT:109,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SHIFT:16,SPACE:32,TAB:9,UP:38}};if(D){var F=C.attr,E=C.fn.removeAttr,H="http://www.w3.org/2005/07/aaa",A=/^aria-/,B=/^wairole:/;C.attr=function(K,J,L){var M=L!==undefined;return(J=="role"?(M?F.call(this,K,J,"wairole:"+L):(F.apply(this,arguments)||"").replace(B,"")):(A.test(J)?(M?K.setAttributeNS(H,J.replace(A,"aaa:"),L):F.call(this,K,J.replace(A,"aaa:"))):F.apply(this,arguments)))};C.fn.removeAttr=function(J){return(A.test(J)?this.each(function(){this.removeAttributeNS(H,J.replace(A,""))}):E.call(this,J))}}C.fn.extend({remove:function(){C("*",this).add(this).each(function(){C(this).triggerHandler("remove")});return I.apply(this,arguments)},enableSelection:function(){return this.attr("unselectable","off").css("MozUserSelect","").unbind("selectstart.ui")},disableSelection:function(){return this.attr("unselectable","on").css("MozUserSelect","none").bind("selectstart.ui",function(){return false})},scrollParent:function(){var J;if((C.browser.msie&&(/(static|relative)/).test(this.css("position")))||(/absolute/).test(this.css("position"))){J=this.parents().filter(function(){return(/(relative|absolute|fixed)/).test(C.curCSS(this,"position",1))&&(/(auto|scroll)/).test(C.curCSS(this,"overflow",1)+C.curCSS(this,"overflow-y",1)+C.curCSS(this,"overflow-x",1))}).eq(0)}else{J=this.parents().filter(function(){return(/(auto|scroll)/).test(C.curCSS(this,"overflow",1)+C.curCSS(this,"overflow-y",1)+C.curCSS(this,"overflow-x",1))}).eq(0)}return(/fixed/).test(this.css("position"))||!J.length?C(document):J}});C.extend(C.expr[":"],{data:function(K,L,J){return C.data(K,J[3])},tabbable:function(L,M,K){var N=L.nodeName.toLowerCase();function J(O){return !(C(O).is(":hidden")||C(O).parents(":hidden").length)}return(L.tabIndex>=0&&(("a"==N&&L.href)||(/input|select|textarea|button/.test(N)&&"hidden"!=L.type&&!L.disabled))&&J(L))}});function G(M,N,O,L){function K(Q){var P=C[M][N][Q]||[];return(typeof P=="string"?P.split(/,?\s+/):P)}var J=K("getter");if(L.length==1&&typeof L[0]=="string"){J=J.concat(K("getterSetter"))}return(C.inArray(O,J)!=-1)}C.widget=function(K,J){var L=K.split(".")[0];K=K.split(".")[1];C.fn[K]=function(P){var N=(typeof P=="string"),O=Array.prototype.slice.call(arguments,1);if(N&&P.substring(0,1)=="_"){return this}if(N&&G(L,K,P,O)){var M=C.data(this[0],K);return(M?M[P].apply(M,O):undefined)}return this.each(function(){var Q=C.data(this,K);(!Q&&!N&&C.data(this,K,new C[L][K](this,P)));(Q&&N&&C.isFunction(Q[P])&&Q[P].apply(Q,O))})};C[L]=C[L]||{};C[L][K]=function(O,N){var M=this;this.widgetName=K;this.widgetEventPrefix=C[L][K].eventPrefix||K;this.widgetBaseClass=L+"-"+K;this.options=C.extend({},C.widget.defaults,C[L][K].defaults,C.metadata&&C.metadata.get(O)[K],N);this.element=C(O).bind("setData."+K,function(Q,P,R){return M._setData(P,R)}).bind("getData."+K,function(Q,P){return M._getData(P)}).bind("remove",function(){return M.destroy()});this._init()};C[L][K].prototype=C.extend({},C.widget.prototype,J);C[L][K].getterSetter="option"};C.widget.prototype={_init:function(){},destroy:function(){this.element.removeData(this.widgetName)},option:function(L,M){var K=L,J=this;if(typeof L=="string"){if(M===undefined){return this._getData(L)}K={};K[L]=M}C.each(K,function(N,O){J._setData(N,O)})},_getData:function(J){return this.options[J]},_setData:function(J,K){this.options[J]=K;if(J=="disabled"){this.element[K?"addClass":"removeClass"](this.widgetBaseClass+"-disabled")}},enable:function(){this._setData("disabled",false)},disable:function(){this._setData("disabled",true)},_trigger:function(K,L,M){var J=(K==this.widgetEventPrefix?K:this.widgetEventPrefix+K);L=L||C.event.fix({type:J,target:this.element[0]});return this.element.triggerHandler(J,[L,M],this.options[K])}};C.widget.defaults={disabled:false};C.ui.mouse={_mouseInit:function(){var J=this;this.element.bind("mousedown."+this.widgetName,function(K){return J._mouseDown(K)}).bind("click."+this.widgetName,function(K){if(J._preventClickEvent){J._preventClickEvent=false;return false}});if(C.browser.msie){this._mouseUnselectable=this.element.attr("unselectable");this.element.attr("unselectable","on")}this.started=false},_mouseDestroy:function(){this.element.unbind("."+this.widgetName);(C.browser.msie&&this.element.attr("unselectable",this._mouseUnselectable))},_mouseDown:function(L){(this._mouseStarted&&this._mouseUp(L));this._mouseDownEvent=L;var K=this,M=(L.which==1),J=(typeof this.options.cancel=="string"?C(L.target).parents().add(L.target).filter(this.options.cancel).length:false);if(!M||J||!this._mouseCapture(L)){return true}this.mouseDelayMet=!this.options.delay;if(!this.mouseDelayMet){this._mouseDelayTimer=setTimeout(function(){K.mouseDelayMet=true},this.options.delay)}if(this._mouseDistanceMet(L)&&this._mouseDelayMet(L)){this._mouseStarted=(this._mouseStart(L)!==false);if(!this._mouseStarted){L.preventDefault();return true}}this._mouseMoveDelegate=function(N){return K._mouseMove(N)};this._mouseUpDelegate=function(N){return K._mouseUp(N)};C(document).bind("mousemove."+this.widgetName,this._mouseMoveDelegate).bind("mouseup."+this.widgetName,this._mouseUpDelegate);if(!C.browser.safari){L.preventDefault()}return true},_mouseMove:function(J){if(C.browser.msie&&!J.button){return this._mouseUp(J)}if(this._mouseStarted){this._mouseDrag(J);return J.preventDefault()}if(this._mouseDistanceMet(J)&&this._mouseDelayMet(J)){this._mouseStarted=(this._mouseStart(this._mouseDownEvent,J)!==false);(this._mouseStarted?this._mouseDrag(J):this._mouseUp(J))}return !this._mouseStarted},_mouseUp:function(J){C(document).unbind("mousemove."+this.widgetName,this._mouseMoveDelegate).unbind("mouseup."+this.widgetName,this._mouseUpDelegate);if(this._mouseStarted){this._mouseStarted=false;this._preventClickEvent=true;this._mouseStop(J)}return false},_mouseDistanceMet:function(J){return(Math.max(Math.abs(this._mouseDownEvent.pageX-J.pageX),Math.abs(this._mouseDownEvent.pageY-J.pageY))>=this.options.distance)},_mouseDelayMet:function(J){return this.mouseDelayMet},_mouseStart:function(J){},_mouseDrag:function(J){},_mouseStop:function(J){},_mouseCapture:function(J){return true}};C.ui.mouse.defaults={cancel:null,distance:1,delay:0}})(jQuery);/*
 * jQuery UI Draggable 1.6
 *
 * Copyright (c) 2008 AUTHORS.txt (http://ui.jquery.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Draggables
 *
 * Depends:
 *	ui.core.js
 */
(function(A){A.widget("ui.draggable",A.extend({},A.ui.mouse,{_init:function(){if(this.options.helper=="original"&&!(/^(?:r|a|f)/).test(this.element.css("position"))){this.element[0].style.position="relative"}(this.options.cssNamespace&&this.element.addClass(this.options.cssNamespace+"-draggable"));(this.options.disabled&&this.element.addClass("ui-draggable-disabled"));this._mouseInit()},destroy:function(){if(!this.element.data("draggable")){return }this.element.removeData("draggable").unbind(".draggable").removeClass("ui-draggable ui-draggable-dragging ui-draggable-disabled");this._mouseDestroy()},_mouseCapture:function(B){var C=this.options;if(this.helper||C.disabled||A(B.target).is(".ui-resizable-handle")){return false}this.handle=this._getHandle(B);if(!this.handle){return false}return true},_mouseStart:function(B){var C=this.options;this.helper=this._createHelper(B);this._cacheHelperProportions();if(A.ui.ddmanager){A.ui.ddmanager.current=this}this._cacheMargins();this.cssPosition=this.helper.css("position");this.scrollParent=this.helper.scrollParent();this.offset=this.element.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};A.extend(this.offset,{click:{left:B.pageX-this.offset.left,top:B.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});if(C.cursorAt){this._adjustOffsetFromHelper(C.cursorAt)}this.originalPosition=this._generatePosition(B);if(C.containment){this._setContainment()}this._propagate("start",B);this._cacheHelperProportions();if(A.ui.ddmanager&&!C.dropBehaviour){A.ui.ddmanager.prepareOffsets(this,B)}this.helper.addClass("ui-draggable-dragging");this._mouseDrag(B,true);return true},_mouseDrag:function(B,C){this.position=this._generatePosition(B);this.positionAbs=this._convertPositionTo("absolute");if(!C){this.position=this._propagate("drag",B)||this.position}if(!this.options.axis||this.options.axis!="y"){this.helper[0].style.left=this.position.left+"px"}if(!this.options.axis||this.options.axis!="x"){this.helper[0].style.top=this.position.top+"px"}if(A.ui.ddmanager){A.ui.ddmanager.drag(this,B)}return false},_mouseStop:function(C){var D=false;if(A.ui.ddmanager&&!this.options.dropBehaviour){var D=A.ui.ddmanager.drop(this,C)}if((this.options.revert=="invalid"&&!D)||(this.options.revert=="valid"&&D)||this.options.revert===true||(A.isFunction(this.options.revert)&&this.options.revert.call(this.element,D))){var B=this;A(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),function(){B._propagate("stop",C);B._clear()})}else{this._propagate("stop",C);this._clear()}return false},_getHandle:function(B){var C=!this.options.handle||!A(this.options.handle,this.element).length?true:false;A(this.options.handle,this.element).find("*").andSelf().each(function(){if(this==B.target){C=true}});return C},_createHelper:function(C){var D=this.options;var B=A.isFunction(D.helper)?A(D.helper.apply(this.element[0],[C])):(D.helper=="clone"?this.element.clone():this.element);if(!B.parents("body").length){B.appendTo((D.appendTo=="parent"?this.element[0].parentNode:D.appendTo))}if(B[0]!=this.element[0]&&!(/(fixed|absolute)/).test(B.css("position"))){B.css("position","absolute")}return B},_adjustOffsetFromHelper:function(B){if(B.left!=undefined){this.offset.click.left=B.left+this.margins.left}if(B.right!=undefined){this.offset.click.left=this.helperProportions.width-B.right+this.margins.left}if(B.top!=undefined){this.offset.click.top=B.top+this.margins.top}if(B.bottom!=undefined){this.offset.click.top=this.helperProportions.height-B.bottom+this.margins.top}},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var B=this.offsetParent.offset();if((this.offsetParent[0]==document.body&&A.browser.mozilla)||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()=="html"&&A.browser.msie)){B={top:0,left:0}}return{top:B.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:B.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if(this.cssPosition=="relative"){var B=this.element.position();return{top:B.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:B.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}else{return{top:0,left:0}}},_cacheMargins:function(){this.margins={left:(parseInt(this.element.css("marginLeft"),10)||0),top:(parseInt(this.element.css("marginTop"),10)||0)}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var E=this.options;if(E.containment=="parent"){E.containment=this.helper[0].parentNode}if(E.containment=="document"||E.containment=="window"){this.containment=[0-this.offset.relative.left-this.offset.parent.left,0-this.offset.relative.top-this.offset.parent.top,A(E.containment=="document"?document:window).width()-this.offset.relative.left-this.offset.parent.left-this.helperProportions.width-this.margins.left-(parseInt(this.element.css("marginRight"),10)||0),(A(E.containment=="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.offset.relative.top-this.offset.parent.top-this.helperProportions.height-this.margins.top-(parseInt(this.element.css("marginBottom"),10)||0)]}if(!(/^(document|window|parent)$/).test(E.containment)){var C=A(E.containment)[0];var D=A(E.containment).offset();var B=(A(C).css("overflow")!="hidden");this.containment=[D.left+(parseInt(A(C).css("borderLeftWidth"),10)||0)-this.offset.relative.left-this.offset.parent.left-this.margins.left,D.top+(parseInt(A(C).css("borderTopWidth"),10)||0)-this.offset.relative.top-this.offset.parent.top-this.margins.top,D.left+(B?Math.max(C.scrollWidth,C.offsetWidth):C.offsetWidth)-(parseInt(A(C).css("borderLeftWidth"),10)||0)-this.offset.relative.left-this.offset.parent.left-this.helperProportions.width-this.margins.left,D.top+(B?Math.max(C.scrollHeight,C.offsetHeight):C.offsetHeight)-(parseInt(A(C).css("borderTopWidth"),10)||0)-this.offset.relative.top-this.offset.parent.top-this.helperProportions.height-this.margins.top]}},_convertPositionTo:function(D,F){if(!F){F=this.position}var C=D=="absolute"?1:-1;var B=this[(this.cssPosition=="absolute"?"offset":"scroll")+"Parent"],E=(/(html|body)/i).test(B[0].tagName);return{top:(F.top+this.offset.relative.top*C+this.offset.parent.top*C+(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(E?0:B.scrollTop()))*C+this.margins.top*C),left:(F.left+this.offset.relative.left*C+this.offset.parent.left*C+(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():(E?0:B.scrollLeft()))*C+this.margins.left*C)}},_generatePosition:function(D){var G=this.options,C=this[(this.cssPosition=="absolute"?"offset":"scroll")+"Parent"],H=(/(html|body)/i).test(C[0].tagName);var B={top:(D.pageY-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(H?0:C.scrollTop()))),left:(D.pageX-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():H?0:C.scrollLeft()))};if(!this.originalPosition){return B}if(this.containment){if(B.left<this.containment[0]){B.left=this.containment[0]}if(B.top<this.containment[1]){B.top=this.containment[1]}if(B.left>this.containment[2]){B.left=this.containment[2]}if(B.top>this.containment[3]){B.top=this.containment[3]}}if(G.grid){var F=this.originalPosition.top+Math.round((B.top-this.originalPosition.top)/G.grid[1])*G.grid[1];B.top=this.containment?(!(F<this.containment[1]||F>this.containment[3])?F:(!(F<this.containment[1])?F-G.grid[1]:F+G.grid[1])):F;var E=this.originalPosition.left+Math.round((B.left-this.originalPosition.left)/G.grid[0])*G.grid[0];B.left=this.containment?(!(E<this.containment[0]||E>this.containment[2])?E:(!(E<this.containment[0])?E-G.grid[0]:E+G.grid[0])):E}return B},_clear:function(){this.helper.removeClass("ui-draggable-dragging");if(this.helper[0]!=this.element[0]&&!this.cancelHelperRemoval){this.helper.remove()}this.helper=null;this.cancelHelperRemoval=false},_propagate:function(C,B){A.ui.plugin.call(this,C,[B,this._uiHash()]);if(C=="drag"){this.positionAbs=this._convertPositionTo("absolute")}return this.element.triggerHandler(C=="drag"?C:"drag"+C,[B,this._uiHash()],this.options[C])},plugins:{},_uiHash:function(B){return{helper:this.helper,position:this.position,absolutePosition:this.positionAbs,options:this.options}}}));A.extend(A.ui.draggable,{version:"1.6",defaults:{appendTo:"parent",axis:false,cancel:":input",connectToSortable:false,containment:false,cssNamespace:"ui",cursor:"default",cursorAt:null,delay:0,distance:1,grid:false,handle:false,helper:"original",iframeFix:false,opacity:1,refreshPositions:false,revert:false,revertDuration:500,scope:"default",scroll:true,scrollSensitivity:20,scrollSpeed:20,snap:false,snapMode:"both",snapTolerance:20,stack:false,zIndex:null}});A.ui.plugin.add("draggable","connectToSortable",{start:function(B,D){var C=A(this).data("draggable");C.sortables=[];A(D.options.connectToSortable).each(function(){A(this+"").each(function(){if(A.data(this,"sortable")){var E=A.data(this,"sortable");C.sortables.push({instance:E,shouldRevert:E.options.revert});E._refreshItems();E._propagate("activate",B,C)}})})},stop:function(B,D){var C=A(this).data("draggable");A.each(C.sortables,function(){if(this.instance.isOver){this.instance.isOver=0;C.cancelHelperRemoval=true;this.instance.cancelHelperRemoval=false;if(this.shouldRevert){this.instance.options.revert=true}this.instance._mouseStop(B);this.instance.element.triggerHandler("sortreceive",[B,A.extend(this.instance._ui(),{sender:C.element})],this.instance.options["receive"]);this.instance.options.helper=this.instance.options._helper;if(C.options.helper=="original"){this.instance.currentItem.css({top:"auto",left:"auto"})}}else{this.instance.cancelHelperRemoval=false;this.instance._propagate("deactivate",B,C)}})},drag:function(C,F){var E=A(this).data("draggable"),B=this;var D=function(I){var N=this.offset.click.top,M=this.offset.click.left;var G=this.positionAbs.top,K=this.positionAbs.left;var J=I.height,L=I.width;var O=I.top,H=I.left;return A.ui.isOver(G+N,K+M,O,H,J,L)};A.each(E.sortables,function(G){if(D.call(E,this.instance.containerCache)){if(!this.instance.isOver){this.instance.isOver=1;this.instance.currentItem=A(B).clone().appendTo(this.instance.element).data("sortable-item",true);this.instance.options._helper=this.instance.options.helper;this.instance.options.helper=function(){return F.helper[0]};C.target=this.instance.currentItem[0];this.instance._mouseCapture(C,true);this.instance._mouseStart(C,true,true);this.instance.offset.click.top=E.offset.click.top;this.instance.offset.click.left=E.offset.click.left;this.instance.offset.parent.left-=E.offset.parent.left-this.instance.offset.parent.left;this.instance.offset.parent.top-=E.offset.parent.top-this.instance.offset.parent.top;E._propagate("toSortable",C)}if(this.instance.currentItem){this.instance._mouseDrag(C)}}else{if(this.instance.isOver){this.instance.isOver=0;this.instance.cancelHelperRemoval=true;this.instance.options.revert=false;this.instance._mouseStop(C,true);this.instance.options.helper=this.instance.options._helper;this.instance.currentItem.remove();if(this.instance.placeholder){this.instance.placeholder.remove()}E._propagate("fromSortable",C)}}})}});A.ui.plugin.add("draggable","cursor",{start:function(C,D){var B=A("body");if(B.css("cursor")){D.options._cursor=B.css("cursor")}B.css("cursor",D.options.cursor)},stop:function(B,C){if(C.options._cursor){A("body").css("cursor",C.options._cursor)}}});A.ui.plugin.add("draggable","iframeFix",{start:function(B,C){A(C.options.iframeFix===true?"iframe":C.options.iframeFix).each(function(){A('<div class="ui-draggable-iframeFix" style="background: #fff;"></div>').css({width:this.offsetWidth+"px",height:this.offsetHeight+"px",position:"absolute",opacity:"0.001",zIndex:1000}).css(A(this).offset()).appendTo("body")})},stop:function(B,C){A("div.ui-draggable-iframeFix").each(function(){this.parentNode.removeChild(this)})}});A.ui.plugin.add("draggable","opacity",{start:function(C,D){var B=A(D.helper);if(B.css("opacity")){D.options._opacity=B.css("opacity")}B.css("opacity",D.options.opacity)},stop:function(B,C){if(C.options._opacity){A(C.helper).css("opacity",C.options._opacity)}}});A.ui.plugin.add("draggable","scroll",{start:function(C,D){var E=D.options;var B=A(this).data("draggable");if(B.scrollParent[0]!=document&&B.scrollParent[0].tagName!="HTML"){B.overflowOffset=B.scrollParent.offset()}},drag:function(D,E){var F=E.options,B=false;var C=A(this).data("draggable");if(C.scrollParent[0]!=document&&C.scrollParent[0].tagName!="HTML"){if((C.overflowOffset.top+C.scrollParent[0].offsetHeight)-D.pageY<F.scrollSensitivity){C.scrollParent[0].scrollTop=B=C.scrollParent[0].scrollTop+F.scrollSpeed}else{if(D.pageY-C.overflowOffset.top<F.scrollSensitivity){C.scrollParent[0].scrollTop=B=C.scrollParent[0].scrollTop-F.scrollSpeed}}if((C.overflowOffset.left+C.scrollParent[0].offsetWidth)-D.pageX<F.scrollSensitivity){C.scrollParent[0].scrollLeft=B=C.scrollParent[0].scrollLeft+F.scrollSpeed}else{if(D.pageX-C.overflowOffset.left<F.scrollSensitivity){C.scrollParent[0].scrollLeft=B=C.scrollParent[0].scrollLeft-F.scrollSpeed}}}else{if(D.pageY-A(document).scrollTop()<F.scrollSensitivity){B=A(document).scrollTop(A(document).scrollTop()-F.scrollSpeed)}else{if(A(window).height()-(D.pageY-A(document).scrollTop())<F.scrollSensitivity){B=A(document).scrollTop(A(document).scrollTop()+F.scrollSpeed)}}if(D.pageX-A(document).scrollLeft()<F.scrollSensitivity){B=A(document).scrollLeft(A(document).scrollLeft()-F.scrollSpeed)}else{if(A(window).width()-(D.pageX-A(document).scrollLeft())<F.scrollSensitivity){B=A(document).scrollLeft(A(document).scrollLeft()+F.scrollSpeed)}}}if(B!==false&&A.ui.ddmanager&&!F.dropBehaviour){A.ui.ddmanager.prepareOffsets(C,D)}if(B!==false&&C.cssPosition=="absolute"&&C.scrollParent[0]!=document&&A.ui.contains(C.scrollParent[0],C.offsetParent[0])){C.offset.parent=C._getParentOffset()}if(B!==false&&C.cssPosition=="relative"&&!(C.scrollParent[0]!=document&&C.scrollParent[0]!=C.offsetParent[0])){C.offset.relative=C._getRelativeOffset()}}});A.ui.plugin.add("draggable","snap",{start:function(B,D){var C=A(this).data("draggable");C.snapElements=[];A(D.options.snap.constructor!=String?(D.options.snap.items||":data(draggable)"):D.options.snap).each(function(){var F=A(this);var E=F.offset();if(this!=C.element[0]){C.snapElements.push({item:this,width:F.outerWidth(),height:F.outerHeight(),top:E.top,left:E.left})}})},drag:function(M,K){var E=A(this).data("draggable");var Q=K.options.snapTolerance;var P=K.absolutePosition.left,O=P+E.helperProportions.width,D=K.absolutePosition.top,C=D+E.helperProportions.height;for(var N=E.snapElements.length-1;N>=0;N--){var L=E.snapElements[N].left,J=L+E.snapElements[N].width,I=E.snapElements[N].top,S=I+E.snapElements[N].height;if(!((L-Q<P&&P<J+Q&&I-Q<D&&D<S+Q)||(L-Q<P&&P<J+Q&&I-Q<C&&C<S+Q)||(L-Q<O&&O<J+Q&&I-Q<D&&D<S+Q)||(L-Q<O&&O<J+Q&&I-Q<C&&C<S+Q))){if(E.snapElements[N].snapping){(E.options.snap.release&&E.options.snap.release.call(E.element,M,A.extend(E._uiHash(),{snapItem:E.snapElements[N].item})))}E.snapElements[N].snapping=false;continue}if(K.options.snapMode!="inner"){var B=Math.abs(I-C)<=Q;var R=Math.abs(S-D)<=Q;var G=Math.abs(L-O)<=Q;var H=Math.abs(J-P)<=Q;if(B){K.position.top=E._convertPositionTo("relative",{top:I-E.helperProportions.height,left:0}).top}if(R){K.position.top=E._convertPositionTo("relative",{top:S,left:0}).top}if(G){K.position.left=E._convertPositionTo("relative",{top:0,left:L-E.helperProportions.width}).left}if(H){K.position.left=E._convertPositionTo("relative",{top:0,left:J}).left}}var F=(B||R||G||H);if(K.options.snapMode!="outer"){var B=Math.abs(I-D)<=Q;var R=Math.abs(S-C)<=Q;var G=Math.abs(L-P)<=Q;var H=Math.abs(J-O)<=Q;if(B){K.position.top=E._convertPositionTo("relative",{top:I,left:0}).top}if(R){K.position.top=E._convertPositionTo("relative",{top:S-E.helperProportions.height,left:0}).top}if(G){K.position.left=E._convertPositionTo("relative",{top:0,left:L}).left}if(H){K.position.left=E._convertPositionTo("relative",{top:0,left:J-E.helperProportions.width}).left}}if(!E.snapElements[N].snapping&&(B||R||G||H||F)){(E.options.snap.snap&&E.options.snap.snap.call(E.element,M,A.extend(E._uiHash(),{snapItem:E.snapElements[N].item})))}E.snapElements[N].snapping=(B||R||G||H||F)}}});A.ui.plugin.add("draggable","stack",{start:function(B,C){var D=A.makeArray(A(C.options.stack.group)).sort(function(F,E){return(parseInt(A(F).css("zIndex"),10)||C.options.stack.min)-(parseInt(A(E).css("zIndex"),10)||C.options.stack.min)});A(D).each(function(E){this.style.zIndex=C.options.stack.min+E});this[0].style.zIndex=C.options.stack.min+D.length}});A.ui.plugin.add("draggable","zIndex",{start:function(C,D){var B=A(D.helper);if(B.css("zIndex")){D.options._zIndex=B.css("zIndex")}B.css("zIndex",D.options.zIndex)},stop:function(B,C){if(C.options._zIndex){A(C.helper).css("zIndex",C.options._zIndex)}}})})(jQuery);/*
 * jQuery UI Sortable 1.6
 *
 * Copyright (c) 2008 AUTHORS.txt (http://ui.jquery.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Sortables
 *
 * Depends:
 *	ui.core.js
 */
(function(A){A.widget("ui.sortable",A.extend({},A.ui.mouse,{_init:function(){var B=this.options;this.containerCache={};this.element.addClass("ui-sortable");this.refresh();this.floating=this.items.length?(/left|right/).test(this.items[0].item.css("float")):false;this.offset=this.element.offset();this._mouseInit()},destroy:function(){this.element.removeClass("ui-sortable ui-sortable-disabled").removeData("sortable").unbind(".sortable");this._mouseDestroy();for(var B=this.items.length-1;B>=0;B--){this.items[B].item.removeData("sortable-item")}},_mouseCapture:function(E,F){if(this.reverting){return false}if(this.options.disabled||this.options.type=="static"){return false}this._refreshItems(E);var D=null,C=this,B=A(E.target).parents().each(function(){if(A.data(this,"sortable-item")==C){D=A(this);return false}});if(A.data(E.target,"sortable-item")==C){D=A(E.target)}if(!D){return false}if(this.options.handle&&!F){var G=false;A(this.options.handle,D).find("*").andSelf().each(function(){if(this==E.target){G=true}});if(!G){return false}}this.currentItem=D;this._removeCurrentsFromItems();return true},_mouseStart:function(D,E,B){var F=this.options;this.currentContainer=this;this.refreshPositions();this.helper=this._createHelper(D);this._cacheHelperProportions();this._cacheMargins();this.scrollParent=this.helper.scrollParent();this.offset=this.currentItem.offset();this.offset={top:this.offset.top-this.margins.top,left:this.offset.left-this.margins.left};this.helper.css("position","absolute");this.cssPosition=this.helper.css("position");A.extend(this.offset,{click:{left:D.pageX-this.offset.left,top:D.pageY-this.offset.top},parent:this._getParentOffset(),relative:this._getRelativeOffset()});if(F.cursorAt){this._adjustOffsetFromHelper(F.cursorAt)}this.originalPosition=this._generatePosition(D);this.domPosition={prev:this.currentItem.prev()[0],parent:this.currentItem.parent()[0]};if(this.helper[0]!=this.currentItem[0]){this.currentItem.hide()}this._createPlaceholder();if(F.containment){this._setContainment()}this._propagate("start",D);if(!this._preserveHelperProportions){this._cacheHelperProportions()}if(!B){for(var C=this.containers.length-1;C>=0;C--){this.containers[C]._propagate("activate",D,this)}}if(A.ui.ddmanager){A.ui.ddmanager.current=this}if(A.ui.ddmanager&&!F.dropBehaviour){A.ui.ddmanager.prepareOffsets(this,D)}this.dragging=true;this.helper.addClass("ui-sortable-helper");this._mouseDrag(D);return true},_mouseDrag:function(E){this.position=this._generatePosition(E);this.positionAbs=this._convertPositionTo("absolute");if(!this.lastPositionAbs){this.lastPositionAbs=this.positionAbs}A.ui.plugin.call(this,"sort",[E,this._ui()]);this.positionAbs=this._convertPositionTo("absolute");if(!this.options.axis||this.options.axis!="y"){this.helper[0].style.left=this.position.left+"px"}if(!this.options.axis||this.options.axis!="x"){this.helper[0].style.top=this.position.top+"px"}for(var C=this.items.length-1;C>=0;C--){var D=this.items[C],B=D.item[0],F=this._intersectsWithPointer(D);if(!F){continue}if(B!=this.currentItem[0]&&this.placeholder[F==1?"next":"prev"]()[0]!=B&&!A.ui.contains(this.placeholder[0],B)&&(this.options.type=="semi-dynamic"?!A.ui.contains(this.element[0],B):true)){this.direction=F==1?"down":"up";if(this.options.tolerance=="pointer"||this._intersectsWithSides(D)){this.options.sortIndicator.call(this,E,D)}else{break}this._propagate("change",E);break}}this._contactContainers(E);if(A.ui.ddmanager){A.ui.ddmanager.drag(this,E)}this._trigger("sort",E,this._ui());this.lastPositionAbs=this.positionAbs;return false},_mouseStop:function(C,D){if(!C){return }if(A.ui.ddmanager&&!this.options.dropBehaviour){A.ui.ddmanager.drop(this,C)}if(this.options.revert){var B=this;var E=B.placeholder.offset();B.reverting=true;A(this.helper).animate({left:E.left-this.offset.parent.left-B.margins.left+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollLeft),top:E.top-this.offset.parent.top-B.margins.top+(this.offsetParent[0]==document.body?0:this.offsetParent[0].scrollTop)},parseInt(this.options.revert,10)||500,function(){B._clear(C)})}else{this._clear(C,D)}return false},cancel:function(){if(this.dragging){this._mouseUp();if(this.options.helper=="original"){this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else{this.currentItem.show()}for(var B=this.containers.length-1;B>=0;B--){this.containers[B]._propagate("deactivate",null,this);if(this.containers[B].containerCache.over){this.containers[B]._propagate("out",null,this);this.containers[B].containerCache.over=0}}}if(this.placeholder[0].parentNode){this.placeholder[0].parentNode.removeChild(this.placeholder[0])}if(this.options.helper!="original"&&this.helper&&this.helper[0].parentNode){this.helper.remove()}A.extend(this,{helper:null,dragging:false,reverting:false,_noFinalSort:null});if(this.domPosition.prev){A(this.domPosition.prev).after(this.currentItem)}else{A(this.domPosition.parent).prepend(this.currentItem)}return true},serialize:function(D){var B=this._getItemsAsjQuery(D&&D.connected);var C=[];D=D||{};A(B).each(function(){var E=(A(D.item||this).attr(D.attribute||"id")||"").match(D.expression||(/(.+)[-=_](.+)/));if(E){C.push((D.key||E[1]+"[]")+"="+(D.key&&D.expression?E[1]:E[2]))}});return C.join("&")},toArray:function(D){var B=this._getItemsAsjQuery(D&&D.connected);var C=[];D=D||{};B.each(function(){C.push(A(D.item||this).attr(D.attribute||"id")||"")});return C},_intersectsWith:function(K){var D=this.positionAbs.left,C=D+this.helperProportions.width,J=this.positionAbs.top,I=J+this.helperProportions.height;var E=K.left,B=E+K.width,L=K.top,H=L+K.height;var M=this.offset.click.top,G=this.offset.click.left;var F=(J+M)>L&&(J+M)<H&&(D+G)>E&&(D+G)<B;if(this.options.tolerance=="pointer"||this.options.forcePointerForContainers||(this.options.tolerance!="pointer"&&this.helperProportions[this.floating?"width":"height"]>K[this.floating?"width":"height"])){return F}else{return(E<D+(this.helperProportions.width/2)&&C-(this.helperProportions.width/2)<B&&L<J+(this.helperProportions.height/2)&&I-(this.helperProportions.height/2)<H)}},_intersectsWithPointer:function(D){var E=A.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,D.top,D.height),C=A.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,D.left,D.width),G=E&&C,B=this._getDragVerticalDirection(),F=this._getDragHorizontalDirection();if(!G){return false}return this.floating?(((F&&F=="right")||B=="down")?2:1):(B&&(B=="down"?2:1))},_intersectsWithSides:function(E){var C=A.ui.isOverAxis(this.positionAbs.top+this.offset.click.top,E.top+(E.height/2),E.height),D=A.ui.isOverAxis(this.positionAbs.left+this.offset.click.left,E.left+(E.width/2),E.width),B=this._getDragVerticalDirection(),F=this._getDragHorizontalDirection();if(this.floating&&F){return((F=="right"&&D)||(F=="left"&&!D))}else{return B&&((B=="down"&&C)||(B=="up"&&!C))}},_getDragVerticalDirection:function(){var B=this.positionAbs.top-this.lastPositionAbs.top;return B!=0&&(B>0?"down":"up")},_getDragHorizontalDirection:function(){var B=this.positionAbs.left-this.lastPositionAbs.left;return B!=0&&(B>0?"right":"left")},refresh:function(B){this._refreshItems(B);this.refreshPositions()},_getItemsAsjQuery:function(G){var C=this;var B=[];var E=[];if(this.options.connectWith&&G){for(var F=this.options.connectWith.length-1;F>=0;F--){var I=A(this.options.connectWith[F]);for(var D=I.length-1;D>=0;D--){var H=A.data(I[D],"sortable");if(H&&H!=this&&!H.options.disabled){E.push([A.isFunction(H.options.items)?H.options.items.call(H.element):A(H.options.items,H.element).not(".ui-sortable-helper"),H])}}}}E.push([A.isFunction(this.options.items)?this.options.items.call(this.element,null,{options:this.options,item:this.currentItem}):A(this.options.items,this.element).not(".ui-sortable-helper"),this]);for(var F=E.length-1;F>=0;F--){E[F][0].each(function(){B.push(this)})}return A(B)},_removeCurrentsFromItems:function(){var D=this.currentItem.find(":data(sortable-item)");for(var C=0;C<this.items.length;C++){for(var B=0;B<D.length;B++){if(D[B]==this.items[C].item[0]){this.items.splice(C,1)}}}},_refreshItems:function(B){this.items=[];this.containers=[this];var H=this.items;var M=this;var F=[[A.isFunction(this.options.items)?this.options.items.call(this.element[0],B,{item:this.currentItem}):A(this.options.items,this.element),this]];if(this.options.connectWith){for(var E=this.options.connectWith.length-1;E>=0;E--){var J=A(this.options.connectWith[E]);for(var D=J.length-1;D>=0;D--){var G=A.data(J[D],"sortable");if(G&&G!=this&&!G.options.disabled){F.push([A.isFunction(G.options.items)?G.options.items.call(G.element[0],B,{item:this.currentItem}):A(G.options.items,G.element),G]);this.containers.push(G)}}}}for(var E=F.length-1;E>=0;E--){var I=F[E][1];var C=F[E][0];for(var D=0,K=C.length;D<K;D++){var L=A(C[D]);L.data("sortable-item",I);H.push({item:L,instance:I,width:0,height:0,left:0,top:0})}}},refreshPositions:function(B){if(this.offsetParent&&this.helper){this.offset.parent=this._getParentOffset()}for(var D=this.items.length-1;D>=0;D--){var E=this.items[D];if(E.instance!=this.currentContainer&&this.currentContainer&&E.item[0]!=this.currentItem[0]){continue}var C=this.options.toleranceElement?A(this.options.toleranceElement,E.item):E.item;if(!B){if(this.options.accurateIntersection){E.width=C.outerWidth();E.height=C.outerHeight()}else{E.width=C[0].offsetWidth;E.height=C[0].offsetHeight}}var F=C.offset();E.left=F.left;E.top=F.top}if(this.options.custom&&this.options.custom.refreshContainers){this.options.custom.refreshContainers.call(this)}else{for(var D=this.containers.length-1;D>=0;D--){var F=this.containers[D].element.offset();this.containers[D].containerCache.left=F.left;this.containers[D].containerCache.top=F.top;this.containers[D].containerCache.width=this.containers[D].element.outerWidth();this.containers[D].containerCache.height=this.containers[D].element.outerHeight()}}},_createPlaceholder:function(D){var B=D||this,E=B.options;if(!E.placeholder||E.placeholder.constructor==String){var C=E.placeholder;E.placeholder={element:function(){var F=A(document.createElement(B.currentItem[0].nodeName)).addClass(C||B.currentItem[0].className+" ui-sortable-placeholder").removeClass("ui-sortable-helper")[0];if(!C){F.style.visibility="hidden";document.body.appendChild(F);F.innerHTML=B.currentItem[0].innerHTML.replace(/name\=\"[^\"\']+\"/g,"").replace(/jQuery[0-9]+\=\"[^\"\']+\"/g,"");document.body.removeChild(F)}return F},update:function(F,G){if(C&&!E.forcePlaceholderSize){return }if(!G.height()){G.height(B.currentItem.innerHeight()-parseInt(B.currentItem.css("paddingTop")||0,10)-parseInt(B.currentItem.css("paddingBottom")||0,10))}if(!G.width()){G.width(B.currentItem.innerWidth()-parseInt(B.currentItem.css("paddingLeft")||0,10)-parseInt(B.currentItem.css("paddingRight")||0,10))}}}}B.placeholder=A(E.placeholder.element.call(B.element,B.currentItem));B.currentItem.after(B.placeholder);E.placeholder.update(B,B.placeholder)},_contactContainers:function(D){for(var C=this.containers.length-1;C>=0;C--){if(this._intersectsWith(this.containers[C].containerCache)){if(!this.containers[C].containerCache.over){if(this.currentContainer!=this.containers[C]){var H=10000;var G=null;var E=this.positionAbs[this.containers[C].floating?"left":"top"];for(var B=this.items.length-1;B>=0;B--){if(!A.ui.contains(this.containers[C].element[0],this.items[B].item[0])){continue}var F=this.items[B][this.containers[C].floating?"left":"top"];if(Math.abs(F-E)<H){H=Math.abs(F-E);G=this.items[B]}}if(!G&&!this.options.dropOnEmpty){continue}this.currentContainer=this.containers[C];G?this.options.sortIndicator.call(this,D,G,null,true):this.options.sortIndicator.call(this,D,null,this.containers[C].element,true);this._propagate("change",D);this.containers[C]._propagate("change",D,this);this.options.placeholder.update(this.currentContainer,this.placeholder)}this.containers[C]._propagate("over",D,this);this.containers[C].containerCache.over=1}}else{if(this.containers[C].containerCache.over){this.containers[C]._propagate("out",D,this);this.containers[C].containerCache.over=0}}}},_createHelper:function(C){var D=this.options;var B=A.isFunction(D.helper)?A(D.helper.apply(this.element[0],[C,this.currentItem])):(D.helper=="clone"?this.currentItem.clone():this.currentItem);if(!B.parents("body").length){A(D.appendTo!="parent"?D.appendTo:this.currentItem[0].parentNode)[0].appendChild(B[0])}if(B[0]==this.currentItem[0]){this._storedCSS={width:this.currentItem[0].style.width,height:this.currentItem[0].style.height,position:this.currentItem.css("position"),top:this.currentItem.css("top"),left:this.currentItem.css("left")}}if(B[0].style.width==""||D.forceHelperSize){B.width(this.currentItem.width())}if(B[0].style.height==""||D.forceHelperSize){B.height(this.currentItem.height())}return B},_adjustOffsetFromHelper:function(B){if(B.left!=undefined){this.offset.click.left=B.left+this.margins.left}if(B.right!=undefined){this.offset.click.left=this.helperProportions.width-B.right+this.margins.left}if(B.top!=undefined){this.offset.click.top=B.top+this.margins.top}if(B.bottom!=undefined){this.offset.click.top=this.helperProportions.height-B.bottom+this.margins.top}},_getParentOffset:function(){this.offsetParent=this.helper.offsetParent();var B=this.offsetParent.offset();if((this.offsetParent[0]==document.body&&A.browser.mozilla)||(this.offsetParent[0].tagName&&this.offsetParent[0].tagName.toLowerCase()=="html"&&A.browser.msie)){B={top:0,left:0}}return{top:B.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:B.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if(this.cssPosition=="relative"){var B=this.currentItem.position();return{top:B.top-(parseInt(this.helper.css("top"),10)||0)+this.scrollParent.scrollTop(),left:B.left-(parseInt(this.helper.css("left"),10)||0)+this.scrollParent.scrollLeft()}}else{return{top:0,left:0}}},_cacheMargins:function(){this.margins={left:(parseInt(this.currentItem.css("marginLeft"),10)||0),top:(parseInt(this.currentItem.css("marginTop"),10)||0)}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var E=this.options;if(E.containment=="parent"){E.containment=this.helper[0].parentNode}if(E.containment=="document"||E.containment=="window"){this.containment=[0-this.offset.relative.left-this.offset.parent.left,0-this.offset.relative.top-this.offset.parent.top,A(E.containment=="document"?document:window).width()-this.offset.relative.left-this.offset.parent.left-this.margins.left-(parseInt(this.currentItem.css("marginRight"),10)||0),(A(E.containment=="document"?document:window).height()||document.body.parentNode.scrollHeight)-this.offset.relative.top-this.offset.parent.top-this.margins.top-(parseInt(this.currentItem.css("marginBottom"),10)||0)]}if(!(/^(document|window|parent)$/).test(E.containment)){var C=A(E.containment)[0];var D=A(E.containment).offset();var B=(A(C).css("overflow")!="hidden");this.containment=[D.left+(parseInt(A(C).css("borderLeftWidth"),10)||0)-this.offset.relative.left-this.offset.parent.left-this.margins.left,D.top+(parseInt(A(C).css("borderTopWidth"),10)||0)-this.offset.relative.top-this.offset.parent.top-this.margins.top,D.left+(B?Math.max(C.scrollWidth,C.offsetWidth):C.offsetWidth)-(parseInt(A(C).css("borderLeftWidth"),10)||0)-this.offset.relative.left-this.offset.parent.left-this.margins.left,D.top+(B?Math.max(C.scrollHeight,C.offsetHeight):C.offsetHeight)-(parseInt(A(C).css("borderTopWidth"),10)||0)-this.offset.relative.top-this.offset.parent.top-this.margins.top]}},_convertPositionTo:function(D,F){if(!F){F=this.position}var C=D=="absolute"?1:-1;var B=this[(this.cssPosition=="absolute"?"offset":"scroll")+"Parent"],E=(/(html|body)/i).test(B[0].tagName);return{top:(F.top+this.offset.relative.top*C+this.offset.parent.top*C+(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(E?0:B.scrollTop()))*C+this.margins.top*C),left:(F.left+this.offset.relative.left*C+this.offset.parent.left*C+(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():(E?0:B.scrollLeft()))*C+this.margins.left*C)}},_generatePosition:function(D){var G=this.options,C=this[(this.cssPosition=="absolute"?"offset":"scroll")+"Parent"],H=(/(html|body)/i).test(C[0].tagName);var B={top:(D.pageY-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+(this.cssPosition=="fixed"?-this.scrollParent.scrollTop():(H?0:C.scrollTop()))),left:(D.pageX-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+(this.cssPosition=="fixed"?-this.scrollParent.scrollLeft():(H?0:C.scrollLeft())))};if(!this.originalPosition){return B}if(this.containment){if(B.left<this.containment[0]){B.left=this.containment[0]}if(B.top<this.containment[1]){B.top=this.containment[1]}if(B.left+this.helperProportions.width>this.containment[2]){B.left=this.containment[2]-this.helperProportions.width}if(B.top+this.helperProportions.height>this.containment[3]){B.top=this.containment[3]-this.helperProportions.height}}if(G.grid){var F=this.originalPosition.top+Math.round((B.top-this.originalPosition.top)/G.grid[1])*G.grid[1];B.top=this.containment?(!(F<this.containment[1]||F>this.containment[3])?F:(!(F<this.containment[1])?F-G.grid[1]:F+G.grid[1])):F;var E=this.originalPosition.left+Math.round((B.left-this.originalPosition.left)/G.grid[0])*G.grid[0];B.left=this.containment?(!(E<this.containment[0]||E>this.containment[2])?E:(!(E<this.containment[0])?E-G.grid[0]:E+G.grid[0])):E}return B},_rearrange:function(G,F,C,E){C?C[0].appendChild(this.placeholder[0]):F.item[0].parentNode.insertBefore(this.placeholder[0],(this.direction=="down"?F.item[0]:F.item[0].nextSibling));this.counter=this.counter?++this.counter:1;var D=this,B=this.counter;window.setTimeout(function(){if(B==D.counter){D.refreshPositions(!E)}},0)},_clear:function(C,D){this.reverting=false;if(!this._noFinalSort){this.placeholder.before(this.currentItem)}this._noFinalSort=null;if(this.helper[0]==this.currentItem[0]){for(var B in this._storedCSS){if(this._storedCSS[B]=="auto"||this._storedCSS[B]=="static"){this._storedCSS[B]=""}}this.currentItem.css(this._storedCSS).removeClass("ui-sortable-helper")}else{this.currentItem.show()}if(this.domPosition.prev!=this.currentItem.prev().not(".ui-sortable-helper")[0]||this.domPosition.parent!=this.currentItem.parent()[0]){this._propagate("update",C,null,D)}if(!A.ui.contains(this.element[0],this.currentItem[0])){this._propagate("remove",C,null,D);for(var B=this.containers.length-1;B>=0;B--){if(A.ui.contains(this.containers[B].element[0],this.currentItem[0])){this.containers[B]._propagate("update",C,this,D);this.containers[B]._propagate("receive",C,this,D)}}}for(var B=this.containers.length-1;B>=0;B--){this.containers[B]._propagate("deactivate",C,this,D);if(this.containers[B].containerCache.over){this.containers[B]._propagate("out",C,this);this.containers[B].containerCache.over=0}}this.dragging=false;if(this.cancelHelperRemoval){this._propagate("beforeStop",C,null,D);this._propagate("stop",C,null,D);return false}this._propagate("beforeStop",C,null,D);this.placeholder[0].parentNode.removeChild(this.placeholder[0]);if(this.options.helper!="original"){this.helper.remove()}this.helper=null;this._propagate("stop",C,null,D);return true},_propagate:function(F,B,C,D){A.ui.plugin.call(this,F,[B,this._ui(C)]);var E=!D?this.element.triggerHandler(F=="sort"?F:"sort"+F,[B,this._ui(C)],this.options[F]):true;if(E===false){this.cancel()}},plugins:{},_ui:function(C){var B=C||this;return{helper:B.helper,placeholder:B.placeholder||A([]),position:B.position,absolutePosition:B.positionAbs,item:B.currentItem,sender:C?C.element:null}}}));A.extend(A.ui.sortable,{getter:"serialize toArray",version:"1.6",defaults:{accurateIntersection:true,appendTo:"parent",cancel:":input",delay:0,distance:1,dropOnEmpty:true,forcePlaceholderSize:false,forceHelperSize:false,helper:"original",items:"> *",scope:"default",scroll:true,scrollSensitivity:20,scrollSpeed:20,sortIndicator:A.ui.sortable.prototype._rearrange,tolerance:"default",zIndex:1000}});A.ui.plugin.add("sortable","cursor",{start:function(D,E){var C=A("body"),B=A(this).data("sortable");if(C.css("cursor")){B.options._cursor=C.css("cursor")}C.css("cursor",B.options.cursor)},beforeStop:function(C,D){var B=A(this).data("sortable");if(B.options._cursor){A("body").css("cursor",B.options._cursor)}}});A.ui.plugin.add("sortable","opacity",{start:function(D,E){var C=E.helper,B=A(this).data("sortable");if(C.css("opacity")){B.options._opacity=C.css("opacity")}C.css("opacity",B.options.opacity)},beforeStop:function(C,D){var B=A(this).data("sortable");if(B.options._opacity){A(D.helper).css("opacity",B.options._opacity)}}});A.ui.plugin.add("sortable","scroll",{start:function(C,D){var B=A(this).data("sortable"),E=B.options;if(B.scrollParent[0]!=document&&B.scrollParent[0].tagName!="HTML"){B.overflowOffset=B.scrollParent.offset()}},sort:function(D,E){var C=A(this).data("sortable"),F=C.options,B=false;if(C.scrollParent[0]!=document&&C.scrollParent[0].tagName!="HTML"){if((C.overflowOffset.top+C.scrollParent[0].offsetHeight)-D.pageY<F.scrollSensitivity){C.scrollParent[0].scrollTop=B=C.scrollParent[0].scrollTop+F.scrollSpeed}else{if(D.pageY-C.overflowOffset.top<F.scrollSensitivity){C.scrollParent[0].scrollTop=B=C.scrollParent[0].scrollTop-F.scrollSpeed}}if((C.overflowOffset.left+C.scrollParent[0].offsetWidth)-D.pageX<F.scrollSensitivity){C.scrollParent[0].scrollLeft=B=C.scrollParent[0].scrollLeft+F.scrollSpeed}else{if(D.pageX-C.overflowOffset.left<F.scrollSensitivity){C.scrollParent[0].scrollLeft=B=C.scrollParent[0].scrollLeft-F.scrollSpeed}}}else{if(D.pageY-A(document).scrollTop()<F.scrollSensitivity){B=A(document).scrollTop(A(document).scrollTop()-F.scrollSpeed)}else{if(A(window).height()-(D.pageY-A(document).scrollTop())<F.scrollSensitivity){B=A(document).scrollTop(A(document).scrollTop()+F.scrollSpeed)}}if(D.pageX-A(document).scrollLeft()<F.scrollSensitivity){B=A(document).scrollLeft(A(document).scrollLeft()-F.scrollSpeed)}else{if(A(window).width()-(D.pageX-A(document).scrollLeft())<F.scrollSensitivity){B=A(document).scrollLeft(A(document).scrollLeft()+F.scrollSpeed)}}}if(B!==false&&A.ui.ddmanager&&!F.dropBehaviour){A.ui.ddmanager.prepareOffsets(C,D)}if(B!==false&&C.cssPosition=="absolute"&&C.scrollParent[0]!=document&&A.ui.contains(C.scrollParent[0],C.offsetParent[0])){C.offset.parent=C._getParentOffset()}if(B!==false&&C.cssPosition=="relative"&&!(C.scrollParent[0]!=document&&C.scrollParent[0]!=C.offsetParent[0])){C.offset.relative=C._getRelativeOffset()}}});A.ui.plugin.add("sortable","zIndex",{start:function(D,E){var C=E.helper,B=A(this).data("sortable");if(C.css("zIndex")){B.options._zIndex=C.css("zIndex")}C.css("zIndex",B.options.zIndex)},beforeStop:function(C,D){var B=A(this).data("sortable");if(B.options._zIndex){A(D.helper).css("zIndex",B.options._zIndex=="auto"?"":B.options._zIndex)}}})})(jQuery);/*
 * jQuery UI Slider 1.6
 *
 * Copyright (c) 2008 AUTHORS.txt (http://ui.jquery.com/about)
 * Dual licensed under the MIT (MIT-LICENSE.txt)
 * and GPL (GPL-LICENSE.txt) licenses.
 *
 * http://docs.jquery.com/UI/Slider
 *
 * Depends:
 *	ui.core.js
 */
(function(A){A.fn.unwrap=A.fn.unwrap||function(B){return this.each(function(){A(this).parents(B).eq(0).after(this).remove()})};A.widget("ui.slider",{_init:function(){var B=this;this.element.addClass("ui-slider");this._initBoundaries();this.handle=A(this.options.handle,this.element);if(!this.handle.length){B.handle=B.generated=A(B.options.handles||[0]).map(function(){var D=A("<div/>").addClass("ui-slider-handle").appendTo(B.element);if(this.id){D.attr("id",this.id)}return D[0]})}var C=function(D){this.element=A(D);this.element.data("mouse",this);this.options=B.options;this.element.bind("mousedown",function(){if(B.currentHandle){this.blur(B.currentHandle)}B._focus(this,true)});this._mouseInit()};A.extend(C.prototype,A.ui.mouse,{_mouseCapture:function(){return true},_mouseStart:function(D){return B._start.call(B,D,this.element[0])},_mouseDrag:function(D){return B._drag.call(B,D,this.element[0])},_mouseStop:function(D){return B._stop.call(B,D,this.element[0])},trigger:function(D){this._mouseDown(D)}});A(this.handle).each(function(){new C(this)}).wrap('<a href="#" style="outline:none;border:none;"></a>').parent().bind("click",function(){return false}).bind("focus",function(D){B._focus(this.firstChild)}).bind("blur",function(D){B._blur(this.firstChild)}).bind("keydown",function(D){if(!B.options.noKeyboard){return B._keydown(D.keyCode,this.firstChild)}});this.element.bind("mousedown.slider",function(D){if(A(D.target).is(".ui-slider-handle")){return }B._click.apply(B,[D]);B.currentHandle.data("mouse").trigger(D);B.firstValue=B.firstValue+1});A.each(this.options.handles||[],function(D,E){B.moveTo(E.start,D,true)});if(!isNaN(this.options.startValue)){this.moveTo(this.options.startValue,0,true)}this.previousHandle=A(this.handle[0]);if(this.handle.length==2&&this.options.range){this._createRange()}},destroy:function(){this.element.removeClass("ui-slider ui-slider-disabled").removeData("slider").unbind(".slider");if(this.handle&&this.handle.length){this.handle.unwrap("a");this.handle.each(function(){var B=A(this).data("mouse");B&&B._mouseDestroy()})}this.generated&&this.generated.remove()},_start:function(B,C){var D=this.options;if(D.disabled){return false}this.actualSize={width:this.element.outerWidth(),height:this.element.outerHeight()};if(!this.currentHandle){this._focus(this.previousHandle,true)}this.offset=this.element.offset();this.handleOffset=this.currentHandle.offset();this.clickOffset={top:B.pageY-this.handleOffset.top,left:B.pageX-this.handleOffset.left};this.firstValue=this.value();this._propagate("start",B);this._drag(B,C);return true},_drag:function(C,E){var F=this.options;var B={top:C.pageY-this.offset.top-this.clickOffset.top,left:C.pageX-this.offset.left-this.clickOffset.left};if(!this.currentHandle){this._focus(this.previousHandle,true)}B.left=this._translateLimits(B.left,"x");B.top=this._translateLimits(B.top,"y");if(F.stepping.x){var D=this._convertValue(B.left,"x");D=this._round(D/F.stepping.x)*F.stepping.x;B.left=this._translateValue(D,"x")}if(F.stepping.y){var D=this._convertValue(B.top,"y");D=this._round(D/F.stepping.y)*F.stepping.y;B.top=this._translateValue(D,"y")}B.left=this._translateRange(B.left,"x");B.top=this._translateRange(B.top,"y");if(F.axis!="vertical"){this.currentHandle.css({left:B.left})}if(F.axis!="horizontal"){this.currentHandle.css({top:B.top})}this.currentHandle.data("mouse").sliderValue={x:this._round(this._convertValue(B.left,"x"))||0,y:this._round(this._convertValue(B.top,"y"))||0};if(this.rangeElement){this._updateRange()}this._propagate("slide",C);return false},_stop:function(B){this._propagate("stop",B);if(this.firstValue!=this.value()){this._propagate("change",B)}this._focus(this.currentHandle,true);return false},_round:function(B){return this.options.round?parseInt(B,10):parseFloat(B)},_setData:function(B,C){A.widget.prototype._setData.apply(this,arguments);if(/min|max|steps/.test(B)){this._initBoundaries()}if(B=="range"){C?this.handle.length==2&&this._createRange():this._removeRange()}},_initBoundaries:function(){var B=this.element[0],C=this.options;this.actualSize={width:this.element.outerWidth(),height:this.element.outerHeight()};A.extend(C,{axis:C.axis||(B.offsetWidth<B.offsetHeight?"vertical":"horizontal"),max:!isNaN(parseInt(C.max,10))?{x:parseInt(C.max,10),y:parseInt(C.max,10)}:({x:C.max&&C.max.x||100,y:C.max&&C.max.y||100}),min:!isNaN(parseInt(C.min,10))?{x:parseInt(C.min,10),y:parseInt(C.min,10)}:({x:C.min&&C.min.x||0,y:C.min&&C.min.y||0})});C.realMax={x:C.max.x-C.min.x,y:C.max.y-C.min.y};C.stepping={x:C.stepping&&C.stepping.x||parseInt(C.stepping,10)||(C.steps?C.realMax.x/(C.steps.x||parseInt(C.steps,10)||C.realMax.x):0),y:C.stepping&&C.stepping.y||parseInt(C.stepping,10)||(C.steps?C.realMax.y/(C.steps.y||parseInt(C.steps,10)||C.realMax.y):0)}},_keydown:function(F,E){if(this.options.disabled){return }var C=F;if(/(33|34|35|36|37|38|39|40)/.test(C)){var G=this.options,B,I;if(/(35|36)/.test(C)){B=(C==35)?G.max.x:G.min.x;I=(C==35)?G.max.y:G.min.y}else{var H=/(34|37|40)/.test(C)?"-=":"+=";var D=/(37|38|39|40)/.test(C)?"_oneStep":"_pageStep";B=H+this[D]("x");I=H+this[D]("y")}this.moveTo({x:B,y:I},E);return false}return true},_focus:function(B,C){this.currentHandle=A(B).addClass("ui-slider-handle-active");if(C){this.currentHandle.parent()[0].focus()}},_blur:function(B){A(B).removeClass("ui-slider-handle-active");if(this.currentHandle&&this.currentHandle[0]==B){this.previousHandle=this.currentHandle;this.currentHandle=null}},_click:function(C){var D=[C.pageX,C.pageY];var B=false;this.handle.each(function(){if(this==C.target){B=true}});if(B||this.options.disabled||!(this.currentHandle||this.previousHandle)){return }if(!this.currentHandle&&this.previousHandle){this._focus(this.previousHandle,true)}this.offset=this.element.offset();this.moveTo({y:this._convertValue(C.pageY-this.offset.top-this.currentHandle[0].offsetHeight/2,"y"),x:this._convertValue(C.pageX-this.offset.left-this.currentHandle[0].offsetWidth/2,"x")},null,!this.options.distance)},_createRange:function(){if(this.rangeElement){return }this.rangeElement=A("<div></div>").addClass("ui-slider-range").css({position:"absolute"}).appendTo(this.element);this._updateRange()},_removeRange:function(){this.rangeElement.remove();this.rangeElement=null},_updateRange:function(){var C=this.options.axis=="vertical"?"top":"left";var B=this.options.axis=="vertical"?"height":"width";this.rangeElement.css(C,(this._round(A(this.handle[0]).css(C))||0)+this._handleSize(0,this.options.axis=="vertical"?"y":"x")/2);this.rangeElement.css(B,(this._round(A(this.handle[1]).css(C))||0)-(this._round(A(this.handle[0]).css(C))||0))},_getRange:function(){return this.rangeElement?this._convertValue(this._round(this.rangeElement.css(this.options.axis=="vertical"?"height":"width")),this.options.axis=="vertical"?"y":"x"):null},_handleIndex:function(){return this.handle.index(this.currentHandle[0])},value:function(D,B){if(this.handle.length==1){this.currentHandle=this.handle}if(!B){B=this.options.axis=="vertical"?"y":"x"}var C=A(D!=undefined&&D!==null?this.handle[D]||D:this.currentHandle);if(C.data("mouse").sliderValue){return this._round(C.data("mouse").sliderValue[B])}else{return this._round(((this._round(C.css(B=="x"?"left":"top"))/(this.actualSize[B=="x"?"width":"height"]-this._handleSize(D,B)))*this.options.realMax[B])+this.options.min[B])}},_convertValue:function(C,B){return this.options.min[B]+(C/(this.actualSize[B=="x"?"width":"height"]-this._handleSize(null,B)))*this.options.realMax[B]},_translateValue:function(C,B){return((C-this.options.min[B])/this.options.realMax[B])*(this.actualSize[B=="x"?"width":"height"]-this._handleSize(null,B))},_translateRange:function(D,B){if(this.rangeElement){if(this.currentHandle[0]==this.handle[0]&&D>=this._translateValue(this.value(1),B)){D=this._translateValue(this.value(1,B)-this._oneStep(B),B)}if(this.currentHandle[0]==this.handle[1]&&D<=this._translateValue(this.value(0),B)){D=this._translateValue(this.value(0,B)+this._oneStep(B),B)}}if(this.options.handles){var C=this.options.handles[this._handleIndex()];if(D<this._translateValue(C.min,B)){D=this._translateValue(C.min,B)}else{if(D>this._translateValue(C.max,B)){D=this._translateValue(C.max,B)}}}return D},_translateLimits:function(C,B){if(C>=this.actualSize[B=="x"?"width":"height"]-this._handleSize(null,B)){C=this.actualSize[B=="x"?"width":"height"]-this._handleSize(null,B)}if(C<=0){C=0}return C},_handleSize:function(C,B){return A(C!=undefined&&C!==null?this.handle[C]:this.currentHandle)[0]["offset"+(B=="x"?"Width":"Height")]},_oneStep:function(B){return this.options.stepping[B]||1},_pageStep:function(B){return 10},moveTo:function(F,E,G){var H=this.options;this.actualSize={width:this.element.outerWidth(),height:this.element.outerHeight()};if(E==undefined&&!this.currentHandle&&this.handle.length!=1){return false}if(E==undefined&&!this.currentHandle){E=0}if(E!=undefined){this.currentHandle=this.previousHandle=A(this.handle[E]||E)}if(F.x!==undefined&&F.y!==undefined){var B=F.x,I=F.y}else{var B=F,I=F}if(B!==undefined&&B.constructor!=Number){var D=/^\-\=/.test(B),C=/^\+\=/.test(B);if(D||C){B=this.value(null,"x")+this._round(B.replace(D?"=":"+=",""))}else{B=isNaN(this._round(B))?undefined:this._round(B)}}if(I!==undefined&&I.constructor!=Number){var D=/^\-\=/.test(I),C=/^\+\=/.test(I);if(D||C){I=this.value(null,"y")+this._round(I.replace(D?"=":"+=",""))}else{I=isNaN(this._round(I))?undefined:this._round(I)}}if(H.axis!="vertical"&&B!==undefined){if(H.stepping.x){B=this._round(B/H.stepping.x)*H.stepping.x}B=this._translateValue(B,"x");B=this._translateLimits(B,"x");B=this._translateRange(B,"x");H.animate?this.currentHandle.stop().animate({left:B},(Math.abs(parseInt(this.currentHandle.css("left"),10)-B))*(!isNaN(parseInt(H.animate,10))?H.animate:5)):this.currentHandle.css({left:B})}if(H.axis!="horizontal"&&I!==undefined){if(H.stepping.y){I=this._round(I/H.stepping.y)*H.stepping.y}I=this._translateValue(I,"y");I=this._translateLimits(I,"y");I=this._translateRange(I,"y");H.animate?this.currentHandle.stop().animate({top:I},(Math.abs(parseInt(this.currentHandle.css("top"),10)-I))*(!isNaN(parseInt(H.animate,10))?H.animate:5)):this.currentHandle.css({top:I})}if(this.rangeElement){this._updateRange()}this.currentHandle.data("mouse").sliderValue={x:this._round(this._convertValue(B,"x"))||0,y:this._round(this._convertValue(I,"y"))||0};if(!G){this._propagate("start",null);this._propagate("slide",null);this._propagate("stop",null);this._propagate("change",null)}},_propagate:function(C,B){A.ui.plugin.call(this,C,[B,this.ui()]);this.element.triggerHandler(C=="slide"?C:"slide"+C,[B,this.ui()],this.options[C])},plugins:{},ui:function(B){return{options:this.options,handle:this.currentHandle,value:this.options.axis!="both"||!this.options.axis?this._round(this.value(null,this.options.axis=="vertical"?"y":"x")):{x:this._round(this.value(null,"x")),y:this._round(this.value(null,"y"))},range:this._getRange()}}});A.extend(A.ui.slider,{getter:"value",version:"1.6",defaults:{animate:false,distance:1,handle:".ui-slider-handle",round:true}})})(jQuery);


//date.js
// ===================================================================
// Author: Matt Kruse <matt@mattkruse.com>
// WWW: http://www.mattkruse.com/
//
// NOTICE: You may use this code for any purpose, commercial or
// private, without any further permission from the author. You may
// remove this notice from your final code if you wish, however it is
// appreciated by the author if at least my web site address is kept.
//
// You may *NOT* re-distribute this code in any way except through its
// use. That means, you can include it in your product, or your web
// site, or any other form where the code is actually being used. You
// may not put the plain javascript up on your site for download or
// include it in your javascript libraries for download. 
// If you wish to share this code with others, please just point them
// to the URL instead.
// Please DO NOT link directly to my .js files from your site. Copy
// the files to your server and use them there. Thank you.
// ===================================================================

var MONTH_NAMES=new Array('January','February','March','April','May','June','July','August','September','October','November','December','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec');var DAY_NAMES=new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sun','Mon','Tue','Wed','Thu','Fri','Sat');
function LZ(x){return(x<0||x>9?"":"0")+x}
function isDate(val,format){var date=getDateFromFormat(val,format);if(date==0){return false;}return true;}
function compareDates(date1,dateformat1,date2,dateformat2){var d1=getDateFromFormat(date1,dateformat1);var d2=getDateFromFormat(date2,dateformat2);if(d1==0 || d2==0){return -1;}else if(d1 > d2){return 1;}return 0;}
function formatDate(date,format){format=format+"";var result="";var i_format=0;var c="";var token="";var y=date.getYear()+"";var M=date.getMonth()+1;var d=date.getDate();var E=date.getDay();var H=date.getHours();var m=date.getMinutes();var s=date.getSeconds();var yyyy,yy,MMM,MM,dd,hh,h,mm,ss,ampm,HH,H,KK,K,kk,k;var value=new Object();if(y.length < 4){y=""+(y-0+1900);}value["y"]=""+y;value["yyyy"]=y;value["yy"]=y.substring(2,4);value["M"]=M;value["MM"]=LZ(M);value["MMM"]=MONTH_NAMES[M-1];value["NNN"]=MONTH_NAMES[M+11];value["d"]=d;value["dd"]=LZ(d);value["E"]=DAY_NAMES[E+7];value["EE"]=DAY_NAMES[E];value["H"]=H;value["HH"]=LZ(H);if(H==0){value["h"]=12;}else if(H>12){value["h"]=H-12;}else{value["h"]=H;}value["hh"]=LZ(value["h"]);if(H>11){value["K"]=H-12;}else{value["K"]=H;}value["k"]=H+1;value["KK"]=LZ(value["K"]);value["kk"]=LZ(value["k"]);if(H > 11){value["a"]="PM";}else{value["a"]="AM";}value["m"]=m;value["mm"]=LZ(m);value["s"]=s;value["ss"]=LZ(s);while(i_format < format.length){c=format.charAt(i_format);token="";while((format.charAt(i_format)==c) &&(i_format < format.length)){token += format.charAt(i_format++);}if(value[token] != null){result=result + value[token];}else{result=result + token;}}return result;}
function _isInteger(val){var digits="1234567890";for(var i=0;i < val.length;i++){if(digits.indexOf(val.charAt(i))==-1){return false;}}return true;}
function _getInt(str,i,minlength,maxlength){for(var x=maxlength;x>=minlength;x--){var token=str.substring(i,i+x);if(token.length < minlength){return null;}if(_isInteger(token)){return token;}}return null;}
function getDateFromFormat(val,format){val=val+"";format=format+"";var i_val=0;var i_format=0;var c="";var token="";var token2="";var x,y;var now=new Date();var year=now.getYear();var month=now.getMonth()+1;var date=1;var hh=now.getHours();var mm=now.getMinutes();var ss=now.getSeconds();var ampm="";while(i_format < format.length){c=format.charAt(i_format);token="";while((format.charAt(i_format)==c) &&(i_format < format.length)){token += format.charAt(i_format++);}if(token=="yyyy" || token=="yy" || token=="y"){if(token=="yyyy"){x=4;y=4;}if(token=="yy"){x=2;y=2;}if(token=="y"){x=2;y=4;}year=_getInt(val,i_val,x,y);if(year==null){return 0;}i_val += year.length;if(year.length==2){if(year > 70){year=1900+(year-0);}else{year=2000+(year-0);}}}else if(token=="MMM"||token=="NNN"){month=0;for(var i=0;i<MONTH_NAMES.length;i++){var month_name=MONTH_NAMES[i];if(val.substring(i_val,i_val+month_name.length).toLowerCase()==month_name.toLowerCase()){if(token=="MMM"||(token=="NNN"&&i>11)){month=i+1;if(month>12){month -= 12;}i_val += month_name.length;break;}}}if((month < 1)||(month>12)){return 0;}}else if(token=="EE"||token=="E"){for(var i=0;i<DAY_NAMES.length;i++){var day_name=DAY_NAMES[i];if(val.substring(i_val,i_val+day_name.length).toLowerCase()==day_name.toLowerCase()){i_val += day_name.length;break;}}}else if(token=="MM"||token=="M"){month=_getInt(val,i_val,token.length,2);if(month==null||(month<1)||(month>12)){return 0;}i_val+=month.length;}else if(token=="dd"||token=="d"){date=_getInt(val,i_val,token.length,2);if(date==null||(date<1)||(date>31)){return 0;}i_val+=date.length;}else if(token=="hh"||token=="h"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<1)||(hh>12)){return 0;}i_val+=hh.length;}else if(token=="HH"||token=="H"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<0)||(hh>23)){return 0;}i_val+=hh.length;}else if(token=="KK"||token=="K"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<0)||(hh>11)){return 0;}i_val+=hh.length;}else if(token=="kk"||token=="k"){hh=_getInt(val,i_val,token.length,2);if(hh==null||(hh<1)||(hh>24)){return 0;}i_val+=hh.length;hh--;}else if(token=="mm"||token=="m"){mm=_getInt(val,i_val,token.length,2);if(mm==null||(mm<0)||(mm>59)){return 0;}i_val+=mm.length;}else if(token=="ss"||token=="s"){ss=_getInt(val,i_val,token.length,2);if(ss==null||(ss<0)||(ss>59)){return 0;}i_val+=ss.length;}else if(token=="a"){if(val.substring(i_val,i_val+2).toLowerCase()=="am"){ampm="AM";}else if(val.substring(i_val,i_val+2).toLowerCase()=="pm"){ampm="PM";}else{return 0;}i_val+=2;}else{if(val.substring(i_val,i_val+token.length)!=token){return 0;}else{i_val+=token.length;}}}if(i_val != val.length){return 0;}if(month==2){if( ((year%4==0)&&(year%100 != 0) ) ||(year%400==0) ){if(date > 29){return 0;}}else{if(date > 28){return 0;}}}if((month==4)||(month==6)||(month==9)||(month==11)){if(date > 30){return 0;}}if(hh<12 && ampm=="PM"){hh=hh-0+12;}else if(hh>11 && ampm=="AM"){hh-=12;}var newdate=new Date(year,month-1,date,hh,mm,ss);return newdate.getTime();}
function parseDate(val){var preferEuro=(arguments.length==2)?arguments[1]:false;generalFormats=new Array('y-M-d','MMM d, y','MMM d,y','y-MMM-d','d-MMM-y','MMM d');monthFirst=new Array('M/d/y','M-d-y','M.d.y','MMM-d','M/d','M-d');dateFirst =new Array('d/M/y','d-M-y','d.M.y','d-MMM','d/M','d-M');var checkList=new Array('generalFormats',preferEuro?'dateFirst':'monthFirst',preferEuro?'monthFirst':'dateFirst');var d=null;for(var i=0;i<checkList.length;i++){var l=window[checkList[i]];for(var j=0;j<l.length;j++){d=getDateFromFormat(val,l[j]);if(d!=0){return new Date(d);}}}return null;}

//quiz/questionbase.js"></script>
/*
 * ************************************************************************************
 * This file contains the Javascript that are needed for RealCME courses 
 * ************************************************************************************
 */

// General Comments:
// For scored questions
// - the question identifier follows a naming convention:
// 		"com_realcme_id_QID" where 
// 		- QID = 'q001', 'q002' ... is the questionindex in the SCO
// - the objectives array contains the objectives ID that are in use in the SCO
// 	 The objectives are represented by their ICD-9 numbers following the naming convention:
//		"com_realcme_icd9_OID" where 
//		- OID is the ICD-9 subject area.
// - The following learner experience is expected:
//		- The user is given one and only one chance to answer a scored question (except for a 
// 		  Post-Test where the learner is given 2 chances). 
//		- If the user visits pages with a question that was already answered, 
//			- the question form should be disabled
//			- the result text should display the results for the already entered answer.
// - SCORM 2004 should allow for reading and writing the cmi.interactions. However, this is not
//   yet available in Moodle's SCORM implementation. Instead, we are using SCORM suspend_data
//	 to store the user's interactions and make sure that the "cmi.exit" property is set to "suspend"
//	 so that the data are passed back to the SCORM at the user's next visit.
// - The suspend data is a URL encoded string of name-value pairs. Each pair can be:
//		- a question identifier and the selected answer  
// 		- a short objective identifier and a score (raw-score + "_" + max-score)
//



// setting the variable used to track if question has been submitted (not SCORM-related)
var qSubmitted = false;			

/**
 * Checks whether a user has already answered the question displayed on the page and 
 * disables the form accordingly.
 * 
 * Should be called when loading the body of a page displaying a question form. 
 * 
 */
function checkSuspension(formName, question) {
	// Check if user has already answered the question
	var learnerAnswer = get_suspended_value(question.id);
	var completed = (learnerAnswer != null);
	if (completed) {
		//alert('Already Completed Form: ' + learnerAnswer);
		disable_radio_form(formName, learnerAnswer, true, true, 'label used');
	} else {
	}
	//return completed;
	return true;
}
/**
 * Validates a form containing a radio-button based question. If the input is valid, values are
 * recorded in the suspended data and cmi interaction and persisted in the database.
 * 
 * @param {Object} formName - the form name
 * @param {Object} question - the question
 * @param boolean setCompletion - if true mak the form completed
 */
function validateForm(formName, question, setCompletion) {
	 return false;
}

/**
  * Validates a form containing a radio-button based question. If the input is valid, values are
  * recorded in the suspended data and cmi interaction and persisted in the database.
  * 
  * @param {Object} formName - the form name
  * @param {Object} question - the question
  * @param boolean setCompletion - if true mak the form completed
*/
function validateLastPreTestForm(formName, question, setCompletion, allQuestions) {
    return false;
}

/**
 * Processes the last post form containing the last answer
 * 
 * @param {Object} formName - the form name
 * @param {Object} question - the question
 * @param boolean setCompletion - if true mak the form completed
 * @param array allQuestions - array of all questions
 * @param int passingScore - passing score (number of questions)
 * @param int maxAttempts - the maximum number of attempts allowed
 * @param boolean courseComplete - if true, records course completion as well.
 */
function validateLastPostTestForm(formName, question, setCompletion, allQuestions, passingScore, maxAttempts, courseComplete) {
	return false;
}

/**
  * Processes the last post form of a Post-Curriculum Assessment
  * 
  * @param {Object} formName - the form name
  * @param {Object} question - the question
  * @param boolean setCompletion - if true mak the form completed
  * @param array allQuestions - array of all questions
 */
function validateLastPostCurriculumTestForm(formName, question, setCompletion, allQuestions) {
  return false;
} 
 
/**
 * Suspend the scoid - used to record credit
 */
function suspendScoid() {
	if (get_suspended_value('scoid') == null) {
		var scoid = getURLParameter('scoid');
		set_suspended_value('scoid', scoid);
		persistData();
	}
}

/**
 * Ajax call to CMS to record credit and course completion
 * 
 */
function recordPostTest(i, scoid, recordCredit, recordCourseCompletion, percent_score) {
  return false;
}

function format_percent_score(score, maxscore) {
	if (score == null || maxscore == null || maxscore == 0 || isNaN(score) || isNaN(maxscore)) return 0;
	var percent_score_float = parseFloat(score) * 100.0 / parseFloat(maxscore);
	return parseFloat(Math.round(percent_score_float * 100.0)) / 100;
}

function computeScore(allQuestions) {
	var count = 0;
	for (var i=0;i<allQuestions.length;i++) {
		var q = allQuestions[i];
		var learnerAnswer = get_suspended_value(q.id);
		if (isCorrect(learnerAnswer, q)) {
			count++;
		}
	}
	return count;
}

function resetScore(allQuestions) {
	for (var i = 0; i < allQuestions.length; i++) {
		var q = allQuestions[i];
		remove_suspended_value(q.id);
	}	
	persistData();
}

function printReviewResults(scoid, revid, showQuestions, showLinks) {
    var scoids = new Array();
    var allq = new Array();
	var ids = revid.split(',');
	for (var j = 0; j < ids.length; j++) {
		var identifier = ids[j];
        var context = "#" + identifier;
	    $("#score-yours-value", context).html("100% <br/>");
	    $("#score-avg-value", context).html("50% <br/>");
	    $("#score-median-value", context).html("50% <br/>");
	    $("#score-details", context).show();
        if (showQuestions) {
          scoids[scoids.length] = 0;
          var qarr = getQuestionArrayPerSco(identifier);    
          allq[allq.length] = qarr;
          for (var i = 0; i < qarr.length; i++) {
              var q = qarr[i];
              if (q != null) {
                $("#allquestions", context).append(addQuestionResponseReviewHTML(i, q, q.correctAnswer));
              }
          }
        }
	}	
    if (showLinks) {
        $("#review-buttons").show();
        $("#review-links").show();
    }
    scroll_container();
    resize_container();

    if (showQuestions) {
      for (var j = 0; j < scoids.length; j++) {
    	var questions = allq[j];
    	for (var i = 0; i < questions.length; i++) {
    		var q = questions[i];
    		if (q != null) {
    			var imgId = "#qcompare-" + q.id;
    			printBenchmarkingChart(imgId, q.id, q.options, scoids[j], q.correctAnswer);
    		}
    	}
      }
      resize_container();
    }
}

/**
 * Returns the answer that had been recorded for the user.
 * 
 */
function fetchAnswer(question) {
	// always return the correct answer
  return question.correctAnswer;
}

/**
 * Returns true if the answer that had been recorded for the user is correct.
 */
function isCorrect(answer, question) {
	if (question == null) {
		return false;
	} else {
		return (answer == question.correctAnswer);
	}
}

/**
 * Returns the HTML icon text that indicates the status of a question (correct/incorrect).
 */
function fetchIcon(answer, question) {
	if (isCorrect(answer, question) ) {
		return '<img src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/check.gif" alt="correct" />';
	} else {
		return '<img style="" src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/x.gif" alt="incorrect" />';
	}
}

/**
 * Returns the HTML message text that indicates the status of a question (correct/incorrect).
 */
function fetchMessage(answer, question) {
	if (isCorrect(answer, question) ) {
		return "<div class='correctanswer'>Correct! </div>";
	} else {
		return "<div class='incorrectanswer'>Incorrect!  The correct answer is " + question.prettyCorrectAnswer + "</div>";
	}
}

/**
 * Returns the HTML feedback text appropriate with the status of a question (correct/incorrect).
 */
function fetchFeedback(answer, question) {
	if (isCorrect(answer, question) ) {
		return question.correctFeedback ;
	} else {
		return question.incorrectFeedback ;
	}

}

/**
 * Returns the references appropriate with the status of a question (correct/incorrect).
 */
function fetchReferences(answer, question) {
  if (isCorrect(answer, question) ) {
    return question.correctReferences;
  } else {
    return question.incorrectReferences;
  }

}

/**
 * Returns the pretty text of the answer chosen by the user.
 */
function fetchPrettyLearnerAnswer(answer, question) {
	var li = 0;
	var values = question.values;
	for (var i=0;i<values .length;i++) {
		if (values[i] == answer) {
			li = i;
		}
	}
	if ((!isNaN(li)) && (li >= 0) && (li < question.options.length)) {
		return getOption(question, li);
	} else {
		return '';
	}
}

/**
 * Returns the clue associated with the question selected by the user.
 */
function fetchClue(answer, question) {
	var i = parseInt(answer);
	if ((!isNaN(i)) && (i >= 1) && (i <= question.clues.length)) {
		return getClue(question, i - 1);
	} else {
		return '';
	}
}

/**
 * Returns the references for the clue associated with the question selected by the user.
 */
function fetchClueReferences(answer, question) {
  var i = parseInt(answer);
  if ((!isNaN(i)) && (i >= 1) && (i <= question.clues.length)) {
    return getClueReferences(question, i - 1);
  } else {
    return '';
  }
}

function questionref(cmiIndex, id, type, description, options, values, correctAnswerIndex, correctFeedback, correctReferences, incorrectFeedback, incorrectReferences, objectives, clues, cluesReferences, reviewPage) {
	this.cmiIndex = cmiIndex;
	this.id = id;
	this.type = type;
	this.description = description;
	this.options = options;
	this.values = values;
	if ((this.type == 'true-false') && options == null && values == null) {
		var arr = new Array(2);
		arr[0] = 'A) True';
		arr[1] = 'B) False';		
		this.options = arr;
		var arr = new Array(2);
		arr[0] = 'true';
		arr[1] = 'false';	
		this.values	= arr;
	}
	if ((this.type == 'choice') && (values == null)) {
		// set default values;
		arr = new Array(this.options.length);
		for (var i=0;i<this.options.length;i++) {
    		arr[i] = i + 1;
		}
		this.values = arr;
	}
	this.correctAnswer = null;
	this.prettyCorrectAnswer = null;
	if (correctAnswerIndex != null) {
		this.correctAnswer = this.values[correctAnswerIndex];
		this.prettyCorrectAnswer = this.options[correctAnswerIndex];
	}
	this.correctFeedback = correctFeedback;
	this.incorrectFeedback = incorrectFeedback;
    this.correctReferences = correctReferences;
    this.incorrectReferences = incorrectReferences;
	this.objectives = objectives;
	this.clues = clues;
    this.cluesReferences = cluesReferences;
	this.reviewPage = reviewPage;
}

function questionEval(cmiIndex, id, type, description, options, values, required, multiple, display) {
  this.cmiIndex = cmiIndex;
  this.id = id;
  this.type = type;
  this.description = description;
  this.options = options;
  this.values = values;
  if ((this.type == 'true-false') && options == null && values == null) {
    var arr = new Array(2);
    arr[0] = 'A) True';
    arr[1] = 'B) False';    
    this.options = arr;
    var arr = new Array(2);
    arr[0] = 'true';
    arr[1] = 'false'; 
    this.values = arr;
  }
  if ((this.type == 'choice') && (values == null)) {
    // set default values;
    arr = new Array(this.options.length);
    for (var i=0;i<this.options.length;i++) {
        arr[i] = i + 1;
    }
    this.values = arr;
  }
  this.required = required;  
  if ((multiple == null) || !multiple) {
    // only one answered allowed
    this.multiple = false; // radio buttons
  } else {
    this.multiple = true; // checkboxes
  }
  if ((display != null) && (display == 'horizontal')) {
    this.display = 'horizontal'
  } else {
    // default: vertical display
    this.display = 'vertical';
  }
}

function getOption(question, i) {
  var arr = question.options;
  if ((arr != null) && (!isNaN(i)) && (i >= 0) && (i < arr.length)) {
    return arr[i];
  } else {
    return '';
  }
}

function getValue(question, i) {
  var arr = question.values;
  if ((arr != null) && (!isNaN(i)) && (i >= 0) && (i < arr.length)) {
    return arr[i];
  } else {
    return '';
  }
}

function getObjective(question, i) {
  var arr = question.objectives;
  if ((arr != null) && (!isNaN(i)) && (i >= 0) && (i < arr.length)) {
    return arr[i];
  } else {
    return '';
  }
}

function getClue(question, i) {
  var arr = question.clues;
  if ((arr != null) && (!isNaN(i)) && (i >= 0) && (i < arr.length)) {
    return arr[i];
  } else {
    return '';
  }
}

function getClueReferences(question, i) {
  var arr = question.cluesReferences;
  if ((arr != null) && (!isNaN(i)) && (i >= 0) && (i < arr.length)) {
    return arr[i];
  } else {
    return '';
  }
}

/**
 * Information Gathering
 */
function questionIG(id, description, result, commentary, igReferences, shortdesc, rationale, rationaleReferences, importance, patientName) {  
	this.id = id;
	this.type = 'true-false';
	this.description = description;
	this.recordDescription = '';
	this.options = null;
	this.values = null;
	var arr = new Array(2);
	arr[0] = 'A) True';
	arr[1] = 'B) False';    
	this.options = arr;
	var arr = new Array(2);
	arr[0] = 'true';
	arr[1] = 'false'; 
	this.values = arr;
	this.importance = importance;
	var descprefix = 'Information Gathering';
	if (patientName != null && patientName.length > 0) {    
		descprefix += ' - ' + patientName;
	}
	if (this.importance > 0) {
	  // High important question - stored as correct answer true
	  this.correctAnswer = this.values[0];
	  this.prettyCorrectAnswer = this.options[0];
	  this.recordDescription = descprefix + ' - High Importance - ' + shortdesc;
	} else if (this.importance < 0) {
	    // Minor question - stored as correct answer false
	    this.correctAnswer = this.values[1];
	    this.prettyCorrectAnswer = this.options[1];
	    this.recordDescription = descprefix + ' - Minor Importance - ' + shortdesc;
	} else {
	  // Moderate question
	  this.correctAnswer = '';
	  this.recordDescription = descprefix + ' - Moderate Importance - ' + shortdesc;
	}
	this.result = result;
	this.commentary = commentary;
	this.igReferences = igReferences;
	this.shortdesc = shortdesc;
	this.rationale = rationale;
	this.rationaleReferences = rationaleReferences;
}

/**
 * Validates a form for Information Gathering. If the input is valid, values are
 * recorded in the suspended data. and persisted in the database.
 * 
 * @param {Object} formID - the form id
 * @param {Object} allQuestions - the array of all id
 */
function validateIGForm(formID, allQuestions, allowedQuestions) {
    return false;
}

function recordAllIG(allQuestions, allowedQuestions) {
	return false;
}

/**
 * Record an entry for an IG question
 */
function recordSingleIG(index, igquestion, learnerAnswer) {
    return false;
}


/**
 * Returns the answer that had been selected by the user in the Info Gathering question.
 * 
 */
function fetchIGAnswer(i) {
  return i;
}

/**
 * Checks whether a user has already selected the ith question from IG section
 * 
 * Should be called when loading the body of a page displaying an IG question form. 
 * 
 * Returns true if question on current page is completed.
 * 
 */
function checkIGSuspension(formID, allowedQuestions) {
  // Check the first question has been answered (all or none)
  var qid = 'ig1';
  var learnerAnswer = get_suspended_value(qid);
  var completed = (learnerAnswer != null);
  if ((learnerAnswer != null) && (learnerAnswer.length > 0)) {
	// repopulate
	for (var i=1; i<= allowedQuestions; i++) {
	  var j = get_suspended_value('ig'+i);
      $("input[name=igoption_" + j + "]", "#" + formID).attr('checked', true);
  }
	// disable all
	$("tr", "#" + formID).addClass('used');
	$("input", "#" + formID).attr('disabled', true);
  }
  return completed;
    }

function getIGOptionsHTML(allQuestions) {
  var s = '';
  for (var i = 1; i <= allQuestions.length; i++) {
    var q = allQuestions[i-1];
    var text = q.description;
    s += '<tr class="label"><td class="ql"><input type="checkbox" name="igoption_' + i + '" value="' + i + '" id="igoption_' + i + '" /> </td><td class="qr">' + text + '</td></tr>';
  }     
  return s;
}

function printIGScore(scoid, identifier) {
    $("#score-yours-value").html("100% <br/>");
    $("#score-yours").show();
    $("#score-avg-value").html("50% <br/>");
    $("#score-avg").show();
    $("#score-median-value").html("50% <br/>");
    $("#score-median").show();
}

function printIGResults(scoid, allQuestions) {  
}

function buildSummaryTable(tablename, allQuestions, imp, impText, ids) {
    
    for (var i = 1; i <= allQuestions.length; i++) {
      var index = i-1;
      var question = allQuestions[index];
      if (question.importance == imp) {
    	  var src = '';
          if (imp == 0) {
              src = '/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/chart_ig_moderate.png';
          } else if (imp == 1) {  
              src = '/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/chart_ig_high.png';
          } else {
              src = '/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/chart_ig_minor.png';
          }
    	  
        var row = '<tr>\n<td style="border: none;" nowrap>' 
          + '<div class="left" id="' + ids[i-1] + '_icon" style="width: 25px"><img src="/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/check.gif" alt="correct" /></div>' 
          + '<strong>' + question.shortdesc + '</strong></td>\n';
        row += '<td style="text-align: center; border: none;" rowspan="2" >'
        	+ '\n<div class="left rcmqreviewtext">\n<div class="left rcmqreviewcontainer">\n<div class="rcmqreviewchart">\n<img src="' + src + '" id="qcompare' + ids[i-1] + '"/></div>\n</div>\n</div>\n';
        row += '</td>\n</tr>\n';
        
        $(tablename).append(row);
        
        var row = '<tr>\n';
        row += '<td class="rationale" style="border: none; padding-top: 8px;"><em>' + question.rationale + '</em>\n</td>\n';
        row += '</tr>\n';
        
        $(tablename).append(row);
        
      }
      
    }     
}

function printBenchmarkingChart(imgId, questionID, options, scoid, correctAnswer) {  
	  var src = '/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/chart.png';
	  $(imgId).attr({'src': src});
}

/**
 * Chartnotes
 */

function populateChartNotes(title, visit) {
}

function submitChartForm() {
	return false;
}

/**
 * Course Ratings
 */

/**
 * Submit course ratings.
 * 
 * @param {Object} formName - the form name
 * @param {Object} cmiIndex - the interaction index
 * @param {Object} questionDescription - the question description
 * @param {Object} questionID - the question identifier
 * @param {Object} questionType - the question type
 * @param boolean setCompletion - if true mak the form completed
 */
function submitRatings(sliderID, formName, cmiIndex, questionDescription, questionID, questionType, setCompletion) {
    return true;
}

/**
 * Returns the ratings that a user has given to a course and disable the ratings form if already completed 
 *  
 */
function getRatingsSuspension(submitButtonID, questionID) {
  // Check if user has already answered the question
  var learnerAnswer = get_suspended_value(questionID);
  var completed = (learnerAnswer != null);
  if (completed) {  
    $('#'+submitButtonID).attr("disabled", "true"); 
    return learnerAnswer;
  } else {
    return -1;
  }
}


/*
 * OTHER
 */

function refreshInteractions(allQuestions, index) {
	// used to reset the cmiIndex to the proper value
	// needed because the lms does not repopuplate the interactions after a suspend
	for (var i = 0; i <= index; i++) {
		var q = allQuestions[i];
		storeDataValue('cmi.interactions.' + i + '.id', q.id);
	}
}

function refreshInteractionsFromID(ids) {
	// used to reset the cmiIndex to the proper value
	// needed because the lms does not repopuplate the interactions after a suspend
	var qids = ids.split(',');
	for (var i = 0; i < qids.length; i++) {
		storeDataValue('cmi.interactions.' + i + '.id', qids[i]);
	}	
}

function printQuestionOptionsAsInput(q) {
	var opt = q.options;
	if (q.type == 'choice') {
		for (var i = 1; i <= opt.length; i++) {
			document.writeln('<tr class="label"><td class="ql"><input type="radio" name="rad" value="' + i +'" id="radio' + i +'" /></td><td class="qr">' + getOption(q, i-1) + '</td></tr>');
		}			
	} else {
		// true-false
		document.writeln('<tr class="label"><td class="ql"><input type="radio" name="rad" value="true" id="radio1" /></td><td class="qr">' + getOption(q, 0) + '</td></tr>');
		document.writeln('<tr class="label"><td class="ql"><input type="radio" name="rad" value="false" id="radio2" /></td><td class="qr">' + getOption(q, 1) + '</td></tr>');
	}
}

function getQuestionOptionsHTML(q) {
  var s = '';
  var opt = q.options;
  if (q.type == 'choice') {
    for (var i = 1; i <= opt.length; i++) {
      s += '<tr class="label"><td class="ql"><input type="radio" name="rad" value="' + i +'" id="radio' + i +'" /></td><td class="qr">' + getOption(q, i-1) + '</td></tr>';
    }     
  } else {
    // true-false
    s += '<tr class="label"><td class="ql"><input type="radio" name="rad" value="true" id="radio1" /></td><td class="qr">' + getOption(q, 0) + '</td></tr>';
    s += '<tr class="label"><td class="ql"><input type="radio" name="rad" value="false" id="radio2" /></td><td class="qr">' + getOption(q, 1) + '</td></tr>';
  }
  return s;
}

function getQuestionOptionsAsTextHTML(q) {
  var s = '';
  var opt = q.options;
  for (var i = 1; i <= opt.length; i++) {
	  s += '<div class="singleoption">' + opt[i-1] + '</div>';
  }
  return s;
}

function printQuestionOptionsAsRow(q) {
	var opt = q.options;
	for (var i = 1; i <= opt.length; i++) {
		document.writeln('<tr class="label"><td class="qr">' + opt[i-1] + '</td></tr>');
	}			
}

// Use getImageLBText() to display a LB embeded in another script
function getImageLBText(fullImg, group, title, thumbImg, altText, height, width) {
  var url = window.location.href + '';
  var pos = url.lastIndexOf('/');
  url = url.substring(0, pos);
  var wh = '';  
  if ((height > 0) && (width > 0)) {
    wh = 'height="' + height + '" width="' + width + '"';
  } else if (height > 0) {
    wh = 'height="' + height + '"';
  } else if (width > 0) {
    wh = 'width="' + width + '"';
  }
  var s = '<a href="' + url + '/' + fullImg + '" rel="lytebox[' + group + ']" title="' + title + '"><img src="' + thumbImg + '" alt="' + altText + '" ' + wh + '></a>';
  return s;
}

// Use printImageLB() to display a LB embeded in HTML
function printImageLB(fullImg, group, title, thumbImg, altText, height, width) {
  var s = getImageLBText(fullImg, group, title, thumbImg, altText, height, width);
  document.write(s);
}

var references = new Array();
//@references

// Used to display reference numbers when passed in a string in JS scripts - ex. " + getReferenceTag('1,2,3') + "
function getReferenceTag(ranks){
    var s = '';
    var r = ranks.split(',');
    for (var i = 0; i < r.length; i++) {
      if (i > 0) {
        s += ',';
      }
      s += r[i];
    }
    if (s.length > 0) {
      s = '<sup>' + s + '</sup> ';
    }
    return s;
}

// Used to display reference numbers in standard HTML, outside of JS scripts - ex. <script language='JavaScript'>printReferenceTag('5')</script>
function printReferenceTag(ranks){
    var s = getReferenceTag(ranks);
    if (s.length > 0) {
      document.write(s);
    }
}

// Used to display full references at the bottom of course pages - ex. <p><script type="text/javascript">printReference(7, 1);</script></p>
function printReference(index, rank){
  if (index < references.length) {
      if (rank > 0) {
        document.write('<sup>' + rank + '</sup> ');
      }
      document.write(references[index]);
  }
}

// Used to display all references at the end of a course
function printAllReferences() {
  references.sort(function(x,y){ 
	      var a = String(x).toUpperCase(); 
	      var b = String(y).toUpperCase(); 
	      if (a > b) 
	         return 1 
	      if (a < b) 
	         return -1 
	      return 0; 
	    });
	for (var i = 1; i <= references.length; i++) {
      document.write('<p>&nbsp;&nbsp;' + references[i-1] + '</p>');
	}
}

/** 
 * Returns the HTML to be placed within an reference section
 */
function getReferencesHTML(indeces){
  var s = '';
  if ((indeces != null) && (indeces.length > 0)) {
    var r = indeces.split(',');
    for (var i = 1; i <= r.length; i++) {      
      s += '<p><sup>' + i + '</sup> ' + references[r[i-1]] + '</p>';
    }
  }
  if (s.length > 0) {
    s = '<p><span class="bold">References</span></p>' + s;
  }
  return s;
}

function alphabetizeNumber(n) {  
  var s = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty'];
  if (n < s.length) {
    return s[n];
  } else {
    return n + '';
  }
}

function alphabetizeRank(n) {  
  var s = ['zeroth', 'first', 'second', 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth'];
  if (n < s.length) {
    return s[n];
  } else {
    return n + '';
  }
}


//***********************************************************************************************************************************/
//	LyteBox v3.22
//
//	 Author: Markus F. Hay
//  Website: http://www.dolem.com/lytebox
//	   Date: October 2, 2007
//	License: Creative Commons Attribution 3.0 License (http://creativecommons.org/licenses/by/3.0/)
// Browsers: Tested successfully on WinXP with the following browsers (using no DOCTYPE and Strict/Transitional/Loose DOCTYPES):
//				* Firefox: 2.0.0.7, 1.5.0.12
//				* Internet Explorer: 7.0, 6.0 SP2, 5.5 SP2
//				* Opera: 9.23
//
// Releases: For up-to-date and complete release information, visit http://www.dolem.com/forum/showthread.php?tid=62
//				* v3.22 (10/02/07)
//				* v3.21 (09/30/07)
//				* v3.20 (07/12/07)
//				* v3.10 (05/28/07)
//				* v3.00 (05/15/07)
//				* v2.02 (11/13/06)
//
//   Credit: LyteBox was originally derived from the Lightbox class (v2.02) that was written by Lokesh Dhakar. For more
//			 information please visit http://huddletogether.com/projects/lightbox2/
//***********************************************************************************************************************************/
Array.prototype.removeDuplicates = function () { for (var i = 1; i < this.length; i++) { if (this[i][0] == this[i-1][0]) { this.splice(i,1); } } }
Array.prototype.empty = function () { for (var i = 0; i <= this.length; i++) { this.shift(); } }
String.prototype.trim = function () { return this.replace(/^\s+|\s+$/g, ''); }

function LyteBox() {
	/*** Start Global Configuration ***/
		this.theme				= 'grey';	// themes: grey (default), red, green, blue, gold
		this.hideFlash			= true;		// controls whether or not Flash objects should be hidden
		this.outerBorder		= true;		// controls whether to show the outer grey (or theme) border
		this.resizeSpeed		= 8;		// controls the speed of the image resizing (1=slowest and 10=fastest)
		this.maxOpacity			= 80;		// higher opacity = darker overlay, lower opacity = lighter overlay
		this.navType			= 1;		// 1 = "Prev/Next" buttons on top left and left (default), 2 = "<< prev | next >>" links next to image number
		this.autoResize			= true;		// controls whether or not images should be resized if larger than the browser window dimensions
		this.doAnimations		= true;		// controls whether or not "animate" Lytebox, i.e. resize transition between images, fade in/out effects, etc.
		
		this.borderSize			= 12;		// if you adjust the padding in the CSS, you will need to update this variable -- otherwise, leave this alone...
	/*** End Global Configuration ***/
	
	/*** Configure Slideshow Options ***/
		this.slideInterval		= 4000;		// Change value (milliseconds) to increase/decrease the time between "slides" (10000 = 10 seconds)
		this.showNavigation		= true;		// true to display Next/Prev buttons/text during slideshow, false to hide
		this.showClose			= true;		// true to display the Close button, false to hide
		this.showDetails		= true;		// true to display image details (caption, count), false to hide
		this.showPlayPause		= true;		// true to display pause/play buttons next to close button, false to hide
		this.autoEnd			= true;		// true to automatically close Lytebox after the last image is reached, false to keep open
		this.pauseOnNextClick	= false;	// true to pause the slideshow when the "Next" button is clicked
        this.pauseOnPrevClick 	= true;		// true to pause the slideshow when the "Prev" button is clicked
	/*** End Slideshow Configuration ***/
	
	if(this.resizeSpeed > 10) { this.resizeSpeed = 10; }
	if(this.resizeSpeed < 1) { resizeSpeed = 1; }
	this.resizeDuration = (11 - this.resizeSpeed) * 0.15;
	this.resizeWTimerArray		= new Array();
	this.resizeWTimerCount		= 0;
	this.resizeHTimerArray		= new Array();
	this.resizeHTimerCount		= 0;
	this.showContentTimerArray	= new Array();
	this.showContentTimerCount	= 0;
	this.overlayTimerArray		= new Array();
	this.overlayTimerCount		= 0;
	this.imageTimerArray		= new Array();
	this.imageTimerCount		= 0;
	this.timerIDArray			= new Array();
	this.timerIDCount			= 0;
	this.slideshowIDArray		= new Array();
	this.slideshowIDCount		= 0;
	this.imageArray	 = new Array();
	this.activeImage = null;
	this.slideArray	 = new Array();
	this.activeSlide = null;
	this.frameArray	 = new Array();
	this.activeFrame = null;
	this.displayInTopFrame = true;
	this.checkFrame();
	this.isSlideshow = false;
	this.isLyteframe = false;
	/*@cc_on
		/*@if (@_jscript)
			this.ie = (document.all && !window.opera) ? true : false;
		/*@else @*/
			this.ie = false;
		/*@end
	@*/
	this.ie7 = (this.ie && window.XMLHttpRequest);	
	this.initialize();
	//alert('parent.window.name ' + parent.window.name);
}
LyteBox.prototype.initialize = function() {
	this.updateLyteboxItems();
	var objBody = this.doc.getElementsByTagName("body").item(0);	
	if (this.doc.getElementById('lbOverlay')) {
		objBody.removeChild(this.doc.getElementById("lbOverlay"));
		objBody.removeChild(this.doc.getElementById("lbMain"));
	}
	var objOverlay = this.doc.createElement("div");
		objOverlay.setAttribute('id','lbOverlay');
		objOverlay.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		if ((this.ie && !this.ie7) || (this.ie7 && this.doc.compatMode == 'BackCompat')) {
			objOverlay.style.position = 'absolute';
		}
		objOverlay.style.display = 'none';
		objBody.appendChild(objOverlay);
	var objLytebox = this.doc.createElement("div");
		objLytebox.setAttribute('id','lbMain');
		objLytebox.style.display = 'none';
		objBody.appendChild(objLytebox);
	var objOuterContainer = this.doc.createElement("div");
		objOuterContainer.setAttribute('id','lbOuterContainer');
		objOuterContainer.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objLytebox.appendChild(objOuterContainer);
	var objIframeContainer = this.doc.createElement("div");
		objIframeContainer.setAttribute('id','lbIframeContainer');
		objIframeContainer.style.display = 'none';
		objOuterContainer.appendChild(objIframeContainer);
	var objIframe = this.doc.createElement("iframe");
		objIframe.setAttribute('id','lbIframe');
		objIframe.setAttribute('name','lbIframe');
		objIframe.style.display = 'none';
		objIframeContainer.appendChild(objIframe);
	var objImageContainer = this.doc.createElement("div");
		objImageContainer.setAttribute('id','lbImageContainer');
		objOuterContainer.appendChild(objImageContainer);
	var objLyteboxImage = this.doc.createElement("img");
		objLyteboxImage.setAttribute('id','lbImage');
		objImageContainer.appendChild(objLyteboxImage);
	var objLoading = this.doc.createElement("div");
		objLoading.setAttribute('id','lbLoading');
		objOuterContainer.appendChild(objLoading);
	var objDetailsContainer = this.doc.createElement("div");
		objDetailsContainer.setAttribute('id','lbDetailsContainer');
		objDetailsContainer.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objLytebox.appendChild(objDetailsContainer);
	var objDetailsData =this.doc.createElement("div");
		objDetailsData.setAttribute('id','lbDetailsData');
		objDetailsData.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objDetailsContainer.appendChild(objDetailsData);
	var objDetails = this.doc.createElement("div");
		objDetails.setAttribute('id','lbDetails');
		objDetailsData.appendChild(objDetails);
	var objCaption = this.doc.createElement("span");
		objCaption.setAttribute('id','lbCaption');
		objDetails.appendChild(objCaption);
	var objHoverNav = this.doc.createElement("div");
		objHoverNav.setAttribute('id','lbHoverNav');
		objImageContainer.appendChild(objHoverNav);
	var objBottomNav = this.doc.createElement("div");
		objBottomNav.setAttribute('id','lbBottomNav');
		objDetailsData.appendChild(objBottomNav);
	var objPrev = this.doc.createElement("a");
		objPrev.setAttribute('id','lbPrev');
		objPrev.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objPrev.setAttribute('href','#');
		objHoverNav.appendChild(objPrev);
	var objNext = this.doc.createElement("a");
		objNext.setAttribute('id','lbNext');
		objNext.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objNext.setAttribute('href','#');
		objHoverNav.appendChild(objNext);
	var objNumberDisplay = this.doc.createElement("span");
		objNumberDisplay.setAttribute('id','lbNumberDisplay');
		objDetails.appendChild(objNumberDisplay);
	var objNavDisplay = this.doc.createElement("span");
		objNavDisplay.setAttribute('id','lbNavDisplay');
		objNavDisplay.style.display = 'none';
		objDetails.appendChild(objNavDisplay);
	var objClose = this.doc.createElement("a");
		objClose.setAttribute('id','lbClose');
		objClose.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objClose.setAttribute('href','#');
		objBottomNav.appendChild(objClose);
	var objPause = this.doc.createElement("a");
		objPause.setAttribute('id','lbPause');
		objPause.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objPause.setAttribute('href','#');
		objPause.style.display = 'none';
		objBottomNav.appendChild(objPause);
	var objPlay = this.doc.createElement("a");
		objPlay.setAttribute('id','lbPlay');
		objPlay.setAttribute((this.ie ? 'className' : 'class'), this.theme);
		objPlay.setAttribute('href','#');
		objPlay.style.display = 'none';
		objBottomNav.appendChild(objPlay);
};
LyteBox.prototype.updateLyteboxItems = function() {	
	var anchors = (this.isFrame) ? window.parent.frames[window.name].document.getElementsByTagName('a') : document.getElementsByTagName('a');
	for (var i = 0; i < anchors.length; i++) {
		var anchor = anchors[i];
		var relAttribute = String(anchor.getAttribute('rel'));
		if (anchor.getAttribute('href')) {
			if (relAttribute.toLowerCase().match('lytebox')) {
				anchor.onclick = function () { myLytebox.start(this, false, false); return false; }
			} else if (relAttribute.toLowerCase().match('lyteshow')) {
				anchor.onclick = function () { myLytebox.start(this, true, false); return false; }
			} else if (relAttribute.toLowerCase().match('lyteframe')) {
				anchor.onclick = function () { myLytebox.start(this, false, true); return false; }
			}
		}
	}
};
LyteBox.prototype.start = function(imageLink, doSlide, doFrame) {
	if (this.ie && !this.ie7) {	this.toggleSelects('hide');	}
	if (this.hideFlash) { this.toggleFlash('hide'); }
	this.isLyteframe = (doFrame ? true : false);
	var pageSize	= this.getPageSize();
	var objOverlay	= this.doc.getElementById('lbOverlay');
	var objBody		= this.doc.getElementsByTagName("body").item(0);
	objOverlay.style.height = pageSize[1] + "px";
	objOverlay.style.display = '';
	this.appear('lbOverlay', (this.doAnimations ? 0 : this.maxOpacity));
	var anchors = (this.isFrame) ? window.parent.frames[window.name].document.getElementsByTagName('a') : document.getElementsByTagName('a');
	if (this.isLyteframe) {
		this.frameArray = [];
		this.frameNum = 0;
		if ((imageLink.getAttribute('rel') == 'lyteframe')) {
			var rev = imageLink.getAttribute('rev');
			this.frameArray.push(new Array(imageLink.getAttribute('href'), imageLink.getAttribute('title'), (rev == null || rev == '' ? 'width: 400px; height: 400px; scrolling: auto;' : rev)));
		} else {
			if (imageLink.getAttribute('rel').indexOf('lyteframe') != -1) {
				for (var i = 0; i < anchors.length; i++) {
					var anchor = anchors[i];
					if (anchor.getAttribute('href') && (anchor.getAttribute('rel') == imageLink.getAttribute('rel'))) {
						var rev = anchor.getAttribute('rev');
						this.frameArray.push(new Array(anchor.getAttribute('href'), anchor.getAttribute('title'), (rev == null || rev == '' ? 'width: 400px; height: 400px; scrolling: auto;' : rev)));
					}
				}
				this.frameArray.removeDuplicates();
				while(this.frameArray[this.frameNum][0] != imageLink.getAttribute('href')) { this.frameNum++; }
			}
		}
	} else {
		this.imageArray = [];
		this.imageNum = 0;
		this.slideArray = [];
		this.slideNum = 0;
		if ((imageLink.getAttribute('rel') == 'lytebox')) {
			this.imageArray.push(new Array(imageLink.getAttribute('href'), imageLink.getAttribute('title')));
		} else {
			if (imageLink.getAttribute('rel').indexOf('lytebox') != -1) {
				for (var i = 0; i < anchors.length; i++) {
					var anchor = anchors[i];
					if (anchor.getAttribute('href') && (anchor.getAttribute('rel') == imageLink.getAttribute('rel'))) {
						this.imageArray.push(new Array(anchor.getAttribute('href'), anchor.getAttribute('title')));
					}
				}
				this.imageArray.removeDuplicates();
				while(this.imageArray[this.imageNum][0] != imageLink.getAttribute('href')) { this.imageNum++; }
			}
			if (imageLink.getAttribute('rel').indexOf('lyteshow') != -1) {
				for (var i = 0; i < anchors.length; i++) {
					var anchor = anchors[i];
					if (anchor.getAttribute('href') && (anchor.getAttribute('rel') == imageLink.getAttribute('rel'))) {
						this.slideArray.push(new Array(anchor.getAttribute('href'), anchor.getAttribute('title')));
					}
				}
				this.slideArray.removeDuplicates();
				while(this.slideArray[this.slideNum][0] != imageLink.getAttribute('href')) { this.slideNum++; }
			}
		}
	}
	var object = this.doc.getElementById('lbMain');
		object.style.top = (this.getPageScroll() + (pageSize[3] / 15)) + "px";
		object.style.display = '';
	if (!this.outerBorder) {
		this.doc.getElementById('lbOuterContainer').style.border = 'none';
		this.doc.getElementById('lbDetailsContainer').style.border = 'none';
	} else {
		this.doc.getElementById('lbOuterContainer').style.borderBottom = '';
		this.doc.getElementById('lbOuterContainer').setAttribute((this.ie ? 'className' : 'class'), this.theme);
	}
	this.doc.getElementById('lbOverlay').onclick = function() { myLytebox.end(); return false; }
	this.doc.getElementById('lbMain').onclick = function(e) {
		var e = e;
		if (!e) {
			if (this.displayInTopFrame) {
				e = window.top.event;
			} else if (window.parent.frames[window.name] && (parent.document.getElementsByTagName('frameset').length <= 0)) {
				e = window.parent.window.event;
			} else {
				e = window.event;
			}
		}
		if (e) {
			var id = (e.target ? e.target.id : e.srcElement.id);
			if (id == 'lbMain') { myLytebox.end(); return false; }
		}
	}
	this.doc.getElementById('lbClose').onclick = function() { myLytebox.end(); return false; }
	this.doc.getElementById('lbPause').onclick = function() { myLytebox.togglePlayPause("lbPause", "lbPlay"); return false; }
	this.doc.getElementById('lbPlay').onclick = function() { myLytebox.togglePlayPause("lbPlay", "lbPause"); return false; }	
	this.isSlideshow = doSlide;
	this.isPaused = (this.slideNum != 0 ? true : false);
	if (this.isSlideshow && this.showPlayPause && this.isPaused) {
		this.doc.getElementById('lbPlay').style.display = '';
		this.doc.getElementById('lbPause').style.display = 'none';
	}
	if (this.isLyteframe) {
		this.changeContent(this.frameNum);
	} else {
		if (this.isSlideshow) {
			this.changeContent(this.slideNum);
		} else {
			this.changeContent(this.imageNum);
		}
	}
};
LyteBox.prototype.changeContent = function(imageNum) {
	if (this.isSlideshow) {
		for (var i = 0; i < this.slideshowIDCount; i++) { window.clearTimeout(this.slideshowIDArray[i]); }
	}
	this.activeImage = this.activeSlide = this.activeFrame = imageNum;
	if (!this.outerBorder) {
		this.doc.getElementById('lbOuterContainer').style.border = 'none';
		this.doc.getElementById('lbDetailsContainer').style.border = 'none';
	} else {
		this.doc.getElementById('lbOuterContainer').style.borderBottom = '';
		this.doc.getElementById('lbOuterContainer').setAttribute((this.ie ? 'className' : 'class'), this.theme);
	}
	this.doc.getElementById('lbLoading').style.display = '';
	this.doc.getElementById('lbImage').style.display = 'none';
	this.doc.getElementById('lbIframe').style.display = 'none';
	this.doc.getElementById('lbPrev').style.display = 'none';
	this.doc.getElementById('lbNext').style.display = 'none';
	this.doc.getElementById('lbIframeContainer').style.display = 'none';
	this.doc.getElementById('lbDetailsContainer').style.display = 'none';
	this.doc.getElementById('lbNumberDisplay').style.display = 'none';
	if (this.navType == 2 || this.isLyteframe) {
		object = this.doc.getElementById('lbNavDisplay');
		object.innerHTML = '&nbsp;&nbsp;&nbsp;<span id="lbPrev2_Off" style="display: none;" class="' + this.theme + '">&laquo; prev</span><a href="#" id="lbPrev2" class="' + this.theme + '" style="display: none;">&laquo; prev</a> <b id="lbSpacer" class="' + this.theme + '">||</b> <span id="lbNext2_Off" style="display: none;" class="' + this.theme + '">next &raquo;</span><a href="#" id="lbNext2" class="' + this.theme + '" style="display: none;">next &raquo;</a>';
		object.style.display = 'none';
	}
	if (this.isLyteframe) {
		var iframe = myLytebox.doc.getElementById('lbIframe');
		var styles = this.frameArray[this.activeFrame][2];
		var aStyles = styles.split(';');
		for (var i = 0; i < aStyles.length; i++) {
			if (aStyles[i].indexOf('width:') >= 0) {
				var w = aStyles[i].replace('width:', '');
				iframe.width = w.trim();
			} else if (aStyles[i].indexOf('height:') >= 0) {
				var h = aStyles[i].replace('height:', '');
				iframe.height = h.trim();
			} else if (aStyles[i].indexOf('scrolling:') >= 0) {
				var s = aStyles[i].replace('scrolling:', '');
				iframe.scrolling = s.trim();
			} else if (aStyles[i].indexOf('border:') >= 0) {
				// Not implemented yet, as there are cross-platform issues with setting the border (from a GUI standpoint)
				//var b = aStyles[i].replace('border:', '');
				//iframe.style.border = b.trim();
			}
		}
		this.resizeContainer(parseInt(iframe.width), parseInt(iframe.height));
	} else {
		imgPreloader = new Image();
		imgPreloader.onload = function() {
			var imageWidth = imgPreloader.width;
			var imageHeight = imgPreloader.height;
			if (myLytebox.autoResize) {
				var pagesize = myLytebox.getPageSize();
				var x = pagesize[2] - 150;
				var y = pagesize[3] - 150;
				if (imageWidth > x) {
					imageHeight = Math.round(imageHeight * (x / imageWidth));
					imageWidth = x; 
					if (imageHeight > y) { 
						imageWidth = Math.round(imageWidth * (y / imageHeight));
						imageHeight = y; 
					}
				} else if (imageHeight > y) { 
					imageWidth = Math.round(imageWidth * (y / imageHeight));
					imageHeight = y; 
					if (imageWidth > x) {
						imageHeight = Math.round(imageHeight * (x / imageWidth));
						imageWidth = x;
					}
				}
			}
			var lbImage = myLytebox.doc.getElementById('lbImage')
			lbImage.src = (myLytebox.isSlideshow ? myLytebox.slideArray[myLytebox.activeSlide][0] : myLytebox.imageArray[myLytebox.activeImage][0]);
			lbImage.width = imageWidth;
			lbImage.height = imageHeight;
			myLytebox.resizeContainer(imageWidth, imageHeight);
			imgPreloader.onload = function() {};
		}
		imgPreloader.src = (this.isSlideshow ? this.slideArray[this.activeSlide][0] : this.imageArray[this.activeImage][0]);
	}
};
LyteBox.prototype.resizeContainer = function(imgWidth, imgHeight) {
	this.wCur = this.doc.getElementById('lbOuterContainer').offsetWidth;
	this.hCur = this.doc.getElementById('lbOuterContainer').offsetHeight;
	this.xScale = ((imgWidth  + (this.borderSize * 2)) / this.wCur) * 100;
	this.yScale = ((imgHeight  + (this.borderSize * 2)) / this.hCur) * 100;
	var wDiff = (this.wCur - this.borderSize * 2) - imgWidth;
	var hDiff = (this.hCur - this.borderSize * 2) - imgHeight;
	if (!(hDiff == 0)) {
		this.hDone = false;
		this.resizeH('lbOuterContainer', this.hCur, imgHeight + this.borderSize*2, this.getPixelRate(this.hCur, imgHeight));
	} else {
		this.hDone = true;
	}
	if (!(wDiff == 0)) {
		this.wDone = false;
		this.resizeW('lbOuterContainer', this.wCur, imgWidth + this.borderSize*2, this.getPixelRate(this.wCur, imgWidth));
	} else {
		this.wDone = true;
	}
	if ((hDiff == 0) && (wDiff == 0)) {
		if (this.ie){ this.pause(250); } else { this.pause(100); } 
	}
	this.doc.getElementById('lbPrev').style.height = imgHeight + "px";
	this.doc.getElementById('lbNext').style.height = imgHeight + "px";
	this.doc.getElementById('lbDetailsContainer').style.width = (imgWidth + (this.borderSize * 2) + (this.ie && this.doc.compatMode == "BackCompat" && this.outerBorder ? 2 : 0)) + "px";
	this.showContent();
};
LyteBox.prototype.showContent = function() {
	if (this.wDone && this.hDone) {
		for (var i = 0; i < this.showContentTimerCount; i++) { window.clearTimeout(this.showContentTimerArray[i]); }
		if (this.outerBorder) {
			this.doc.getElementById('lbOuterContainer').style.borderBottom = 'none';
		}
		this.doc.getElementById('lbLoading').style.display = 'none';
		if (this.isLyteframe) {
			this.doc.getElementById('lbIframe').style.display = '';
			this.appear('lbIframe', (this.doAnimations ? 0 : 100));
		} else {
			this.doc.getElementById('lbImage').style.display = '';
			this.appear('lbImage', (this.doAnimations ? 0 : 100));
			this.preloadNeighborImages();
		}
		if (this.isSlideshow) {
			if(this.activeSlide == (this.slideArray.length - 1)) {
				if (this.autoEnd) {
					this.slideshowIDArray[this.slideshowIDCount++] = setTimeout("myLytebox.end('slideshow')", this.slideInterval);
				}
			} else {
				if (!this.isPaused) {
					this.slideshowIDArray[this.slideshowIDCount++] = setTimeout("myLytebox.changeContent("+(this.activeSlide+1)+")", this.slideInterval);
				}
			}
			this.doc.getElementById('lbHoverNav').style.display = (this.showNavigation && this.navType == 1 ? '' : 'none');
			this.doc.getElementById('lbClose').style.display = (this.showClose ? '' : 'none');
			this.doc.getElementById('lbDetails').style.display = (this.showDetails ? '' : 'none');
			this.doc.getElementById('lbPause').style.display = (this.showPlayPause && !this.isPaused ? '' : 'none');
			this.doc.getElementById('lbPlay').style.display = (this.showPlayPause && !this.isPaused ? 'none' : '');
			this.doc.getElementById('lbNavDisplay').style.display = (this.showNavigation && this.navType == 2 ? '' : 'none');
		} else {
			this.doc.getElementById('lbHoverNav').style.display = (this.navType == 1 && !this.isLyteframe ? '' : 'none');
			if ((this.navType == 2 && !this.isLyteframe && this.imageArray.length > 1) || (this.frameArray.length > 1 && this.isLyteframe)) {
				this.doc.getElementById('lbNavDisplay').style.display = '';
			} else {
				this.doc.getElementById('lbNavDisplay').style.display = 'none';
			}
			this.doc.getElementById('lbClose').style.display = '';
			this.doc.getElementById('lbDetails').style.display = '';
			this.doc.getElementById('lbPause').style.display = 'none';
			this.doc.getElementById('lbPlay').style.display = 'none';
		}
		this.doc.getElementById('lbImageContainer').style.display = (this.isLyteframe ? 'none' : '');
		this.doc.getElementById('lbIframeContainer').style.display = (this.isLyteframe ? '' : 'none');
		try {
			this.doc.getElementById('lbIframe').src = this.frameArray[this.activeFrame][0];
		} catch(e) { }
	} else {
		this.showContentTimerArray[this.showContentTimerCount++] = setTimeout("myLytebox.showContent()", 200);
	}
};
LyteBox.prototype.updateDetails = function() {
	var object = this.doc.getElementById('lbCaption');
	var sTitle = (this.isSlideshow ? this.slideArray[this.activeSlide][1] : (this.isLyteframe ? this.frameArray[this.activeFrame][1] : this.imageArray[this.activeImage][1]));
	object.style.display = '';
	object.innerHTML = (sTitle == null ? '' : sTitle);
	this.updateNav();
	this.doc.getElementById('lbDetailsContainer').style.display = '';
	object = this.doc.getElementById('lbNumberDisplay');
	if (this.isSlideshow && this.slideArray.length > 1) {
		object.style.display = '';
		object.innerHTML = "Image " + eval(this.activeSlide + 1) + " of " + this.slideArray.length;
		this.doc.getElementById('lbNavDisplay').style.display = (this.navType == 2 && this.showNavigation ? '' : 'none');
	} else if (this.imageArray.length > 1 && !this.isLyteframe) {
		object.style.display = '';
		object.innerHTML = "Image " + eval(this.activeImage + 1) + " of " + this.imageArray.length;
		this.doc.getElementById('lbNavDisplay').style.display = (this.navType == 2 ? '' : 'none');
	} else if (this.frameArray.length > 1 && this.isLyteframe) {
		object.style.display = '';
		object.innerHTML = "Page " + eval(this.activeFrame + 1) + " of " + this.frameArray.length;
		this.doc.getElementById('lbNavDisplay').style.display = '';
	} else {
		this.doc.getElementById('lbNavDisplay').style.display = 'none';
	}
	this.appear('lbDetailsContainer', (this.doAnimations ? 0 : 100));
};
LyteBox.prototype.updateNav = function() {
	if (this.isSlideshow) {
		if (this.activeSlide != 0) {
			var object = (this.navType == 2 ? this.doc.getElementById('lbPrev2') : this.doc.getElementById('lbPrev'));
				object.style.display = '';
				object.onclick = function() {
					if (myLytebox.pauseOnPrevClick) { myLytebox.togglePlayPause("lbPause", "lbPlay"); }
					myLytebox.changeContent(myLytebox.activeSlide - 1); return false;
				}
		} else {
			if (this.navType == 2) { this.doc.getElementById('lbPrev2_Off').style.display = ''; }
		}
		if (this.activeSlide != (this.slideArray.length - 1)) {
			var object = (this.navType == 2 ? this.doc.getElementById('lbNext2') : this.doc.getElementById('lbNext'));
				object.style.display = '';
				object.onclick = function() {
					if (myLytebox.pauseOnNextClick) { myLytebox.togglePlayPause("lbPause", "lbPlay"); }
					myLytebox.changeContent(myLytebox.activeSlide + 1); return false;
				}
		} else {
			if (this.navType == 2) { this.doc.getElementById('lbNext2_Off').style.display = ''; }
		}
	} else if (this.isLyteframe) {
		if(this.activeFrame != 0) {
			var object = this.doc.getElementById('lbPrev2');
				object.style.display = '';
				object.onclick = function() {
					myLytebox.changeContent(myLytebox.activeFrame - 1); return false;
				}
		} else {
			this.doc.getElementById('lbPrev2_Off').style.display = '';
		}
		if(this.activeFrame != (this.frameArray.length - 1)) {
			var object = this.doc.getElementById('lbNext2');
				object.style.display = '';
				object.onclick = function() {
					myLytebox.changeContent(myLytebox.activeFrame + 1); return false;
				}
		} else {
			this.doc.getElementById('lbNext2_Off').style.display = '';
		}		
	} else {
		if(this.activeImage != 0) {
			var object = (this.navType == 2 ? this.doc.getElementById('lbPrev2') : this.doc.getElementById('lbPrev'));
				object.style.display = '';
				object.onclick = function() {
					myLytebox.changeContent(myLytebox.activeImage - 1); return false;
				}
		} else {
			if (this.navType == 2) { this.doc.getElementById('lbPrev2_Off').style.display = ''; }
		}
		if(this.activeImage != (this.imageArray.length - 1)) {
			var object = (this.navType == 2 ? this.doc.getElementById('lbNext2') : this.doc.getElementById('lbNext'));
				object.style.display = '';
				object.onclick = function() {
					myLytebox.changeContent(myLytebox.activeImage + 1); return false;
				}
		} else {
			if (this.navType == 2) { this.doc.getElementById('lbNext2_Off').style.display = ''; }
		}
	}
	this.enableKeyboardNav();
};
LyteBox.prototype.enableKeyboardNav = function() { document.onkeydown = this.keyboardAction; };
LyteBox.prototype.disableKeyboardNav = function() { document.onkeydown = ''; };
LyteBox.prototype.keyboardAction = function(e) {
	var keycode = key = escape = null;
	keycode	= (e == null) ? event.keyCode : e.which;
	key		= String.fromCharCode(keycode).toLowerCase();
	escape  = (e == null) ? 27 : e.DOM_VK_ESCAPE;
	if ((key == 'x') || (key == 'c') || (keycode == escape)) {
		myLytebox.end();
	} else if ((key == 'p') || (keycode == 37)) {
		if (myLytebox.isSlideshow) {
			if(myLytebox.activeSlide != 0) {
				myLytebox.disableKeyboardNav();
				myLytebox.changeContent(myLytebox.activeSlide - 1);
			}
		} else if (myLytebox.isLyteframe) {
			if(myLytebox.activeFrame != 0) {
				myLytebox.disableKeyboardNav();
				myLytebox.changeContent(myLytebox.activeFrame - 1);
			}
		} else {
			if(myLytebox.activeImage != 0) {
				myLytebox.disableKeyboardNav();
				myLytebox.changeContent(myLytebox.activeImage - 1);
			}
		}
	} else if ((key == 'n') || (keycode == 39)) {
		if (myLytebox.isSlideshow) {
			if(myLytebox.activeSlide != (myLytebox.slideArray.length - 1)) {
				myLytebox.disableKeyboardNav();
				myLytebox.changeContent(myLytebox.activeSlide + 1);
			}
		} else if (myLytebox.isLyteframe) {
			if(myLytebox.activeFrame != (myLytebox.frameArray.length - 1)) {
				myLytebox.disableKeyboardNav();
				myLytebox.changeContent(myLytebox.activeFrame + 1);
			}
		} else {
			if(myLytebox.activeImage != (myLytebox.imageArray.length - 1)) {
				myLytebox.disableKeyboardNav();
				myLytebox.changeContent(myLytebox.activeImage + 1);
			}
		}
	}
};
LyteBox.prototype.preloadNeighborImages = function() {
	if (this.isSlideshow) {
		if ((this.slideArray.length - 1) > this.activeSlide) {
			preloadNextImage = new Image();
			preloadNextImage.src = this.slideArray[this.activeSlide + 1][0];
		}
		if(this.activeSlide > 0) {
			preloadPrevImage = new Image();
			preloadPrevImage.src = this.slideArray[this.activeSlide - 1][0];
		}
	} else {
		if ((this.imageArray.length - 1) > this.activeImage) {
			preloadNextImage = new Image();
			preloadNextImage.src = this.imageArray[this.activeImage + 1][0];
		}
		if(this.activeImage > 0) {
			preloadPrevImage = new Image();
			preloadPrevImage.src = this.imageArray[this.activeImage - 1][0];
		}
	}
};
LyteBox.prototype.togglePlayPause = function(hideID, showID) {
	if (this.isSlideshow && hideID == "lbPause") {
		for (var i = 0; i < this.slideshowIDCount; i++) { window.clearTimeout(this.slideshowIDArray[i]); }
	}
	this.doc.getElementById(hideID).style.display = 'none';
	this.doc.getElementById(showID).style.display = '';
	if (hideID == "lbPlay") {
		this.isPaused = false;
		if (this.activeSlide == (this.slideArray.length - 1)) {
			this.end();
		} else {
			this.changeContent(this.activeSlide + 1);
		}
	} else {
		this.isPaused = true;
	}
};
LyteBox.prototype.end = function(caller) {
	var closeClick = (caller == 'slideshow' ? false : true);
	if (this.isSlideshow && this.isPaused && !closeClick) { return; }
	this.disableKeyboardNav();
	this.doc.getElementById('lbMain').style.display = 'none';
	this.fade('lbOverlay', (this.doAnimations ? this.maxOpacity : 0));
	this.toggleSelects('visible');
	if (this.hideFlash) { this.toggleFlash('visible'); }
	if (this.isSlideshow) {
		for (var i = 0; i < this.slideshowIDCount; i++) { window.clearTimeout(this.slideshowIDArray[i]); }
	}
	if (this.isLyteframe) {
		 this.initialize();
	}
};
LyteBox.prototype.checkFrame = function() {
	if (this.displayInTopFrame) {
		this.isFrame = false;
		this.lytebox = "myLytebox";
        this.doc = parent.parent.document;
	} else if (window.parent.frames[window.name] && (parent.document.getElementsByTagName('frameset').length <= 0)) {
		this.isFrame = true;
		this.lytebox = "window.parent." + window.name + ".myLytebox";
		this.doc = parent.document;
	} else {
		this.isFrame = false;
		this.lytebox = "myLytebox";
		this.doc = document;
	}
};
LyteBox.prototype.getPixelRate = function(cur, img) {
	var diff = (img > cur) ? img - cur : cur - img;
	if (diff >= 0 && diff <= 100) { return 10; }
	if (diff > 100 && diff <= 200) { return 15; }
	if (diff > 200 && diff <= 300) { return 20; }
	if (diff > 300 && diff <= 400) { return 25; }
	if (diff > 400 && diff <= 500) { return 30; }
	if (diff > 500 && diff <= 600) { return 35; }
	if (diff > 600 && diff <= 700) { return 40; }
	if (diff > 700) { return 45; }
};
LyteBox.prototype.appear = function(id, opacity) {
	var object = this.doc.getElementById(id).style;
	object.opacity = (opacity / 100);
	object.MozOpacity = (opacity / 100);
	object.KhtmlOpacity = (opacity / 100);
	object.filter = "alpha(opacity=" + (opacity + 10) + ")";
	if (opacity == 100 && (id == 'lbImage' || id == 'lbIframe')) {
		try { object.removeAttribute("filter"); } catch(e) {}	/* Fix added for IE Alpha Opacity Filter bug. */
		this.updateDetails();
	} else if (opacity >= this.maxOpacity && id == 'lbOverlay') {
		for (var i = 0; i < this.overlayTimerCount; i++) { window.clearTimeout(this.overlayTimerArray[i]); }
		return;
	} else if (opacity >= 100 && id == 'lbDetailsContainer') {
		try { object.removeAttribute("filter"); } catch(e) {}	/* Fix added for IE Alpha Opacity Filter bug. */
		for (var i = 0; i < this.imageTimerCount; i++) { window.clearTimeout(this.imageTimerArray[i]); }
		this.doc.getElementById('lbOverlay').style.height = this.getPageSize()[1] + "px";
	} else {
		if (id == 'lbOverlay') {
			this.overlayTimerArray[this.overlayTimerCount++] = setTimeout("myLytebox.appear('" + id + "', " + (opacity+20) + ")", 1);
		} else {
			this.imageTimerArray[this.imageTimerCount++] = setTimeout("myLytebox.appear('" + id + "', " + (opacity+10) + ")", 1);
		}
	}
};
LyteBox.prototype.fade = function(id, opacity) {
	var object = this.doc.getElementById(id).style;
	object.opacity = (opacity / 100);
	object.MozOpacity = (opacity / 100);
	object.KhtmlOpacity = (opacity / 100);
	object.filter = "alpha(opacity=" + opacity + ")";
	if (opacity <= 0) {
		try {
			object.display = 'none';
		} catch(err) { }
	} else if (id == 'lbOverlay') {
		this.overlayTimerArray[this.overlayTimerCount++] = setTimeout("myLytebox.fade('" + id + "', " + (opacity-20) + ")", 1);
	} else {
		this.timerIDArray[this.timerIDCount++] = setTimeout("myLytebox.fade('" + id + "', " + (opacity-10) + ")", 1);
	}
};
LyteBox.prototype.resizeW = function(id, curW, maxW, pixelrate, speed) {
	if (!this.hDone) {
		this.resizeWTimerArray[this.resizeWTimerCount++] = setTimeout("myLytebox.resizeW('" + id + "', " + curW + ", " + maxW + ", " + pixelrate + ")", 100);
		return;
	}
	var object = this.doc.getElementById(id);
	var timer = speed ? speed : (this.resizeDuration/2);
	var newW = (this.doAnimations ? curW : maxW);
	object.style.width = (newW) + "px";
	if (newW < maxW) {
		newW += (newW + pixelrate >= maxW) ? (maxW - newW) : pixelrate;
	} else if (newW > maxW) {
		newW -= (newW - pixelrate <= maxW) ? (newW - maxW) : pixelrate;
	}
	this.resizeWTimerArray[this.resizeWTimerCount++] = setTimeout("myLytebox.resizeW('" + id + "', " + newW + ", " + maxW + ", " + pixelrate + ", " + (timer+0.02) + ")", timer+0.02);
	if (parseInt(object.style.width) == maxW) {
		this.wDone = true;
		for (var i = 0; i < this.resizeWTimerCount; i++) { window.clearTimeout(this.resizeWTimerArray[i]); }
	}
};
LyteBox.prototype.resizeH = function(id, curH, maxH, pixelrate, speed) {
	var timer = speed ? speed : (this.resizeDuration/2);
	var object = this.doc.getElementById(id);
	var newH = (this.doAnimations ? curH : maxH);
	object.style.height = (newH) + "px";
	if (newH < maxH) {
		newH += (newH + pixelrate >= maxH) ? (maxH - newH) : pixelrate;
	} else if (newH > maxH) {
		newH -= (newH - pixelrate <= maxH) ? (newH - maxH) : pixelrate;
	}
	this.resizeHTimerArray[this.resizeHTimerCount++] = setTimeout("myLytebox.resizeH('" + id + "', " + newH + ", " + maxH + ", " + pixelrate + ", " + (timer+.02) + ")", timer+.02);
	if (parseInt(object.style.height) == maxH) {
		this.hDone = true;
		for (var i = 0; i < this.resizeHTimerCount; i++) { window.clearTimeout(this.resizeHTimerArray[i]); }
	}
};
LyteBox.prototype.getPageScroll = function() {
	var s = this.displayInTopFrame? window.top : self;
	if (self.pageYOffset) {
		return this.isFrame ? parent.pageYOffset : s.pageYOffset;
	} else if (this.doc.documentElement && this.doc.documentElement.scrollTop){
		return this.doc.documentElement.scrollTop;
	} else if (document.body) {
		return this.doc.body.scrollTop;
	}
};
LyteBox.prototype.getPageSize = function() {	
	var xScroll, yScroll, windowWidth, windowHeight;
	var w = this.displayInTopFrame? window.top : window;
	var s = this.displayInTopFrame? window.top : self;
	if (w.innerHeight && w.scrollMaxY) {
		xScroll = this.doc.scrollWidth;
		yScroll = (this.isFrame ? parent.innerHeight : s.innerHeight) + (this.isFrame ? parent.scrollMaxY : s.scrollMaxY);
	} else if (this.doc.body.scrollHeight > this.doc.body.offsetHeight){
		xScroll = this.doc.body.scrollWidth;
		yScroll = this.doc.body.scrollHeight;
	} else {
		xScroll = this.doc.getElementsByTagName("html").item(0).offsetWidth;
		yScroll = this.doc.getElementsByTagName("html").item(0).offsetHeight;
		xScroll = (xScroll < this.doc.body.offsetWidth) ? this.doc.body.offsetWidth : xScroll;
		yScroll = (yScroll < this.doc.body.offsetHeight) ? this.doc.body.offsetHeight : yScroll;
	}
	if (s.innerHeight) {
		windowWidth = (this.isFrame) ? parent.innerWidth : s.innerWidth;
		windowHeight = (this.isFrame) ? parent.innerHeight : s.innerHeight;
	} else if (document.documentElement && document.documentElement.clientHeight) {
		windowWidth = this.doc.documentElement.clientWidth;
		windowHeight = this.doc.documentElement.clientHeight;
	} else if (document.body) {
		windowWidth = this.doc.getElementsByTagName("html").item(0).clientWidth;
		windowHeight = this.doc.getElementsByTagName("html").item(0).clientHeight;
		windowWidth = (windowWidth == 0) ? this.doc.body.clientWidth : windowWidth;
		windowHeight = (windowHeight == 0) ? this.doc.body.clientHeight : windowHeight;
	}
	var pageHeight = (yScroll < windowHeight) ? windowHeight : yScroll;
	var pageWidth = (xScroll < windowWidth) ? windowWidth : xScroll;
	return new Array(pageWidth, pageHeight, windowWidth, windowHeight);
};
LyteBox.prototype.toggleFlash = function(state) {
	var objects = this.doc.getElementsByTagName("object");
	for (var i = 0; i < objects.length; i++) {
		objects[i].style.visibility = (state == "hide") ? 'hidden' : 'visible';
	}
	var embeds = this.doc.getElementsByTagName("embed");
	for (var i = 0; i < embeds.length; i++) {
		embeds[i].style.visibility = (state == "hide") ? 'hidden' : 'visible';
	}
	if (this.isFrame) {
		for (var i = 0; i < parent.frames.length; i++) {
			try {
				objects = parent.frames[i].window.document.getElementsByTagName("object");
				for (var j = 0; j < objects.length; j++) {
					objects[j].style.visibility = (state == "hide") ? 'hidden' : 'visible';
				}
			} catch(e) { }
			try {
				embeds = parent.frames[i].window.document.getElementsByTagName("embed");
				for (var j = 0; j < embeds.length; j++) {
					embeds[j].style.visibility = (state == "hide") ? 'hidden' : 'visible';
				}
			} catch(e) { }
		}
	}
};
LyteBox.prototype.toggleSelects = function(state) {
	var selects = this.doc.getElementsByTagName("select");
	for (var i = 0; i < selects.length; i++ ) {
		selects[i].style.visibility = (state == "hide") ? 'hidden' : 'visible';
	}
	if (this.isFrame) {
		for (var i = 0; i < parent.frames.length; i++) {
			try {
				selects = parent.frames[i].window.document.getElementsByTagName("select");
				for (var j = 0; j < selects.length; j++) {
					selects[j].style.visibility = (state == "hide") ? 'hidden' : 'visible';
				}
			} catch(e) { }
		}
	}
};
LyteBox.prototype.pause = function(numberMillis) {
	var now = new Date();
	var exitTime = now.getTime() + numberMillis;
	while (true) {
		now = new Date();
		if (now.getTime() > exitTime) { return; }
	}
};
if (window.addEventListener) {
	window.addEventListener("load",initLytebox,false);
} else if (window.attachEvent) {
	window.attachEvent("onload",initLytebox);
} else {
	window.onload = function() {initLytebox();}
}
function initLytebox() { myLytebox = new LyteBox(); }
//***********************************************************************************************************************************/

/**
 * Object representing a question or a group of questions (likert, checkboxes)
 * @param id
 * @param type
 * @param description
 * @param required
 * @param options
 * @param values
 * @param correctAnswerIndex
 * @param feedback
 * @param display
 * @return
 */
function rcmQuestion(id, type, description, required, options, values, correctAnswerIndex, feedback, display) {
	this.id = id;
	this.description = description;
	this.required = required;
	this.valid = 'all'; // all questions must ve valid for the group to be valid
	this.hasChart = false;
	this.subquestions = new Array();
	if (type.substr(0, 6)  == 'likert') {
		// Example: likert-5 - gets translated into subquestions
		var scale = parseInt(type.substr(7));
		if (scale == null) scale = 5; // default
		var likertValues = new Array();
		var likertOptions = new Array();
		for (var i = 0; i < scale; i++) {
			likertValues[i] = i+1;
			likertOptions[i] = i+1;
		}
		if (scale == 6)
			likertOptions[5] = "NS";
		for (var i = 0; i < options.length; i++) {
			this.subquestions[i] = new rcmBasicQuestion(id + "_" + i, 'choice', options[i], likertOptions, likertValues, null, null, 'scale');
		}
	} else if (type == 'checkboxes') {
		// gets translated into subquestions
		for (var i = 0; i < options.length; i++) {
			this.subquestions[i] = new rcmBasicQuestion(id + "_" + i, 'checkbox', options[i], null, null, null, null, 'horizontal');
		}
		this.valid = 'one'; // one valid is enough to validate the group
	} else {		
		this.subquestions[0] = new rcmBasicQuestion(id, type, description, options, values, correctAnswerIndex, feedback, display)
		this.hasChart = (type == 'choice') || (type == 'true-false');
	}
	this.groupType = type; // Needed in player preview
}

function rcmQuestionFeedback(correctFeedback, correctReferences, incorrectFeedback, incorrectReferences) {
	this.correctFeedback = correctFeedback;
	this.incorrectFeedback = incorrectFeedback;
	this.correctReferences = correctReferences;
	this.incorrectReferences = incorrectReferences;
}

/**
 * A basic question, either a set of radio buttons, or 1 checkbox, or 1 fill-in area
 * @param id
 * @param type
 * @param description
 * @param options
 * @param values
 * @param correctAnswerIndex
 * @param feedback
 * @param display
 * @return
 */
function rcmBasicQuestion(id, type, description, options, values, correctAnswerIndex, feedback, display) {
	this.id = id;
	this.type = type;
	this.cmitype = type;
	this.description = description;
	this.options = options;
	this.values = values;
	this.display = display;
	if ((this.type == 'true-false') && options == null && values == null) {
		var arr = new Array(2);
		arr[0] = 'A) True';
		arr[1] = 'B) False';		
		this.options = arr;
		var arr = new Array(2);
		arr[0] = 'true';
		arr[1] = 'false';	
		this.values	= arr;
	} else if ((this.type == 'choice') && (values == null)) {
		// set default values;
		arr = new Array(this.options.length);
		for (var i=0;i<this.options.length;i++) {
			arr[i] = i + 1;
		}
		this.values = arr;
	} else if (this.type == 'checkbox') {
		this.cmitype = 'true-false'; // TODO verify how to store this in SCORM
		this.options = new Array(1);
		this.options[0] = description;
		this.values = new Array(1);
		this.values[0] = 'true';
	}
	this.correctAnswer = null;
	this.prettyCorrectAnswer = null;
	if (correctAnswerIndex != null) {
		this.correctAnswer = this.values[correctAnswerIndex];
		this.prettyCorrectAnswer = this.options[correctAnswerIndex];
	}
	this.feedback = feedback;
}

function recordQuestionGroup(groupIndex, qgroup) {
	var cmiIndex = groupIndex;
	var subquestions = qgroup.subquestions;
	var answers = new Array(subquestions.length);
	var countnonnull = 0;
	for (var k = 0; k < subquestions.length; k++) {
		var q = subquestions[k];
		answers[k] = validateRcmBasicQuestion(q);
		if (answers[k] != null) countnonnull++;
	}
	// A checkbox question is considered answered if it belongs to a group for which 1 checked box has been checked 
	var setdefaultcheckbox = (countnonnull > 0);
	for (var k = 0; k < subquestions.length; k++) {
		var q = subquestions[k];
		var answer = answers[k];
		// Record cmi interaction
		if (answer == null && q.type == 'checkbox' && setdefaultcheckbox) {
			// record a default value for checkbox when 
			answer = 'false';
		}
		recordRcmBasicQuestion(cmiIndex, q, answer);
		// Suspend data
		if (answer != null) {
			if ((q.type == 'fill-in') || (q.type == 'long-fill-in')) {
				// do not suspend long text but suspend at least something so that check can be performed.
				set_suspended_value(q.id, '(...)');				
			} else {
				set_suspended_value(q.id, answer);				
			}
		}
		cmiIndex++;
	}
}

/**
 * Validates a question or a group of questions - Returns true if ok, false otherwise.
 * 
 * @param qgroup
 * @return	
 */
function validateQuestionGroup(qgroup) {
	if (qgroup.required) {
		var subquestions = qgroup.subquestions;
		var countOK = 0; 
		for (var k = 0; k < subquestions.length; k++) {
			var q = subquestions[k];
			var answer = validateRcmBasicQuestion(q);
			if (answer != null) countOK++;
		}
		if (qgroup.valid == 'all') {
			return countOK == (subquestions.length);
		} else {
			return countOK > 0;
		}
	} else {
		return true;
	}
}

/**
 * Checks that a basic question has been answered - Returns the answer or null
 * @return
 */
function validateRcmBasicQuestion(q) {
	var answer = null;
	if ((q.type == 'fill-in') || (q.type == 'long-fill-in')) {
		answer = $("textarea[@name='" + q.id + "']").val();
		if (answer != null) {
			answer = answer.trim();
			if ((q.type == 'fill-in') && (q.length > 250)) {
				// Moodle does not store fill-in longer than 250
				answer = answer.substr(0, 240) + '(...)';
			} else if ((q.type == 'long-fill-in') && (answer.length > 4000)) {
				// Moodle does not store long-fill-in longer than 4000
				answer = answer.substr(0, 3990) + '(...)';
			}
		}
		if (answer.length <= 0) answer = null;
	} else if ((q.type == 'choice') || (q.type == 'true-false')) {
		answer = $("input[@name='" + q.id + "']:checked").val();
	} else if (q.type == 'checkbox') {
		answer = $("input[@name='" + q.id + "']:checked").val();
	}
	return answer;
}

/**
 * populates a question with a given selection
 * @return
 */
function populateRcmBasicQuestion(q, answer) {
	if ((q.type == 'fill-in') || (q.type == 'long-fill-in')) {
		$("textarea[@name='" + q.id + "']").val(answer);
	} else if ((q.type == 'choice') || (q.type == 'true-false')) {
		$("input[@name='" + q.id + "'][@value='" + answer + "']").attr("checked", "checked");
	} else if (q.type == 'checkbox') {
		$("input[@name='" + q.id + "'][@value='" + answer + "']").attr("checked", "checked");
	}
}

/**
 * populates a question with a given selection
 * @return
 */
function disableRcmBasicQuestion(q) {
	if ((q.type == 'fill-in') || (q.type == 'long-fill-in')) {
		$("textarea[@name='" + q.id + "']").attr("disabled", true);
	} else if ((q.type == 'choice') || (q.type == 'true-false')) {
		$("input[@name='" + q.id + "']").attr("disabled", true);
	} else if (q.type == 'checkbox') {
		$("input[@name='" + q.id + "']").attr("disabled", true);
	}
}

/**
 * Records SCORM interaction for a question
 * 
 * @param cmiIndex
 * @param q
 * @param answer
 * @return
 */
function recordRcmBasicQuestion(cmiIndex, q, answer) {
	// Set the Interaction ID
	storeDataValue("cmi.interactions."+cmiIndex+".id", q.id);

	// Set the Interaction type for this "interaction"
	storeDataValue("cmi.interactions."+cmiIndex+".type", q.cmitype);
	var desc = q.description;
	if (desc.length > 250) {
		// Moodle does not store descriptions longer than 250
		desc = desc.substr(0, 240) + '(...)';
	}
	storeDataValue("cmi.interactions."+cmiIndex+".description", desc);
	if (answer != null) {
		storeDataValue("cmi.interactions."+cmiIndex+".learner_response", answer);
	}
	if (q.correctAnswer != null) {
		// scored question
		storeDataValue("cmi.interactions."+cmiIndex+".correct_responses.0.pattern", q.correctAnswer);
		if ((answer != null) && (answer == q.correctAnswer)) {
			storeDataValue("cmi.interactions."+cmiIndex+".result", "correct");
		} else {
			storeDataValue("cmi.interactions."+cmiIndex+".result", "incorrect");
		}
	}
}

/**
 * Checks whether a user has already answered the question displayed on the page and 
 * disables the input fields.
 * 
 */
function checkQuestionGroupSuspension(qgroup) {
	var isCurriculum = false;
	if (qgroup.id.substring(0, 15) =='com_realcme_cq_') {
		isCurriculum = true;
	}

	// Check if user has already answered the question
	// A group of questions (likert, checkboxes) would have been validated and submitted as a group, so it is OK to check 
	// whether at least one is answered.
	var subquestions = qgroup.subquestions;
	var answers = new Array();
	var completed = false;
	for (var k = 0; k < subquestions.length; k++) {
		var q = subquestions[k];
		var ans = isCurriculum? 0 : 1; // get_suspended_value(q.id); // always return the first one in preview except for curriculum
		if (qgroup.id)
		//alert('For question ' + q.id + ' found answer ' + ans);
		answers[k] = ans;
		if (ans != null) completed = true;
	}
	if (completed) {
		for (var k = 0; k < subquestions.length; k++) {
			var q = subquestions[k];
			var ans = answers[k];
			if (ans != null) {
				//alert('Populating question ' + q.id + ' with answer ' + ans);
				populateRcmBasicQuestion(q, ans);
			}
			disableRcmBasicQuestion(q);
			$("input[@name='" + q.id + "']").parents('.label').addClass("label used");
		}
	}
	return completed;
}

function refreshQuestionGroupInteractions(allQuestions, index) {
}


/*
 * ********************************************************************************************************
 * EVALUATION FORM
 * ********************************************************************************************************
 */

function getFormVerticalRadioQuestionHTML(q) {
	var s = '';
	var opt = q.options;
	for (var k = 1; k <= opt.length; k++) {
		s += '<tr class="label"><td class="ql">\n';
		s += '    <input name="' + q.id + '" value="' + getValue(q, k-1) + '" type="radio">\n';
		s += '</td><td class="qr">' + getOption(q, k-1) + '</td></tr>\n';
	}
	return s;
}

function getFormHorizontalRadioQuestionHTML(q) {
	var s = '';
	s += '  <tr class="label"><td>\n';
	var opt = q.options;
	for (var k = 1; k <= opt.length; k++) {
		s += '    <input name="' + q.id + '" value="' + getValue(q, k-1) + '" type="radio" class="hradio">' + getOption(q, k-1) + ' &nbsp; &nbsp;\n';
	}
	s += '  </td></tr>\n';
	return s;              
}

function getFormFillInQuestionHTML(q) {
	var s = '';
	// textarea: max cols = 90 to work in narrow branding
	s += '    <tr class="label"><td><textarea rows="4" cols="80" name="' + q.id + '"> </textarea></td></tr>\n';
	return s;              
}

function getFormScaleRadioQuestionHTML(q) {
	var s = '';
	s += '<tr class="label"><td class="qscalel">' + q.description + '</td>\n<td class="qscaler"><div class="qscale">\n';
	var opt = q.options;
	for (var k = 1; k <= opt.length; k++) {
		s += '    <div class="qscaleitem"><input name="' + q.id  + '" value="' + getValue(q, k-1) + '" type="radio"></div>\n';
	}
	s += '</div></td></tr>\n';
	return s;
}

function getFormScaleHTML(q) {
	// Just displays the legend
	var s = '';
	s += '<tr class="label"><td class="qscalel"></td>\n<td class="qscaler"><div class="qscale">\n';
	var opt = q.options;
	for (var k = 1; k <= opt.length; k++) {
		s += '<div class="qscaleitem">' + getOption(q, k-1) + '</div>\n';
	}
	s += '</div></td></tr>\n';
	return s;
}

function getFormCheckboxQuestionHTML(q) {
	var s = '';
	s += '<tr class="label"><td class="ql">\n';
	s += '    <input name="' + q.id + '" value="' + getValue(q, 0) + '" type="checkbox" class="hradio">\n';
	s += '</td><td class="qr">' + q.description + ' &nbsp; &nbsp;</td></tr>\n';
	return s;              
}

function getEvaluationFormQuestionGroupHTML(i, qgroup) {
	var s = '';
	var j = i + 1;
	var qtitle = 'titleev' + j;
	var groupid = 'qev' + j;
	s += '<div id="' + qtitle + '"></div>'; // Placeholder
	var subquestions = qgroup.subquestions;

	s += '<fieldset>\n';
	s += '<span class="bold">' + j + '.</span> ' + qgroup.description + '<br />\n';
	s += '<table class="question" id="' + groupid + '"><tbody>\n';
	for (var k = 0; k < subquestions.length; k++) {
		var q = subquestions[k];
		if ((q.type == 'choice') || (q.type == 'true-false')) {
			if (q.display == 'scale') {  
				if (k == 0) {
					// display scale only
					s += getFormScaleHTML(q);
				}
				s += getFormScaleRadioQuestionHTML(q);
			} else if (q.display == 'vertical') {    
				s += getFormVerticalRadioQuestionHTML(q);
			} else {
				s += getFormHorizontalRadioQuestionHTML(q);
			}			  
		} else if ((q.type == 'fill-in') || (q.type == 'long-fill-in')) {
			s += getFormFillInQuestionHTML(q);
		} else if (q.type == 'checkbox') {
			s += getFormCheckboxQuestionHTML(q);
		}
	}
	s += '</tbody></table></fieldset>\n';   
	return s;
}

function submitEvaluationForm(allQuestions, setCompletion, cmiOffset) {

	// For each group of questions, validate group
	countNotOK = 0;
	for (var i = 0; i < allQuestions.length; i++) {
		var qgroup = allQuestions[i];
		var ok = validateQuestionGroup(qgroup);
		var j = i+1;
		if (!ok) {
			countNotOK++;
			$("#qev"+j).addClass("required");
		} else {
			$("#qev"+j).removeClass("required");
		}
	}
	if (countNotOK > 0) {
		alert('Please complete the evaluation form - ' + countNotOK + ' questions still unanswered');
		return false;
	}
	// All groups validated, record answers
	var cmiIndex = 0;
	if (cmiOffset != null) {
		cmiIndex += cmiOffset;
	}
	for (var i = 0; i < allQuestions.length; i++) {
		var qgroup = allQuestions[i];
		recordQuestionGroup(cmiIndex, qgroup);
		cmiIndex += qgroup.subquestions.length;
	}
	storeDataValue('cmi.exit', 'suspend');
	if (setCompletion) {
		set_suspended_value('completed', 'true');
		storeDataValue( "cmi.completion_status", "completed" );
	}
	persistData();
	return true;
}

/*
 * ********************************************************************************************************
 * SURVEYS
 * ********************************************************************************************************
 */

/**
 * Displays a survey on a page
 *  sn: survey number (over all the available surveys in the SCO - start at 1 => corresponding survey is allSurveys[sn-1]
 *   i: survey number in the page (not all the surveys are on the same page. Identifies the div containing the survey)
 *   cmiOffset: extra shift on the cmi index (in case there are other interactions than surveys)
 */
function displaySurvey(pages, currentPage, sn, allSurveys, i, cmiOffset) {
	refreshQuestionGroupInteractions(allSurveys, sn);
	var survey = allSurveys[sn-1];
	var scoid = get_suspended_value('scoid');
	var formName = "sform" + i;	
	$("#survey" + i).append(getSurveyGroupHTML(formName, survey));
	var completed = checkQuestionGroupSuspension(survey);
	if (completed) {
		$("#" + formName + "-submit").remove();
		if (survey.hasChart) printSurveyChart(formName, survey.id, scoid);
	}
	$("#sform" + i + "-submit").click(function() {
		// Compute the start of the interaction
		var cmiIndex = 0;
		for (var i = 0; i < sn - 1; i++) {
			cmiIndex += allSurveys[i].subquestions.length;
		}
		var ok = submitSurveyGroupForm(cmiIndex, survey, true, cmiOffset);
		if (ok) {
			$("#" + formName + "-submit").remove();
			if (survey.hasChart) printSurveyChart(formName, survey.id, scoid);
		}
		return false;
	});
}

function getSurveyGroupHTML(formName, sv) {
	var s = '';
	s += '<div class="survey">\n';
	s += '  <p><span class="bold">Survey Question: </span> ' + sv.description + '</p>\n';
	s += '    <form name="' + formName + '" id="' + formName + '">\n';
	s += '      <fieldset>\n';
	s += '        <table class="question">\n';
	
	var subquestions = sv.subquestions;
	for (var k = 0; k < subquestions.length; k++) {
		var q = subquestions[k];
		if ((q.type == 'choice') || (q.type == 'true-false')) {
			if (q.display == 'scale') {  
				if (k == 0) {
					// display scale only
					s += getFormScaleHTML(q);
				}
				s += getFormScaleRadioQuestionHTML(q);
			} else if (q.display == 'vertical') {    
				var chartcell = '<td rowspan="' + q.options.length + '" class="surveychartempty" id="' + formName + '-piechartbox' + '" ><img id="' + formName + '-piechart' + '" alt="" border="0" /></td>';
				s += getSurveyFormVerticalRadioQuestionHTML(q, chartcell); // survey-specific
			} else {
				s += getFormHorizontalRadioQuestionHTML(q);
			}			  
		} else if ((q.type == 'fill-in') || (q.type == 'long-fill-in')) {
			s += getFormFillInQuestionHTML(q);
		} else if (q.type == 'checkbox') {
			s += getFormCheckboxQuestionHTML(q);
		}
	}
	s += '        </table>\n';
	s += '      </fieldset>\n';
	s += '      <input id="' + formName + '-submit" value=" Submit " type="submit" type="button" class="center surveybutton" />\n';
	s += '    </form>\n'; 
	s += '</div>';
	return s;
}

function getSurveyFormVerticalRadioQuestionHTML(q, chartcell) {
	var s = '';
	var opt = q.options;
	for (var k = 1; k <= opt.length; k++) {
		s += '<tr class="label"><td class="ql">\n';
		s += '    <input name="' + q.id + '" value="' + getValue(q, k-1) + '" type="radio">\n';
		s += '</td><td class="qr">' + getOption(q, k-1) + '</td>\n';
		if (k == 1) {
			s += chartcell;
		}
		s += '</tr>\n';
	}
	return s;
}

function submitSurveyGroupForm(cmiIndex, qgroup, setCompletion, cmiOffset) {

	var ok = validateQuestionGroup(qgroup);
	if (!ok) {
		alert('Please complete the survey');
		return false;
	}
	var c = cmiIndex;
	if (cmiOffset != null) {
		c += cmiOffset;
	}
	recordQuestionGroup(c, qgroup);
	storeDataValue('cmi.exit', 'suspend');
	if (setCompletion) {
		storeDataValue( "cmi.completion_status", "completed" );
	}
	persistData();
	// Disable
	for (var k = 0; k < qgroup.subquestions.length; k++) {
		var q = qgroup.subquestions[k];
		disableRcmBasicQuestion(q);
		$("input[@name='" + q.id + "']").parents('.label').addClass("label used");
	}
	return true;
}

/**
 * Sets the url for a pie chart.
 *
 * @param {Object} formName - the name of the form containing the survey.
 * @param {Object} questionID - the survey identifier.
 * @param {Object} scoid - the sco identifier.
 */
function printSurveyChart(formName, questionID, scoid) {  
	var src = '/cms/sites/all/themes/zen/peekrealcmetheme/SharedFiles/img/chart_survey.png';
    $('#'+formName+'-piechartbox').removeClass("surveychartempty");
    $('#'+formName+'-piechartbox').addClass("surveychart");
    $('#'+formName+'-piechart').attr({'src': src});
}

/*
 * **********************************************************************
 * CURRICULUM
 * **********************************************************************
 */

function isCurriculumFirstQuestion() {
  // for preview only
  return true;
}

/**
 * Object representing a curriculum question
 * @param id
 * @param description
 * @param lh
 * @param mh
 * @param rh
 * @param options
 * @param correctAnswers
 */
function rcmCurriculumQuestion(id, description, options, correctAnswers) {
	this.id = id;
	this.description = description;
	this.leftHeader = lh;
	this.middleHeader = mh;
	this.rightHeader = rh;
	this.required = true;
	this.valid = 'all'; // all questions must ve valid for the group to be valid
	this.hasChart = false;
	this.subquestions = new Array();
	var curValues = new Array(-1, 0, 1);
	var curOptions = new Array('L', 'M', 'R');
	for (var i = 0; i < options.length; i++) {
		// correctAnswer = correctAnswers[i] could be -1 0 1
		// correctAnswerIndex =                        0 1 2 = correctAnswers[i] + 1
		this.subquestions[i] = new rcmBasicQuestion(id + "_" + i, 'choice', options[i], curOptions, curValues, correctAnswers[i] + 1, null, 'scale');
	}
}

/**
 * Retreives the most recent answer to the curriculum question and populates it with it.
 * @param qgroup the curriculum question
 * @return
 */
function populateCurriculumQuestion(qgroup, lh, mh, rh) {
	$.ajax({
		url: rcmlms_retreive_curriculum_question_url + '/' + qgroup.id,
		type: 'GET',
		dataType: 'xml',
		timeout: 3000,
		error: function(){
			alert('Error loading XML document');
		},
		success: function(xml){
			var data = $(this).find('item').text();
			
			$(xml).find('item').each(function(){
				var data = $(this).text();
				var subquestions = qgroup.subquestions;
			    for (var k = 0; k < subquestions.length; k++) {
			        var q = subquestions[k];
			        var val = parseQueryString(data, q.id);
			        if (val == null) val = 0;
			        populateRcmBasicQuestion(q, val);
			    }
			});
			drawCurriculumQuestion(lh, mh, rh);
		}
	});
}

function postCurriculumQuestion(scoid, id, isFirst, cqdata, score, maxscore, button) {
  var url = rcmlms_record_curriculum_question_url + '/' + scoid + '/' + id;
  if (isFirst) {
	  url += '/1';
  }
  percent_score_float = parseFloat(score) * 100.0 / parseFloat(maxscore);
  // round and keep 2 digits
  percent_score = parseFloat(Math.round(percent_score_float * 100.0)) / 100;
  $.post(url,
    {
      data: cqdata,
      score: percent_score,
      save: 'Save'
    }, 
    function(xml) {
	  if (button == null) {
	    rcmLMSGoNext();
	  } else {
     $(button).click();
    }
    }
  );
}

function resizeCurriculumQuestion() {
	var w = Math.floor($('#qdesc').width() / 3) - 20;	// IE7 doesnt do percent width + floats properly so a fix
	$('ul.left, ul.center, ul.right').css('width', w);
	$('ul.left, ul.center, ul.right').css('height', '');
	var h = Math.max($('ul.left').height(), $('ul.center').height(), $('ul.right').height());
	$('ul.left, ul.center, ul.right').css('height', h);
}

/*
 * Only for preview - resizing when switching between narrow/wide previews
 */
function resizePopupForCurriculumQuestion() {
	$('#previewNarrowTemp', window.parent.document).click(function() {
		setTimeout("resizeCurriculumQuestion();", 200);
	});
	$('#previewWideTemp', window.parent.document).click(function() {
		setTimeout("resizeCurriculumQuestion();", 200);
	});
}

				
function drawCurriculumQuestion(lh, mh, rh, countMoves) {
	// hide the number on the question
	$('span:first', '#qform').hide();
	
	var $table = $('table.question');
	var w = Math.floor($table.width() / 3) - 10;  // IE7 doesnt do percent width + floats properly so a fix
	if (w == null || w < 0) w = 240;
	$table.hide();
	
	if (countMoves) {
		var $instructions = $('div#instructions');
		$('<div class="moves"><strong>Number of moves available: <span id="moves"></span></strong><br />Please note: You do not need to use all available moves to achieve an optimal score.</div>').appendTo($instructions);
		$('<div class="movescb"><input id="movescb" type="checkbox" /> Check here when you are satisfied with your responses</div>').appendTo($instructions).addClass('moves');
	}	
		
	$table.prev('<br />').remove();
	$table.parent().css('margin-bottom', 0);
	
	var $fieldset = $('fieldset#lists');
	
	$('<ul />').css('width', w).appendTo($fieldset).addClass('sortable').addClass('left');
	$('<ul />').css('width', w).appendTo($fieldset).addClass('sortable').addClass('center');
	$('<ul />').css('width', w).appendTo($fieldset).addClass('sortable').addClass('right');
		
	$('<li />').appendTo('ul.left').addClass('header').html(lh);
	$('<li />').appendTo('ul.center').addClass('header').html(mh);
	$('<li />').appendTo('ul.right').addClass('header').html(rh);
	
	var index = 0;
	$('#qev1 tr').each(function(n) {
		var data = $(this).find("td").eq(0).html();
		if (data.length > 0) {
			var val = $('input:radio:checked', $(this).find("td").eq(1)).val();
			var cls = (val == -1) ? 'left' : ((val == 1) ? 'right' : 'center');
			var name = 'drag_' + $('input:radio', $(this).find("td").eq(1) ).attr("name");
			var $li = $('<li id="' + name + '">' + data + '</li>').data('index', index++).appendTo('ul.' + cls);
			if ($(this).hasClass('used') == false) {
				$li.addClass('draggable');
			}
		}
	});
	
	setTimeout("resizeCurriculumQuestion();", 100);
	setTimeout("resizePopupForCurriculumQuestion();", 100);

	/*
    scroll_container();
    resize_container();

	$(".sortable").disableSelection();
	$(".sortable").sortable({ 
		opacity: 0.75,
		scroll: false,
		revert: true,
		items: 'li.draggable',
		tolerance: 'pointer',
		connectWith: ['ul.sortable'],
		receive: function(event, ui) {
			var id = ui.item.attr("id");
			id = id.substring(5); 
			$ul = ui.item.parent();
			if ($ul.hasClass('left')) {
				$('input[name="' + id + '"]', $table)[0].checked = true;
			} else if ($ul.hasClass('center')) {
				$('input[name="' + id + '"]', $table)[1].checked = true;
			} else if ($ul.hasClass('right')) {
				$('input[name="' + id + '"]', $table)[2].checked = true;
			}
		
			resizeCurriculumQuestion();
	        resize_container();
		}
	});
	*/

}

function printCurriculumScore(scoid) {
    $("#score-yours-value").html("100% <br/>");
    $("#score-avg-value").html("50% <br/>");
    $("#score-median-value").html("50% <br/>");
    $("#score-details").show();
    scroll_container();
    resize_container();
}