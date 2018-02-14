var timeout = 500;
var closetimer = 0;
var ddmenuitem = 0;

// open hidden layer
function mopen(id) {
    // cancel close timer
    mcancelclosetime();

    // close old layer
    if (ddmenuitem) ddmenuitem.style.visibility = 'hidden';
    if (ddmenuitem) ddmenuitem.style.display = 'none';

    // get new layer and show it
    ddmenuitem = document.getElementById(id);
    ddmenuitem.style.visibility = 'visible';
    ddmenuitem.style.display = 'block';

    document.getElementById("communityImg").src = appPath + "/img/nav/community_roll.gif";
}
// close showed layer
function mclose() {
    if (ddmenuitem) ddmenuitem.style.visibility = 'hidden';
    if (ddmenuitem) ddmenuitem.style.display = 'none';
    document.getElementById("communityImg").src = appPath + "/img/nav/community_off.gif";
}

// go close timer
function mclosetime() {
    closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime() {
    if (closetimer) {
        window.clearTimeout(closetimer);
        closetimer = null;
        document.getElementById("communityImg").src = appPath + "/img/nav/community_roll.gif";
    }
}

// close layer when click-out
document.onclick = mclose;

function drawMenu() {
    var output = "";
    output += "<div id='m1' onmouseover='mcancelclosetime()' onmouseout='mclosetime()'>";
    output += "<div class='mnuItem'><a target='_blank' href='http://www.pri-med.com/pmo/Flex.aspx?short=experthome'>Ask The Expert</a></div>";
    output += "<div class='mnuItem'><a target='_blank' href='http://www.pri-med.com/pmo/Flex.aspx?short=social'>Pri-Med Social Networks</a></div>";
    output += "<div class='mnuItem'><a target='_blank' href='http://www.pri-med.com/pmo/Canvas.aspx?short=video'>Video</a></div>";
    output += "</div>";
    document.write(output);
}
