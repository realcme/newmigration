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
